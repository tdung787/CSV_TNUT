<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return (int) $this->user_id === auth()->id();
    }

    public function rules(): array
    {
        return [
            'user_id' => 'nullable|exists:users,id',
            'category_id'   => 'required|integer|exists:post_categories,id',
            'title' => 'required',
            'content' => 'required',
            'description' => 'nullable',
            'published_at' => 'required', // Đảm bảo đây là một ngày hợp lệ
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'Vui lòng chọn danh mục sản phẩm.',
            'category_id.integer'  => 'Vui lòng chọn danh mục sản phẩm.',
            'category_id.exists'   => 'Danh mục không tồn tại.',
            'title.unique' => 'Tiêu đề đã tồn tại.',
            'title.required' => 'Tiêu đề là bắt buộc.',
            'content.required' => 'Nội dung là bắt buộc.',
            'published_at.required' => 'Ngày xuất bản là bắt buộc.',
        ];
    }
}
