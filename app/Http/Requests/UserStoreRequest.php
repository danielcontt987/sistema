<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
        $this->sanitized();
        return [
            'name' => 'required|min:3|max:20',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es un campo obligatorio',
            'username.required' => 'El usuario es un campo obligatorio',
            'username.unique:users' => 'El Usuario es ya ha sido registrado',
            'email.required' => 'El correo es un campo obligatorio',
            'email.unique:users' => 'El correo es ya ha sido registrado',
            'password.required' => 'La contraseña es un campo obligatorio'
        ];
    }

    public function sanitized()
    {
        return [
            'username' => 'trim|lowercase',
            'email' => 'trim|capitalize|escape'
        ];
    }
}
