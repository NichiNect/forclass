<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentsRequest extends FormRequest
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
            'no_absen'=> ['required', 'numeric'],
            'role' => ['required'],
            'name'=> ['required'],
            'picture' => ['mimes:jpg,png,jpeg'],
            'description' => ['required', 'string', 'min:10']
        ];
    }
}
