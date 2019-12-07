<?php


namespace App\Http\Controllers\Admin;


class NotificationsController
{
    public function system()
    {
        return view('admin.notifications.system');
    }

    public function users()
    {
        return view('admin.notifications.users');
    }

    public function create()
    {
        return view('admin.notifications.create');
    }

    public function edit()
    {
        return view('admin.notifications.edit');
    }
}
