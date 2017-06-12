<?php

namespace App\Transformers;

use App\bolsaValores;

class CreditTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(bolsaValores $bolsa)
    {
        return [
            'id' => $bolsa->id,
            'tipo_credito_id' => $bolsa->tipo_creditos_id,            
            'monto_minimo' => $bolsa->monto_minimo,
            'monto_maximo' => $bolsa->monto_maximo,
            'tasa_interes' => $bolsa->tasa_interes,
            'plazo_minimo' => $bolsa->plazo_minimo,
            'plazo_maximo' => $bolsa->plazo_maximo,
            'porcentaje_mora' => $bolsa->porcentaje_mora,
            'tipo_interes' => $bolsa->tipo_interes,
            'tipo_cobro_id' => $bolsa->tipo_cobro_id,
        ];
    }
}
