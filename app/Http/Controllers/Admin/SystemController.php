<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class SystemController extends Controller
{
    // 站点设置
    public function settingEdit()
    {
        return view('admin.system.setting_edit');
    }

    // 后台主页\系统统计
    public function statistics()
    {
        return view('admin.system.statistics');
    }

    // 系统日志列表页面
    public function log()
    {
        return view('admin.system.log');
    }

    // 工作交接页面
    public function message()
    {
        return view('admin.system.message');
    }
    public function messageCreate()
    {
        return view('admin.system.message_create');
    }


}
