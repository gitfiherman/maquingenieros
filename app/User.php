<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';
            
    protected $fillable = [
        'ape_pat','ape_mat','nom_com','usuario','email','rol','estado','password','del'
    ];
    
    protected $primaryKey='id';
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
