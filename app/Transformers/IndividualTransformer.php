<?php

namespace App\Transformers;

use Illuminate\Support\Facades\DB;
use App\Contract;
use App\Individual;


class IndividualTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(Individual $individual)
    {

            return [
                'id' => $individual->id,
                'nombres' => $individual->nombres,
                'apellidos' => $individual->apellidos,
                'identificacion' => $individual->identificacion,
                'fecha_nacimiento' => $individual->fecha_nacimiento,
                'domicilio' => $individual->domicilio,
                'telefonos' => $individual->telefonos,
                'foto' => $individual->foto,
                'foto_dpi' => $individual->foto_dpi,
                'categoria' => $individual->categoria,
                //'referencia' => $individual->referencia,
                //'referencia' => $refe,

            /*'monto_maximo' => $credit->monto_maximo,
            'tasa_interes' => $credit->tasa_interes,
            'plazo_minimo' => $credit->plazo_minimo,
            'plazo_maximo' => $credit->plazo_maximo,
            'porcentaje_mora' => $credit->porcentaje_mora,
            'tipo_interes' => $credit->tipo_interes,
            'tipo_cobro' => $credit->tipo_cobro,*/
        ];

    }
}
