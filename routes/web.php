<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\SportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/players", [PlayerController::class, "index"]);
Route::get("/sports", [SportController::class, "index"]);

