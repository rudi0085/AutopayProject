<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticable;

class Users extends Authenticable
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $filable = ['name','email','password'];
    
}
