<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\SeasonsController;


Route::get('/', function () {
    return redirect('/series');
});

Route::resource('/series',SeriesController::class)->except(['show']);


Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');