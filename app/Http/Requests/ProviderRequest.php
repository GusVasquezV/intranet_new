<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProviderRequest extends FormRequest
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
    public function rules() 'name', 'prefix', 'code_iata', 'description', 'fee_basic', 'fee_bussinnes', 'file', 'activo', 'type_provider_id',
    {
        return [   
            'name'              => 'required|min:3|max:120',
            'description'       => 'required',
            'fee_basic'         => 'required',
            'fee_bussinnes'     => 'required',
            'activo'            => 'required',
            'type_provider_id'  => 'required',
            
        ];
    }
    public function messages()
    {
        return [
        'name.required'         => 'Favor Ingresar Nombre',
        'name.min'              => 'El nombre debe tener como mínimo 3 Caracteres',
        'name.max'              => 'El nombre debe tener como maximo 120 Caracteres',
        ];
    }
}
