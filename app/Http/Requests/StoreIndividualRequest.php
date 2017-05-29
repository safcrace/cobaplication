<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIndividualRequest extends FormRequest
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
          'reference_id' => 'required',
          'category_id' => 'required',
          'nombres' => 'required',
          'apellidos' => 'required',
          'identificacion' => 'required',
          'domicilio' => 'required',
          'telefonos' => 'required',
          'fecha_nacimiento' => 'required',
        ];
    }
}
