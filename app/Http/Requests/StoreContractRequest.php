<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContractRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'credit_id' => 'required',
            'interest_id' => 'required',
            'payment_id' => 'required',
            'monto_solicitado' => 'required',
            'tasa_interes' => 'required',
            'tasa_mora' => 'required',

            'cuota' => 'required',
        ];
    }
}
