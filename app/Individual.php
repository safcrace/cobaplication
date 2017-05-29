<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{

  protected $fillable = [
      'nombres', 'apellidos', 'apellido_casada', 'identificacion', 'fecha_nacimiento', 'domicilio', 'telefonos', 'foto', 'foto_dpi', 'category_id',
      'credit_id', 'reference_id'
  ];

  public function scopeSearch($query, $individual){

        if(trim($individual) != ''){
            //dd($individual . 'eso');
            $query->Where("nombres", "like", "%$individual%")
                          ->orWhere("apellidos", "like", "%$individual%");
            //dd($query);
        }
    }

    public function works(){
        return $this->hasMany(Work::class);
      }

    public function contracts(){
      return $this->belongsToMany(Contract::class)
                  ->withPivot('tipo_referencia');
    }
}
