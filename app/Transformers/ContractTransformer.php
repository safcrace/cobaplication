<?php

namespace App\Transformers;

use App\Contract;
use Illuminate\Support\Facades\Response;

class ContractTransformer extends \League\Fractal\TransformerAbstract
{

    //protected $availableIncludes = ['individuals'];

    public function transform(Contract $contract)
    {
        return [
            'id' =>  $contract->id,
        ];
    }


}

    /*
    public function includeIndividuals(Contract $contract)
    {
        return $this->collection($contract->individuals, new ReferenceTransformer);
    }
    */
