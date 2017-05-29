<?php

namespace App\Transformers;

use App\Contract;
use Illuminate\Support\Facades\Response;

class ContractTransformer extends \League\Fractal\TransformerAbstract
{

    //protected $availableIncludes = ['individuals'];

    public function transform(Contract $contract)
    {
        $ref1 = array('nombres' => 'Maria Antonieta', 'apellidos' => 'Garcia Lemus', 'Referencia' => 'Conyuge');
        $ref2 = array('nombres' => 'Luis Roberto', 'apellidos' => 'Estrada Cabrera', 'Referencia' => 'Referencia');
        $ref3 = array('nombres' => 'Juan Antonio', 'apellidos' => 'Mendez Rizzo', 'Referencia' => 'Referencia');

        return [
            'id' =>  $contract->id,
            'ref1' => $ref1,
            'ref2' => $ref2,
            'ref3' => $ref3,
        ];
    }
  }








/*
<?php

namespace App\Transformers;

use Illuminate\Support\Facades\DB;
use App\Contract;
use App\Individual;


class ReferenceTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(Individual $individual)
    {
        foreach ($individual->contracts as $contract) {
          $frase = $contract->id;
        }
        $refe = DB::table('contract_individual')
                        ->where([['contract_id', $frase],['individual_id', $individual->id]])
                        ->value('tipo_referencia');
        if ($refe!='Deudor') {
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
                'referencia' => $refe,

            /*'monto_maximo' => $credit->monto_maximo,
            'tasa_interes' => $credit->tasa_interes,
            'plazo_minimo' => $credit->plazo_minimo,
            'plazo_maximo' => $credit->plazo_maximo,
            'porcentaje_mora' => $credit->porcentaje_mora,
            'tipo_interes' => $credit->tipo_interes,
            'tipo_cobro' => $credit->tipo_cobro,
        ];
      }
    }
}*/
