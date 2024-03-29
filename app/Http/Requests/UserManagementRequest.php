<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserManagementRequest extends FormRequest
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
        if($this->isMethod('put')) {
            $pass = '';
        } else {
            $pass = 'required|string|min:8|confirmed';
        }
        
        return [
            'username' => 'required|string|alpha_num|min:3|max:50|unique:users,username,' . optional(request())->id,
            'name' => ['required', 'string', 'max:255'],
            'email' => 'required|string|email|max:255|unique:users,email,' . optional(request())->id,
            'password' => $pass
        ];
    }
}
