<?php

namespace App\Http\Controllers;

use App\Models\vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    //
    public function index(){
        return view('vehicle.index');
        
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
}
