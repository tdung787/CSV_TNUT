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
        return view('new-trangchu');
    }
    public function sumenh()
    {
        return view('sumenh');
    }
    // public function kiemdinh()
    // {
    //     return view('multimedia.giaychungnhankiemdinh');
    // }
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
        $posts = Post::latest('published_at')->paginate(6);
        $categories = PostCategory::all();

        return view('hoicodiencactinh', compact('posts', 'categories'));
    }

    // public function hoicodiencactinh_show(Post $post)
    // {
    //     $template = $post->template;

    //     $viewPath = 'hoicodiencactinh.' . $template;

    //     return view($viewPath, compact('post'));
    // }

    public function tinhnguoicodien()
    {
        $posts = Post::latest('published_at')->paginate(6);
        $categories = PostCategory::all();

        return view('tinhnguoicodien', compact('posts', 'categories'));
    }

    public function tinhnguoicodien_show(PostCategory $category, Post $post)
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
    public function tieubieu()
    {
        $posts = Post::latest('published_at')->paginate(6);
        $categories = PostCategory::all();

        return view('tieubieu', compact('posts', 'categories'));
    }
    // public function tieubieu_show(Post $post)
    // {
    //     $template = $post->template;

    //     $viewPath = 'guongmattieubieu.' . $template;

    //     return view($viewPath, compact('post'));
    // }
    public function sukien()
    {
        $posts = Post::latest('published_at')->paginate(6);
        $categories = PostCategory::all();

        return view('sukien', compact('posts', 'categories'));
    }
    // public function sukien_show(Post $post)
    // {
    //     $template = $post->template;

    //     $viewPath = 'bantin.' . $template;

    //     return view($viewPath, compact('post'));
    // }
    public function thuvienhinhanh()
    {
        return view('thuvienhinhanh');
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
    public function create(Request $request)
    {
        $post = new Post();

        $post->category = $request->category;

        $post->thumbnail = $request->thumbnail;

        $post->tittle = $request->tittle;

        $post->description = $request->description;

        $post->content = $request->content;

        $post->save();

        return redirect()->back();
    }
}
