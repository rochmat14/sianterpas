<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class UsersUpdateRequest extends FormRequest
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
            // 'name'     => 'required|max:191',
            'email' => 'required|email|unique:users,email,'.$this->id,
            // 'password'    => 'same:password_confirmation',
            'role' => 'required'
        ];
    }
}
