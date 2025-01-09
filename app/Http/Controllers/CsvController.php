<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    //post
    public function sv02()
    {
        return view('bantin.02sv');
    }
    public function vuquangsang()
    {
        return view('bantin.vuquangsang');
    }
    public function k10thamtruong()
    {
        return view('bantin.k10thamtruong');
    }
    public function k10xn()
    {
        return view('bantin.k10xn');
    }
    public function k27()
    {
        return view('guongmattieubieu.k27');
    }
    public function hdk10()
    {
        return view('guongmattieubieu.hdk10');
    }
    public function hdk30()
    {
        return view('guongmattieubieu.hdk30');
    }
    public function guongmat1()
    {
        return view('guongmattieubieu.guongmat1');
    }
    //post

    public function hoicodiencactinh()
    {
        $posts = Post::latest()->get();

        return view('hoicodiencactinh', compact('posts'));
    }

    public function hoicodiencactinh_show(Post $post)
    {
        $template = $post->template;

        $viewPath = 'hoicodiencactinh.' . $template;

        return view($viewPath, compact('post'));
    }

    public function tinhnguoicodien()
    {
        $posts = Post::oldest()->get();

        return view('tinhnguoicodien', compact('posts'));
    }

    public function tinhnguoicodien_show(Post $post)
    {
        $template = $post->template;

        $viewPath = 'tinhnguoicodien.' . $template;

        return view($viewPath, compact('post'));
    }
    public function tieubieu()
    {
        $posts = Post::oldest()->get();

        return view('tieubieu', compact('posts'));
    }
    public function tieubieu_show(Post $post)
    {
        $template = $post->template;

        $viewPath = 'guongmattieubieu.' . $template;

        return view($viewPath, compact('post'));
    }
    public function sukien()
    {
        $posts = Post::oldest()->get();

        return view('sukien', compact('posts'));
    }
    public function sukien_show(Post $post)
    {
        $template = $post->template;

        $viewPath = 'bantin.' . $template;

        return view($viewPath, compact('post'));
    }
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
    public function list()
    {
        $users = User::latest();

        if (request()->has('search')) {
            $users = $users->search(request('search', null));
        }
        if (request()->has('khoa')) {
            $users = $users->khoa(request('khoa'));
        } else {
            $users = $users->khoa();
        }
        if (request()->has('lop')) {
            $users = $users->lop(request('lop', null));
        }
        if (request()->has('noilamviec')) {
            $users = $users->noilamviec(request('noilamviec', null));
        }
        if (request()->has('tinh')) {
            $users = $users->tinh(request('tinh', null));
        }
        if (request()->has('chuyennganh')) {
            $users = $users->chuyennganh(request('chuyennganh', null));
        }

        return view('danhsach', ['users' => $users->paginate(5)]);
    }
    public function show(User $user)
    {
        return view('lylich', compact('user'));
    }
}
