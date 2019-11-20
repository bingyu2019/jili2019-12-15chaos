{{-- 手机版顶部导航-登录注册--}}
<div class="d-block d-sm-none" >

    {{--    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">--}}
    <nav class="navbar fixed-top navbar-dark bg-dark d-block d-sm-none" style="background: linear-gradient(to top, #000000, #A25900);">
        <div class="container">
            <!-- Branding Image -->
            <a class="navbar-brand " href="{{ url('/') }}">
                <img src="/images/logo/xs-logo.png" alt="经历网主页">
            </a>
            <button class="navbar-toggler text-white" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="xs-nav-category navbar-nav mr-auto text-center">
                    {{-- 各大分类 --}}
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('experience') }}">📚
                            &nbsp;&nbsp;&nbsp;人物经历</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('myself') }}">📙 &nbsp;&nbsp;&nbsp;个人宣传</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('art') }}">📝 &nbsp;&nbsp;&nbsp;灵魂艺术</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('college') }}">📗 &nbsp;&nbsp;&nbsp;灵魂学院</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('share') }}">📔 &nbsp;&nbsp;&nbsp;灵魂共享</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('gift') }}">🎁 &nbsp;&nbsp;&nbsp;灵魂礼赞</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('show') }}">🎴 灵魂展览馆</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('heaven') }}">📓 &nbsp;&nbsp;&nbsp;灵魂极乐</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('serve') }}">📘 &nbsp;&nbsp;&nbsp;灵魂服务</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav navbar-right text-center">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><img
                                    src="/images/icon/xs-weixin.png" style="width: 30px;">&nbsp;&nbsp;&nbsp; 登 录</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><img
                                    src="/images/icon/xs-weixin.png" style="width: 30px;">&nbsp;&nbsp;&nbsp; 注 册</a>
                        </li>
                        <hr>
                    @else
                        {{-- 消息通知-发贴入口 --}}
                        <div>
                            {{-- 消息通知 --}}
                            <h2 class="text-white float-left pt-2"> 🔔 &nbsp;0</h2>
                            {{-- 发贴入口 --}}
                            <a class="float-right pt-2" href="https://www.baidu.com/"><img src="/images/icon/xs-pen.png" style="width: 45px;height: 30px;"> &nbsp;发布新帖</a>
                        </div>

                        <div style="border:solid 1px #584021;"></div>

                        <div style="border:solid 1px #584021;"></div>
                        {{-- 头像 --}}
                        <li class="nav-item dropdown pt-2">
                            <a class="nav-link dropdown-toggle" href="{{ route('users.show') }}" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img
                                    src="/images/avatar/face100px.jpg"
                                    class="img-responsive img-circle"
                                    style="border-radius: 50%; width:40px;box-shadow:0px 0px 5px 5px #ccc;">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu col-xs-4" aria-labelledby="navbarDropdown"
                                 style="background: linear-gradient(to bottom, red, blue);">
                                <a class="dropdown-item text-center text-light" href="">🔳 &nbsp;&nbsp;管理后台</a>
                                <div style="border: solid 1px #ffffff;"></div>
                                <a class="dropdown-item text-center text-light" href="{{ route('users.show') }}">🔳&nbsp;&nbsp; 个人中心</a>
                                <div style="border: solid 1px #ffffff;"></div>
                                <a class="dropdown-item text-center text-light" href="">🔳&nbsp;&nbsp; 我的钱包</a>
                                <div style="border: solid 1px #ffffff;"></div>
                                <a class="dropdown-item text-center text-light" href="">🔳&nbsp;&nbsp; 编辑资料</a>
                                <div style="border: solid 1px #ffffff;"></div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" id="logout" href="#">
                                    <form action="{{ route('logout') }}" method="POST">
                                        {{ csrf_field() }}
                                        <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                    </form>
                                </a>
                            </div>
                        </li>

                        <br>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>














