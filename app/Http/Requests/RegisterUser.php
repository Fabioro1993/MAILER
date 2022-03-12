<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUser extends FormRequest
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
            'email'             => ['required' ,'email', 'unique:users'],
            'name'              => ['required', 'min:3', 'max:100'],
            'id_card'           => ['required', 'max:11'],
            'birthday'          => ['required'],
            'postal_code'       => ['required', 'numeric'],
            'municipalities_id' => ['required'],
            'password'          => ['required', 'min:8', 'regex:/^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/', 'confirmed'],
        ];
    }
}
