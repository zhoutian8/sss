<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    // 显示登录表单
    public function create()
    {
        // 如果管理员已登录，直接跳转到后台首页
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login'); 
    }

    // 处理登录请求
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // 使用 Auth::guard('admin') 尝试登录
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // 登录成功，跳转到后台首页
            return redirect()->route('admin.dashboard');
        }

        // 登录失败，返回错误信息
        return back()->withErrors(['email' => '邮箱或密码错误'])->withInput();
    }

    // 退出登录
    public function destroy()
    {
        Auth::guard('admin')->logout(); // 使用 admin guard 退出
        return redirect()->route('admin.login');
    }
}

