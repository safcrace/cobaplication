<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;

class ContractController extends Controller
{
  public function index()
  {
      $contracts = Contract::orderBy('id')->paginate();
      dd($contracts);

      //dd($credits);
      //$creditsCollection = $credits->getCollection();

      return view('contracts.index', compact('contracts'));
  }
}
