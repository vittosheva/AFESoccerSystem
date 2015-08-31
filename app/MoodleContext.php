<?php

namespace MiTutorialDigital;

use Illuminate\Database\Eloquent\Model;

class MoodleContext extends Model
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
    protected $table = 'mdl_context';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['contextlevel', 'instanceid', 'path', 'depth'];

    /**
     * Set timestamps 'true' to use 'updated_at' and 'created_at' in DB
     */
    public $timestamps = false;
}
