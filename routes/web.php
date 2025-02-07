<?php

use App\Http\Controllers\VehicleController;
use App\Http\Controllers\TollController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view("welcome");
});

Route::get('/tolls', [TollController::class, "index"])->name("tolls");
Route::get('/vehicles', [VehicleController::class, "index"])->name("vehicles");