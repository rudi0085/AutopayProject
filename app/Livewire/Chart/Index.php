<?php

namespace App\Livewire\Chart;

use Livewire\Component;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class Index extends Component
{
    public function render()
    {

        $columnChartModel = (new ColumnChartModel())
        ->setTitle('Jumlah Premi')
        ->addColumn('Ngobo', 600, '#f6ad55')
        ->addColumn('Jolong', 200, '#fc8181')
        ->addColumn('Kandir', 300, '#90cdf4')
        ->addColumn('Ngobo', 700, '#ffc09f')
        ->addColumn('Jolong', 400, '#ffee93')
        ->addColumn('Kandir', 450, '#a0ced9');
        return view('livewire.chart.index')->with(['columnChartModel' => $columnChartModel]);

        
}
}