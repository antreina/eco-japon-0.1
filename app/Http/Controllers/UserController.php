<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class UserController extends Controller
{
    public function generarReporte()
    {
        $users= User::all();

        $pdf = PDF::loadView('livewire.repgen',compact('users'));
        return $pdf->stream('reporte.pdf');
    }
}
