<?php


namespace App\Http\Controllers\Admin;


class NotificationsController
{
    // 私信页面
    public function letter()
    {
        return view('admin.notifications.letter');
    }

    // 提醒页面
    public function remind()
    {
        return view('admin.notifications.remind');
    }

    // 系统公告页面
    public function system()
    {
        return view('admin.notifications.system');
    }

    // 新建公告
    public function create()
    {
        return view('admin.notifications.create');
    }

    // 编辑公告
    public function edit()
    {
        return view('admin.notifications.edit');
    }


    // 举报列表页面
    public function report()
    {
        return view('admin.notifications.report');
    }

    // 编辑举报页面
    public function editReport()
    {
        return view('admin.notifications.edit_report');
    }
}










