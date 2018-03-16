<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\staff as Authenticatable;

class staff extends Model
{
    use Notifiable;

    protected $fillable = [
        'firstname' , 'lastname' , 'phone','email', 'avatar'
    ];
    protected $hidden = [
        'password', 'pin', 'remember_token',
    ];
}
