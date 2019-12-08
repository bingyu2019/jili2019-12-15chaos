@extends('layouts.app')
@section('title',Auth::user()->name.'编辑支出记录')
@section('content')
  @include('admin.layouts._header')

  <div style="background: #F0F0F0;white:100%;">
    <div class="card mx-auto col-md-8">
      <div class="card-header mt-2">
        <h4>编辑支出记录</h4>
      </div>
      <div class="card-body">
        <form action="" method="POST"
              accept-charset="UTF-8"
              enctype="multipart/form-data">

          @include('shared._error')
          <div class="form-group">
            <label for="name-field">支出项（元）</label>
            <input class="form-control" type="text" name="name" id="name-field"
                   value=""/>
          </div>
          <div class="form-group">
            <label for="name-field">缴税（元）</label>
            <input class="form-control" type="text" name="name" id="name-field"
                   value=""/>
          </div>
          <div class="form-group">
            <label for="email-field">共计（元）</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value=""/>
          </div>
          <div class="form-group">
            <label for="email-field">日期</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value=""/>
          </div>
          <div class="form-group">
            <label for="introduction-field">操作</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value=""/>
          </div>
          <div class="well well-sm">
            <button type="submit" class="btn btn-block btn-primary"><h5 class="pt-1">保存</h5></button>
          </div>
        </form>
      </div>
    </div>
    <br><br><br>
  </div>
@endsection

