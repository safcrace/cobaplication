<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
      'individual_id', 'tipo_cuenta', 'banco', 'numero_cuenta'
    ];

    public function individual(){
        return $this->belongsTo(Individual::class);
    }
}
