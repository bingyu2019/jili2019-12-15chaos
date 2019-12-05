@extends('layouts.app')
@section('title',Auth::user()->name.'管理后台')
@section('content')
  @include('admin._header')
  <div class="card">
    <div class="card-header float-left" style="width: 100%;">
      <div class="float-left bg-white ml-5 mt-3" style="width:22%; border-radius:10px;">
        <h4 class="pt-4 pl-2">会员总数：</h4>
        <hr>
        <h1 class="text-info text-center mt-3 mb-3 p-1"> 99999999999 人</h1>
        <hr>
        <h5 class="ml-2 pt-2" style="border-bottom: solid 1px #ccc;">今日新增会员：100 人</h5>
        <h5 class="ml-2" style="border-bottom: solid 1px #ccc;">当月新增会员：1000 人</h5>
        <h5 class="ml-2" style="border-bottom: solid 1px #ccc;">今年新增会员：100000 人</h5>
        <br>
      </div>
      <div class="float-left bg-white ml-3 mt-3" style="width:22%; border-radius:10px;">
        <h4 class="pt-4 pl-2">文章总数：</h4>
        <hr>
        <h1 class="text-success text-center mt-3 mb-3 p-1"> 9999999999999 篇</h1>
        <hr>
        <h5 class="ml-2 pt-2" style="border-bottom: solid 1px #ccc;">今日新增文章：100 篇</h5>
        <h5 class="ml-2" style="border-bottom: solid 1px #ccc;">当月新增文章：1000 篇</h5>
        <h5 class="ml-2" style="border-bottom: solid 1px #ccc;">今年新增文章：100000 篇</h5>
        <br>
      </div>
      <div class="float-left bg-white ml-3 mt-3" style="width:22%; border-radius:10px;">
        <h4 class="pt-4 pl-2">总销售额：</h4>
        <hr>
        <h1 class="text-danger text-center mt-3 mb-3 p-1"> ￥ 999999999999 元</h1>
        <hr>
        <h5 class="ml-2 pt-2" style="border-bottom: solid 1px #ccc;">今日销售总额：￥ 100 元</h5>
        <h5 class="ml-2" style="border-bottom: solid 1px #ccc;">当月销售总额：￥ 1000 元</h5>
        <h5 class="ml-2" style="border-bottom: solid 1px #ccc;">今年销售总额：￥ 100000 元</h5>
        <br>
      </div>
      <div class="float-left bg-white ml-3 mt-3" style="width:22%; border-radius:10px;">
        <h4 class="pt-4 pl-2">总访问量：</h4>
        <hr>
        <h1 class="text-info text-center mt-3 mb-3 p-1"> 999999999999999 人</h1>
        <hr>
        <h5 class="ml-2 pt-2" style="border-bottom: solid 1px #ccc;">今日总访问量：100 人</h5>
        <h5 class="ml-2" style="border-bottom: solid 1px #ccc;">当月总访问量：1000 人</h5>
        <h5 class="ml-2" style="border-bottom: solid 1px #ccc;">今年总访问量：100000 人</h5>
        <br>
      </div>
    </div>
  </div>

  <div class="card col-md-12 pt-1">
    <div class="card-header" style="border-radius: 5px; border: solid 3px #E7E6ED;border-bottom: none;">
      <h3 class="text-center pb-4 pt-2">用 户 列 表</h3>
      <a href="{{ route('admin.create') }}" type="button" class="btn btn-success float-right mr-5" data-toggle="button" aria-pressed="false" autocomplete="off" style="width: 130px;">
        新建用户
      </a>
      <form class="form-inline my-2 my-lg-0 float-right mr-5">
        <input class="form-control mr-sm-2" type="search" placeholder="邮箱" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">筛选</button>
      </form>
      <form class="form-inline my-2 my-lg-0 float-right mr-5">
        <input class="form-control mr-sm-2" type="search" placeholder="用户名" aria-label="Search">
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
          <button type="button" class="btn btn-danger float-left" style="width: 120px;">批量删除</button>
        </th>
        <th scope="col"><h5>总数: 10 </h5></th>
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
      <table class="table table-bordered table-hover mt-2">
        <thead>
        <tr class="card-header" style="font-size: 18px;">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          </th>
          <th scope="col">ID</th>
          <th scope="col">头像</th>
          <th scope="col">用户名</th>
          <th scope="col">邮箱</th>
          <th scope="col">电话</th>
          <th scope="col">注册日期</th>
          <th scope="col">帖子</th>
          <th scope="col">回复</th>
          <th scope="col">点赞</th>
          <th scope="col">打赏</th>
          <th scope="col">礼赞</th>
          <th scope="col">钱袋</th>
          <th scope="col">状态</th>
          <th scope="col">管理</th>
        </tr>
        </thead>
        <tbody>
{{--        @foreach($users as $user)--}}
        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>1</td>
          <td><img src="/images/avatar/default-avatar.png" style="width: 40px;height: 40px;" alt="头像"></td>
{{--          <td><img src="{{ $user->avatar }}" style="width: 40px;height: 40px;" alt="头像"></td>--}}
{{--          <td>{{ $user->name }}</td>--}}
{{--          <td>{{ $user->email }}</td>--}}
{{--          <td>{{ $user->create_at }}</td>--}}
{{--          <td>{{ $user->phone }}</td>--}}
{{--          <td>{{ $user->status }}</td>--}}
          <td>Bing</td>
          <td>bing_yu2001@qq.com</td>
          <td>13761719602</td>
          <td>2019-12-05</td>
          <td>1000</td>
          <td>10000</td>
          <td>777</td>
          <td>888</td>
          <td>999</td>
          <td>1234</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href="" class="btn btn-danger btn-sm">删除</a></td>
        </tr>
{{--          @endforeach--}}
        </tbody>
      </table>
      <br>
    </form>
  </div>




@endsection

