<?php

namespace App\Http\Controllers;

use App\Models\vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    //get all vehicles
    public function index(){
        $vehicles = vehicle::all();
        return view('vehicle.index', ['vehicles' => $vehicles]);
        
    }

    public function create(){
        return view('vehicle.create');
        
    }

    public function store(Request $request){
        $data = $request->validate([
            'number' => 'required|string',
            'type' => 'required|string',
            'model' => 'required|string',
            'capacity' => 'required|string',
            'year' => 'required|string',
            'owner' => 'required|string',
        ]);
        
        $newProduct = vehicle::create($data);

        return redirect(route('vehicle.index'));
    }

    public function destroy(vehicle $vehicle){
        $vehicle->delete();
        return redirect(route('vehicle.index'))->with('success', 'Vehicle deleted Succesffully');
    }

    public function edit(vehicle $vehicle){
        return view('vehicle.edit', ['vehicle' => $vehicle]);
    }

    public function update(vehicle $vehicle, Request $request){
        $data = $request->validate([
            'number' => 'required|string',
            'type' => 'required|string',
            'model' => 'required|string',
            'capacity' => 'required|string',
            'year' => 'required|string',
            'owner' => 'required|string',
        ]);
        $vehicle->update($data);

        return redirect(route('vehicle.index'))->with('success', 'vehicle Updated Succesffully');

    }
}
