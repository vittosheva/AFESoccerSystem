<?php

namespace MiTutorialDigital;

use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['pin', 'active'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['active'];

    /**
     * Set timestamps 'true' to use 'updated_at' and 'created_at' in DB
     */
    public $timestamps = true;
}
