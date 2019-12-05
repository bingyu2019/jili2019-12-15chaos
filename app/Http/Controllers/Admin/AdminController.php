<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(User $user)
    {
        return view('admin.index', ['user' => $user]);
    }

    public function create(User $user)
    {
        return view('admin.user_create_and_edit',['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('admin.user_create_and_edit', ['user' => $user]);
    }

    public function update(Request $request,User $user)
    {
        $user->update($request->all());
//        $data = ($request->all());

        return redirect()->route('admin.index')->with('success', '资料更新成功！');
    }
}

