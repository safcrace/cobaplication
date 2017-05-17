<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Transformers\CreditTransformer;
use App\Credit;

class CreditController extends Controller
{
  public function index()
  {
      $credits = Credit::all();
      //dd($credits);
      //$creditsCollection = $credits->getCollection();

      return fractal()
          ->collection($credits)
          ->transformWith(new CreditTransformer)
          ->toArray();
  }
}
