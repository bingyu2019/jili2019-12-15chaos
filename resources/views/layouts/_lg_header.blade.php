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
                            <a class="nav-link dropdown-toggle" href="{{ route('users.show', Auth::id()) }}" id="navbarDropdown" role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <img src="{{ Auth::user()->avatar }}"
                                     width="40px" height="40px" alt="头像" style="border-radius: 50%;background-color: transparent;box-shadow:0px 0px 8px 5px #ccc; ">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu register-dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="{{ route('admin.index') }}" class="dropdown-item">
{{--                                    <i class="fas fa-tachometer-alt mr-2"></i>--}}
                                    <h5>🔴 管理后台</h5>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">
{{--                                    <i class="far fa-user mr-2"></i>--}}
                                    <h5>🔴 个人中心</h5>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item btn-favor" href="">
{{--                                    <i class="far fa-user mr-2"></i>--}}
                                    <h5>🔵 我的钱袋</h5>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">
{{--                                    <i class="far fa-edit mr-2"></i>--}}
                                    <h5>🔵 编辑资料</h5>
                                </a>
                                <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="btn btn-danger btn-lg active btn-del-login" role="button" aria-pressed="true" style="width: 100%;"><h5>退出</h5></a>
                            </div>
                        </li>

                    @endguest
                </ul>
            </div>

        </div>
    </div>
</div>



@section('script')
<script>

$(document).ready(function() {
// 退出登录确认按钮
  $('.btn-del-login').click(function() {
    swal({
        title: "您确认要退出吗？",
        icon: "warning",
        buttons: ['取消', '确定'],
        dangerMode: true,
      })
    .then(function(willDelete) { // 用户点击按钮后会触发这个回调函数
      if (!willDelete) {
        return;
      }
      axios.post(`{{ route('logout') }}`)
        .then(function () {
          location.reload();
        })
    });
  });

});
</script>
@endsection
