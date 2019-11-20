{{-- 头像 --}}
<div class="dropdown float-right pr-3 pt-0 d-none d-sm-block">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
       data-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false">
        <img class="" src="/images/avatar/face100px.jpg"
             class="register-avatar img-responsive img-circle"
             width="40px"
             style="border-radius: 50%;background-color: transparent;box-shadow:0px 0px 8px 5px #ccc;" alt="头像"> </a>
    <div class="dropdown-menu register-dropdown-menu" aria-labelledby="navbarDropdown"
         style=" background: linear-gradient(red, blue);">
        <a href="{{ route('topics.show') }}" class="dropdown-item">
            <i class="fas fa-tachometer-alt mr-2"></i>
            帖子入口
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('users.show') }}">
            <i class="far fa-user mr-2"></i>
            个人中心
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item btn-favor" href="">
            <i class="far fa-user mr-2"></i>
            我的收益
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="">
            <i class="far fa-edit mr-2"></i>
            编辑资料
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" id="logout" href="#">
            <form action="" method="POST" onsubmit="return confirm('您确定要退出吗？');">
                <button class="btn btn-block btn-danger" type="submit" name="button">退出
                </button>
            </form>
        </a>
    </div>
</div>
