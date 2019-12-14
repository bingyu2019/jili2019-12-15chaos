@extends('layouts.app')
@section('title','灵魂深触-经历网')
@section('content')
  <header>
    {{-- 电脑版 logo 注册登录 --}}
    @include('layouts._header')
    {{-- 清除浮动 --}}
    <div class="clear"></div>
    {{-- 消息提醒视图 --}}
    @include('shared._messages')


  </header>

@endsection
