<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultadoController extends Controller
{
    public function somar(Request $request)
    {
        $n1 = $request->input('n1');
        $n2 = $request->input('n2');

        $resultado = $n1 + $n2;

        return view('resultado', compact('n1', 'n2', 'resultado'));
    }
} 
    
    
     
       

