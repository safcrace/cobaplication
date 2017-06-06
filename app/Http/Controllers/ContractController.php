<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;
use App\Individual;
use Illuminate\Support\Facades\DB;

class ContractController extends Controller
{
  public function index()
  {
      $contracts = Contract::select('contracts.id as id', 'individuals.nombre_uno as nombre1', 'individuals.nombre_dos as nombre2',
                                    'individuals.apellido_uno as apellido1', 'individuals.apellido_dos as apellido2', 'individuals.reference_id as reference',
                                    'users.name as colocador')
                              ->join('contract_individual', 'contract_individual.contract_id', '=', 'contracts.id')
                              ->join('individuals', 'individuals.id', '=', 'contract_individual.individual_id')
                              ->join('users', 'users.id', '=', 'contracts.request_user_id')
                              ->where('individuals.reference_id', '=', 1)
                              ->paginate(10);

      return view('contracts.index', compact('contracts'));
  }

  public function review(Request $request)
  {
      /*$contract = Contract::find($request->id);
      //$individual = Individual::where('contract_id', $request->id);
      $individual = \DB::table('individuals')->where('contract_id', $request->id)->first();
      $work = \DB::table('works')->where('individual_id', $individual->id)->first();
      $references = \DB::select("select nombres, apellidos, identificacion, telefonos
                        from individuals
                        where (contract_id = 1) and (id <> 1) ");

      //dd($references);

      */

      $contract = Contract::select('contracts.id as id', 'individuals.nombre_uno as nombre1', 'individuals.nombre_dos as nombre2',
                                    'individuals.apellido_uno as apellido1', 'individuals.apellido_dos as apellido2', 'individuals.reference_id as reference',
                                    'users.name as colocador', 'individuals.id as individual_id')
                              ->join('contract_individual', 'contract_individual.contract_id', '=', 'contracts.id')
                              ->join('individuals', 'individuals.id', '=', 'contract_individual.individual_id')
                              ->join('users', 'users.id', '=', 'contracts.request_user_id')
                              ->where([['individuals.reference_id', '=', 1],['contracts.id', '=', $request->id]])
                              ->first();

      //dd($contracts->toArray());


      $references = Individual::select('individuals.nombre_uno as nombre1', 'individuals.nombre_dos as nombre2',
                                       'individuals.apellido_uno as apellido1', 'individuals.apellido_dos as apellido2')
                                    ->where([['individuals.contract_id', $request->id],['individuals.reference_id', 3]])
                                    ->get();

      return view('contracts.revision', compact('contract', 'references'));
  }

  public function general(Request $request)
  {
      $individual = Individual::select('individuals.nombre_uno as nombre1', 'individuals.nombre_dos as nombre2',
                                       'individuals.apellido_uno as apellido1', 'individuals.apellido_dos as apellido2',
                                       'individuals.fecha_nacimiento', 'individuals.genero', 'individuals.telefono_contacto',
                                       'individuals.identificacion', 'individuals.domicilio', 'individuals.id', 'individuals.contract_id')
                                    ->where([['individuals.contract_id', $request->id],['individuals.reference_id', 1]])
                                    ->first();
      //dd($individual);

      return view('contracts.general', compact('individual'));
  }

  public function generalData(Request $request)
  {
      $individual = Individual::select('individuals.nombre_uno as nombre1', 'individuals.nombre_dos as nombre2',
                                       'individuals.apellido_uno as apellido1', 'individuals.apellido_dos as apellido2',
                                       'individuals.telefono_domicilio', 'individuals.casa_propia', 'individuals.inicio_renta',
                                       'individuals.renta', 'individuals.telefono_arrendante', 'individuals.celular_arrendante',
                                       'individuals.nit', 'individuals.profesion', 'individuals.egresado',
                                       'individuals.email', 'individuals.facebook', 'individuals.instagram', 'individuals.id')
                                    ->where('individuals.id', $request->id)
                                    ->first();
      //dd($individual);

      return view('contracts.generalData', compact('individual'));
  }

  public function work(Request $request)
  {
      $individual = Individual::select('individuals.nombre_uno as nombre1', 'individuals.nombre_dos as nombre2',
                                       'individuals.apellido_uno as apellido1', 'individuals.apellido_dos as apellido2',
                                       'works.empresa', 'works.telefonos_empresa', 'works.giro_negocio', 'works.horario', 'works.direccion',
                                       'works.tipo_salario', 'works.salario_mensual', 'works.puesto', 'works.fecha_inicio',
                                       'works.jefe_inmediato', 'works.celular_jefe', 'works.latitud', 'works.longitud', 'individuals.id')
                                    ->join('works', 'works.id', '=', 'individuals.id')
                                    ->where('individuals.id', $request->id)
                                    ->first();
      //dd($individual);

      return view('contracts.work', compact('individual'));
  }

  public function bussiness(Request $request)
  {
      $individual = Individual::select('individuals.nombre_uno as nombre1', 'individuals.nombre_dos as nombre2',
                                       'individuals.apellido_uno as apellido1', 'individuals.apellido_dos as apellido2',
                                       'deals.empresa', 'deals.telefono_negocio', 'deals.giro_negocio', 'deals.horario', 'deals.direccion',
                                       'deals.ingresos_promedio', 'deals.patente', 'deals.nombre_encargado', 'deals.fecha_inicio',
                                       'deals.celular_encargado', 'deals.latitud', 'deals.longitud')
                                    ->join('deals', 'deals.id', '=', 'individuals.id')
                                    ->where('individuals.id', $request->id)
                                    ->first();
      //dd($individual);

      return view('contracts.bussiness', compact('individual'));
  }



  public function generalRevisado(Request $request)
  {
    $individual = Individual::find($request->id);
    $individual->revision_a = 1;
    dd($individual->revision_a);
  }

  public function approbe(Request $request)
  {
    $contracts = \DB::select("select c.id, i.nombres as cliente, u.username as colocador, c.monto_solicitado, c.tipo_cobro
                              from contracts as c inner join individuals as i on  i.contract_id = c.id
                              inner join users as u on u.id = c.codigo_usuario_solicito");

      /*$individual = \DB::table('individuals')->where('contract_id', $request->id)->first();
      $work = \DB::table('works')->where('individual_id', $individual->id)->first();
      $references = \DB::select("select nombres, apellidos, identificacion, telefonos
                        from individuals
                        where (contract_id = 1) and (id <> 1) ");*/

      //dd($references);
      return view('contracts.approbe', compact('contracts'));
  }


}
