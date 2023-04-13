<?php

namespace App\Http\Requests\User;

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
            'name'=>'required|string|max:255',
            'email'=>'required|email:rfc,dns',
        ];
    }

    public function messages()
    {
        return[
            'name.required' =>'Esta campo es requerido',
            'name.string' =>'El valor no es correcto solo admite caracteres',
            'name.max' =>'Solo se permite 255 caracteres',
            
            'email.required' =>'Esta campo es requerido',
            'email.email' =>'Formato de correo incorrecto', 
        ];
    }
}
