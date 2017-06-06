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

      $individual = Individual::Where("nombre_uno", "like", "%$finder%")
                    ->orWhere("nombre_dos", "like", "$finder%")
                    ->orWhere("apellido_uno", "like", "$finder%")
                    ->orWhere("apellido_dos", "like", "$finder%")
                    ->orWhere("apellido_casada", "like", "$finder%")
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
        $individual->nombre_uno = $request->nombre_uno;
        $individual->nombre_dos = $request->nombre_dos;
        $individual->apellido_uno = $request->apellido_uno;
        $individual->apellido_dos = $request->apellido_dos;
        $individual->apellido_casada = $request->apellido_casada;
        $individual->identificacion = $request->identificacion;
        $individual->fecha_nacimiento = $request->fecha_nacimiento;
        $individual->genero = $request->genero;
        $individual->telefono_contacto = $request->telefono_contacto;
        $individual->domicilio = $request->domicilio;
        $individual->telefono_domicilio = $request->telefono_domicilio;
        $individual->casa_propia = $request->casa_propia;
        $individual->inicio_renta = $request->inicio_renta;
        $individual->renta = $request->renta;
        $individual->telefono_arrendante = $request->telefono_arrendante;
        $individual->celular_arrendante = $request->celular_arrendante;
        $individual->latitud = $request->latitud;
        $individual->longitud = $request->longitud;
        $individual->nit = $request->nit;
        $individual->profesion = $request->profesion;
        $individual->egresado = $request->egresado;
        $individual->email = $request->email;
        $individual->facebook = $request->facebook;
        $individual->instagram = $request->instagram;
        $contract_id = $request->contract_id;
        $reference = $request->reference_id;
        //dd($contract_id);
        $contract = Contract::find($request->contract_id);

        $contract->individuals()->save($individual);

        DB::table('contract_individual')
            ->where([['contract_id', $contract_id],['individual_id', $individual->id]])
            ->update(['reference_id' => $request->reference_id]);

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
