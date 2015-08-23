<?php

namespace MiTutorialDigital;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'registers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['pin_code', 'name', 'course_id', 'subject_id', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'active'];


    public function course() {
        return $this->belongsTo('MiTutorialDigital\Course', 'course_id', 'id');
    }

    public function subject() {
        return $this->belongsTo('MiTutorialDigital\Subject', 'subject_id', 'id');
    }
}
