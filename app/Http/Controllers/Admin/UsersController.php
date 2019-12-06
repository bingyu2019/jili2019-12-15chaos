<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index(User $user)
    {
        return view('admin.users.index',['user' => $user]);
    }


    public function create(User $user)
    {
        return view('admin.users.create',['user' => $user]);
    }


    public function store(Request $request)
    {
        //
    }

    public function edit(User $user)
    {
        return view('admin.users.edit',['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
