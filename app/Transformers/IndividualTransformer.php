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
                'nombre_uno' => $individual->nombre_uno,
                'nombre_dos' => $individual->nombre_dos,
                'apellido_uno' => $individual->apellido_uno,
                'apellido_dos' => $individual->apellido_dos,
                'apellido_casada' => $individual->apellido_casada,
                'identificacion' => $individual->identificacion,                
        ];

    }
}
