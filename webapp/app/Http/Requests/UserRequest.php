<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'names'      => 'min:5|required',
            'lastname1'  => 'min:3|required',
            'lastname2'  => 'min:3|required',
            'phone'      => 'numeric|required',
            'cellphone'  => 'numeric|required',
            'address'    => 'min:5|required',
            'sex'        => 'required',
            'birthday'   => 'required',
            'email'      => 'required|unique:users',
            'password'   => 'required',
            'role'       => 'required'
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
            'names.min' => 'El nombre del usuario debe tener al menos 5 caracteres.',
            'names.required' => 'El nombre del usuario es obligatorio.',
            'lastname1.min' => 'El apellido paterno del usuario debe tener al menos 3 caracteres.',
            'lastname1.required' => 'El apellido paterno del usuario es obligatorio.',
            'lastname2.min' => 'El apellido materno del usuario debe tener al menos 3 caracteres.',
            'lastname2.required' => 'El apellido materno del usuario es obligatorio.',
            'phone.required' => 'El telefono del usuario es obligatorio.',
            'phone.numeric' => 'El telefono del usuario debe ser numerico.',
            'cellphone.required' => 'El celular del usuario es obligatorio.',
            'cellphone.numeric' => 'El celular del usuario debe ser numerico.',
            'address.required' => 'La dirección del usuario es obligatoria.',
            'address.min' => 'La dirección del usuario debe tener al menos 5 caracteres.',
            'sex.required' => 'El genero del usuario es obligatorio.',
            'birthday.required' => 'La fecha de nacimiento del usuario es obligatoria.',
            'email.required' => 'El correo del usuario es obligatorio.',
            'email.unique' => 'Ese correo ya esta en uso, pruebe con otro.',
            'password.required' => 'La contraseña es obligatoria.',
            'role.required' => 'El rol del usuario es obligatorio.'
        ];
    }
}
