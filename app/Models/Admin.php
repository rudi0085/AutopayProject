<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticable
{
    Use HasFactory;
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','password','role'];
    

}
