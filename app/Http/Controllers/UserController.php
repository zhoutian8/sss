<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        $comments = $user->comments()->latest()->get(); // 获取用户的所有评论
        return view('user.profile', compact('user', 'comments'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'avatar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = Auth::user();
        $user->name = $request->name;

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $path;
        }

        $user->save();
        return back()->with('success', 'Profile updated successfully!');
    }
}

