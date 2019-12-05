<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verified;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailVerified
{
    public function handle(Verified $event)
    {
        // 会话里闪存认证成功后的消息提醒
        session()->flash('success', '相逢情便深，恨不相逢早。恭喜您，邮箱验证成功，您正式成为 灵魂深触-经历网 的用户！祝愿这里能成为您心灵的归宿！');
    }
}
