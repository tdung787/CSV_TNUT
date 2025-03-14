<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Alumni;
use App\Models\Admin\Post;
use App\Models\Admin\PostCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Post as GlobalPost;

class CsvController extends Controller
{
    public function index()
    {
        $latestPost = Post::whereHas('category', function ($query) {
            $query->where('title', 'Tình người cơ điện');
        })->latest('published_at')->first();

        // Lấy 2 bài viết kế tiếp sau bài viết mới nhất
        $nextPosts = Post::whereHas('category', function ($query) {
            $query->where('title', 'Tình người cơ điện');
        })
            ->where('id', '!=', $latestPost->id) // Loại bỏ bài viết mới nhất
            ->latest('published_at')
            ->take(2) // Lấy 2 bài viết
            ->get();

        $hoicodien = Post::whereHas('category', function ($query) {
            $query->where('title', 'Hội cơ điện các tỉnh');
        })
            ->latest('published_at')
            ->take(3) // Lấy 2 bài viết
            ->get();

        $excludedIds = collect([$latestPost->id])->merge($nextPosts->pluck('id'))->all(); // Tập hợp các ID cần loại trừ
        $additionalPosts = Post::whereHas('category', function ($query) {
            $query->where('title', 'Tình người cơ điện');
        })
            ->whereNotIn('id', $excludedIds) // Loại trừ $latestPost và $nextPosts
            ->latest('published_at')
            ->take(8) // Lấy 8 bài viết
            ->get();

        $categories = PostCategory::all();

        return view('new-trangchu', compact('latestPost', 'nextPosts', 'additionalPosts', 'categories', 'hoicodien'));
    }
    public function sumenh()
    {
        return view('sumenh');
    }
    public function quytuhao()
    {
        return view('quytuhao');
    }
    public function quyphattrien()
    {
        return view('quyphattrien');
    }
    public function dangkydonggop()
    {
        return view('dangkydonggop');
    }

    public function hoicodiencactinh()
    {
        $posts = Post::whereHas('category', function ($query) {
            $query->where('title', 'Hội cơ điện các tỉnh');
        })->latest('published_at')->paginate(6);

        $categories = PostCategory::all();

        return view('hoicodiencactinh', compact('posts', 'categories'));
    }

    public function hoicodiencactinh_show(PostCategory $category, Post $post)
    {
        if ($post->category_id !== $category->id) {
            abort(404);
        }

        return view('bantin.show', [
            'post' => $post,
            'category' => $category,
        ]);
    }

    public function tinhnguoicodien()
    {
        $posts = Post::whereHas('category', function ($query) {
            $query->where('title', 'Tình người cơ điện');
        })->latest('published_at')->paginate(6);
        $categories = PostCategory::all();

        return view('tinhnguoicodien', compact('posts', 'categories'));
    }

    public function tinhnguoicodien_show(PostCategory $category, Post $post)
    {
        if ($post->category_id !== $category->id) {
            abort(404);
        }

        return view('bantin.show', [
            'post' => $post,
            'category' => $category,
        ]);
    }
    public function tieubieu()
    {
        $posts = Post::whereHas('category', function ($query) {
            $query->where('title', 'Gương mặt tiêu biểu');
        })->latest('published_at')->paginate(6);
        $categories = PostCategory::all();

        return view('tieubieu', compact('posts', 'categories'));
    }

    public function tieubieu_show(PostCategory $category, Post $post)
    {
        if ($post->category_id !== $category->id) {
            abort(404);
        }

        return view('bantin.show', [
            'post' => $post,
            'category' => $category,
        ]);
    }

    public function sukien()
    {
        $posts = Post::whereHas('category', function ($query) {
            $query->where('title', 'Hợp tác');
        })->latest('published_at')->paginate(6);
        $categories = PostCategory::all();

        return view('sukien', compact('posts', 'categories'));
    }

    public function sukien_show(PostCategory $category, Post $post)
    {
        // Đảm bảo sản phẩm thuộc danh mục
        if ($post->category_id !== $category->id) {
            abort(404);
        }

        return view('bantin.show', [
            'post' => $post,
            'category' => $category,
        ]);
    }
    public function thuvienhinhanh()
    {
        $posts = Post::whereHas('category', function ($query) {
            $query->where('title', 'Thư viện hình ảnh');
        })->latest('published_at')->paginate(12);

        $categories = PostCategory::all();

        return view('thuvienhinhanh', compact('posts', 'categories'));
    }
    public function thuvienhinhanh_show(PostCategory $category, Post $post)
    {
        // Đảm bảo sản phẩm thuộc danh mục
        if ($post->category_id !== $category->id) {
            abort(404);
        }

        return view('bantin.show', [
            'post' => $post,
            'category' => $category,
        ]);
    }
    public function dieule()
    {
        return view('dieule');
    }
    public function banchaphanh()
    {
        return view('banchaphanh');
    }
    public function dangbai()
    {
        return view('dangbai');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
