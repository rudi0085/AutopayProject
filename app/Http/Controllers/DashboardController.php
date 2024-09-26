<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class DashboardController extends Controller
{
    public function index(){
     
        return view('dashboard');
    }
   
}