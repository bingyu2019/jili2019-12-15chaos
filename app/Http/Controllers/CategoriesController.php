<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // 人物经历
    public function experience()
    {
        return view('categories.experience');
    }
    // 个人宣传
    public function myself()
    {
        return view('categories.myself');
    }
    // 灵魂艺术
    public function art()
    {
        return view('categories.art');
    }

    // 灵魂学院
    public function college()
    {
        return view('categories.college');
    }
    // 灵魂共享
    public function share()
    {
        return view('categories.share');
    }

    // 灵魂礼赞
    public function gift()
    {
        return view('categories.gift');
    }

    // 灵魂展览馆
    public function show()
    {
        return view('categories.show');
    }

    // 灵魂极乐
    public function heaven()
    {
        return view('categories.heaven');
    }

    // 灵魂服务
    public function serve()
    {
        return view('categories.serve');
    }
}
