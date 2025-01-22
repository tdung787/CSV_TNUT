<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use App\Models\Admin\PostCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //all post
    public function allPost()
    {
        $posts = Post::latest('published_at')->paginate(6); // Sử dụng paginate() để phân trang
        $categories = PostCategory::all(); // Lấy tất cả danh mục sản phẩm để truyền vào view
        return view('website.posts.all-post',compact('posts','categories'));
    }

    //showOnlyPost
    public function showOnlyPost(PostCategory $category, Post $post)
    {
        // Đảm bảo sản phẩm thuộc danh mục
        if ($post->category_id !== $category->id) {
            abort(404);
        }

        $relatedPosts = Post::latest('published_at')
                        ->take(5) // Số lượng bài viết liên quan muốn hiển thị
                        ->get();

        return view('website.posts.show-only-post', [
            'post' => $post,
            'category' => $category,
            'relatedPosts' => $relatedPosts
        ]);
    }

    public function showPostCategory($slug)
    {
        // Lấy danh mục bài viết
        $category = PostCategory::where('slug', $slug)->firstOrFail();

        // Lấy các bài viết thuộc danh mục
        $posts = Post::where('category_id', $category->id)
        ->latest('published_at') // Sắp xếp theo published_at từ mới đến cũ
        ->paginate(6); // Phân trang

        // Trả về view với danh mục và bài viết
        return view('website.posts.post-of-category', compact('category', 'posts'));
    }
}
