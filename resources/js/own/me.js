// 退出登录确认按钮 ===========================//
$(document).ready(function () {
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

// 发布新帖，编辑器 JS ===========================//

