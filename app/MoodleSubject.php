<?php

namespace MiTutorialDigital;

use Illuminate\Database\Eloquent\Model;

class MoodleSubject extends Model
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
    protected $table = 'mdl_course_categories';

}
