<?php

namespace App\Transformers;

use Illuminate\Support\Facades\DB;
use App\Contrato;
use App\Persona;


class IndividualTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(Persona $persona)
    {

            return [
                'id' => $persona->id,
                'nombre_uno' => $persona->nombre_uno,
                'nombre_dos' => $persona->nombre_dos,
                'apellido_uno' => $persona->apellido_uno,
                'apellido_dos' => $persona->apellido_dos,
                'apellido_casada' => $persona->apellido_casada,
                'identificacion' => $persona->identificacion,
        ];

    }
}
