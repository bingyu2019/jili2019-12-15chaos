@extends('layouts.app')
@section('title','编辑资料')
@section('content')
  @include('layouts._xs_header')
  @include('layouts._lg_other_header')

  <div class="d-block d-sm-none"><br><br><br></div>
  <div class="header-color mx-auto mb-0 d-none d-sm-block" style="height: 80px;width: 64.5%;"></div>
  <div class="header-color mx-auto mb-0 xs-hindd-block d-sm-none" style="height: 70px;width: 94%;"></div>
  <div class="user-edit">
    <div class="col-md-8 offset-md-2">
        <div class="card text-container">
          <h2 class="card-header">
            <img src="/images/icon/pen.png" alt="">
            编辑个人资料
          </h2>

          <div class="card-body">

            <form action="{{ route('users.update', $user->id) }}" method="POST"
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
                <label for="email-field">邮 箱</label>
                <input class="form-control" type="text" name="email" id="email-field"
                       value="{{ old('email', $user->email) }}"/>
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
                <button type="submit" class="btn btn-dark pr-4 "><i class="far fa-save mr-2" aria-hidden="true"></i> 保存</button>
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

