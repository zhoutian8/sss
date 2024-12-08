<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        if (Auth::check()) {
            // 如果用户已登录，直接跳转到首页
            return redirect()->route('home');
        }
    
        return view('login.login');
    }

    public function store(Request $request)
    {
        // 验证输入
        $request->validate([
            'email' => 'required|email', // 修改为 email 验证
            'password' => 'required|min:6',
        ]);

         // 尝试登录
         if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // 登录成功，跳转到指定页面
            return redirect()->route('home');
        }

        return back()->withErrors(['email' => 'EMAIL OR PASSWORD ERROR'])->withInput();
    }
}
