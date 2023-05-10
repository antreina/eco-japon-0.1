<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residuos;
use PDF;

class ResiduosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('livewire.residuos.index');
    }
    

    public function generarReporte()
    {
        $residuos= Residuos::all();

        $pdf = PDF::loadView('livewire.residuos.reportes.repgen',compact('residuos'));
        return $pdf->stream('reporte.pdf');
    }
}
