<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculdade;
use Illuminate\Support\Facades\DB;

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

    public function mostra($estado){
        $resposta = DB::select('SELECT * FROM faculdades WHERE estado = ?', [$estado]);
        if(empty($resposta)){
            return "esse estado nao existe";
        }
        return view('templates.detalhes')->with('estados', $resposta);
    }
}
