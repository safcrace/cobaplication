<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreIndividualRequest;
use App\Transformers\IndividualTransformer;
use App\Transformers\ContractTransformer;
use App\Persona;
use App\Work;
use App\Contrato;


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
        $persona = new Persona;
        $persona->contrato_id = $request->contrato_id;
        $persona->tipo_referencia_id = $request->tipo_referencia_id;
        $persona->categoria_persona_id = $request->categoria_persona_id;
        $persona->nombre_uno = $request->nombre_uno;
        $persona->nombre_dos = $request->nombre_dos;
        $persona->apellido_uno = $request->apellido_uno;
        $persona->apellido_dos = $request->apellido_dos;
        $persona->apellido_casada = $request->apellido_casada;
        $persona->identificacion = $request->identificacion;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->genero = $request->genero;
        $persona->telefono_contacto = $request->telefono_contacto;
        /*$persona->domicilio = $request->domicilio;
        $persona->telefono_domicilio = $request->telefono_domicilio;
        $persona->casa_propia = $request->casa_propia;
        $persona->inicio_renta = $request->inicio_renta;
        $persona->renta = $request->renta;
        $persona->telefono_arrendante = $request->telefono_arrendante;
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
        $reference = $request->reference_id;*/
        //dd($persona->contrato_id);
        $contrato = Contrato::find($request->contrato_id);

        $contrato->personas()->save($persona);

        DB::table('contrato_persona')
            ->where([['contrato_id', $persona->contrato_id],['persona_id', $persona->id]])
            ->update(['tipo_referencia_id' => $request->tipo_referencia_id]);

        return fractal()
            ->item($persona)
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
