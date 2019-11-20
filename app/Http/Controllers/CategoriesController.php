<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // 人物经历
    public function experience()
    {
        return view('category.experience');
    }
    // 个人宣传
    public function myself()
    {
        return view('category.myself');
    }
    // 灵魂艺术
    public function art()
    {
        return view('category.art');
    }

    // 灵魂学院
    public function college()
    {
        return view('category.college');
    }
    // 灵魂共享
    public function share()
    {
        return view('category.share');
    }

    // 灵魂礼赞
    public function gift()
    {
        return view('category.gift');
    }

    // 灵魂展览馆
    public function show()
    {
        return view('category.show');
    }

    // 灵魂极乐
    public function heaven()
    {
        return view('category.heaven');
    }

    // 灵魂服务
    public function serve()
    {
        return view('category.serve');
    }
}
