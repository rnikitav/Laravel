<?php

namespace App\Http\Requests\Login;

use Illuminate\Foundation\Http\FormRequest;

class RegisterCreate extends FormRequest
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
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],

        ];
    }

    public function messages()
    {
        return [
            'unique'     => 'Такое значение поля :attribute уже существует. Выберете другое',
        ];
    }
}
