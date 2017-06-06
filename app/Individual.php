<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{

  protected $fillable = [
      'nombre_uno', 'nombre_dos', 'apellido_uno', 'apellido_dos', 'apellido_casada', 'identificacion', 'fecha_nacimiento',
      'genero', 'telefono_contacto', 'domicilio', 'telefono_domicilio', 'casa_propia', 'inicio_renta', 'renta', 'category_id',
      'credit_id', 'reference_id', 'telefono_arrendante', 'celular_arrendante', 'latitud', 'longitud', 'nit', 'profesion',
      'egresado', 'email', 'facebook', 'instragam'
  ];

  public function scopeSearch($query, $individual){

        if(trim($individual) != ''){
            //dd($individual . 'eso');
            $query->Where("nombre_uno", "like", "%$individual%")
                          ->orWhere("apellidos", "like", "%$individual%");
            //dd($query);
        }
    }

    public function works(){
        return $this->hasMany(Work::class);
    }

    public function deals(){
        return $this->hasMany(Deal::class);
    }

    public function vehicles(){
        return $this->hasMany(Vehicle::class);
    }

    public function accounts(){
        return $this->hasMany(Account::class);
    }

    public function entries(){
        return $this->hasMany(Entry::class);
    }


    public function contracts(){
      return $this->belongsToMany(Contract::class)
                  ->withPivot('reference_id');
    }
}
