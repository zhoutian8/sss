<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // 显示注册页面
    public function create()
    {
        if (Auth::check()) {
            // 如果用户已登录，直接跳转到首页
            return redirect()->route('home');
        }
        return view('index.register');
    }

    // 处理注册请求
    public function store(Request $request)
    {
        // 验证输入
        $request->validate([
            'username' => 'required|unique:users,username|max:255',
            'email' => 'required|email|unique:users,email|max:255', // 新增 email 验证规则
            'password' => 'required|min:6',
        ]);
    
        // 创建用户
        User::create([
            'username' => $request->username,
            'email' => $request->email, // 保存 email
            'password' => Hash::make($request->password), // 加密密码
        ]);
    
        return redirect()->route('register.create')->with('success', 'registered successfully');
    }
    
}
