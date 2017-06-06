<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
  protected $fillable = [
    'individual_id', 'empresa', 'direccion', 'latitud', 'longitud', 'telefono_negocio', 'giro_negocio', 'horario',
    'ingresos_promedio', 'patente', 'nombre_encargado', 'celular_encargado'
  ];

  public function individual(){
      return $this->belongsTo(Individual::class);
  }
}
