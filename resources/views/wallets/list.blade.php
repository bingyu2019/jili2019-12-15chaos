@extends('layouts.app')
@section('title', $user->name .'我的钱袋')
@section('content')
  @include('layouts._lg_other_header')
  @include('layouts._xs_header')
  <div class="d-block d-sm-none"><br><br><br></div>

  <header>
    <div class="topic-create">
      <div class="col-md-10 mx-auto">
        <div class="header-color" style="height: 80px;">
          <h3 class="text-center text-light pt-4"><b>💰💰💰</b> 我的钱袋 💰💰💰</h3>
        </div>
        {{--银币统计--}}
        <div class="shadow pt-3 rounded sixteen text-container">
          <ul class="list-unstyled list-abc">
            <li class="media">
              <div class="media-left">
                <a href="">
                  &nbsp;&nbsp;&nbsp;<img class="media-object img-thumbnail mr-3" style="width: 52px; height: 52px;"
                                         src="/images/avatar/face100px.jpg" title="Bing">
                </a>
              </div>
              <div class="media-body">
                <a href="" title="标题" class="list">
                  <b>Bing</b>
                </a>
                <table class="mb-2" style="width: 100%;">
                  <tr>
                    <td style="width: 50%;">金币总数： 10 个</td>
                    <td>银币总数： 10 个</td>
                  </tr>
                  <tr>
                    <td style="width: 50%;">支付宝收款账号：13761719602</td>
                    <td>微信收款账号：</td>
                  </tr>
                  <tr>
                    <td style="width: 50%;">支付宝账号实名：王汝冰</td>
                    <td>微信账号实名：</td>
                  </tr>
                  <tr>
                    <td style="width: 50%;"><a href="" type="btn" class="btn" style="border: solid 1px black;">换币</a>
                    </td>
                    <td><a href="" type="btn" class="btn" style="border: solid 1px black;">申请提现</a></td>
                  </tr>
                </table>
              </div>
            </li>
          </ul>
        </div>

        <div class="text-container rounded">
          {{-- 选项卡标题 --}}
          <div class="container">
            <br>
            <ul class="nav nav-tabs change-title mt-3" role="tablist">
              <li class="nav-item">
                <a class="nav-link active text-dark" data-toggle="tab" href="#flower">送花记录</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" data-toggle="tab" href="#coin">奖赏记灵</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" data-toggle="tab" href="#royalty">支付版税</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" data-toggle="tab" href="#gift">购买礼物</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" data-toggle="tab" href="#send-gift">赠送记录</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" data-toggle="tab" href="#recharge">换币记录</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" data-toggle="tab" href="#Withdrawal">提现记录</a>
              </li>
            </ul>
            {{-- 选项卡内容 --}}
            <div class="tab-content">
              {{-- 送花记录 --}}
              <div id="flower" class="container tab-pane active pb-5"><br>
                {{--给帖子送花--}}
                <div>
                  <div class="mt-3 pt-3" style="border: solid 2px black;border-radius: 10px;">
                    <div class="text-container container">
                      <h5 class="float-left ml-２">▣ 给<a href="" class="letter">《Laravel
                          7 的简单隐式路由模型绑定》</a>送上１朵 <span class="hover-ccc">🌺</span></h5>
                      <h5 class="float-left ml-4">支付 1 银币</h5>
                      <p class="float-right text-dark ml-2">⊙10分钟前　　2019-12-11 12:54:08</p>
                    </div>
                    <br>
                    <div class="clear"></div>
                  </div>
                </div>
                {{--给回复送花--}}
                <div>
                  <div class="mt-3 pt-3" style="border: solid 2px black;border-radius: 10px;">
                    <div class="text-container container">
                      <h5 class="float-left ml-２">▣ 给<a href="" class="letter">《Laravel-admin 配置 wangEditor3
                          富文本编辑器图片七牛云上传》</a>的回复送上１朵 <span class="hover-ccc">🌺</span></h5>
                      <h5 class="float-left ml-4">支付 1 银币 </h5>
                      <p class="float-right text-dark ml-2">⊙10分钟前　　2019-12-11 12:54:08</p>
                    </div>
                    <br>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>

              {{-- 奖赏记录 --}}
              <div id="coin" class="container tab-pane pb-5"><br>
                {{--奖赏帖子--}}
                <div>
                  <div class="mt-3 pt-3" style="border: solid 2px black;border-radius: 10px;">
                    <div class="text-container container">
                      <h5 class="float-left ml-２">▣ 奖赏<a href="" class="letter">《Laravel
                          7 的简单隐式路由模型绑定》</a> 1 <span class="hover-ccc">💰</span></h5>
                      <h5 class="float-left ml-4">支付 1 金币 </h5>
                      <p class="float-right text-dark ml-2">⊙10分钟前　　2019-12-11 12:54:08</p>
                    </div>
                    <br>
                    <div class="clear"></div>
                  </div>
                </div>
                {{--奖赏回复--}}
                <div>
                  <div class="mt-3 pt-3" style="border: solid 2px black;border-radius: 10px;">
                    <div class="text-container container">
                      <h5 class="float-left ml-２">▣ 奖赏<a href="" class="letter">《Laravel-admin 配置 wangEditor3
                          富文本编辑器图片七牛云上传》</a>的回复 1 <span class="hover-ccc">💰</span></h5>
                      <h5 class="float-left ml-4">支付 1 金币 </h5>
                      <p class="float-right text-dark ml-2">⊙10分钟前　　2019-12-11 12:54:08</p>
                    </div>
                    <br>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>

              {{-- 支付版税 --}}
              <div id="royalty" class="container tab-pane pb-5"><br>
                {{--查看经历--}}
                <div>
                  <div class="mt-3 pt-3" style="border: solid 2px black;border-radius: 10px;">
                    <div class="text-container container">
                      <h5 class="float-left ml-２">▣ 查看经历<a href="" class="letter">《了不起的比尔盖茨》</a></h5>
                      <h5 class="float-left ml-3">支付版税 　2 　金币 　1 　年 </h5>
                      <p class="float-right text-dark ml-2">⊙10分钟前　　2019-12-11 12:54:08</p>
                    </div>
                    <br>
                    <div class="clear"></div>
                  </div>
                </div>
                {{--参观展览--}}
                <div>
                  <div class="mt-3 pt-3" style="border: solid 2px black;border-radius: 10px;">
                    <div class="text-container container">
                      <h5 class="float-left ml-２">▣ 参观展览<a href="" class="letter">《笔尖上的龙飞凤舞》</a></h5>
                      <h5 class="float-left ml-3">支付门票 　2 　金币　 1 　天 </h5>
                      <p class="float-right text-dark ml-2">⊙10分钟前　　2019-12-11 12:54:08</p>
                    </div>
                    <br>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>

              {{-- 购买记录 --}}
              <div id="gift" class="container tab-pane pb-5"><br>
                {{--购买帖子使用版权--}}
                <div>
                  <div class="mt-3 pt-3" style="border: solid 2px black;border-radius: 10px;">
                    <div class="text-container container">
                      <h5 class="float-left ml-２">▣ 购买礼物🎁<a href="" class="letter">《你是我心里最美的月光》</a>使用版权　1　次 </h5>
                      <h5 class="float-left ml-4">支付 2 金币
                        <a href="#"><span class="ml-3 p-2 badge badge-pill badge-danger">赠送</span></a>
                      </h5>
                      <p class="float-right text-dark ml-2">⊙10分钟前　　2019-12-11 12:54:08</p>
                    </div>
                    <br>
                    <div class="clear"></div>
                  </div>
                </div>
                {{--购买帖子使用版权--}}
                <div>
                  <div class="mt-3 pt-3" style="border: solid 2px black;border-radius: 10px;">
                    <div class="text-container container">
                      <h5 class="float-left ml-２">▣ 购买礼物🎁<a href="" class="letter">《你是我心里最美的月光》</a>使用版权　1　次</h5>
                      <h5 class="float-left ml-4">支付 2 金币
                        <a href="#"><span class="ml-3 p-2 badge badge-pill badge-dark">已赠</span></a>
                      </h5>
                      <p class="float-right text-dark ml-2">⊙10分钟前　　2019-12-11 12:54:08</p>
                    </div>
                    <br>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>

              {{-- 赠送记录 --}}
              <div id="send-gift" class="container tab-pane pb-5"><br>
                {{--赠送礼物--}}
                <div>
                  <div class="mt-3 pt-3" style="border: solid 2px black;border-radius: 10px;">
                    <div class="text-container container">
                      <h5 class="float-left ml-２">▣ 成功赠送礼物🎁<a href="" class="letter">《你是我心里最美的月光》</a>给<b> 😶 Bing</b></h5>
                      <p class="float-right text-dark ml-2">⊙10分钟前　　2019-12-11 12:54:08</p>
                    </div>
                    <br>
                    <div class="clear"></div>
                  </div>
                </div>

                {{--赠送礼物--}}
                <div>
                  <div class="mt-3 pt-3" style="border: solid 2px black;border-radius: 10px;">
                    <div class="text-container container">
                      <h5 class="float-left ml-２">▣ 成功赠送礼物🎁<a href="" class="letter">《你是我心里最美的月光》</a>给<b> 😶 Bing</b></h5>
                      <p class="float-right text-dark ml-2">⊙10分钟前　　2019-12-11 12:54:08</p>
                    </div>
                    <br>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>

              {{-- 换币记录 --}}
              <div id="recharge" class="container tab-pane pb-5"><br>
                {{--换币记录--}}
                <div>
                  <div class="mt-3 pt-3" style="border: solid 2px black;border-radius: 10px;">
                    <div class="text-container container">
                      <h5 class="float-left ml-２">▣ 换金币 10 个　　服务费 1 元　　支付金额 11 元</h5>
                      <p class="float-right text-dark ml-2">⊙10分钟前　　2019-12-11 12:54:08</p>
                    </div>
                    <br>
                    <div class="clear"></div>
                  </div>
                </div>
                {{--换币记录--}}
                <div>
                  <div class="mt-3 pt-3" style="border: solid 2px black;border-radius: 10px;">
                    <div class="text-container container">
                      <h5 class="float-left ml-２">▣ 1 金币　　换 10 银币　　免服务费</h5>
                      <p class="float-right text-dark ml-2">⊙10分钟前　　2019-12-11 12:54:08</p>
                    </div>
                    <br>
                    <div class="clear"></div>
                  </div>
                </div>
                {{--换币记录--}}
                <div>
                  <div class="mt-3 pt-3" style="border: solid 2px black;border-radius: 10px;">
                    <div class="text-container container">
                      <h5 class="float-left ml-２">▣ 10 银币　　换 1 金币　　免服务费</h5>
                      <p class="float-right text-dark ml-2">⊙10分钟前　　2019-12-11 12:54:08</p>
                    </div>
                    <br>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>

              {{-- 提现记录 --}}
              <div id="Withdrawal" class="container tab-pane pb-5"><br>
                {{--换币记录--}}
                <div>
                  <div class="mt-3 pt-3" style="border: solid 2px black;border-radius: 10px;">
                    <div class="text-container container">
                      <h5 class="float-left ml-２">▣ 成功提现 10 个金币　　共计10元</h5>
                      <p class="float-right text-dark ml-2">⊙10分钟前　　2019-12-11 12:54:08</p>
                    </div>
                    <br>
                    <div class="clear"></div>
                  </div>
                </div>
                {{--换币记录--}}
                <div>
                  <div class="mt-3 pt-3" style="border: solid 2px black;border-radius: 10px;">
                    <div class="text-container container">
                      <h5 class="float-left ml-２">▣ 成功提现 109 个金币　　共计109元</h5>
                      <p class="float-right text-dark ml-2">⊙10分钟前　　2019-12-11 12:54:08</p>
                    </div>
                    <br>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>




            </div>


          </div>
        </div>
      </div>
    </div>
  </header>
@endsection


