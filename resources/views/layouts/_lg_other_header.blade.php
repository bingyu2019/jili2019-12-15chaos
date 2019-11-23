{{-- 电脑其它页面顶部导航 --}}
<nav class="lg-other-header navbar navbar-expand-lg navbar-static-top mb-3 d-none d-sm-block" style="border-top:solid 6px #DE9008;">
    <div class="container">
        <!-- Branding Image -->
        <a class="navbar-brand " href="{{ url('/') }}">
            灵魂深触-经历网
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto lg-other-header ">
                <li><span>◈</span><a href="{{ route('experience')}}">人物经历</a><span>◈</span></li>
                <li><a href="{{ route('myself') }}">个人宣传</a><span>◈</span></li>
                <li><a href="{{ route('art') }}">灵魂艺术</a><span>◈</span></li>
                <li><a href="{{ route('college') }}">灵魂学院</a><span>◈</span></li>
                <li><a href="{{ route('share') }}">灵魂共享</a><span>◈</span></li>
                <li><a href="{{ route('gift') }}">灵魂礼赞</a><span>◈</span></li>
                <li><a href="{{ route('show') }}">灵魂展览馆</a><span> ◈</span></li>
                <li><a href="{{ route('heaven') }}">灵魂极乐</a><span>◈</span></li>
                <li><a href="{{ route('serve') }}">灵魂服务 </a><span>◈</span></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>
                @else
                    <li class="nav-item">
                        <a class="nav-link mt-1 mr-3 font-weight-bold" href="">
                            <i class="fa fa-plus"></i>
                        </a>
                    </li>

                    <li class="nav-item notification-badge mt-2">
                        <a class="nav-link mr-3 badge badge-pill badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'secondary' }} text-white"
                           href="">1
                            {{--                            {{ Auth::user()->notification_count }}--}}
                        </a>
                    </li>
                    <li class="nav-item dropdown mr-4  img-dropdown-menu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/images/avatar/face100px.jpg"
                                 class="pt-0 register-avatar img-responsive img-circle" width="38px" style="border-radius: 50%;background-color: transparent;box-shadow:0px 0px 5px 3px #ccc;" alt="头像">
                            {{--                            {{ Auth::user()->name }}--}}
                        </a>

                        <div class="lg-other-header-menu dropdown-menu" aria-labelledby="navbarDropdown" >
{{--                            @can('manage_contents')--}}
                                <a class="dropdown-item" href="{{ route('topics.show') }}">
                                    <i class="fas fa-tachometer-alt mr-2"></i>
                                    管理后台
                                </a>
                                <div class="dropdown-divider"></div>
{{--                            @endcan--}}
                            <a class="dropdown-item" href="{{ route('users.show') }}">
                                <i class="far fa-user mr-2"></i>
                                个人中心
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="">
                                <i class="far fa-edit mr-2"></i>
                                我的钱袋
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="">
                                <i class="far fa-edit mr-2"></i>
                                编辑资料
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" id="logout" href="#">
                                <form action="{{ route('logout') }}" method="POST"
                                      onsubmit="return confirm('您确定要退出吗？');">
                                    {{ csrf_field() }}
                                    <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                </form>
                            </a>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>