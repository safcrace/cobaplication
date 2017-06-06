<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Individual;
use App\Work;

class WorkApiController extends Controller
{


  public function store(Request $request)
  {
    $work = new Work;
    $work->individual_id = $request->individual_id;
    $work->empresa = $request->empresa;
    $work->direccion = $request->direccion;
    $work->latitud = $request->latitud;
    $work->longitud = $request->longitud;
    $work->telefonos_empresa = $request->telefonos_empresa;
    $work->giro_negocio = $request->giro_negocio;
    $work->horario = $request->horario;
    $work->salario_mensual = $request->salario_mensual;
    $work->tipo_salario = $request->tipo_salario;
    $work->puesto = $request->puesto;
    $work->fecha_inicio = $request->fecha_inicio;
    $work->jefe_inmediato = $request->jefe_inmediato;
    $work->celular_jefe = $request->celular_jefe;

    $individual = Individual::find($request->individual_id);

    $individual->works()->save($work);

    dd('Grabado !!!');
  }


}
