<?php

namespace App\Http\Controllers;

use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class DashboardController extends Controller
{
    public function index(){
        $columnChartModel = (new ColumnChartModel())
        ->setTitle('Expenses by Type')
        ->addColumn('Food', 100, '#f6ad55')
        ->addColumn('Shopping', 200, '#fc8181')
        ->addColumn('Travel', 300, '#90cdf4');
        // return view('livewire.chart.index')->with(['columnChartModel' => $columnChartModel]);  
        return view('dashboard')->with(['columnChartModel' => $columnChartModel]);
    }
}
