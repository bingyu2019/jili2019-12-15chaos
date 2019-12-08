@extends('layouts.app')
@section('title','平台支出明细记录')
@section('content')
  @include('admin.layouts._header')


  <div class="card col-md-12 pt-1">
    <div class="card-header" style="border-radius: 5px; border: solid 3px #E7E6ED;border-bottom: none;">
      <h3 class="text-center pb-4 pt-2">平台支出明细记录</h3>
      <a href="{{ route('admin.finance.paymentsCreate') }}" class="btn btn-success float-right mr-5" role="button" aria-pressed="true" style="width: 130px;">新建支出记录</a>
      <form class="form-inline my-2 my-lg-0 float-right mr-5">
        <input class="form-control mr-sm-2" type="date" placeholder="" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">筛选</button>
      </form>
      <form class="form-inline my-2 my-lg-0 float-right mr-5">
        <input class="form-control mr-sm-2" type="search" placeholder="种类" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">筛选</button>
      </form>
      <form class="form-inline my-2 my-lg-0 float-right mr-5">
        <input class="form-control mr-sm-2" type="search" placeholder="ID" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">筛选</button>
      </form>
    </div>

    <table class="table table-striped table-bordered mt-2 card-header">
      <thead>
      <tr>
        <th scope="col">
          <button type="button" class="btn btn-danger float-left" style="width: 120px;">禁止删除</button>
        </th>
        <th scope="col"><h5>总数: 1000000 </h5></th>
        <th scope="col"><a href="" class="btn btn-outline-secondary">上一页</a> <a href=""
                                                                                class="btn btn-outline-secondary">下一页</a>
          &nbsp;
          <input type="text" class="pb-1 text-center"
                 style="width: 80px;height: 36px;border-radius: 5px;font-size: 18px;"> / 1
        </th>
        <th scope="col" class="float-right" style="font-size: 18px;">
          <a href="" class="btn btn-outline-secondary pb-1">刷新</a>
          <input type="number" class="text-center pb-1"
                 style="width: 80px;height: 36px;border-radius: 5px;font-size: 18px;"> 条目每页
        </th>
      </tr>
      </thead>
    </table>

    <form action="">
      <table class="table table-bordered table-hover mt-2 admin-all-index">
        <thead>
        <tr class="card-header" style="font-size: 16px;">
          <th scope="col">ID</th>
          <th scope="col">支出项（元）</th>
          <th scope="col">缴税（元）</th>
          <th scope="col">共计（元）</th>
          <th scope="col" style="width: 180px;">日期</th>
          <th scope="col">操作</th>
          <th scope="col">管理</th>
        </tr>
        </thead>
        <tbody>
        <tr class="pb-2">
          <td>1</td>
          <td>租用服务器5年 769897 元</td>
          <td>98798</td>
          <td>987970 元</td>
          <td>2019-12-08 12:12:12</td>
          <td>Bing</td>
          <td><a href="{{ route('admin.finance.paymentsEdit') }}" class="btn btn-success btn-sm">编辑</a>
          </td>
        </tr>
        </tbody>
      </table>
      <br>
    </form>
  </div>
@endsection

