<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
  protected $fillable = [
    'individual_id', 'empresa', 'direccion', 'latitud', 'longitud', 'telefonos_empresa', 'giro_negocio', 'horario',
    'salario_mensual', 'tipo-salario', 'puesto', 'fecha_inicio', 'jefe_inmediato', 'celular_jefe'
  ];
  //ojo
  public function individual(){
    	return $this->belongsTo(Individual::class);
  }

}
