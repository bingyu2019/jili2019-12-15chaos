<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopicsController extends Controller
{

    public function index()
    {
        return view('admin.topics.index');
    }

    public function create()
    {
        return view('admin.topics.cerate');
    }


    public function store(Request $request)
    {
        //
    }


    public function edit()
    {
        return view('admin.topics.edit');
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
