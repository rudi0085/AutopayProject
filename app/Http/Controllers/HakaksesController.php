<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HakaksesController extends Controller
{
    public function index(){
        return view('hakakses');
    }
}
