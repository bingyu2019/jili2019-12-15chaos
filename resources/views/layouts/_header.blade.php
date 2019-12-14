{{-- 电脑版顶部登录注册 --}}
<div class="logo d-none d-sm-block mb-4">
  <div class="pt-3">
    <div class="img-box" style="width: 55%;">
      <a class="float-right" href="{{ route('root') }}"><img
          class="logo-img img-fluid" src="/images/logo/logo.jpg" alt="灵魂深触-经历网"></a>
    </div>
    <div class="text-box pt-3">
      <a class="" href="{{ route('experience') }}"><p>让每一个人都能够在网络上搜索到自己！</p></a>
      <a class="" href="{{ route('art') }}"><p>让有才华的您得到更多的奖赏！</p></a>
      <a class="" href="{{ route('heaven') }}"><p>让离去的人从此不再孤单！</p></a>
    </div>
    <div class="register-box" style="width: 23%;">
      <ul class="">
        @guest
          <li class=""><h5><a href="{{ route('login') }}">登录</a></h5></li>
          <li class=""><h5><a href="{{ route('register') }}">注册</a></h5></li>
        @else
          <a href="{{ route('topics.create') }}" class="top-ten"><h3><b>+</b></h3></a>
          <li class="nav-item notification-badge root-note">
            <h3><a class="top-notice nav-link badge badge-pill badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'secondary' }} text-white"
                href="{{ route('notifications') }}">1
                {{ Auth::user()->notification_count }}
              </a></h3>
          </li>
          <li class="nav-item dropdown top-avatar">
            <a class="nav-link dropdown-toggle" href="{{ route('users.show', Auth::id()) }}" id="navbarDropdown"
               role="button"
               data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
              <img class="emergence-avatar" src="{{ Auth::user()->avatar }}"
                   width="40px" height="40px" alt="头像"
                   style="border-radius: 50%;">
              {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu register-dropdown-menu" aria-labelledby="navbarDropdown">
              <a href="{{ route('system.statistics') }}" class="dropdown-item">
                <h5>🔴 管理后台</h5>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">
                <h5>🔴 个人中心</h5>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item btn-favor" href="{{ route('wallets.list') }}">
                <h5>🔵 我的钱袋</h5>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item btn-favor" href="{{ route('users.edit', Auth::id()) }}">
                <h5>🔵 编辑资料</h5>
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
</div>
{{-- 清除浮动 --}}
<div class="clear"></div>

@section('script')
  <script>
    $(document).ready(function () {
      // 退出登录确认按钮
      $('.btn-del-login').click(function () {
        swal({
          title: "您确认要退出吗？",
          icon: "warning",
          buttons: ['取消', '确定'],
          dangerMode: true,
        })
          .then(function (willDelete) { // 用户点击按钮后会触发这个回调函数
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
