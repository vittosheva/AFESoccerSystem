<?php

namespace MiTutorialDigital;

use Illuminate\Database\Eloquent\Model;

class MoodleUser extends Model
{
    /**
     * The database connection used by the model.
     *
     * @var string
     */
    protected $connection = 'mysql_moodle';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mdl_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'auth', 'confirmed', 'policyagreed', 'deleted', 'suspended', 'mnethostid',
        'username', 'password', 'idnumber', 'firstname', 'lastname', 'email', 'emailstop',
        'icq', 'skype', 'yahoo', 'aim', 'msn', 'phone1', 'phone2', 'institution', 'department',
        'address', 'city', 'country', 'lang', 'calendartype', 'theme', 'timezone', 'firstaccess',
        'lastaccess', 'lastlogin', 'currentlogin', 'lastip', 'secret', 'picture', 'url', 'description',
        'descriptionformat', 'mailformat', 'maildigest', 'maildisplay', 'autosubscribe', 'trackforums',
        'timecreated', 'timemodified', 'trustbitmask', 'imagealt', 'lastnamephonetic', 'firstnamephonetic',
        'middlename', 'alternatename'];

    /**
     * Set timestamps 'true' to use 'updated_at' and 'created_at' in DB
     */
    public $timestamps = false;
}
