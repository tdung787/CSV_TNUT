<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'ten' => 'required|min:3|max:40',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|confirmed',
            'sdt' => 'required|min:3|max:40',
            'birthdate' => 'required|min:1',
            'diachi' => 'required|min:3|max:40',
            'noilamviec' => 'required|min:3|max:40',
            'nienkhoa' => 'required|min:3|max:40',
            'lop' => 'required|min:3|max:40',
            'khoa' => 'required|min:1',
            'chuyennganh' => 'required|min:1',
            'hedaihoc' => 'required|min:1',
            'quequan' => 'required|min:3',
            'image' => 'nullable|image|mimes:jpeg,bmp,png'
        ];
    }
}
