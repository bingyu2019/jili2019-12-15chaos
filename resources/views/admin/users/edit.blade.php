@extends('layouts.app')
@section('title','编辑用户')
@section('content')
  @include('admin.layouts._header')
  <div class="col-md-12" style="background: #F0F0F0;">
    <div class="container">
      <div class="card col-md-10 mx-auto pt-2">
        <div class="card-header">
          <h4>编辑用户</h4>
        </div>
        <div class="card-body">
          <form action="" method="POST"
                accept-charset="UTF-8"
                enctype="multipart/form-data">

            @include('shared._error')
            <div class="form-group">
              <label for="name-field">用户名</label>
              <input class="form-control" type="text" name="name" id="name-field"
                     value=""/>
            </div>
            <br>
            <div class="form-group">
              <label for="email-field">邮箱</label>
              <input class="form-control" type="text" name="email" id="email-field"
                     value=""/>
            </div>
            <br>
            <div class="form-group">
              <label for="password-field">密码</label>
              <input class="form-control" type="text" name="password" id="password-field"
                     value=" "/>
            </div>
            <br>
            <div class="form-group">
              <label for="password_confirmation-field">确认密码</label>
              <input class="form-control" type="text" name="password_confirmation" id="password_confirmation-field"
                     value=" "/>
            </div>
            <br>
            <div class="form-group">
              <label for="phone-field">支付宝账号</label>
              <input class="form-control" type="text" name="phone" id="phone-field"
                     value="{{ old('phone', $user->phone) }}"/>
            </div>
            <br>
            <div class="form-group">
              <label for="phone-field">支付宝账号实名</label>
              <input class="form-control" type="text" name="phone" id="phone-field"
                     value=" "/>
            </div>
            <br>
            <br>
            <div class="form-group">
              <label for="Role-field">用户组: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="checkbox" class="form-check-input" value="1" checked>小学生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="2"> 初中生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="3"> 高中生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="4"> 大学生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="5"> 学士&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="6"> 硕士&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="7"> 博士&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="8"> 博士后&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <hr>
            <div class="form-group">
              <label for="status-field">状态: &nbsp;</label>
              <input type="radio" name="status" value="1"/> 正常&nbsp;&nbsp;
              <input type="radio" name="status" value="0"/> 禁言&nbsp;&nbsp;
              <input type="radio" name="status" value="-1"/> 隐藏
            </div>
            <hr>
            <div class="form-group">
              <label for="introduction-field">个人简介</label>
              <textarea name="introduction" id="introduction-field" class="form-control"
                        rows="3"></textarea>
            </div>
            <div class="form-group mb-4">
              <label for="" class="avatar-label">用户头像</label>
              <input type="file" name="avatar" class="form-control-file" onchange="showPreview(this)">

              <br>
              <img src="" id="portrait" class="img-fluid thumbnail img-responsive" width="200">

            </div>
            <div class="well well-sm">
              <button type="submit" class="btn btn-block btn-primary"><h5 class="pt-1">保 存</h5></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <br><br><br>
  </div>

@endsection


<script>
  function showPreview(source) {
    var file = source.files[0];
    if (window.FileReader) {
      var fr = new FileReader();
      console.log(fr);
      var portrait = document.getElementById('portrait');
      fr.onloadend = function (e) {
        portrait.src = e.target.result;
      };
      fr.readAsDataURL(file);
      portrait.style.display = 'block';
    }
  }
</script>
