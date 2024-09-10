<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticable;

class Admin extends Authenticable
{
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $filable = ['name','email','password','role'];
    

}
