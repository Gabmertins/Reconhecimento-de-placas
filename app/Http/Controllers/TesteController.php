<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teste;
use App\Charts\TesteChart;
use Illuminate\Support\Facades\DB;
use LengthException;
use Charts;

class TesteController extends Controller
{
    public function index()
    {
        $testes = Teste::all();
        
        $chart = Charts::database(Teste::all(), 'bar','material')
                ->setResponsive(false)
                ->setWidth(0)
                ->groupBy('value');


        return view('teste.index', [
            'chart' => $chart
        ]);
    }
}
