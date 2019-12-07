<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function index()
    {
        return view('admin.replies.index');
    }


    public function store(Request $request)
    {
        //
    }


    public function edit()
    {
        return view('admin.replies.edit');
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
