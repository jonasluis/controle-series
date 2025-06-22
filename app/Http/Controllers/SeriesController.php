<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(){
        $series = [
            'Punisher',
            'Lost',
            'Greys Anatomy'
        ];
        return view('listar-series')->with('series', $series);
    }

}
