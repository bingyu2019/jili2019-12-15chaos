{{-- 电脑其它页面顶部导航 --}}
<nav class="lg-other-header navbar navbar-expand-lg navbar-static-top mb-3 d-none d-sm-block"
     style="border-top:solid 6px #A25900;">
  <div class="container">
    <!-- Branding Image -->
    <a class="navbar-brand " href="{{ route('root') }}">
      首页
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
          <a href="{{ route('topics.create') }}" class="float-left mr-4 mt-2"><h3>+</h3></a>
          <li class="nav-item notification-badge mt-2">
            <h3><a
                class="nav-link mr-3 badge badge-pill badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'secondary' }} text-white"
                href="{{ route('notifications') }}">1
                {{--                            {{ Auth::user()->notification_count }}--}}
              </a></h3>
          </li>

          <li class="nav-item dropdown img-dropdown-menu">
            <a class="nav-link dropdown-toggle" href="{{ route('users.show', Auth::id()) }}" id="navbarDropdown"
               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="{{ Auth::user()->avatar }}" class="img-responsive emergence-avatar img-circle" height="40px" width="40px"
                   style="border-radius: 50%;" alt="头像">
              {{ Auth::user()->name }}
            </a>

            <div class="lg-other-header-menu dropdown-menu" aria-labelledby="navbarDropdown">
              {{--                            @can('manage_contents')--}}
              <a class="dropdown-item" href="{{ route('topics.show') }}">
                🔴 帖子页面
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('system.statistics') }}">
                🔴 管理后台
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">
                🔴 个人中心
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="">
                🔵 我的钱袋
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">
                🔵 编辑资料
              </a>
              <div class="dropdown-divider"></div>
              <a href="javascript:void(0);" class="btn btn-danger btn-lg active btn-del-login" role="button"
                 aria-pressed="true" style="width: 100%;"><h5>退出</h5></a>
            </div>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
