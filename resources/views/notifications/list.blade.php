@extends('layouts.app')
@section('title', $user->name .'消息通知')
@section('content')
  @include('layouts._lg_other_header')
  @include('layouts._xs_header')
  <div class="d-block d-sm-none"><br><br><br></div>
  <header>
    <div class="topic-create">
      <div class="col-md-10 mx-auto">
        <div class="header-color" style="height: 80px;">
          <h3 class="text-center text-light pt-4">📩 消息通知 </h3>
        </div>
        <div class="text-container rounded">
          {{-- 选项卡标题 --}}
          <div class="container">
            <br>
            <ul class="nav nav-tabs change-title" role="tablist">
              <li class="nav-item">
                <a class="nav-link active text-dark" data-toggle="tab" href="#remind"><b>我的提醒</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" data-toggle="tab" href="#letter"><b>我的私信</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" data-toggle="tab" href="#notifications"><b>系统公告</b></a>
              </li>
            </ul>
            {{-- 选项卡内容 --}}
            <div class="tab-content">


              {{-- 我的提醒--}}
              <div id="remind" class="container tab-pane active pb-5"><br>

                {{--关注的帖子有新回复--}}
                <div class="text-container container bottom-line mb-4">
                  <h5 class="float-left">关注的帖子<a href="" class="letter">《Laravel
                      7 的简单隐式路由模型绑定》</a>有新回复 <small> ⊙10分钟前　2019-12-11 12:54:08</small></h5>
                  <div class="clear"></div>
                  <p class="sixteen">
                    从投贷联动到科创板上市的融资接力，依托“上码”“上链”技术即可轻松融资的“码商贷”“POS贷”，深入田间地头、山林牧场的普惠金融精准滴灌……与当今中国新经济生机勃勃、新技术破笋而出的新兴产业体系呼应，更多个性化、差异化、全生命周期的金融服务正在为实体经济提供灌溉滋养。</p>
                </div>

                {{--发布的帖子有新回复--}}
                <div class="text-container container bottom-line mb-4">
                  <h5 class="float-left">发布的帖子<a href="" class="letter">《Laravel
                      7 的简单隐式路由模型绑定》</a>有新回复 <small> ⊙10分钟前　2019-12-11 12:54:08</small></h5>
                  <div class="clear"></div>
                  <p class="sixteen">
                    从投贷联动到科创板上市的融资接力，依托“上码”“上链”技术即可轻松融资的“码商贷”“POS贷”，深入田间地头、山林牧场的普惠金融精准滴灌……</p>
                </div>

                {{--发表的评论有新回复--}}
                <div class="text-container container bottom-line mb-4">
                  <h5 class="float-left">在<a href="" class="letter">《Laravel
                      7 的简单隐式路由模型绑定》</a>中发表的评论 有新回复。<small> ⊙10分钟前　2019-12-11 12:54:08</small></h5>
                  <div class="clear"></div>
                  <p class="sixteen">
                    从投贷联动到科创板上市的融资接力，依托“上码”“上链”技术即可轻松融资的“码商贷”“POS贷”，深入田间地头、山林牧场的普惠金融精准滴灌……</p>
                </div>

                {{--Bing 关注了你--}}
                <div class="text-container container bottom-line mb-4">
                  <div>
                    <a href="">
                      <img class="round-avatar float-left"
                           src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                           alt="">
                    </a>
                    <h5 class="float-left ml-4"><a href="" class="letter"><b>Bing</b> </a> 关注了你</h5>
                    <h5 class="float-right text-dark mb-4 pb-1">⊙10分钟前　　2019-12-11 12:54:08</h5>
                  </div>
                  <div class="clear"></div>
                </div>

                {{--帖子获送花--}}
                <div class="text-container container bottom-line mb-4">
                    <h5 class="float-left">发布的帖子
                      <a href="" class="letter">《在 Laravel 上将图片上传到阿里云 OSS》</a>获赠1朵
                      <span class="hover-ccc">🌺</span> 价值1银币。赠送者：
                      <a href="" class="letter text-dark"><b>Bing</b></a>
                      <small class="float-right">⊙10分钟前.2019-12-11 12:54:08</small></h5>
                  <div class="clear"></div>
                </div>

                {{--评论获送花--}}
                <div class="text-container container bottom-line mb-4">
                    <h5 class="float-left">在<a href="" class="letter">《在 Laravel 上将图片上传到阿里云 OSS》</a>发表的评论 获赠1朵 <span
                        class="hover-ccc">🌺</span> 价值1银币。赠送者：<a href="" class="letter text-dark"><b>Bing</b></a><small
                        class="float-right">⊙10分钟前.2019-12-11 12:54:08</small></h5>
                  <div class="clear"></div>
                </div>


                {{--帖子获奖赏--}}
                <div class="text-container container bottom-line mb-4">
                    <h5 class="float-left">发布的帖子<a href="" class="letter">《在 Laravel 上将图片上传到阿里云 OSS》</a>获得奖赏1次<span class="hover-ccc">💰</span> 价值１金币。奖赏者：<a href="" class="letter text-dark"><b>Bing</b></a><small class="float-right">⊙10分钟前.2019-12-11 12:54:08</small></h5>
                  <div class="clear"></div>
                </div>

                {{--评论获奖赏--}}
                <div class="text-container container bottom-line mb-4">
                    <h5 class="float-left">在<a href="" class="letter">《在 Laravel 上将图片上传到阿里云 OSS》</a>发表的评论 获得奖赏1次<span class="hover-ccc">💰</span> 价值５金币。奖赏者：<a href="" class="letter text-dark"><b>Bing</b></a><small class="float-right">⊙10分钟前.2019-12-11 12:54:08</small></h5>
                  <div class="clear"></div>
                </div>


                {{--帖子获礼赞--}}
                <div class="text-container container bottom-line mb-4">
                  <h5 class="float-left">发布的帖子
                    <a href="" class="letter">《在 Laravel 上将图片上传到阿里云 OSS》</a>获得礼赞1次
                    <span class="hover-ccc">🎁</span> 价值10金币。赠送者：
                    <a href="" class="letter text-dark"><b>Bing</b></a>
                    <small class="float-right">⊙10分钟前.2019-12-11 12:54:08</small></h5>
                  <div class="clear"></div>
                </div>

                {{--评论获礼赞--}}
                <div class="text-container container bottom-line mb-4">
                  <h5 class="float-left">在
                    <a href="" class="letter">《在 Laravel 上将图片上传到阿里云 OSS》</a>发表的评论 获得礼赞1次
                    <span class="hover-ccc">🎁</span> 价值10金币。赠送者：
                    <a href="" class="letter text-dark"><b>Bing</b></a>
                    <small class="float-right">⊙10分钟前.2019-12-11 12:54:08</small></h5>
                  <div class="clear"></div>
                </div>

              </div>
              {{--===== 我的私信 =========================================--}}
              <div id="letter" class="container tab-pane fade pb-5"><br>
                <div class="mb-4 pt-3" style="border: solid 2px black;border-radius: 10px;">
                  <div class="text-container container">
                    <a href=""><img class="round-avatar float-left"
                                    src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                    alt=""></a>
                    <h5 class="float-left ml-4"><b>Bing</b></h5>
                    <h5 class="float-right text-dark">⊙10分钟前　　2019-12-11 12:54:08</h5>
                    <div class="clear"></div>
                    <p class="float-left ml-5 pl-3">私信内容私信内容私信内容私信内容私信内容私信内容私信内容</p>
                  </div>
                  <br>
                  <div class="clear"></div>
                </div>
                <div class="mb-4 pt-3" style="border: solid 2px black;border-radius: 10px;">
                  <div class="text-container container">
                    <a href=""><img class="round-avatar float-left"
                                    src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                    alt=""></a>
                    <h5 class="float-left ml-4"><b>Bing</b></h5>
                    <h5 class="float-right text-dark">⊙10分钟前　　2019-12-11 12:54:08</h5>
                    <div class="clear"></div>
                    <p class="float-left ml-5 pl-3">私信内容私信内容私信内容私信内容私信内容私信内容私信内容</p>
                  </div>
                  <br>
                  <div class="clear"></div>
                </div>
              </div>

              {{-- 系统公告 =============================================--}}
              <div id="notifications" class="container tab-pane fade pb-5"><br>
                <div class="mb-4 pt-3" style="border: solid 2px black;border-radius: 10px;">
                  <div class="text-container container">
                    <img class="float-left" src="/images/logo/xs-logo.png" alt="">
                    <h5 class="float-left ml-4 pt-1"><b>上月收益已发放，请注意查收。如有问题，请到【灵魂服务】发贴上报。</b></h5>
                    <h5 class="float-right text-dark">⊙10分钟前　　2019-12-11 12:54:08</h5>
                    <div class="clear"></div>
                  </div>
                  <br>
                  <div class="clear"></div>
                </div>
                <div class="mb-4 pt-3" style="border: solid 2px black;border-radius: 10px;">
                  <div class="text-container container">
                    <img class="float-left" src="/images/logo/xs-logo.png" alt="">
                    <h5 class="float-left ml-4 pt-1"><b>上月收益已发放，请注意查收。如有问题，请到【灵魂服务】发贴上报。</b></h5>
                    <h5 class="float-right text-dark">⊙10分钟前　　2019-12-11 12:54:08</h5>
                    <div class="clear"></div>
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
  </header>
@endsection


