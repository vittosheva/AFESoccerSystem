<?php

namespace MiTutorialDigital;

use Illuminate\Database\Eloquent\Model;

class MoodleCourse extends Model
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
    protected $table = 'mdl_course';

    /**
     * Set timestamps 'true' to use 'updated_at' and 'created_at' in DB
     */
    public $timestamps = false;

}
