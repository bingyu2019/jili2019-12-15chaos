@extends('layouts.app')
@section('title', $user->name .'发送私信')
@section('content')
  @include('layouts._lg_other_header')
  @include('layouts._xs_header')
  <div class="xs-hindd-block d-sm-none"><br><br><br></div>

  <div class="topic-create" style="width: 100%;height: 600px;">
    <div class="header-color mx-auto d-none d-sm-block" style="height: 55px;width:64.5%;">

      <h3 class="text-center text-light pt-3">📩 发送私信 </h3>
    </div>
    <div class="header-color mx-auto mb-0 xs-hindd-block d-sm-none" style="height: 70px;width: 92%;">
      <h4 class="text-center text-light pt-3">📩 发送私信 </h4>
    </div>
    <div class="col-md-8 mx-auto">
      <div class="border-radius text-container  float-left mt-4">
        <br>
        <h5 class="reply-container p-3">
          <b class="i">ℹ</b> 请勿发送违法违规的内容，也请勿回复此类私信。私信侵扰不礼貌，请慎重发送。
        </h5>
        <div class="row mt-2">
          <h5 class="pl-5 pt-4">私信给 </h5>
          <img src="https://cdn.learnku.com/uploads/avatars/27828_1572963233.png!/both/400x400"
               class="round-avatar float-left m-2 mt-3">
          <b class="pt-4"> Smoker</b>
        </div>
        <div class="reply-container mt-4">
          <textarea name="" id="" class="form-control"
                    rows="6"></textarea>
        </div>
        <a href="#"><h2 class="float-left m-3 ml-4">😶</h2></a>
        <a href="#"><h2 class="float-left mt-3">🌁</h2></a>
        <button type="submit" class="btn btn-danger float-right m-3" id="editor"> &nbsp;➹ 发送 &nbsp;</button>
      </div>
    </div>
  </div>

@endsection
