<?php

use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vehicle', [VehicleController::class, 'index'])->name('vehicle.index');
Route::get('/vehicle/create', [VehicleController::class, 'create'])->name('vehicle.create');
Route::post('/vehicle', [VehicleController::class, 'store'])->name('vehicle.store');
Route::delete('/vehicle/{vehicle}/destroy', [VehicleController::class, 'destroy'])->name('vehicle.destroy');
Route::get('/vehicle/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicle.edit');
Route::put('/vehicle/{vehicle}/update', [VehicleController::class, 'update'])->name('vehicle.update');