@extends('layouts.app')

@section('content')
  @include('layouts._xs_header')
  @include('layouts._lg_other_header')

  <div class="d-block d-sm-none"><br><br><br><br><br></div>

  <div class="container">
    <div class="col-md-8 offset-md-2">

      <div class="card" style="background: linear-gradient(to top, #7C3A08,#EB9A02);">
        <div class="card-header">
          <h4>
            <i class="glyphicon glyphicon-edit"></i> 编辑个人资料
          </h4>
        </div>

        <div class="card-body">

          <form action="{{ route('users.update', $user->id) }}" method="POST"
                accept-charset="UTF-8"
                enctype="multipart/form-data">

            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                <!-- <img src="{{ $user->avatar }}" id="portrait" class="img-fluid thumbnail img-responsive" width="250" -->
                 <img class="thumbnail img-responsive" src="{{ $user->avatar }}" id="portrait"  width="200" height="200px" style="display:none;" />

              @endif
            </div>


            <div class="well well-sm">
              <button type="submit" class="btn btn-secondary"
                      style="background: linear-gradient(to top, #7C3A08,#EB9A02);"><h5 class="pt-1">保存</h5></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('script')
  <script>
      function showPreview(source) {
          var file = source.files[0];
          if(window.FileReader) {
              var fr = new FileReader();
              console.log(fr);
              var portrait = document.getElementById('portrait');
              fr.onloadend = function(e) {
                  portrait.src = e.target.result;
              };
              fr.readAsDataURL(file);
              portrait.style.display = 'block';
          }
      }
  </script>
@endsection