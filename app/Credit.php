<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    protected $fillable = ['descripcion', 'monto_minimo', 'monto_maximo', 'tasa_interes', 'cantidad_plazo_minimo', 'payment_id',
                            'minimo_time_id', 'cantidad_plazo_maximo', 'maximo_time_id', 'porcentaje_mora', 'interest_id'];
}
