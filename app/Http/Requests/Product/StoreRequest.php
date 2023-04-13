<?php

namespace App\Http\Requests\Product;

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

            'code'=>'required|unique:products|max:255',
            'name'=>'required|string|unique:products|max:255',
            'stock'=>'required|numeric',
            'image'=>'dimensions:min_width=100,min_height=200|max:5000',
            'sell_price'=>'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
          
        ];
    }

        public function messages()
        {
            return[

                'code.required'=>'Esta campo es requerido',
                'code.unique'=>'Un producto ya contiene este codigo',
                
               'name.required'=>'Esta campo es requerido',
               'name.string'=>'El valor no es correcto solo admite caracteres',
               'name.max'=>'Solo se permite 255 caracteres',
               'name.unique'=>'Ya este registrado este producto',

               'stock.required'=>'Esta campo es requerido',
               'stock.numeric'=>'El valor no es correcto solo admite numeros',

             
               'image.dimensions'=>'La imagen debe ser 100x200 pixeles',

               'sell_price.required'=>'Esta campo es requerido',
               'sell_price.numeric'=>'El valor no es correcto solo admite numeros y .',
               'sell_price.regex'=>'El valor no es correcto solo admite cantidades con dos decimales',


               
        


            ];
        }
}
