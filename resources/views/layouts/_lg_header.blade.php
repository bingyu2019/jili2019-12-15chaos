{{-- 电脑版主页 logo --}}
<div class="logo d-none d-sm-block">
    <div class="logo-body col-md-3 float-left"></div>
    <div class="logo-container col-md-3 float-left" value=""><a class="" href="{{ route('root') }}"><img
                class="logo-img img-fluid float-right ml-5 mt-3" src="/images/md/logo.jpg" alt=""></a></div>
    <div class="logo-body col-md-3  float-left mt-2 pl-1">
        <br>
        <a class="logo-text" href="{{ route('experience') }}"><p>让每一个人都能够在网络上搜索到自己！</p></a>
        <a class="logo-text" href="{{ route('art') }}"><p>让有才华的您得到更多的奖赏！</p></a>
        <a class="logo-text" href="{{ route('heaven') }}"><p>让离去的人从此不再孤单！</p></a>
    </div>
    <div class="logo-body col-md-3  float-left"></div>
</div>


{{-- 电脑注册登录---}}
<div class="d-none d-sm-block">
    <div class="register-box col-md-8 float-left"></div>
    <div class="register-box col-md-4 float-left">
        <ul class="navbar navbar-expand-lg pt-0">
            {{-- 头像 --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <img src="/images/md/face.jpg" class="register-avatar img-responsive img-circle" width="28px" height="28px " style="border-radius: 50%;background-color: transparent;box-shadow:0px 0px 8px 5px #ccc; " ;>
                </a>
                <div class="dropdown-menu register-dropdown-menu" aria-labelledby="navbarDropdown">
                    <a href="" class="dropdown-item">
                        <i class="fas fa-tachometer-alt mr-2"></i>
                        管理后台
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('users.show') }}">
                        <i class="far fa-user mr-2"></i>
                        个人中心
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item btn-favor" href="">
                        <i class="far fa-user mr-2"></i>
                        我的收藏
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="">
                        <i class="far fa-edit mr-2"></i>
                        编辑资料
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" id="logout" href="#">
                        <form action="" method="POST" onsubmit="return confirm('您确定要退出吗？');">
                            <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                        </form>
                    </a>
                </div>
            </li>
            {{-- 手机注册登录 --}}
            <li class=""><a href=""><img src="/images/md/register-phone.png" alt=""></a></li>
            {{-- 微信登录 --}}
            <li class=""><a href=""><img src="/images/md/register-weixin.png" alt=""></a></li>
            {{-- 个人中心 --}}
            <li class=""><a href=""><img src="/images/md/register-my.png" alt=""></a></li>
            {{-- 购物车 --}}
            <li class=""><a href=""><img src="/images/md/register-car.png" alt=""></a></li>
        </ul>
    </div>
</div>

