<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataGajiSAPController extends Controller
{
    public function index(){
        return view('datagajisap');
    }
}
