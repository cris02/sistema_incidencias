<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            //
            'firstname' => 'required',
            'email' => 'required | email | unique:users,email,'.$this->user->id.',id', //creamos una exception cuando actualizamos los campos
            'username' => 'required | unique:users,username,'.$this->user->id.',id',
        ];
    }
}
