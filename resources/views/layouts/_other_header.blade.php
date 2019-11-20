{{-- 电脑个人页面顶部导航 --}}
<div class="container">
    <div class="col-lg-12 col-md-12 mx-auto d-none d-sm-block">
        <ul class="text-white row user-show-nav">
            <li style="width: 8%;"><span style="color: #986D3D;">█</span>&nbsp;&nbsp;<a
                    href="{{ route('root') }}">首页</a><span
                    style="color: #986D3D;"> ▉</span></li>
            <li><a href="{{ route('experience') }}"> 人物经历</a><span
                    style="color: #986D3D;">&nbsp;&nbsp;▉</span></li>
            <li><a href="{{ route('myself') }}">个人宣传</a><span style="color: #986D3D;">&nbsp;&nbsp;&nbsp;▉</span>
            </li>
            <li><a href="{{ route('art') }}">灵魂艺术</a><span style="color: #986D3D;">&nbsp;&nbsp;&nbsp;▉</span></li>
            <li><a href="{{ route('college') }}">灵魂学院</a><span style="color: #986D3D;">&nbsp;&nbsp;&nbsp;▉</span>
            </li>
            <li><a href="{{ route('share') }}">灵魂共享</a><span style="color: #986D3D;">&nbsp;&nbsp;&nbsp;▉</span>
            </li>
            <li><a href="{{ route('gift') }}">灵魂礼赞</a><span style="color: #986D3D;">&nbsp;&nbsp;&nbsp;▉</span></li>
            <li style="width: 11%;"><a href="{{ route('show') }}">灵魂展览馆</a><span
                    style="color: #986D3D;"> ▉</span></li>
            <li><a href="{{ route('heaven') }}">灵魂极乐</a><span style="color: #986D3D;">&nbsp;&nbsp;&nbsp;▉</span>
            </li>
            <li><a href="{{ route('serve') }}">灵魂服务 </a><span style="color: #986D3D;">&nbsp;&nbsp;▉</span>
            </li>
        </ul>
    </div>
</div>
