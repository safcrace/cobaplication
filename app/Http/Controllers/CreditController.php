<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Credit;

class CreditController extends Controller
{
  public function index()
  {
      $credits = Credit::orderBy('id')->paginate();
      //dd($credits);
      //$creditsCollection = $credits->getCollection();

      return view('credits.index', compact('credits'));
  }

  public function create()
  {
    return view('credits.create');
  }

  public function store(Request $request)
  {
    $credit = new Credit($request->all());
    $credit->save();
    return redirect('credits.index');
  }

  public function edit($id)
  {

    $credit = Credit::findOrFail($id);

    return view('credits.edit', compact('credit'));
  }

  public function update($id, Request $request)
  {

    $credit = Credit::findOrFail($id);
    $credit->fill($request->all());
    $credit->save();
    return Redirect::to('credits');
  }

  public function destroy($id, Request $request)
  {
    //$message = /*$this->credit->id .*/ 'fue eliminado de los registros';
    return $id;
    //$this->credit->delete();
    if ($request->ajax()) {
      return $message;
    }



  }

}
