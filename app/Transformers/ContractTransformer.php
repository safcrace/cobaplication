<?php

namespace App\Transformers;

use App\Contrato;
use Illuminate\Support\Facades\Response;

class ContractTransformer extends \League\Fractal\TransformerAbstract
{

    //protected $availableIncludes = ['individuals'];

    public function transform(Contrato $contrato)
    {
        return [
            'id' =>  $contrato->id,
        ];
    }


}

    /*
    public function includeIndividuals(Contract $contract)
    {
        return $this->collection($contract->individuals, new ReferenceTransformer);
    }
    */
