<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Linea;
use App\Establecimiento;
use App\Destino;

class AppController extends Controller
{
    public function index(){
    	$lineas = Linea::with('paquetes')->get();
    	$establecimientos = Establecimiento::all();
    	$destinos = Destino::all();
   // 	dd($establecimientos);
    	return view('app.index',compact('lineas','establecimientos','destinos'));

    }
}
