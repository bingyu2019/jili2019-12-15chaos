@extends('layouts.app')
@section('title','编辑资料')
@section('content')

  @include('admin._header')

  <div class="col-md-12" style="background: #F0F0F0;">
    <div class="container">
      <div class="card col-md-10 mx-auto pt-2">
        <div class="card-header">
          <h4>编辑个人资料</h4>
        </div>
        <div class="card-body">
          <form action="" method="POST"
                accept-charset="UTF-8"
                enctype="multipart/form-data">
            @method('PUT')
            @csrf

            @include('shared._error')

            <div class="form-group">
              <label for="name-field">用户名</label>
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
              <label for="password-field">确认密码</label>
              <input class="form-control" type="text" name="password" id="password-field"
                     value="{{ old('password', $user->password) }}"/>
            </div>
            <div class="form-group">
              <label for="password-field">用户组</label>
              <input class="form-control" type="text" name="password" id="password-field"
                     value="{{ old('password', $user->password) }}"/>
            </div>
            <div class="form-group mt-2">
              <label for="sex-field">性别 &nbsp;</label>
              <input type="radio" name="sex" value="1"/> 男&nbsp;&nbsp;
              <input type="radio" name="sex" value="0"/> 女
            </div>
            <div class="form-group">
              <label for="status-field">状态 &nbsp;</label>
              <input type="radio" name="status" value="1"/> 正常&nbsp;&nbsp;
              <input type="radio" name="status" value="0"/> 隐藏&nbsp;&nbsp;
              <input type="radio" name="status" value="-1"/> 删除
            </div>

            <div class="form-group">
              <label for="introduction-field">个人简介</label>
              <textarea name="introduction" id="introduction-field" class="form-control"
                        rows="3">{{ old('introduction', $user->introduction) }}</textarea>
            </div>

            <div class="form-group mb-4">
              <label for="" class="avatar-label">用户头像</label>
              <input type="file" name="avatar" class="form-control-file" onchange="showPreview(this)">

              @if($user->avatar)
                <br>
                <img src="{{ $user->avatar }}" id="portrait" class="img-fluid thumbnail img-responsive" width="200"
                     style="display:none;">
              @endif
            </div>


            <div class="well well-sm">
              <button type="submit" class="btn btn-block btn-primary"><h5 class="pt-1">保存</h5></button>
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
