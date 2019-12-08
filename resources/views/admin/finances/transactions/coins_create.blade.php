@extends('layouts.app')
@section('title',Auth::user()->name.'新建用户兑币')
@section('content')
  @include('admin.layouts._header')

  <div style="background: #F0F0F0;white:100%;">
    <div class="card mx-auto col-md-8">
      <div class="card-header mt-2">
        <h4>新建用户兑币</h4>
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
                   value=""/>
          </div>
          <div class="form-group">
            <label for="name-field">邮箱</label>
            <input class="form-control" type="text" name="name" id="name-field"
                   value=""/>
          </div>
          <div class="form-group">
            <label for="email-field">支付宝账号</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value=""/>
          </div>
          <div class="form-group">
            <label for="introduction-field">账号实名</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value=""/>
          </div>
          <div class="form-group">
            <label for="introduction-field">购买金币( 1 元 1 个 )</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value=""/>
          </div>
          <div class="form-group">
            <label for="introduction-field">购买银币( 0.1 元 1 个 )</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value="" f/>
          </div>
          <div class="form-group">
            <label for="introduction-field">共计</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value=""/>
          </div>
          <div class="form-group">
            <label for="introduction-field">服务费 10%</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value=""/>
          </div>
          <div class="form-group">
            <label for="introduction-field">实付金额</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value=""/>
          </div>
          <div class="form-group">
            <label for="status-field">状态: &nbsp;</label>
            <input type="radio" name="status" value="1"/> 交易成功&nbsp;&nbsp;
            <input type="radio" name="status" value="0" checked/> 待付款&nbsp;&nbsp;
          </div>
          <div class="form-group">
            <label for="introduction-field">操作</label>
            <input class="form-control" type="text" name="email" id="email-field"
                   value=""/>
          </div>
          <div class="well well-sm">
            <button type="submit" class="btn btn-block btn-primary"><h5 class="pt-1">确 定</h5></button>
          </div>
        </form>
      </div>
    </div>
    <br><br><br>
  </div>
@endsection

