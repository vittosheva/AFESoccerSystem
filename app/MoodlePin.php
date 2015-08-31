<?php

namespace MiTutorialDigital;

use Illuminate\Database\Eloquent\Model;

class MoodlePin extends Model
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
    protected $table = 'mdl_user_info_data';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'userid', 'fieldid', 'data', 'dataformat'];

    /**
     * Set timestamps 'true' to use 'updated_at' and 'created_at' in DB
     */
    public $timestamps = false;
}
