@extends('layouts.app')
@section('title',Auth::user()->name.'管理权限')
@section('content')
  @include('admin.layouts._header')
  <div class="container">
    <div class="col-md-8 offset-md-2">

      <div class="card" style="background: linear-gradient(to top, #7C3A08,#EB9A02);">
        <div class="card-header">
          <h4>
            <i class="glyphicon glyphicon-edit"></i> 新增或修改权限
          </h4>
        </div>

        <div class="card-body">

          <form action="" method="POST"
                accept-charset="UTF-8"
                enctype="multipart/form-data">
            @method('PUT')
            @csrf

            @include('shared._error')

            <div class="form-group">
              <label for="name-field">权限</label>
              <input class="form-control" type="text" name="name" id="name-field"
                     value=""/>
            </div>

            <div class="form-group">
              <label for="email-field">角色</label>
              <input class="form-control" type="text" name="email" id="email-field"
                     value=""/>
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
              <button type="submit" class="btn btn-secondary"
                      style="background: linear-gradient(to top, #7C3A08,#EB9A02);"><h5 class="pt-1">保存</h5></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <br><br><br>
  </div>

@endsection

