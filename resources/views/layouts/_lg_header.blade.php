{{-- 电脑版顶部登录注册 --}}
<div class="d-none d-sm-block">
    {{-- 电脑版主页 logo --}}
    <div class="logo d-none d-sm-block">
        <div class="logo-body col-md-4 float-left"></div>
        <div class="logo-container col-md-3 float-left" value=""><a class="" href="{{ route('root') }}"><img
                    class="logo-img img-fluid float-right ml-5 mt-3" src="/images/logo/logo.jpg" alt="灵魂深触-经历网"></a>
        </div>
        <div class="logo-body col-md-3  float-left mt-2 pl-1">
            <br>
            <a class="logo-text" href="{{ route('experience') }}"><p>让每一个人都能够在网络上搜索到自己！</p></a>
            <a class="logo-text" href="{{ route('art') }}"><p>让有才华的您得到更多的奖赏！</p></a>
            <a class="logo-text" href="{{ route('heaven') }}"><p>让离去的人从此不再孤单！</p></a>
        </div>
        <div class="logo-body col-md-2 float-left">

            {{-- 电脑注册登录---}}
            <div class="register-box text-center">
                <br>
                <ul class="row">
                    @guest
                        {{-- 登录 --}}
                        <li class="mr-3"><a href="{{ route('login') }}"><h5>登录</h5></a></li>
                        {{-- 注册 --}}
                        <li><a href="{{ route('register') }}"><h5>注册</h5></a></li>
                    @else
                        {{-- 头像 --}}
                        <li class="nav-item dropdown lg-header-avatar">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <img src="/images/avatar/face100px.jpg"
                                     class="pt-0 register-avatar img-responsive img-circle"
                                     width="40px"
                                     style="border-radius: 50%;background-color: transparent;box-shadow:0px 0px 8px 5px #ccc;"
                                     alt="头像">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu register-dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="" class="dropdown-item">
                                    <i class="fas fa-tachometer-alt mr-2"></i>
                                    <h5>管理后台</h5>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('users.show') }}">
                                    <i class="far fa-user mr-2"></i>
                                    <h5>个人中心</h5>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item btn-favor" href="">
                                    <i class="far fa-user mr-2"></i>
                                    <h5>我的钱袋</h5>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="">
                                    <i class="far fa-edit mr-2"></i>
                                    <h5>编辑资料</h5>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" id="logout" href="#">
                                    <form action="{{ route('logout') }}" method="POST"
                                          onsubmit="return confirm('您确定要退出吗？');">
                                        {{ csrf_field() }}

                                        <button class="btn btn-block btn-danger" type="submit" name="button">退出
                                        </button>
                                    </form>
                                </a>
                            </div>
                        </li>

                    @endguest
                </ul>
            </div>

        </div>
    </div>
</div>

