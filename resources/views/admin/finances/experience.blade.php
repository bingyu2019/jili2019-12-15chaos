@extends('layouts.app')
@section('title','经历列表')
@section('content')
  @include('admin.layouts._header')

  <div class="card col-md-12 pt-1">
    <div class="card-header" style="border-radius: 5px; border: solid 3px #E7E6ED;border-bottom: none;">
      <h3 class="text-center pb-4 pt-2">经 历 列 表</h3>
      <a href="" class="btn btn-success float-right mr-5" role="button" aria-pressed="true" style="width: 130px;">刷新</a>
      <form class="form-inline my-2 my-lg-0 float-right mr-5">
        <input class="form-control mr-sm-2" type="date" placeholder="发布日期" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">筛选</button>
      </form>
      <form class="form-inline my-2 my-lg-0 float-right mr-5">
        <input class="form-control mr-sm-2" type="search" placeholder="创建者" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">筛选</button>
      </form>
      <form class="form-inline my-2 my-lg-0 float-right mr-5">
        <input class="form-control mr-sm-2" type="search" placeholder="经历主人" aria-label="Search">
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
          <th scope="col">经历主人</th>
          <th scope="col">创建者</th>
          <th scope="col" style="width: 160px;">发布日期</th>
          <th scope="col">阅读人数</th>
          <th scope="col">付费阅读/人/年</th>
          <th scope="col">点赞总额</th>
          <th scope="col">打赏总额</th>
          <th scope="col">礼赞总额</th>
          <th scope="col">累计收益</th>
          <th scope="col">管理</th>
        </tr>
        </thead>
        <tbody>
        <tr class="pb-2">
          <td>1</td>
          <td>了不起的比尔盖茨</td>
          <td>13761719602</td>
          <td>2019-12-05 12:12:12</td>
          <td>8888</td>
          <td>2.00 元</td>
          <td>200 元</td>
          <td>17，776 元</td>
          <td>200 元</td>
          <td>200000 元</td>
          <td><a href="{{ route('admin.finances.experienceEdit') }}" class="btn btn-success btn-sm">编辑</a>
          </td>
        </tr>

        </tbody>
      </table>
      <br>
    </form>
  </div>

@endsection

