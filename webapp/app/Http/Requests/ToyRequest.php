<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ToyRequest extends FormRequest
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
        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'idtoy' => 'min:4|max:120|required',
            'name'  => 'min:5|max:120|required'

        ]);
    }
}
