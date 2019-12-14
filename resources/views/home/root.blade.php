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
    {{-- 引入 vue 组件 公告 --}}
    <notice></notice>
    {{-- 清除浮动 --}}
    <div class="clear"></div>
    {{-- 电脑主页轮播图 --}}
    @include('layouts._lg_carousel')
    <br>
  </header>
@endsection
