<?php

namespace MiTutorialDigital\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use MiTutorialDigital\Http\Requests;
use MiTutorialDigital\Http\Controllers\Controller;

use MiTutorialDigital\Http\Requests\RegisterPlanRequest;

use MiTutorialDigital\MoodlePin;
use MiTutorialDigital\MoodleContext;
use MiTutorialDigital\MoodleEnrollments;
use MiTutorialDigital\MoodleRollAssignments;

use MiTutorialDigital\Register;
use MiTutorialDigital\Course;
use MiTutorialDigital\Subject;
use MiTutorialDigital\Pin;

use MiTutorialDigital\MoodleCourse;
use MiTutorialDigital\MoodleSubject;
use MiTutorialDigital\MoodleUser;

use Mail;

class RegisterPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $courses    = $this->courseQuery();
        $subjects   = $this->subjectQuery();

        return view('front.register', compact('subjects', 'courses'))->with([
            'title'     => 'Inicio' . $this->website,
            'keywords'  => 'mi tutoria digital, tutoria digital, mi tutoria',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  RegisterPlanRequest  $request
     * @return Response
     */
    public function store(RegisterPlanRequest $request)
    {
        /**
         * Check if user exists on Moodle
         */
        $register = new MoodleUser();
        $user = $register->where('username', '=', $request->email)->count();

        if ($user >= 1) {
            return redirect()
                ->route('front.registerplan.create')
                ->withInput($request->except('password'))
                ->withErrors([
                    'email' => 'Su email se encuentra registrado!'
                ]);
        }

        $timestamp = $unixTimestamp = time();
        $timezone = Config::get('app.timezone');


        /**
         * Register user on Moodle
         */
        $register->id = NULL;
        $register->auth = 'manual';
        $register->confirmed = 1;
        $register->policyagreed = 0;
        $register->deleted = 0;
        $register->suspended = 0;
        $register->mnethostid = 1;
        $register->username = $request->email;
        $register->password = bcrypt($request->password);
        $register->idnumber = '';
        $register->firstname = $request->name;
        $register->lastname = '';
        $register->email = $request->email;
        $register->emailstop = 0;
        $register->icq = '';
        $register->skype = '';
        $register->yahoo = '';
        $register->aim = '';
        $register->msn = '';
        $register->phone1 = '';
        $register->phone2 = '';
        $register->institution = '';
        $register->department = '';
        $register->address = '';
        $register->city = '';
        $register->country = 'EC';
        $register->lang = 'es';
        $register->calendartype = 'gregorian';
        $register->theme = '';
        $register->timezone = $timezone;
        $register->firstaccess = 0;
        $register->lastaccess = 0;
        $register->lastlogin = 0;
        $register->currentlogin = 0;
        $register->lastip = '';
        $register->secret = '';
        $register->picture = 0;
        $register->url = '';
        $register->description = NULL;
        $register->descriptionformat = 1;
        $register->mailformat = 1;
        $register->maildigest = 1;
        $register->maildisplay = 2;
        $register->autosubscribe = 1;
        $register->trackforums = 0;
        $register->timecreated = $timestamp;
        $register->timemodified = '';
        $register->trustbitmask = 0;
        $register->imagealt = NULL;
        $register->lastnamephonetic = NULL;
        $register->firstnamephonetic = NULL;
        $register->middlename = NULL;
        $register->alternatename = NULL;
        $register->save();


        /**
         * Invalid PIN in Moodle DB
         */
        $moodlePin = new MoodlePin();
        $moodlePin->id = NULL;
        $moodlePin->userid = $register->id;
        $moodlePin->fieldid = 1;
        $moodlePin->data = $request->pin_code;
        $moodlePin->dataformat = 0;
        $moodlePin->save();


        /**
         * Invalid PIN in Laravel DB setting to 0
         */
        $pin = Pin::find(1)->where('pin', '=', $request->pin_code)->first();
        $pin->active = 0;
        $pin->save();


        /**
         * Select the Context
         */
        $moodleContext = new MoodleContext();
        $moodleContextId = $moodleContext
            ->where('instanceid', '=', $request->course_id)
            ->where('contextlevel', '=', 50)
            ->first();


        /**
         * Insert user into course
         */
        $moodleEnrollements = new MoodleEnrollments();
        $moodleEnrollements->id = NULL;
        $moodleEnrollements->status = 0;
        $moodleEnrollements->enrolid = 1;
        $moodleEnrollements->userid = $register->id;
        $moodleEnrollements->timestart = $timestamp;
        $moodleEnrollements->timeend = 0;
        $moodleEnrollements->modifierid = 2;
        $moodleEnrollements->timecreated = $timestamp;
        $moodleEnrollements->timemodified = '';
        $moodleEnrollements->save();


        /**
         * Insert roll user into course
         */
        $moodleroleAssignments = new MoodleRollAssignments();
        $moodleroleAssignments->id = NULL;
        $moodleroleAssignments->roleid = 5;
        $moodleroleAssignments->contextid = $moodleContextId->id;
        $moodleroleAssignments->userid = $register->id;
        $moodleroleAssignments->timemodified = $timestamp;
        $moodleroleAssignments->modifierid = 2;
        $moodleroleAssignments->component = '';
        $moodleroleAssignments->itemid = 0;
        $moodleroleAssignments->sortorder = 0;
        $moodleroleAssignments->save();


        /**
         * Send email to registrant
         */

        // Get Course and Subject names
        $course = $this->courseQuery($request->course_id);
        $subject = $this->subjectQuery($request->subject_id);

        // Create an array with vars
        $data = [
            'PIN' => $request->pin_code,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ];

        // Merge arrays into one
        $data = array_merge($data, ['course' => $course], ['subject' => $subject]);

        // Send email
        $this->sendEmail($data);

        return redirect()->route('front.registerplan.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Course Query function.
     *
     * @return courses
     */
    public function courseQuery($id = 0)
    {
        $courses = new MoodleCourse;

        if($id > 0){
            $query = $courses
                ->find(1)
                ->where('id', '=', $id)
                ->first();
            return $query->shortname;
        }

        $query = $courses
            ->where('category', '=', 1)
            ->where('visible', '=', 1)
            ->lists('shortname', 'id')
            ->toArray();

        $courses = ['0' => '-- Seleccione un curso --'] + $query;

        return $courses;
    }

    /**
     * Subject Query function
     *
     * @return subjects
     */
    public function subjectQuery($id = 0)
    {
        $subjects = new MoodleSubject;

        if($id > 0){
            $query = $subjects
                ->find(1)
                ->where('id', '=', $id)
                ->first();
            return $query->name;
        }

        $query = $subjects
            ->where('coursecount', '>', 0)
            ->where('depth', '=', 1)
            ->where('visible', '=', 1)
            ->lists('name', 'id')
            ->toArray();
        $subjects = ['0' => '-- Seleccione una materia --'] + $query;

        return $subjects;
    }

    /**
     * Send Email with data
     *
     * @return true
     */
    public function sendEmail($data)
    {
        Mail::send('emails.registrant', $data, function($message) use ($data) {
            $message->from(Config::get('settings.emailFrom'), Config::get('settings.website'));
            $message->replyTo(Config::get('settings.emailReply'), Config::get('settings.website'));
            $message->subject(Config::get('settings.emailSubject'));
            $message->to($data['email'], $data['name']);
            $message->priority('normal');
            if(Config::get('settings.emailBccVar') == true) {
                $message->bcc(Config::get('settings.emailBcc'), Config::get('settings.emailBccName'));
            }
        });

        return true;
    }

    /**
     * Success Page
     *
     * @return response
     */
    public function success()
    {
        return view('front.success')->with([
            'title'     => 'Inicio' . $this->website,
            'keywords'  => 'mi tutoria digital, tutoria digital, mi tutoria',
            'success'   => 'Registro creado satisfactoriamente!!',
        ]);
    }


}
