<nav class="navbar fixed-top navbar-dark bg-dark">
    <div class="container">
        <!-- Branding Image -->
        <a class="navbar-brand " href="{{ url('/') }}"><img src="/images/header1.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li class="nav-item"><a class="nav-link" href="#"><img src="images/header3.png" alt="">登录</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><img src="/images/header2.png" alt="">注册</a></li>
                {{-- 头像 --}}
                <li class="nav-item dropdown ml-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <img src="images/face.jpg" class="img-responsive img-circle" width="30px" height="30px " style="border-radius: 50%;background-color: transparent;box-shadow:0px 0px 8px 5px #ccc; " ; >
                    </a>
                    <div class="open-menu dropdown-menu rounded" aria-labelledby="navbarDropdown">
                            <a href="" class="dropdown-item">
                                <i class="fas fa-tachometer-alt mr-2"></i>
                                管理后台
                            </a>
                            <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="">
                            <i class="far fa-user mr-2"></i>
                            个人中心
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item btn-favor" href="">购物车</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item btn-favor" href="">
                            ❤　我的收藏
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="">
                            <i class="far fa-edit mr-2"></i>
                            编辑资料
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" id="logout" href="#">
                            <form action="" method="POST" onsubmit="return confirm('您确定要退出吗？');">
                                <button class="btn btn-block btn-danger" type="submit" name="button">退   出</button>
                            </form>
                        </a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>


