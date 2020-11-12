<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Vehiculo;

class ControladorVehiculo extends Controller
{
    //Aqui van las operaciones del CRUD.
    public function index(Request $request){
        return Vehiculo::all();
    }
    public function store(Request $request){
        return Vehiculo::create($request->all());
    }
    public function show(Vehiculo $vehiculo){
        return Vehiculo::find($vehiculo->id);
    }
    public function update(Request $request, Vehiculo $vehiculo){
        $vehiculo->update($request->all());
        return $vehiculo;
    }
    public function destroy(Vehiculo $vehiculo){
        $vehiculo->destroy($vehiculo->id);
    }
}
