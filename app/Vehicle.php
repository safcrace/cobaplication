<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
  protected $fillable = [
    'individual_id', 'tipo_vehiculo', 'marca', 'modelo', 'linea', 'color', 'tipo_placa', 'placa',
    'valor_vehiculo'
  ];

  public function individual(){
      return $this->belongsTo(Individual::class);
  }
}
