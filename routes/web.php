<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;


Route::get('/', function () {
    return redirect('/series');
});

Route::controller(SeriesController::class)->group(function (){
    Route::get('/series',  'index');
    Route::get('/series/criar',  'create');
    Route::post('/series/salvar',  'store');

});
