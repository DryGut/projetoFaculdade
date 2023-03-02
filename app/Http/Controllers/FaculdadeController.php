<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculdade;

class FaculdadeController extends Controller{
    
    public function paginaInicial(){
        return view('templates.paginainicial');
    }

    public function listaJson(){
        $instituicoes = Faculdade::all();
        return response()->json($instituicoes);
    }

    public function areaDeBusca(){
        return view('templates.busca');
    }
}
