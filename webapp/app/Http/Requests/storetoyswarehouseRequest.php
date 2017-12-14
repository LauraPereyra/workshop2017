<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storetoyswarehouseRequest extends FormRequest
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

            'warehouse_id'  => 'required',
            'toy_id'        => 'required',
            'stock'         => 'required',
            'precio_compra' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'warehouse_id.required'  => 'Se debe escoger un almacen.',
            'toy_id.required'        => 'Se debe escoger un juguete.',
            'stock.required'         => 'El ingreso del stock es obligatorio.',
            'precio_compra.required' => 'El Precio de compra obligatorio.',
        ];
    }
}
