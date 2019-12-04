<header class="admin-header">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand text-light" href="#"><h4>灵魂深触-经历网</h4></a>
    <h5 class="text-white-50">把有限的生命投入到无限的为人民服务之中去！——雷锋</h5>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse offset-4" id="navbarNavDropdown">

      <ul class="navbar-nav navbar-right">
        <!-- Authentication Links -->
        @guest
          <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>
        @else
          <li class="nav-item">
            <a class="nav-link mt-1 font-weight-bold" href="">
              <i class="fa fa-plus"></i>
            </a>
          </li>

          <li class="nav-item notification-badge mt-2">
            <h3><a
                class="nav-link mr-3 badge badge-pill badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'secondary' }} text-white"
                href="">1
                {{--                            {{ Auth::user()->notification_count }}--}}
              </a></h3>
          </li>

          <li class="nav-item dropdown img-dropdown-menu">
            <a class="nav-link dropdown-toggle" href="{{ route('users.show', Auth::id()) }}" id="navbarDropdown"
               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" height="40px" width="40px"
                   style="border-radius: 50%;background-color: transparent;box-shadow:0px 0px 8px 5px #ccc;" alt="头像">
              {{ Auth::user()->name }}
            </a>

            <div class="lg-other-header-menu dropdown-menu text-center" aria-labelledby="navbarDropdown">
              {{--                            @can('manage_contents')--}}
              <a class="dropdown-item" href="{{ route('root') }}">
                前台首页
              </a>
              <div class="dropdown-divider"></div>
              {{--                            @endcan--}}
              <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">
                个人中心
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="">
                我的钱袋
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">
                编辑资料
              </a>
              <div class="dropdown-divider"></div>
              <a href="javascript:void(0);" class="btn btn-danger btn-lg active btn-del-login" role="button"
                 aria-pressed="true" style="width: 100%;"><h5>退出</h5></a>
            </div>
          </li>
        @endguest
      </ul>

    </div>
  </nav>
  <div class="admin-info text-center" style="width: 100%;">
    <table class="table table-striped table-hover table-dark">
      <tbody>
      <tr>
        <th><h5>用户与权限</h5></th>
        <td><a href="">👤 用户 </a>  <a href="">👤管理员</a></td>
        <td><a href="">🔐权限管理 </a> &nbsp;<a href=""> 🔏角色管理</a></td>
        <td><a href="">💻 站点配置</a></td>
      </tr>
      <tr>
        <th><h5>分类管理</h5></th>
        <td><a href="">所有分类</a></td>
        <td><a href="">一级分类</a></td>
        <td><a href="">二级分类</a></td>
      </tr>
      <tr>
        <th><h5>财务管理</h5></th>
        <td><a href="">🌺点赞 </a> <a href=""> 💰打赏 </a> <a href=""> 🎁礼赞</a></td>
        <td><a href="">📚人物经历 </a> <a href=""> 💐灵魂展览馆</a></td>
        <td><a href="">📡收入明细 </a> <a href=""> 📖支出明细</a></td>
      </tr>
      <tr>
        <th><h5>内容管理</h5></th>
        <td><a href="">📜 帖子管理</a></td>
        <td><a href="">💬 回复管理 </a> &nbsp; <a href=""> 🔔私信管理</a></td>
        <td><a href="">🌁 图片管理</a></td>
      </tr>
      <tr>
        <th><h5>运营管理</h5></th>
        <td><a href="">系统统计</a></td>
        <td><a href="">系统管理</a></td>
        <td><a href=""></a></td>
      </tr>
      </tbody>
    </table>





    {{--      <ul class="float-left mt-3">--}}
    {{--        <li><h5>用户与权限</h5></li>--}}
    {{--        <li><a href="">用户</a></li>--}}
    {{--        <li><a href="">权限</a></li>--}}
    {{--        <li><a href="">角色</a></li>--}}
    {{--      </ul>--}}

    {{--      <ul class="float-left mt-3">--}}
    {{--        <li><h5>分类管理</h5></li>--}}
    {{--        <li><a href="">一级分类</a></li>--}}
    {{--        <li><a href="">二级分类</a></li>--}}
    {{--      </ul>--}}

    {{--      <ul class="float-left mt-3">--}}
    {{--        <li><h5>文章管理</h5></li>--}}
    {{--        <li><a href="">帖子</a></li>--}}
    {{--        <li><a href="">回复</a></li>--}}
    {{--        <li><a href="">图片</a></li>--}}
    {{--      </ul>--}}


  </div>
</header>
