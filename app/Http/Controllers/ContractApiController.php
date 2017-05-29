<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreContractRequest;
use App\Transformers\ContractTransformer;
use App\Contract;

class ContractApiController extends Controller
{
  public function store(StoreContractRequest $request)
  {
      $contract = new Contract;
      $contract->credit_id = $request->credit_id;
      $contract->status_id = $request->status_id;
      $contract->monto_solicitado = $request->monto_solicitado;
      $contract->tasa_interes = $request->tasa_interes;
      $contract->tasa_mora = $request->tasa_mora;
      $contract->interest_id = $request->interest_id;
      $contract->payment_id = $request->payment_id;
      $contract->cuota = $request->cuota;
      $contract->request_date = '2017/04/27';

      $contract->request_user_id = $request->user()->id;
      $contract->save();
      //dd($contract);


      return fractal()
          ->item($contract)
          //->parseIncludes(['user', 'posts', 'posts.user'])
          ->transformWith(new ContractTransformer)
          ->toArray();

  }

}
