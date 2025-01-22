<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PostCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostCategoryController extends Controller
{
    public function index(): View
    {
        $postCategory = PostCategory::orderBy('updated_at', 'desc')->get();
        return view('admin.posts.post_categories.index', compact('postCategory'));
    }

    public function create(): View
    {
        return view('admin.posts.post_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:555|unique:post_categories,title',
        ], [
            'title.required' => 'Vui lòng nhập tên danh mục.',
            'title.max' => 'Tiêu đề không được vượt quá 555 ký tự.',
            'title.unique' => 'Tên danh mục này đã tồn tại, vui lòng nhập tên khác.',
        ]);

        PostCategory::create($request->all());

        return redirect()->route('admin.post_categories.index')->with('success', 'Thêm thành công.');
    }

    public function edit(PostCategory $postCategory): View
    {
        return view('admin.posts.post_categories.edit', compact('postCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostCategory $postCategory): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:555|unique:post_categories,title',
        ], [
            'title.required' => 'Vui lòng nhập tên danh mục.',
            'title.max' => 'Tên danh mục không được vượt quá 555 ký tự.',
            'title.unique' => 'Tên danh mục này đã tồn tại, vui lòng nhập tên khác.',
        ]);
        $postCategory->update($request->all());

        return redirect()->route('admin.post_categories.index')->with('success', 'Cập nhật thành công.');
    }

    public function destroy(PostCategory $postCategory): RedirectResponse
    {
        // Kiểm tra nếu có bài viết liên quan
        if ($postCategory->posts()->count() > 0) {
            return redirect()->route('admin.post_categories.index')->with('error', 'Không thể xoá danh mục này vì có dữ liệu bài viết liên quan.');
        }
    
        // Thực hiện lệnh xóa
        $postCategory->delete();
    
        return redirect()->route('admin.post_categories.index')->with('success', 'Xoá thành công.');
    }
    
}
