<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            'name_supplier' => 'min:3|required',
            'country' => 'required',
            'phone' => 'numeric|required',
            'address_supplier' => 'required'
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
            'name_supplier.required' => 'El nombre del proveedor es obligatorio.',
            'name_supplier.min' => 'El nombre del proveedor debe contener al menos 3 caracteres.',
            'country.required' => 'El país del proveedor es requerido.',
            'phone.required' => 'El número del proveedor es obligatorio.',
            'phone.numeric' => 'El campo de telefono debe ser numerico.',
            'address_supplier.required' => 'La dirección del proveedor es obligatoria.'
        ];
    }
}
