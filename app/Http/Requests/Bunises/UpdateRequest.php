<?php

namespace App\Http\Requests\Bunises;

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
        // return [
        //     'name'=>'required|string|max:255',
        //     'description'=>'required|string',
        //     'logo'=>'required',
        //     'mail'=>'required|email:rfc,dns',
        //     'address'=>'required',
        //     'ruc'=>'required|numeric|max:13',
        // ];
    }

    // public function messages()
    // {
    //     return[
    //         'name.required' =>'Esta campo es requerido',
    //         'name.string' =>'El valor no es correcto solo admite caracteres',
    //         'name.max' =>'Solo se permite 255 caracteres',

    //         'description.required' =>'Esta campo es requerido',
    //         'description.string' =>'El valor no es correcto solo admite caracteres',

    //         'logo.required' =>'Esta campo es requerido',
            
    //         'mail.required' =>'Esta campo es requerido',
    //         'mail.email' =>'Formato de correo incorrecto', 

    //         'address.required' =>'Esta campo es requerido',

            
    //         'ruc.required'=>'Esta campo es requerido',
    //         'ruc.numeric'=>'El valor no es correcto solo admite numeros',
    //         'ruc.max' =>'Solo se permite 13 caracteres',

    //     ];
    // }
}
