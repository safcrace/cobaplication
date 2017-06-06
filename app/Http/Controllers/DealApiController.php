<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Individual;
use App\Deal;

class DealApiController extends Controller
{
  public function store(Request $request)
  {
    $deal = new Deal;
    $deal->individual_id = $request->individual_id;
    $deal->empresa = $request->empresa;
    $deal->direccion = $request->direccion;
    $deal->latitud = $request->latitud;
    $deal->longitud = $request->longitud;
    $deal->telefono_negocio = $request->telefono_negocio;
    $deal->giro_negocio = $request->giro_negocio;
    $deal->horario = $request->horario;
    $deal->ingresos_promedio = $request->ingresos_promedio;
    $deal->patente = $request->patente;
    $deal->fecha_inicio = $request->fecha_inicio;
    $deal->nombre_encargado = $request->nombre_encargado;
    $deal->celular_encargado = $request->celular_encargado;

    $individual = Individual::find($request->individual_id);

    $individual->deals()->save($deal);

    dd('Grabado !!!');
  }
}
