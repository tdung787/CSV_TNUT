<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAlumniRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ten' => 'nullable|min:3|max:40',
            'email' => 'nullable|email|unique:users,email',
            'sdt' => 'nullable|min:3|max:40',
            'ngaysinh' => 'nullable|min:1',
            'lop' => 'nullable|min:3|max:40',
            'khoa' => 'nullable|min:1',
            'chuyennganh' => 'nullable|min:1',
            'diachi' => 'nullable|min:3|max:40',
            'noilamviec' => 'nullable|min:3|max:40',
            'nienkhoa' => 'nullable|min:3|max:40',
            'quequan' => 'nullable|min:3',
            'hedaotao' => 'nullable|min:1',
        ];
    }
}
