<?php

namespace App;

//use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use \Illuminate\Database\Eloquent\Model;

//class User extends Authenticatable
//{
class Message extends Model {

  //  use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','surname','message','user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       // 'password',
    ];
}
