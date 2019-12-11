@extends('layouts.app')
@section('title', $user->name .' 的个人中心')
@section('content')
  {{--===========================  电脑版 ==================================--}}
  @include('layouts._xs_header')
  <div class="d-block d-sm-none"><br><br><br></div>
  {{-- 电脑-顶部总导航 --}}
  @include('layouts._lg_other_header')
  @include('shared._messages')

  {{-- 设计全页个人中心 --}}
  <div class="col-md-12 float-left ">
    <div class="header-color col-md-3 float-left pl-3 pt-2" style="height: 90px;">
      <h4><b>❂ jili20.com</b></h4>
      <h5 class="text-center font-hover">第 {{ $user->id }} 号 用户</h5>
    </div>
    <div class="col-md-9 float-left">
      <div class="header-color" style="height: 90px;">
        <h2 class="text-center pt-4 text-light"><b>{{ $user->name }}</b></h2>
      </div>
    </div>
    <div class="float-left three-color" style="width: 98.8%;">
      <div class="col-md-3 float-left p-3">
        <a href=""><img class="img-fluid rounded emergence-avatar" src="{{ $user->avatar }}"
                        alt="{{ $user->name}}" style="height: 250px;"></a>
        {{--         关注按钮--}}
        @include('users._follow_form')
        {{--         私信--}}
        @include('users._private_letter')
      </div>
      <div class="col-md-9 float-left p-3 pl-5">
        {{--         关注-粉丝-统计--}}
        @include('shared._statistics')
        <div class="mt-3">
          <h5 class="hover-ccc">❂ 个人简介</h5>
          <p class="hover-ccc pr-2 pb-1 p">{{ $user->introduction }}</p>
          <h5 class="hover-ccc">❂ 用户组</h5>
          <p class="p"><span class="grade-box login">Founder</span>
            <span class="grade-box login">开发者</span>
            <span class="grade-box login">管理员</span>
            <span class="grade-box login">管理员</span>
            <span class="grade-box login">管理员</span>
            <span class="grade-box login">管理员</span>
            <span class="grade-box login">管理员</span>
            <span class="grade-box login">小学生</span></p>
          <h5 class="hover-ccc">❂ 注册于</h5>
          <p class="hover-ccc p">{{ $user->created_at->diffForHumans() }}{{ $user->created_at }}</p>
          <h5 class="hover-ccc">❂ 最后活跃时间</h5>
          <p class="hover-ccc p">2019-10-29 13：36：56</p>
          <div class="total">
            <h4>👀 <small>893759</small></h4>
            <h4 class="ml-4">💬 <small>893759</small></h4>
            <h4 class="ml-4">🤍 <small>893759</small></h4>
            <h4 class="ml-4">🌺 <small>893759</small></h4>
            <h4 class="ml-4">💰 <small>8937598089</small></h4>
            <h4 class="ml-4">🎁 <small>89375980</small></h4>
          </div>
          <div class="clear"></div>
          <div style="border: solid 0.5px black;width: 100%;"></div>
        </div>
      </div>
      <div class="float-left rounded" style="width: 100%;">
        {{--         选项卡内容--}}
        <div class="container">
          <br>
          <ul class="nav nav-tabs change-title" role="tablist">
            <li class="nav-item">
              <a class="nav-link active text-dark" data-toggle="tab" href="#all-status">关注人动态</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#topics">我的发布</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#replies">我的回复</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#experience">我的经历</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#favorite">我的收藏</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#followings">我的关注</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#fans">我的粉丝</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#flowers">我的红花 </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#i">我的赏银</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#j">我的礼物 </a>
            </li>
          </ul>
          <div class="tab-content">
            {{--关注动态--}}
            <div id="all-status" class="container tab-pane active"><br>
              @include('topics._topic_list')
              @include('topics._topic_list')

            </div>
            {{--我的帖子--}}
            <div id="topics" class="container tab-pane fade"><br>
              @include('topics._topic_list')
              @include('topics._topic_list')

            </div>
            {{--我的回复--}}
            <div id="replies" class="container tab-pane fade"><br>
              @include('users._replies')
              @include('users._replies')

            </div>
            {{--我的经历--}}
            <div id="experience" class="container tab-pane fade"><br>
              @include('topics._topic_list')
            </div>
            {{--我的收藏--}}
            <div id="favorite" class="container tab-pane fade"><br>
              @include('users._favorite')
              @include('topics._topic_list')
            </div>
            {{--我的关注--}}
            <div id="followings" class="container tab-pane fade"><br>
              @include('users._followings')
              @include('users._followings')
            </div>
            {{--我的粉丝--}}
            <div id="fans" class="container tab-pane fade"><br>
              @include('users._followers')
              @include('users._followers')
            </div>
            {{--我的红花--}}
            <div id="flowers" class="container tab-pane fade"><br>
              @include('users._flowers')
            </div>
            {{--我的金币--}}
            <div id="i" class="container tab-pane fade"><br>
              @include('users._coin')
            </div>
            {{--我的礼物--}}
            <div id="j" class="container tab-pane fade"><br>
              @include('users._gift')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

