 {{-- 电脑版主页 logo --}}
  <div class="logo d-none d-sm-block">
    <div class="img-box" value="" style="width: 55%;"><a class="" href="{{ route('root') }}"><img class="logo-img img-fluid float-right ml-5 mt-3" src="/images/logo/logo.jpg" alt="灵魂深触-经历网"></a>
    </div>
    <div class="text-box pl-2 relative">
      <a class="logo-text" href="{{ route('experience') }}"><p>让每一个人都能够在网络上搜索到自己！</p></a>
      <a class="logo-text" href="{{ route('art') }}"><p>让有才华的您得到更多的奖赏！</p></a>
      <a class="logo-text" href="{{ route('heaven') }}"><p>让离去的人从此不再孤单！</p></a>
    </div>
    {{-- 电脑注册登录---}}
    <div class="register-box pt-1" style="width: 21%;">
      <br>
      <ul class="row">
        @guest
          {{-- 登录 --}}
          <li><a href="{{ route('login') }}"><h5>登录</h5></a></li>
          {{-- 注册 --}}
          <li><a href="{{ route('register') }}"><h5>注册</h5></a></li>
        @else
          {{-- 头像 --}}
          <a href="{{ route('topics.create') }}" class="top-ten"><h3>+</h3></a>
          <li class="nav-item notification-badge root-note">
            <h3><a
                class="top-notice nav-link badge badge-pill badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'secondary' }} text-white"
                href="{{ route('notifications') }}">1
                {{--                            {{ Auth::user()->notification_count }}--}}
              </a></h3>
          </li>
          <li class="nav-item dropdown lg-header-avatar top-avatar">
            <a class="nav-link dropdown-toggle" href="{{ route('users.show', Auth::id()) }}" id="navbarDropdown"
               role="button"
               data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
              <img class="emergence-avatar " src="{{ Auth::user()->avatar }}"
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

