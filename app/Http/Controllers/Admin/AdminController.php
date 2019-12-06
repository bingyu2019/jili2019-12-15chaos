<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin.index');
    }

    public function create(User $user)
    {
        return view('admin.admin.create',['user' => $user]);
    }


    public function store(Request $request)
    {
        //
    }

    public function edit(User $user)
    {
        return view('admin.admin.edit',['user' => $user]);
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

