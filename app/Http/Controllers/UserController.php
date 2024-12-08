<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Comment;
class UserController extends Controller
{
    // 显示所有用户
    public function index()
    {
        $users = User::all(); // 获取所有用户
        return view('admin.users.index', compact('users')); // 返回用户列表视图
    }

    // 编辑用户
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user')); // 返回编辑用户视图
    }

    // 更新用户
    public function update(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user->update($request->all()); // 更新用户数据

        return redirect()->route('admin.users.index')->with('success', '用户信息更新成功');
    }

    public function create()
    {
        return view('admin.users.create'); // 返回添加用户的页面
    }
    public function store(Request $request)
    {
        // 验证用户输入
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:7',  // 这里添加了确认密码字段
        ]);

        // 创建用户
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        // 返回成功信息
        return redirect()->route('admin.users.index')->with('success', 'User added successfully!');
    }



    // 删除用户
    public function destroy(User $user)
    {
        $user->comments()->delete();

        $user->delete(); // 删除用户

        return redirect()->route('admin.users.index')->with('success', '用户已删除');
    }
}
