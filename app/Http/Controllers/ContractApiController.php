<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreContractRequest;
use App\Transformers\ContractTransformer;
use App\Contrato;

class ContractApiController extends Controller
{
  public function store(StoreContractRequest $request)
  {
      $contrato = new Contrato;
      $contrato->bolsa_valores_id = $request->bolsa_valores_id;
      $contrato->estado_contrato_id = $request->estado_contrato_id;
      $contrato->tipo_cobro_id = $request->tipo_cobro_id;
      $contrato->monto_solicitado = $request->monto_solicitado;
      $contrato->tasa_interes = $request->tasa_interes;
      $contrato->tasa_mora = $request->tasa_mora;
      $contrato->tipo_interes = $request->tipo_interes;
      $contrato->cuota = $request->cuota;
      $contrato->fecha_solicitud = $request->fecha_solicitud;
      $contrato->solicitud_user_id = $request->solicitud_user_id;

      //$contrato->request_user_id = $request->user()->id;
      $contrato->save();
      //dd($contract);


      return fractal()
          ->item($contrato)
          //->parseIncludes(['user', 'posts', 'posts.user'])
          ->transformWith(new ContractTransformer)
          ->toArray();

  }

}
