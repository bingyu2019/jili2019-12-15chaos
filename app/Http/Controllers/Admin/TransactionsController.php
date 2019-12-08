<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TransactionsController extends Controller
{
    // 用户收益页面
    public function usersProfits()
    {
    return view('admin.finances.transactions.users_profits');
    }

    // 发放用户收益记录
    public function usersProfitsEdit()
    {
        return view('admin.finances.transactions.users_profits_edit');
    }

    // 用户兑币记录页面
    public function coins()
    {
        return view('admin.finances.transactions.coins');
    }

    // 新建用户兑币
    public function coinsCreate()
    {
        return view('admin.finances.transactions.coins_create');
    }

    // 编辑用户兑币
    public function coinsEdit()
    {
        return view('admin.finances.transactions.coins_edit');
    }


    // 平台收盗记录
    public function list()
    {
        return view('admin.finances.transactions.list');
    }

    // 平台支出记录
    public function payments()
    {
        return view('admin.finances.transactions.payments');
    }


}


























