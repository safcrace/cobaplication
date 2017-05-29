<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreIndividualRequest;
use App\Transformers\IndividualTransformer;
use App\Transformers\ContractTransformer;
use App\Individual;
use App\Work;
use App\Contract;


class IndividualApiController extends Controller
{
    public function search(Request $request)
    {
      $finder = $request->search;

      $individual = Individual::Where("nombres", "like", "%$finder%")
                    ->orWhere("apellidos", "like", "$finder%")
                    ->get();

      return fractal()
          ->collection($individual)
          ->transformWith(new IndividualTransformer)
          ->toArray();

    }

    public function store(StoreIndividualRequest $request)
    {
        $individual = new Individual;
        $individual->credit_id = $request->credit_id;
        $individual->reference_id = $request->reference_id;
        $individual->category_id = $request->category_id;
        $individual->nombres = $request->nombres;
        $individual->apellidos = $request->apellidos;
        $individual->apellido_casada = $request->apellido_casada;
        $individual->identificacion = $request->identificacion;
        $individual->fecha_nacimiento = $request->fecha_nacimiento;
        $individual->domicilio = $request->domicilio;
        $individual->telefonos = $request->telefonos;
        $individual->foto = 'http://lorempixel.com/640/480/?29931';
        $individual->foto_dpi = 'http://lorempixel.com/640/480/?29931';
        $contract_id = $request->contract_id;
        $reference = $request->reference_id;

        $contract = Contract::find($request->reference_id);

        //dd($informacion);
        $contract->individuals()->save($individual);

        DB::table('contract_individual')
            ->where([['contract_id', $contract_id],['individual_id', $individual->id]])
            ->update(['reference_id' => $request->reference_id]);

        $work = new Work;
        $work->empresa = $request->empresa;
        $work->direccion = $request->direccion;
        $work->telefonos_empresa = $request->telefonos_empresa;
        $work->puesto = $request->puesto;
        $work->salario_mensual = $request->salario_mensual;
        $work->tiempo_servicio = $request->tiempo_servicio;
        $work->jefe_inmediato = $request->jefe_inmediato;


        $individual->works()->save($work);


        return fractal()
            ->item($individual)
            ->transformWith(new IndividualTransformer)
            ->toArray();
    }

    public function show(Individual $individual)
    {
        return fractal()
            ->item($individual)
            ->transformWith(new IndividualTransformer)
            ->toArray();
    }

    public function showReferences(Request $request)
    {
      //$contract = Contract::find(1);
      //return view('manytomany', compact('contract'));
      $finder = $request->codigo_solicitud;

      $contract = Contract::find($finder);



      return fractal()
          ->item($contract)
          ->parseIncludes(['individuals'])
          ->transformWith(new ContractTransformer)
          ->toArray();


    }

}
