@extends('layouts.app')
@section('title',Auth::user()->name.'编辑经历')
@section('content')
  @include('admin.layouts._header')
  <div style="background: #F0F0F0;white:100%;">
    <div class="card mx-auto col-md-8">
      <div class="card-header mt-2">
        <h4>
          编辑经历
        </h4>
      </div>
      <div class="card-body">
        <form action="" method="POST"
              accept-charset="UTF-8"
              enctype="multipart/form-data">
          @include('shared._error')
          <div class="form-group">
            <label for="name-field">ID</label>
            <input class="form-control" type="text" name="name" id="name-field"
                   value="1" disabled/>
          </div>
          <br>
          <div class="form-group">
            <label for="name-field">经历主人</label>
            <input class="form-control" type="text" name="name" id="name-field"
                   value="了不起的比尔盖茨" disabled/>
          </div>
          <br>
          <div class="form-group">
            <label for="email-field">创建者账号</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value="13761719602" disabled/>
          </div>
          <br>
          <div class="form-group">
            <label for="introduction-field">账号姓名</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value="王汝冰" disabled/>
          </div>
          <br>
          <div class="form-group">
            <label for="introduction-field">总查看人数</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value="8888" disabled/>
          </div>
          <br>
          <div class="form-group">
            <label for="introduction-field">查看须支付版税 / 人 / 年</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value="2.00 元" disabled/>
          </div>
          <br>
          <div class="form-group">
            <label for="introduction-field">当月收益</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value="200 元" disabled/>
          </div>
          <br>
          <div class="form-group">
            <label for="introduction-field">累计收益</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value="17，776 元" disabled/>
          </div>
          <br>
          <div class="form-group">
            <label for="status-field">上月收益: &nbsp;</label>
            <input type="radio" name="status" value="1"/> 已发放&nbsp;&nbsp;
            <input type="radio" name="status" value="0" checked/> 未发放&nbsp;&nbsp;
            <input type="radio" name="status" value="-1"/> 冻结
          </div>
          <br>
          <div class="form-group">
            <label for="introduction-field">当月之前余额</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value="0 元"/>
          </div>
          <br>
          <div class="well well-sm">
            <button type="submit" class="btn btn-block btn-primary"><h5 class="pt-1">保存</h5></button>
          </div>
        </form>
      </div>
    </div>
    <br><br><br>
  </div>
@endsection

