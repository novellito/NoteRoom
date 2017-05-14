<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noteroom extends Model
{
    /**
     * this is something that we need to change later
     */
    public $timestamps = false;

    /**
     * items that can be mass assigned on creation
     */
    protected $fillable = ['title', 'invite_id'];

    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * this returns all the notes associated with a noteroom
     */
    public function notes() 
    {
        return $this->hasMany('App\Note');
    }
}