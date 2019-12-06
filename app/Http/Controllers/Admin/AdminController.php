<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // 后台用户列表
    public function users(User $user)
    {
        return view('admin.users', ['user' => $user]);
    }

    // 编辑用户页面
    public function create(User $user)
    {
        return view('admin.user_create_and_edit', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('admin.user_create_and_edit', ['user' => $user]);
    }

    // 更新用户资料
    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return redirect()->route('admin.users')->with('success', '资料更新成功！');
    }

    // 管理员列表
    public function admin()
    {
        return view('admin.admin');
    }

    // 权限列表
    public function permission()
    {
        return view('admin.permission');
    }

    // 用户组列表
    public function role()
    {
        return view('admin.role');
    }

    //添加和编辑权限页面
    public function permissionCreateEdit(user $user)
    {
        return view('admin.permission_create_and_edit',['user' => $user]);
    }
}

