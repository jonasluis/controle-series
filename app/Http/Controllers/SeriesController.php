<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;


class SeriesController extends Controller
{
    public function index(Request $request){
        // $series = Serie::all(); busca todos na ordem de cadastro
        // Lista em ordem Alfabetica
        $series = Serie::query()->orderBy('nome')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        return view('series.index')->with('series', $series)
        ->with('mensagemSucesso', $mensagemSucesso);
    }
    
    public function create(){
        return view('series.create');
    }

    public function store(Request $request){


        $serie = Serie::create($request->all());
        session(['mensagem.sucesso' => "Serie '{$serie->nome}' adicionada com sucesso"]);
    
    

        return to_route('series.index');
    }

    public function destroy(Serie $series, Request $request){

        $series->delete();

        $request->session()->flash('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso");

        return to_route('series.index');
    }
}
