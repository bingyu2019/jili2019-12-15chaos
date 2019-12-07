<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinancesController extends Controller
{

    // 点赞列表视图
    public function votes()
    {
        return view('admin.finances.votes');
    }

    // 打赏列表视图
    public function rewards()
    {
        return view('admin.finances.rewards');
    }

    // 礼赞列表视图
    public function gifts()
    {
        return view('admin.finances.gifts');
    }

    // 经历列表视图
    public function experience()
    {
        return view('admin.finances.experience');
    }

    // 编辑经历
    public function experienceEdit()
    {
        return view('admin.finances.experience_edit');
    }

    // 灵魂展览馆列表视图
    public function show()
    {
        return view('admin.finances.show');
    }

    public function showEdit()
    {
        return view('admin.finances.show_edit');
    }




    public function store(Request $request)
    {
        //
    }


    public function edit($id)
    {
        //
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
