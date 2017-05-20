<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;
use App\Individual;

class ContractController extends Controller
{
  public function index()
  {
      //$contracts = Contract::orderBy('id')->paginate();
      $contracts = \DB::select("select c.id, i.nombres as cliente, u.username as colocador, c.monto_solicitado, c.tipo_cobro
                                from contracts as c inner join individuals as i on  i.contract_id = c.id
                                inner join users as u on u.id = c.codigo_usuario_solicito");

      /*foreach ($contracts as $contract) {
        echo $contract->individuals;
      };*/

      //dd($credits);
      //$creditsCollection = $credits->getCollection();

      return view('contracts.index', compact('contracts'));
  }

  public function review(Request $request)
  {
      $contract = Contract::find($request->id);
      //$individual = Individual::where('contract_id', $request->id);
      $individual = \DB::table('individuals')->where('contract_id', $request->id)->first();
      $work = \DB::table('works')->where('individual_id', $individual->id)->first();
      $references = \DB::select("select nombres, apellidos, identificacion, telefonos
                        from individuals
                        where (contract_id = 1) and (id <> 1) ");

      //dd($references);
      return view('contracts.revision', compact('contract','individual','work','references'));
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
