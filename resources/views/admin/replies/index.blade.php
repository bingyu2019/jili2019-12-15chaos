@extends('layouts.app')
@section('title','管理回复')
@section('content')
  @include('admin.layouts._header')


  <div class="card col-md-12 pt-1">
    <div class="card-header" style="border-radius: 5px; border: solid 3px #E7E6ED;border-bottom: none;">
      <h3 class="text-center pb-4 pt-2">回 复 列 表</h3>
      <a href="" class="btn btn-success float-right mr-5" role="button" aria-pressed="true" style="width: 130px;">刷新</a>
      <form class="form-inline my-2 my-lg-0 float-right mr-5">
        <input class="form-control mr-sm-2" type="search" placeholder="帖子标题" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">筛选</button>
      </form>
      <form class="form-inline my-2 my-lg-0 float-right mr-5">
        <input class="form-control mr-sm-2" type="search" placeholder="回复作者" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">筛选</button>
      </form>
      <form class="form-inline my-2 my-lg-0 float-right mr-5">
        <input class="form-control mr-sm-2" type="search" placeholder="回复ID" aria-label="Search">
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
      <table class="table table-bordered table-hover mt-2 admin-all-index">
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
          <th scope="col">作者</th>
          <th scope="col">回复内容</th>
          <th scope="col">帖子标题</th>
          <th scope="col">评论</th>
          <th scope="col">点赞</th>
          <th scope="col">打赏</th>
          <th scope="col">礼赞</th>
          <th scope="col">发表日期</th>
          <th scope="col">状态</th>
          <th scope="col">管理</th>
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
          <td>Bing</td>
          <td>农村部:生猪产能恢复较好 全国"猪价"连续4周回落</td>
          <td>到哪里找哪么多猪肉？</td>
          <td>10000</td>
          <td>777</td>
          <td>999</td>
          <td>1234</td>
          <td>2019-12-05 12:12:12</td>
          <td>正常</td>
          <td><a href="{{ route('admin.replies.edit') }}" class="btn btn-success btn-sm">编辑</a> <a href=""
                                                                                                 class="btn btn-danger btn-sm">删除</a>
          </td>
        </tr>
        </tbody>
      </table>
      <br>
    </form>
  </div>




@endsection

