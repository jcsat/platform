<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventoRequest extends FormRequest
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
        $evento = $this->route()->parameter('evento');

        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:eventos',
            'body' => 'required',
            
            'file' => 'image',
           
            'user_id' => 'required',
            'categoria_id' => 'required'


        ];

      

        if($evento){
            $rules['slug'] = 'required|unique:eventos,slug,' . $evento->id;
        }

        return $rules;
    }
}
