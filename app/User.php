<?php

namespace App;

// use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function post() {
        return $this->hasOne('App/Post');
    }

    public function posts() {
        return $this->hasMany('App/Post');
    }

    public function actions(){

        return $this->belongsToMany('App/Action')->withPivot('created_at');

        //To customize tables name and columns follow the format below

        //return $this->belongsToMany('App/Action', 'user_actions','user_id', 'role_id');
    }



    public function getNameAttribute($value) {

        // return ucfirst($value);
        return strtoupper($value);

    }


    public function setNameAttribute($value) {


        $this->attributes['name'] = strtoupper($value); 

    }


}
