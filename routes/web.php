<?php

use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vehicle', [VehicleController::class, 'index'])->name('vehicle.index');
Route::get('/vehicle/create', [VehicleController::class, 'create'])->name('vehicle.create');
Route::post('/vehicle', [VehicleController::class, 'store'])->name('vehicle.store');