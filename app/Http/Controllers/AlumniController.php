<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlumniRequest;
use App\Http\Requests\UpdateAlumniRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Alumni;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AlumniController extends Controller
{
    public function alumni()
    {
        return view('alumni');
    }

    public function store(CreateAlumniRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $alumni = Alumni::create($validated);
        return redirect()->route('home')->with('success', 'Thêm CSV thành công!');
    }


    public function list()
    {
        $alumni = Alumni::latest();

        if (request()->has('search')) {
            $alumni = $alumni->search(request('search', null));
        }
        if (request()->has('khoa')) {
            $alumni = $alumni->khoa(request('khoa'));
        } else {
            $alumni = $alumni->khoa();
        }
        if (request()->has('lop')) {
            $alumni = $alumni->lop(request('lop', null));
        }
        if (request()->has('noilamviec')) {
            $alumni = $alumni->noilamviec(request('noilamviec', null));
        }
        if (request()->has('tinh')) {
            $alumni = $alumni->tinh(request('tinh', null));
        }
        if (request()->has('chuyennganh')) {
            $alumni = $alumni->chuyennganh(request('chuyennganh', null));
        }

        return view('danhsach', ['alumni' => $alumni->paginate(5)]);
    }
    public function show(Alumni $alumnus)
    {
        return view('lylich', compact('alumnus'));
    }

    public function edit(Alumni $alumnus)
    {
        $this->authorize('update', $alumnus);

        return view('alumni.alumni_edit', compact('alumnus'));
    }

    public function update(UpdateAlumniRequest $request, Alumni $alumnus)
    {
        $this->authorize('update', $alumnus);

        $validated = $request->validated();

        // if ($request->has('image')) {
        //     $imagePath = request()->file('image')->store('profile', 'public');
        //     $validated['image'] = $imagePath;

        //     Storage::disk('public')->delete($user->image ?? '');
        // }
        $alumnus->update($validated);
        return redirect()->route('csv')->with('success', 'Cập nhật CSV thành công!');
    }

    public function destroy(Alumni $alumnus)
    {
        $alumnus->delete();
        return redirect(route('csv'))->with('success', 'Xóa CSV thành công!');
    }
}
