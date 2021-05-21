<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoRequest extends FormRequest
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
            //status para aporte
            //'status' => 'requiered|in:1,2',
            //'url' => 'required',
            //'file' => 'image',
            'user_id' => 'required',
            'categoria_id' => 'required'


        ];

        /*
        if(this->status == 2){
            $rules = array_merge($rules, [
                '' => '',
                '' => '',
                '' => '',
            ])
        }
        */ 

        if($evento){
            $rules['slug'] = 'required|unique:eventos,slug,' . $evento->id;
        }

        return $rules;
    }
}
