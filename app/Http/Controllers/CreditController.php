<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

}
