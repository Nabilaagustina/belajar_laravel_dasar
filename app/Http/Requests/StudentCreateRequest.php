<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'max:50|required',
            'nis' => 'unique:students|max:8|required',
            'gender' => 'required',
            'class_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'class_id' => 'class',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'nama wajib diisi',
            'nis.required' => 'nis wajib diisi',
            'gender.required' => 'gender wajib diisi',
            'class_id.required' => 'class wajib diisi',
            'nis.max' => 'nis maximal :max karakter',
        ];
    }
}
