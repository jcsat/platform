<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreObjetoRequest extends FormRequest
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
        $rules =[
            'codigoap' => 'required',
            'descripcion' => 'required',
            'status' => 'required|in:1,2,3',
            'lista_detalle' => 'required',
            
            'file' => 'image',

            'user_id' => 'required',
            'evento_id' => 'required'
        ];
        
        return $rules;
    }
}
