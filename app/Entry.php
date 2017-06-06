<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
      'individual_id', 'tipo', 'monto'
    ];

    public function individual(){
      return $this->belongsTo(Individual::class);
  }
}
