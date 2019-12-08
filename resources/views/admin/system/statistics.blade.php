@extends('layouts.app')
@section('title',Auth::user()->name.'系统统计')
@section('content')
  @include('admin.layouts._header')
  <div style="background: #F0F0F0;white:100%;">
    <br>
    <div class="col-md-11 mx-auto text-center text-secondary bg-white pt-3 " style="height: 60px;border-radius: 5px;">
      <h2>后台主页系统统计信息</h2>
    </div>
    <div class=" bg-white float-left mb-4" style="width: 21%; margin: 20px 20px 0 55px;border-radius: 5px;">
      <p class="mt-4 ml-2 text-secondary" style="font-size: 20px;">总访问量:</p>
      <hr>
      <h1 class="text-center text-primary mt-4 mb-4">999,999,999</h1>
      <hr>
      <p class="mt-4 ml-2 mb-4 text-secondary" style="font-size: 16px;">今日访问量: 23443 人次</p>
    </div>
    <div class=" bg-white float-left mb-4" style="width: 21%; margin: 20px 13px 0 10px;border-radius: 5px;">
      <p class="mt-4 ml-2 text-secondary" style="font-size: 20px;">会员总数:</p>
      <hr>
      <h1 class="text-center text-success mt-4 mb-4">999,999,999 人</h1>
      <hr>
      <p class="mt-4 ml-2 mb-4 text-secondary" style="font-size: 16px;">今日新增会员: 23443 人</p>
    </div>
    <div class=" bg-white float-left mb-4" style="width: 21%;margin:20px 15px 0 20px;border-radius: 5px;">
      <p class="mt-4 ml-2 text-secondary" style="font-size: 20px;">文章总数:</p>
      <h3 class="text-center text-success">999,999,999 篇</h3>
      <p class="ml-2 text-secondary" style="font-size: 16px;">今日新增文章: 23443 篇</p>
      <hr>
      <p class="mt-4 ml-2 text-secondary" style="font-size: 20px;">回复总数:</p>
      <h3 class="text-center text-primary">999,999,999 篇</h3>
      <p class="ml-2 text-secondary" style="font-size: 16px;">今日新增回复: 23443 篇</p>
    </div>
    <div class=" bg-white float-left mb-4" style="width: 21%;margin: 20px 20px 0 15px;border-radius: 5px;">
      <p class="mt-4 ml-2 text-secondary" style="font-size: 20px;">购币总额:</p>
      <hr>
      <h1 class="text-center text-danger mt-4 mb-4">￥ 999,999,999 元</h1>
      <hr>
      <p class="mt-4 ml-2 mb-4 text-secondary" style="font-size: 16px;">今日购币总额￥ 23443 元</p>
    </div>

    <div class="card mx-auto col-md-11">
      <table class="table table-bordered mt-3">
        <tr class="card-header text-center" style="font-size: 18px;">
          <td>登录次数：18</td>
          <td>上次登录IP：222.35.131.79.1</td>
          <td>上次登录时间：2014-6-14 11:19:55</td>
        </tr>
      </table>
      <table class="table table-bordered table-hover">
        <thead>
        <tr>
          <th class="mt-4 ml-2 text-secondary" style="font-size: 20px;">服务器信息:</th>
          <th></th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>1</td>
          <td>服务器计算机名</td>
          <td>http://127.0.0.1/</td>
        </tr>
        <tr>
          <td>2</td>
          <td>服务器IP地址</td>
          <td>192.168.1.1</td>
        </tr>
        <tr>
          <td>3</td>
          <td>服务器域名</td>
          <td>www.jili20.com</td>
        </tr>
        <tr>
          <td>4</td>
          <td>服务器端口</td>
          <td>80</td>
        </tr>
        <tr>
          <td>5</td>
          <td>服务器IIS版本</td>
          <td>Microsoft-IIS/6.0</td>
        </tr>
        <tr>
          <td>6</td>
          <td>本文件所在文件夹</td>
          <td>D:\WebSite\HanXiPuTai.com\XinYiCMS.Web\</td>
        </tr>
        <tr>
          <td>7</td>
          <td>服务器操作系统</td>
          <td>Microsoft Windows NT 5.2.3790 Service Pack 2</td>
        </tr>
        <tr>
          <td>8</td>
          <td>系统所在文件夹</td>
          <td>C:\WINDOWS\system32</td>
        </tr>
        <tr>
          <td>9</td>
          <td>服务器脚本超时时间</td>
          <td>30000秒</td>
        </tr>
        <tr>
          <td>10</td>
          <td>服务器的语言种类</td>
          <td>Chinese (People's Republic of China)</td>
        </tr>
        <tr>
          <td>11</td>
          <td>.NET Framework 版本</td>
          <td>2.050727.3655</td>
        </tr>
        <tr>
          <td>12</td>
          <td>服务器当前时间</td>
          <td>2019-12-09 12:06:23</td>
        </tr>
        <tr>
          <td>13</td>
          <td>服务器IE版本</td>
          <td>9.000</td>
        </tr>
        <tr>
          <td>14</td>
          <td>服务器上次启动到现在已运行</td>
          <td>7210分钟</td>
        </tr>
        <tr>
          <td>15</td>
          <td>逻辑驱动器</td>
          <td>C:\D:\</td>
        </tr>
        <tr>
          <td>16</td>
          <td>CPU 总数</td>
          <td>4</td>
        </tr>
        <tr>
          <td>17</td>
          <td>CPU 类型</td>
          <td>x86 Family 6 Model 42 Stepping 1, GenuineIntel</td>
        </tr>
        <tr>
          <td>18</td>
          <td>虚拟内存</td>
          <td>52480M</td>
        </tr>
        <tr>
          <td>19</td>
          <td>当前程序占用内存</td>
          <td>3.29M</td>
        </tr>
        <tr>
          <td>20</td>
          <td>Asp.net所占内存</td>
          <td>51.46M</td>
        </tr>
        <tr>
          <td>21</td>
          <td>当前Session数量</td>
          <td>8</td>
        </tr>
        <tr>
          <td>22</td>
          <td>当前SessionID</td>
          <td>gznhpwmp34004345jz2q3l45</td>
        </tr>
        <tr>
          <td>23</td>
          <td>当前系统用户名</td>
          <td>NETWORK SERVICE</td>
        </tr>
        </tbody>
      </table>
    </div>
    <br><br>
    <div class="container text-center">
      感谢jQuery、layer、laypage、Validform、UEditor、iconfont、Datatables、WebUploaded、icheck、<br>
      highcharts、 bootstrap-Switch Copyright ©2015 h-ui.admin.pro v1.0 All Rights Reserved. <br>
      本后台系统由H-ui前端框架提供前端技术支持
    </div>
    <br><br>
  </div>





@endsection
