<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.admin', compact('users'));
    }
    public function edit(User $user)
    {
        $this->authorize('update',$user);

        return view('user.user_edit', compact('user'));
    }
    public function update(UpdateUserRequest $request, User $user)
    {
        $this->authorize('update',$user);

        $validated = $request->validated();

        if ($request->has('image')) {
            $imagePath = request()->file('image')->store('profile', 'public');
            $validated['image'] = $imagePath;

            Storage::disk('public')->delete($user->image ?? '');
        }
        $user->update($validated);
        return redirect()->route('admin');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('admin'));
    }
    public function updatePoster($id)
    {
        $user = User::findOrFail($id);
        $user->is_poster = 1;
        $user->save();

        return redirect()->back();
    }
    public function deletePoster($id)
    {
        $user = User::findOrFail($id);
        $user->is_poster = 0;
        $user->save();

        return redirect()->back();
    }
}
