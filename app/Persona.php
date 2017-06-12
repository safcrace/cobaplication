<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
  protected $fillable = [
      'nombre_uno', 'nombre_dos', 'apellido_uno', 'apellido_dos', 'apellido_casada', 'identificacion', 'fecha_nacimiento',
      'genero', 'telefono_contacto', 'domicilio', 'telefono_domicilio', 'casa_propia', 'inicio_renta', 'renta', 'persona_categoria_id',
      'contrato_id', 'tipo_referencia_id', 'telefono_arrendante', 'celular_arrendante', 'latitud', 'longitud', 'nit', 'profesion',
      'egresado', 'email', 'facebook', 'instragam', 'nombre_arrendante'
  ];

  public function scopeSearch($query, $individual){

        if(trim($individual) != ''){
            //dd($individual . 'eso');
            $query->Where("nombre_uno", "like", "%$individual%")
                          ->orWhere("apellidos", "like", "%$individual%");
            //dd($query);
        }
  }

  public function contratos(){
    return $this->belongsToMany(Contrato::class)
                ->withPivot('tipo_referencia_id');
  }

}
