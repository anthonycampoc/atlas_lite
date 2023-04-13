<?php

namespace App\Http\Requests\Product;

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

        
            'name'=>'required|string|max:255',
            'stock'=>'required|numeric',

            'sell_price'=>'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
          
        ];
    }

    public function messages()
        {
            return[

               
                
               'name.required'=>'Esta campo es requerido',
               'name.string'=>'El valor no es correcto solo admite caracteres',
               'name.max'=>'Solo se permite 255 caracteres',
             

               'stock.required'=>'Esta campo es requerido',
               'stock.numeric'=>'El valor no es correcto solo admite numeros',

               
          

               'sell_price.required'=>'Esta campo es requerido',
               'sell_price.numeric'=>'El valor no es correcto solo admite numeros y .',
               'sell_price.regex'=>'El valor no es correcto solo admite cantidades con dos decimales',

            ];
        }

}
