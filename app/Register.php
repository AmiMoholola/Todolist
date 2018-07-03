<?php

namespace App;

use \Illuminate\Database\Eloquent\Model;

class Register extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    
    protected $guarded = [
        
    ];
    
    //protected $guarded = [
      //  'id',
    //];

    //protected $casts = [
      //  'data' => 'object',
    	//'metadata' => 'object',
    //];

    //protected $hidden = [
      //  'data',
       // 'metadata'
    //];
}
