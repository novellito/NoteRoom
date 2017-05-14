<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * Disables created_at and updated_at field
     */
    public $timestamps = false;

    /**
     * Allows particular variabes to be fillable.
     */
    protected $fillable = ["noteroom_id", "txt", 'title'];

    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->hasMany('App\Noteroom');
    }
}