<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{

    public function index(User $user)
    {
        return view('admin.permissions.index',['user' => $user]);
    }


    public function create(User $user)
    {
        return view('admin.permissions.create',['user' => $user]);
    }

    public function store(Request $request)
    {
        //
    }


    public function edit(User $user)
    {
        return view('admin.permissions.edit',['user' => $user]);
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
