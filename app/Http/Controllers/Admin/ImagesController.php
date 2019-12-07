<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class ImagesController extends Controller
{

    public function list()
    {
        return view('admin.images.list');
    }

}
