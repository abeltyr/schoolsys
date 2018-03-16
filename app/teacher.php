<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class teacher extends Model
{
    use Notifiable;
 
   
    protected $fillable = [
        'firstname' , 'lastname' , 'phone','email', 'avatar'
    ];
    protected $hidden = [
        'password', 'pin', 'remember_token',
    ];
}
