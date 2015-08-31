<?php

namespace MiTutorialDigital;

use Illuminate\Database\Eloquent\Model;

class MoodleRollAssignments extends Model
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
    protected $table = 'mdl_role_assignments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['roleid', 'contextid', 'userid', 'timemodified', 'modifierid', 'component', 'itemid', 'sortorder'];

    /**
     * Set timestamps 'true' to use 'updated_at' and 'created_at' in DB
     */
    public $timestamps = false;
}
