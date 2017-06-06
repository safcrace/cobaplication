<?php

namespace App\Transformers;

use App\Credit;

class CreditTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(Credit $credit)
    {
        return [
            'id' => $credit->id,
            'descripcion' => $credit->descripcion,
            'monto_minimo' => $credit->monto_minimo,
            'monto_maximo' => $credit->monto_maximo,
            'tasa_interes' => $credit->tasa_interes,
            'cantidad_plazo_minimo' => $credit->cantidad_plazo_minimo,
            'minimo_time_id' => $credit->minimo_time_id,
            'cantidad_plazo_maximo' => $credit->cantidad_plazo_maximo,
            'maximo_time_id' => $credit->maximo_time_id,
            'porcentaje_mora' => $credit->porcentaje_mora,
            'interest' => $credit->interest_id,
            'payment_id' => $credit->payment_id,
        ];
    }
}
