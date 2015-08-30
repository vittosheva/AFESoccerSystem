<?php

namespace MiTutorialDigital\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use MiTutorialDigital\Http\Requests;
use MiTutorialDigital\Http\Controllers\Controller;

use MiTutorialDigital\Http\Requests\RegisterPlanRequest;
use MiTutorialDigital\Register;
use MiTutorialDigital\Course;
use MiTutorialDigital\Subject;
use MiTutorialDigital\Pin;

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
        // Invalid PIN on DB setting to 0
        $pin = Pin::find(1)->where('pin', '=', $request->pin_code)->first();
        $pin->active = 0;
        $pin->save();

        // Save register on DB
        $register = new Register;
        $register->pin_id = $pin->id;
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = bcrypt($request->password);
        $register->course()->associate($request->course_id);
        $register->subject()->associate($request->subject_id);
        $register->save();

        // Send email to registrant

        // Get Courses and Subjects
        $course = Course::where('id', '=', $request->course_id)->lists('name')->toArray();
        $subject = Subject::where('id', '=', $request->subject_id)->lists('name')->toArray();

        // Create an array with vars
        $data = [
            'PIN' => $request->pin_code,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ];

        // Merge arrays into one
        $data = array_merge($data, ['course' => $course[0]], ['subject' => $subject[0]]);

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
    public function courseQuery()
    {
        $courses    = new Course;
        $query      = $courses->where('active', '=', 1)->lists('name', 'id')->toArray();
        $courses    = array_merge(['0' => '-- Seleccione un curso --'] + $query);

        return $courses;
    }

    /**
     * Subject Query function
     *
     * @return subjects
     */
    public function subjectQuery()
    {
        $subjects   = new Subject;
        $query      = $subjects->where('active', '=', 1)->lists('name', 'id')->toArray();
        $subjects   = array_merge(['0' => '-- Seleccione una materia --'] + $query);

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