<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PicketRequest extends FormRequest
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
            'student' => 'required|exists:students,id',
            'day' => 'required|exists:days,id',
        ];
    }
}
