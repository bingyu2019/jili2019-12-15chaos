@extends('layouts.app')
@section('title',Auth::user()->name.'新建系统收入统计')
@section('content')
  @include('admin.layouts._header')

  <div style="background: #F0F0F0;white:100%;">
    <div class="card mx-auto col-md-8">
      <div class="card-header mt-2">
        <h4>新建系统收入统计</h4>
      </div>
      <div class="card-body">
        <form action="" method="POST"
              accept-charset="UTF-8"
              enctype="multipart/form-data">
          @method('PUT')
          @csrf
          @include('shared._error')
          <div class="form-group">
            <label for="name-field">年份</label>
            <input class="form-control" type="text" name="name" id="name-field"
                   value=""/>
          </div>
          <div class="form-group">
            <label for="name-field">月份</label>
            <input class="form-control" type="text" name="name" id="name-field"
                   value=""/>
          </div>
          <div class="form-group">
            <label for="email-field">服务费（元）</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value=""/>
          </div>
          <div class="form-group">
            <label for="introduction-field">广告费（元）</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value=""/>
          </div>
          <div class="form-group">
            <label for="introduction-field">其它（元）</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value=""/>
          </div>
          <div class="form-group">
            <label for="introduction-field">共计（元）</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value="" f/>
          </div>
          <div class="form-group">
            <label for="status-field">状态: &nbsp;</label>
            <input type="radio" name="status" value="1"/> 正常&nbsp;&nbsp;
            <input type="radio" name="status" value="0" checked/> 异常&nbsp;&nbsp;
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

