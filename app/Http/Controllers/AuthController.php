<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function register()
    {
        return view('dangky');
    }

    public function store(CreateUserRequest $request, User $user)
    {
        $validated = $request->validated();

        if ($request->has('image')) {
            $imagePath = request()->file('image')->store('profile', 'public');
            $validated['image'] = $imagePath;

            Storage::disk('public')->delete($user->image ?? '');
        }
        $user = User::create(
            [
                'ten' => $validated['ten'],
                'sdt' => $validated['sdt'],
                'birthdate' => $validated['birthdate'],
                'diachi' => $validated['diachi'],
                'noilamviec' => $validated['noilamviec'],
                'nienkhoa' => $validated['nienkhoa'],
                'lop' => $validated['lop'],
                'khoa' => $validated['khoa'],
                'chuyennganh' => $validated['chuyennganh'],
                'hedaihoc' => $validated['hedaihoc'],
                'email' => $validated['email'],
                'quequan' => $validated['quequan'],
                'image' => $validated['image'] ?? null,
                'password' => Hash::make($validated['password']),
            ]
        );
        return redirect()->route('home');
    }

    public function login()
    {
        return view('dangnhap');
    }

    public function authenticate()
    {
        $validated = request()->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:5'
            ]
        );

        if (auth()->attempt($validated)) {

            request()->session()->regenerate();
            return redirect()->back();
        }

        return redirect()->route('login')->withErrors([
            'email' => "No matching user found with the provided email and password"
        ]);
    }

    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home');
    }
}
