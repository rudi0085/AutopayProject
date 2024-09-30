<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KompilasiGajiSAPController extends Controller
{
    public function index(){
        return view('kompilasigaji');
    }
}
