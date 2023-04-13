<?php

namespace App\Http\Requests\Abono;

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
            'abono'=>'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'saldo'=>'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
        ];
    }

    public function messages()
    {
           return[
            'abono.required'=>'Esta campo es requerido',
            'abono.numeric'=>'El valor no es correcto solo admite numeros y .',
            'abono.regex'=>'El valor no es correcto solo admite cantidades con dos decimales',

               'saldo.required'=>'Esta campo es requerido',
               'saldo.numeric'=>'El valor no es correcto solo admite numeros y .',
               'saldo.regex'=>'El valor no es correcto solo admite cantidades con dos decimales',



           ];
    }
}
