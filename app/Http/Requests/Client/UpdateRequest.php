<?php

namespace App\Http\Requests\Client;

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
            'identification'=>'required|string|max:10',
            'name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'phone'=>'required|string|max:10',
            'address'=>'nullable|string|max:255',
            'email'=>'required|email:rfc,dns',

        ];
    }

    public function messages()
    {
        return[
             
            'identification.required' =>'Esta campo es requerido',
            'identification.string' =>'El valor no es correcto solo admite caracteres',
            'identification.max' =>'Solo se permite 10 caracteres',
           

            'name.required' =>'Esta campo es requerido',
            'name.string' =>'El valor no es correcto solo admite caracteres',
            'name.max' =>'Solo se permite 255 caracteres',

            'last_name.required' =>'Esta campo es requerido',
            'last_name.string' =>'El valor no es correcto solo admite caracteres',
            'last_name.max' =>'Solo se permite 255 caracteres',

            'phone.required' =>'Esta campo es requerido',
            'phone.string' =>'El valor no es correcto solo admite caracteres',
            'phone.max' =>'Solo se permite 10 caracteres',
           


            'address.string' =>'El valor no es correcto solo admite caracteres',
            'address.max' =>'Solo se permite 10 caracteres',

            'email.required' =>'Esta campo es requerido',
            'email.email' =>'Formato de correo incorrecto', 
            
        ];
    }

}
