@extends('layouts.app')
@section('title',Auth::user()->name.'编辑用户收益')
@section('content')
  @include('admin.layouts._header')
  <div style="background: #F0F0F0;white:100%;">
    <div class="card mx-auto col-md-8">
      <div class="card-header mt-2">
        <h4>编辑用户收益</h4>
      </div>
      <div class="card-body">
        <form action="" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          @include('shared._error')
          <div class="form-group">
            <label for="name-field">用户名</label>
            <input class="form-control" type="text" name="name" id="name-field"
                   value="" disabled/>
          </div>
          <div class="form-group">
            <label for="email-field">支付宝账号</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value="" disabled/>
          </div>
          <div class="form-group">
            <label for="email-field">支付宝账号姓名</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value=""  disabled/>
          </div>
          <div class="form-group">
            <label for="email-field">累计收益</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value="" disabled/>
          </div>
          <div class="form-group">
            <label for="email-field">当月收益</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value="" disabled/>
          </div>
          <div class="form-group">
            <label for="email-field">总余额</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value="" disabled/>
          </div>
          <br>
          <div class="form-group">
            <label for="status-field">上月收益: &nbsp;</label>
            {{--上月收益未发放显示金额，已发放显示已发放--}}
            <input type="radio" name="status" value="1" checked/> 768997 元&nbsp;&nbsp;
            <input type="radio" name="status" value="0"/> 已发放&nbsp;&nbsp;
          </div>
          <div class="form-group">
            <label for="introduction-field">操作者</label>
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

