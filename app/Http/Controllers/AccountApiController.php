<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Individual;
use App\Account;

class AccountApiController extends Controller
{
  public function store(Request $request)
  {
    $account = new Account;
    $account->individual_id = $request->individual_id;
    $account->tipo_cuenta = $request->tipo_cuenta;
    $account->banco = $request->banco;
    $account->numero_cuenta = $request->numero_cuenta;

    $individual = Individual::find($request->individual_id);

    $individual->accounts()->save($account);

    dd('Grabado !!!');
  }
}
