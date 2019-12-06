@extends('layouts.app')
@section('title',Auth::user()->name.'管理员列表')
@section('content')
  @include('admin._header')

  <div class="card col-md-12 pt-1">
    <div class="card-header" style="border-radius: 5px; border: solid 3px #E7E6ED;border-bottom: none;">
      <h3 class="text-center pb-4 pt-2">管 理 员 列 表</h3>
      <a href="{{ route('admin.create') }}" class="btn btn-success float-right mr-5" role="button" aria-pressed="true" style="width: 130px;">添加管理员</a>
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
          <th scope="col">角色</th>
          <th scope="col">权限</th>
          <th scope="col" style="width: 100px;">注册日期</th>
          <th scope="col" style="width: 65px;">性别</th>
          <th scope="col" style="width: 65px;">状态</th>
          <th scope="col" style="width: 120px;">管理</th>
        </tr>
        </thead>
        <tbody>
        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>1</td>
          <td><img src="/images/avatar/default-avatar.png" style="width: 40px;height: 40px;" alt="头像"></td>
          <td>BingBing</td>
          <td>bing_yu2001@qq.com</td>
          <td>13761719602</td>
          <td>Founder 开发者 财务 管理员 总编辑 编辑 版主 实习版主 运营 营销</td>
          <td>站点设置 修改、删除、审核用户 修改、删除、审核帖子 管理财务 查看财务 允许前台修改、删除、审核贴子 系统管理 市场营销</td>
          <td>2019-12-05 12:12:12</td>
          <td>女</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        </tbody>
      </table>
      <br>
    </form>
  </div>
@endsection

