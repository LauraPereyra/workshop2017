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
            'name_supplier'     => 'min:3|required',
            'country'           => 'required',
            'phone'             => 'numeric|required',
            'phone2'            => 'numeric|required',
            'cellphone'         => 'numeric|required',
            'cellphone2'        => 'numeric|required',
            'address_supplier'  => 'required',
            'email'             => 'required',
            'website'           => 'required'
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
            'name_supplier.required'    => 'El nombre del proveedor es obligatorio.',
            'name_supplier.min'         => 'El nombre del proveedor debe contener al menos 3 caracteres.',
            'country.required'          => 'El país del proveedor es requerido.',
            'phone.required'            => 'El campo Telefono del proveedor es obligatorio.',
            'phone.numeric'             => 'El campo Telefono debe ser numerico.',
            'phone2.numeric'            => 'El campo Telefono2 debe ser numerico.',
            'phone2.required'           => 'El campo Telefono2 es obligatorio.',
            'cellphone.numeric'         => 'El campo Celular debe ser numerico.',
            'cellphone.required'        => 'El campo Celular es obligatorio.',
            'cellphone2.numeric'        => 'El campo Celular2 debe ser numerico.',
            'cellphone2.required'       => 'El campo Celular2 es obligatorio.',
            'address_supplier.required' => 'La dirección del proveedor es obligatoria.',
            'email.required'            => 'El correo del proveedor es obligatorio.',
            'website.required'          => 'La pagina web del proveedor es obligatoria.'
        ];
    }
}
