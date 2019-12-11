@extends('layouts.app')
@section('title', $user->name .'消息通知列表')
@section('content')
  @include('layouts._lg_other_header')
  @include('layouts._xs_header')
  <div class="d-block d-sm-none"><br><br><br></div>
  <header>
    <div class="col-md-10 mx-auto">
      <div class="header-color" style="height: 90px;">
        <h3 class="text-center text-light pt-4">📩 消息通知 </h3>
      </div>
      <div class="text-container rounded">
        {{-- 选项卡标题 --}}
        <div class="container">
          <br>
          <ul class="nav nav-tabs change-title" role="tablist">
            <li class="nav-item">
              <a class="nav-link active text-dark" data-toggle="tab" href="#remind">我的提醒</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#letter">我的私信</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#notifications">系统公告</a>
            </li>
          </ul>
          {{-- 选项卡内容 --}}
          <div class="tab-content">
            {{-- 我的提醒 --}}
            <div id="remind" class="container tab-pane active pb-5"><br>
              {{--1--}}
              <div class="mt-3 pt-3" style="border: solid 2px white;border-radius: 10px;">
                <div class="text-container container">
                  <a href=""><img class="round-avatar float-left"
                                  src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                  alt=""></a>
                  <h5 class="float-left ml-4">关注的帖子 　 <a href="" class="letter"> Laravel
                      7 的简单隐式路由模型绑定</a>　　有新回复</h5>
                  <h5 class="float-right text-dark">⊙10分钟前　　2019-12-11 12:54:08</h5>
                </div>
                <br>
                <div class="clear"></div>
                <p class="ml-5 pl-4 sixteen">
                  从投贷联动到科创板上市的融资接力，依托“上码”“上链”技术即可轻松融资的“码商贷”“POS贷”，深入田间地头、山林牧场的普惠金融精准滴灌……与当今中国新经济生机勃勃、新技术破笋而出的新兴产业体系呼应，更多个性化、差异化、全生命周期的金融服务正在为实体经济提供灌溉滋养。</p>
              </div>
              {{--2--}}
              <div class="mt-3 pt-3" style="border: solid 2px white;border-radius: 10px;">
                <div class="text-container container">
                  <a href=""><img class="round-avatar float-left"
                                  src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                  alt=""></a>
                  <h5 class="float-left ml-4">发布的帖子 　 <a href="" class="letter"> Laravel
                      7 的简单隐式路由模型绑定</a>　　有新回复</h5>
                  <h5 class="float-right text-dark">⊙10分钟前　　2019-12-11 12:54:08</h5>
                </div>
                <br>
                <div class="clear"></div>
                <p class="ml-5 pl-4 sixteen">
                  从投贷联动到科创板上市的融资接力，依托“上码”“上。</p>
              </div>
              {{--3--}}
              <div class="mt-3 pt-3" style="border: solid 2px white;border-radius: 10px;">
                <div class="text-container container">
                  <a href=""><img class="round-avatar float-left"
                                  src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                  alt=""></a>
                  <h5 class="float-left ml-4">发表的回复 　 <a href="" class="letter"> Laravel
                      7 的简单隐式路由模型绑定</a>　　有新回复</h5>
                  <h5 class="float-right text-dark">⊙10分钟前　　2019-12-11 12:54:08</h5>
                </div>
                <br>
                <div class="clear"></div>
                <p class="ml-5 pl-4 sixteen">
                  从投贷联动到科创板上市的融资接力，依托“上码”“上。</p>
              </div>

            </div>
            {{-- 我的私信--}}
            <div id="letter" class="container tab-pane fade pb-5"><br>
              <div class="mt-3 pt-3" style="border: solid 2px white;border-radius: 10px;">
                <div class="text-container container">
                  <a href=""><img class="round-avatar float-left"
                                  src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                  alt=""></a>
                  <h5 class="float-left ml-4"><b>Bing</b></h5>
                  <h5 class="float-right text-dark">⊙10分钟前　　2019-12-11 12:54:08</h5>
                  <div class="clear"></div>
                  <p class="float-left ml-5 pl-2">私信内容私信内容私信内容私信内容私信内容私信内容私信内容</p>
                </div>
                <br>
                <div class="clear"></div>
              </div>
              <div class="mt-3 pt-3" style="border: solid 2px white;border-radius: 10px;">
                <div class="text-container container">
                  <a href=""><img class="round-avatar float-left"
                                  src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                  alt=""></a>
                  <h5 class="float-left ml-4"><b>Bing</b></h5>
                  <h5 class="float-right text-dark">⊙10分钟前　　2019-12-11 12:54:08</h5>
                  <div class="clear"></div>
                  <p class="float-left ml-5 pl-2">私信内容私信内容私信内容私信内容私信内容私信内容私信内容</p>
                </div>
                <br>
                <div class="clear"></div>
              </div>
            </div>
            {{-- 系统公告 --}}
            <div id="notifications" class="container tab-pane fade pb-5"><br>
              <div class="mt-3 pt-3" style="border: solid 2px white;border-radius: 10px;">
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
  </header>
@endsection


