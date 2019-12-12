<?php


namespace App\Http\Controllers;


use App\Models\User;

class WalletsController extends Controller
{
    public function list(User $user)
    {
        return view('wallets.list', ['user' => $user]);
    }
}
