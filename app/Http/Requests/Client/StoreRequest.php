<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'identification'=>'required|string|max:10|unique:clients',
            'name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'phone'=>'required|string|max:10|unique:clients',
            'address'=>'nullable|max:255',
            'email'=>'required|unique:clients',
        ];
    }

    public function messages()
    {
        return[
             
            'identification.required' =>'Esta campo es requerido',
            'identification.string' =>'El valor no es correcto solo admite caracteres',
            'identification.max' =>'Solo se permite 10 caracteres',
            'identification.unique' =>'Ya esta registrado este cedula',

            'name.required' =>'Esta campo es requerido',
            'name.string' =>'El valor no es correcto solo admite caracteres',
            'name.max' =>'Solo se permite 255 caracteres',

            'last_name.required' =>'Esta campo es requerido',
            'last_name.string' =>'El valor no es correcto solo admite caracteres',
            'last_name.max' =>'Solo se permite 255 caracteres',

            'phone.required' =>'Esta campo es requerido',
            'phone.string' =>'El valor no es correcto solo admite caracteres',
            'phone.max' =>'Solo se permite 10 caracteres',
            'phone.unique' =>'Ya esta registrado este numero intente otro',


            
            'address.max' =>'Solo se permite 255 caracteres',


            'email.required' =>'Esta campo es requerido',
            'email.unique' =>'Ya esta registrado este numero intente otro',
            
           
            
        ];
    }
}
