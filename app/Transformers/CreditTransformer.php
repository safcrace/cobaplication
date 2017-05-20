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
            'plazo_minimo' => $credit->plazo_minimo,
            'plazo_maximo' => $credit->plazo_maximo,
            'porcentaje_mora' => $credit->porcentaje_mora,
            'tipo_interes' => $credit->tipo_interes,
            'tipo_cobro' => $credit->tipo_cobro,
        ];
    }
}
