<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //asignamos permisos para que se pueda procesar el formulario
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // campos que vamos a validar
            'firstname' => 'required',
            'email' => 'required | email | unique:users, email',
            'username' => 'required | unique:users, username',
        ];
    }
}
