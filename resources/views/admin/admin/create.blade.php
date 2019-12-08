@extends('layouts.app')
@section('title','新建管理员')
@section('content')

  @include('admin.layouts._header')

  <div class="col-md-12" style="background: #F0F0F0;">
    <div class="container">
      <div class="card col-md-10 mx-auto pt-2">
        <div class="card-header">
          <h4>新建管理员</h4>
        </div>
        <div class="card-body">
          <form action="" method="POST"
                accept-charset="UTF-8"
                enctype="multipart/form-data">
            @method('PUT')
            @csrf

            @include('shared._error')

            <div class="form-group">
              <label for="name-field">管理员</label>
              <input class="form-control" type="text" name="name" id="name-field"
                     value="{{ old('name', $user->name) }}"/>
            </div>
            <div class="form-group">
              <label for="email-field">邮箱</label>
              <input class="form-control" type="text" name="email" id="email-field"
                     value="{{ old('email', $user->email) }}"/>
            </div>
            <div class="form-group">
              <label for="phone-field">电话</label>
              <input class="form-control" type="text" name="phone" id="phone-field"
                     value="{{ old('phone', $user->phone) }}"/>
            </div>
            <div class="form-group">
              <label for="password-field">密码</label>
              <input class="form-control" type="text" name="password" id="password-field"
                     value="{{ old('password', $user->password) }}"/>
            </div>
            <div class="form-group">
              <label for="password_confirmation-field">确认密码</label>
              <input class="form-control" type="text" name="password_confirmation" id="password_confirmation-field"
                     value="{{ old('password', $user->password) }}"/>
            </div>
            <br>
            <div class="form-group">
              <label for="Role-field">角色: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              &nbsp;&nbsp;&nbsp;<input type="checkbox" class="form-check-input" value="11"> Founder&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="12"> 开发者&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="13"> 管理员&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="14"> 总编辑&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="15"> 编辑&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="16"> 版主&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="17"> 实习版主&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="18"> 运营&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="18"> 营销&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <hr>
            <div class="form-group">
              <label for="permission-field">权限: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="checkbox" class="form-check-input" value="1">站点设置&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="2"> 修改、删除、审核用户&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="3"> 修改、删除、审核帖子&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="4"> 财务管理&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="5"> 允许查看财务  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" class="form-check-input" value="6"> 允许前台修改、删除、审核贴子&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="6"> 系统管理 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" class="form-check-input" value="6"> 市场营销 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <hr>
            <div class="form-group">
              <label for="sex-field">性别: &nbsp;</label>
              <input type="radio" name="sex" value="1"/> 男&nbsp;&nbsp;
              <input type="radio" name="sex" value="0"/> 女
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
                        rows="3">{{ old('introduction', $user->introduction) }}</textarea>
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
