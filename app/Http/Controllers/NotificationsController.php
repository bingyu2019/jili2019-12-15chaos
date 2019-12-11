<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function list(User $user)
    {
        return view('notifications.list',['user' => $user]);
    }
}
