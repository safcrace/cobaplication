<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
  protected $fillable = [
    'empresa', 'direccion', 'telefonos_empresa', 'puesto', 'tiempo_servicio', 'jefe_inmediato',
  ];
  //ojo
  public function individual(){
    	return $this->belongsTo(Individual::class);
    }

}
