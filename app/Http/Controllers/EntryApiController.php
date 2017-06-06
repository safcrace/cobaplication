<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Individual;
use App\Entry;

class EntryApiController extends Controller
{
  public function store(Request $request)
  {
    $entry = new Entry;
    $entry->individual_id = $request->individual_id;
    $entry->tipo = $request->tipo;
    $entry->monto = $request->monto;
    $entry_two = new Entry;
    $entry_two->individual_id = $request->individual_id_two;
    $entry_two->tipo = $request->tipo_two;
    $entry_two->monto = $request->monto_two;

    $individual = Individual::find($request->individual_id);

    $individual->entries()->save($entry);
    $individual->entries()->save($entry_two);

    dd('Grabado !!!');
  }
}
