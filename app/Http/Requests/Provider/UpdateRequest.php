<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>'required|string|max:50',
            'email'=>'required|string|max:255',
            'ruc'=>'required|string|min:13|max:13',
            'address'=>'nullable|string|max:255',
            'phone'=>'required|string|min:10|max:10',
        ];
    }

    public function messages()
    {
           return[
               'name.required'=>'Esta campo es requerido',
               'name.string'=>'El valor no es correcto solo admite caracteres',
               'name.max'=>'Solo se permite 50 caracteres',

               'email.required'=>'Esta campo es requerido',
               'email.string'=>'El valor no es correcto solo admite caracteres',
               'email.max'=>'Solo se permite 255 caracteres',
               'email.unique'=>'Ya este registrado este correo',

               'ruc.required'=>'Esta campo es requerido',
               'ruc.string'=>'El valor no es correcto solo admite caracteres',
               'ruc.max'=>'Solo se permite 13 caracteres',
               'ruc.min'=>'Solo se permite 13 caracteres',
               'ruc.unique'=>'Ya este registrado este ruc',

              
               'address.string'=>'El valor no es correcto solo admite caracteres',
               'address.max'=>'Solo se permite 255 caracteres',

               'phone.required'=>'Esta campo es requerido',
               'phone.string'=>'El valor no es correcto solo admite caracteres',
               'phone.max'=>'Solo se permite 10 caracteres',
               'phone.min'=>'Solo se permite 10 caracteres',
               'phone.unique'=>'Ya este registrado este numero',
  
           ];
    }
}
