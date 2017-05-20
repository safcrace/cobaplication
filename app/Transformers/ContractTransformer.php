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

    /*
    public function includeIndividuals(Contract $contract)
    {
        return $this->collection($contract->individuals, new ReferenceTransformer);
    }
    */
}
