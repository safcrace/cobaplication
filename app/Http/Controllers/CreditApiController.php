<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\CreditTransformer;
use App\bolsaValores;

class CreditApiController extends Controller
{
  public function index()
  {
      $bolsaValores = bolsaValores::all();
      //dd($bolsaValores);
      //$creditsCollection = $credits->getCollection();

      return fractal()
          ->collection($bolsaValores)
          ->transformWith(new CreditTransformer)
          ->toArray();
  }
}
