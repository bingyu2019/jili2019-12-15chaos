@extends('layouts.app')
@section('title','管理后台')

@section('content')
@include('admin._header')


@endsection




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
