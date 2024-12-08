<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); // 返回后台首页视图
    }

     // 管理员管理页面
     public function manage()
     {
        // 获取所有管理员的数据
        $admins = Admin::all();

        // 将管理员数据传递到视图
        return view('admin.manage', compact('admins')); // 返回管理员管理页面视图
     }

     public function edit($id)
     {
         $admin = Admin::findOrFail($id);
         return view('admin.edit', compact('admin'));
     }
      // 更新管理员信息
      public function update(Request $request, $id)
      {
          $admin = Admin::findOrFail($id);
      
          // 验证输入数据
          $request->validate([
              'name' => 'required|max:255',
              'email' => 'required|email|unique:admins,email,' . $admin->id,
              'password' => 'nullable|min:7',
          ]);
      
          // 更新管理员信息
          $admin->name = $request->name;
          $admin->email = $request->email;
      
          // 更新密码（如果提供了新密码）
          if ($request->filled('password')) {
              $admin->password = Hash::make($request->password);
          }
      
          $admin->save();
      
          // 成功后返回消息
          return redirect()->route('admin.manage')->with('success', '管理员信息已更新');
      }

      // 显示添加管理员表单
    public function create()
    {
        return view('admin.create');
    }

    // 处理表单提交并保存新管理员
    public function store(Request $request)
    {
        // 验证输入数据
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:7',
        ]);

        // 创建新管理员
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);  // 密码加密
       
        $admin->save();

        // 添加成功后，返回管理员列表并显示成功消息
        return redirect()->route('admin.manage')->with('success', '管理员已成功添加');
    }

    public function delete($id){
        $admin = Admin::find($id);

        // 检查管理员是否存在
        if ($admin) {
            // 删除管理员
            $admin->delete();

            // 返回管理员列表并显示成功消息
            return redirect()->route('admin.manage')->with('success', '管理员已成功删除');
        }

        // 如果没有找到管理员，显示错误消息
        return redirect()->route('admin.manage')->with('error', '管理员不存在');
    }
      
}
