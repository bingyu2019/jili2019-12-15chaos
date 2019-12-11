<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    // 消息通知列表页面
    public function list(User $user)
    {
        return view('notifications.list',['user' => $user]);
    }

    // 私信发送框
    public function createLetter(User $user )
    {
        return view('notifications._create_letter', ['user' => $user]);
    }
}
