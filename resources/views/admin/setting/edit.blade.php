@extends('layouts.app')
@section('title','站点设置')
@section('content')
  @include('admin.layouts._header')

  <div style="background: #F0F0F0;white:100%;">
    <div class="card col-md-8 mx-auto">
      <div class="card-header text-center mt-2">
        <h3>站点设置</h3>
      </div>
      <div class="card-body">
        <div>
          <h5 class="float-left">站点名称：</h5>
          <p class="float-right">17 剩余字符串</p>
          <input class="form-control" type="text" name="name" id="name-field"
                 value="灵魂深触-经历网"/>
        </div>
        <br>
        <br>
        <div>
          <h5 class="float-left">联系人邮箱：</h5>
          <p class="float-right">35 剩余字符串</p>
          <input class="form-control" type="text" name="name" id="name-field"
                 value="Bing@jili20.com"/>
        </div>
        <br>
        <br>
        <div>
          <h5 class="float-left">SEO-Description：</h5>
          <p class="float-right">222 剩余字符串</p>
          <input class="form-control" type="text" name="name" id="name-field"
                 value="供所有人书写经历发表作品分享生活"/>
        </div>
        <br>
        <br>
        <div>
          <h5 class="float-left">SEO-Keyword：</h5>
          <p class="float-right">222 剩余字符串</p>
          <input class="form-control" type="text" name="name" id="name-field"
                 value="论坛 社区 文学艺术社区"/>
        </div>
        <br>
        <br>
        <div class="well well-sm">
          <button type="submit" class="btn btn-block btn-primary"><h5 class="pt-1">保存</h5></button>
        </div>

      </div>
    </div>
    <br>
    <br>
  </div>
@endsection




















