<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {
        return view('admin.categories.index');
    }


    public function create()
    {
        return view('admin.categories.cerate');
    }


    public function store(Request $request)
    {
        //
    }


    public function edit()
    {
        return view('admin.categories.edit');
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
