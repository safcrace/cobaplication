<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Individual;
use App\Vehicle;

class VehicleApiController extends Controller
{
  public function store(Request $request)
  {
    $vehicle = new Vehicle;
    $vehicle->individual_id = $request->individual_id;
    $vehicle->tipo_vehiculo = $request->tipo_vehiculo;
    $vehicle->marca = $request->marca;
    $vehicle->modelo = $request->modelo;
    $vehicle->linea = $request->linea;
    $vehicle->color = $request->color;
    $vehicle->tipo_placa = $request->tipo_placa;
    $vehicle->placa = $request->placa;
    $vehicle->valor_vehiculo = $request->valor_vehiculo;
    //dd($vehicle);
    $individual = Individual::find($request->individual_id);

    $individual->vehicles()->save($vehicle);

    dd('Grabado !!!');
  }
}
