@extends('layouts.app')
@section('title',Auth::user()->name.'用户组管理')
@section('content')
  @include('admin.layouts._header')

  <div class="card col-md-12 pt-1">
    <div class="card-header" style="border-radius: 5px; border: solid 3px #E7E6ED;border-bottom: none;">
      <h3 class="text-center pb-4 pt-2">用户组列表</h3>
      <a href="{{ route('admin.create') }}" class="btn btn-success float-right mr-5" role="button" aria-pressed="true"
         style="width: 130px;">添加用户组</a>
    </div>

    <table class="table table-striped table-bordered mt-2 card-header">
      <thead>
      <tr>
        <th scope="col">
          <button type="button" class="btn btn-danger float-left" style="width: 120px;">批量删除</button>
        </th>
        <th scope="col"><h5>总数: 6 </h5></th>
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
          <th scope="col" style="width: 80px;">ID</th>
          <th scope="col">用户组</th>
          <th scope="col" style="width: 200px;">描述</th>
          <th scope="col" style="width: 200px;">修改日期</th>
          <th scope="col" style="width: 100px;">操作者</th>
          <th scope="col" style="width: 100px;">状态</th>
          <th scope="col" style="width: 150px;">管理</th>
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
          <td>小学生</td>
          <td>用户注册登录默认级别，发布帖子 0-30篇</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>2</td>
          <td>初中生</td>
          <td>发布帖子 31-80篇</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>3</td>
          <td>高中生</td>
          <td>发布帖子 81-150篇</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>4</td>
          <td>大学生</td>
          <td>发布帖子 151-250篇</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>5</td>
          <td>学士</td>
          <td>发布帖子 251-400篇</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>6</td>
          <td>硕士</td>
          <td>发布帖子 401-600篇</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>7</td>
          <td>博士</td>
          <td>发布帖子 601-850篇</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>8</td>
          <td>博士后</td>
          <td>发布帖子 851篇以上</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>

        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>9</td>
          <td>Founder</td>
          <td>拥有至高无上所有权限</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>10</td>
          <td>开发者</td>
          <td>开发网站，管理系统</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>

        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>11</td>
          <td>财务</td>
          <td>记录计算处理财务收支</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>

        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>12</td>
          <td>管理员</td>
          <td>修改、删除、审核全站帖子</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>

        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>13</td>
          <td>总编辑</td>
          <td>修改、删除、审核全站帖子</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>14</td>
          <td>编辑</td>
          <td>允许在前台修改、删除、审核帖子</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>15</td>
          <td>版主</td>
          <td>允许在前台修改、删除、审核帖子</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>16</td>
          <td>实习版主</td>
          <td>配合版主的工作</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>17</td>
          <td>运营</td>
          <td>维护网站正常运营</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        <tr class="pb-2">
          <th scope="col" style="width: 40px;">
            <div class="form-check">
              <label class="form-check-label mb-3">
                <input type="checkbox" class="form-check-input" value="">
              </label>
            </div>
          <td>18</td>
          <td>市场营销</td>
          <td>市场营销</td>
          <td>2019-12-05 12:12:12</td>
          <td>Bing</td>
          <td>正常</td>
          <td><a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                             class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        </tbody>
      </table>
      <br>
    </form>
    <br><br><br>
  </div>

@endsection

