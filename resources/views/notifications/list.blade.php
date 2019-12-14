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


              {{-- 我的提醒＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝--}}
              <div id="remind" class="container tab-pane active pb-5"><br>
                {{-- 1 关注的帖子有新回复 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="https://cdn.learnku.com/uploads/avatars/10492_1485328951.jpeg!/both/400x400"
                                                          alt=""></a>
                  <h5 style="line-height: 1.5em;">关注的帖子 <a href="" class="letter">《最近有点迷茫啊，不知道大家的工作模式是咋样的？最近有点迷茫啊，不知道大家的工作模式是咋样的？》</a>　有新回复。<span
                      class="hover-ccc">💬 </span></h5>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>
                {{-- 2 帖子有新回复 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                                          alt=""></a>
                  <h5 style="line-height: 1.5em;">发布的帖子 <a href=""
                                                           class="letter">《最近有点迷茫啊，不知道大家的工作模式是咋样的？》</a>　有新回复。<span
                      class="hover-ccc">💬 </span></h5>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>
                {{-- 3 评论有新回复 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="https://cdn.learnku.com/uploads/avatars/5302_1537349475.jpg!/both/400x400"
                                                          alt=""></a>
                  <h5 style="line-height: 1.5em;">在 <a href="" class="letter">《最近有点迷茫啊，不知道大家的工作模式是咋样的？》</a>中发表的评论<span
                      class="hover-ccc">💬 </span>　有新回复。</h5>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>

                {{-- 4 Bing 关注了您 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left"><img class="round-avatar"
                                                     src="https://cdn.learnku.com/uploads/avatars/39193_1555482030.jpeg!/both/400x400"
                                                     alt=""></a>
                  <h5 class="float-left">　
                    <a href="" class="letter"><b>　Bing</b></a>
                    关注了您！<span class="hover-ccc">⭐ </span>
                  </h5>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                  <div class="clear"></div>
                </div>

                {{-- 5 送花评论 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                                          alt=""></a>
                  <h5 style="line-height: 1.5em;">在 <a href="" class="letter">《最近有点迷茫啊，不知道大家的工作模式是咋样的？》</a>中发表的评论<span
                      class="hover-ccc">💬 </span>，获赠 <span class="hover-ccc">🌺 </span> 5 朵，价值5银币。赠送者：<a href=""
                                                                                                          class="letter text-dark"><b>Bing</b></a>
                  </h5>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>
                {{-- 6 奖赏评论 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                                          alt=""></a>
                  <h5 style="line-height: 1.5em;">在 <a href="" class="letter">《最近有点迷茫啊，不知道大家的工作模式是咋样的？》</a>中发表的评论<span
                      class="hover-ccc">💬 </span>，获奖赏 <span class="hover-ccc">💰</span> 1 金币。奖赏者：<a href=""
                                                                                                     class="letter text-dark"><b>Bing</b></a>
                  </h5>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>
                {{-- 7 礼赞评论 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                                          alt=""></a>
                  <h5 style="line-height: 1.5em;">在 <a href="" class="letter">《最近有点迷茫啊最近有点迷茫啊，不知道大家的工作模式是咋样的？》</a>中发表的评论<span
                      class="hover-ccc">💬 </span>，获得礼物 <span class="hover-ccc">🎁 </span> 1 份。礼赞者：<a href=""
                                                                                                      class="letter text-dark"><b>Bing</b></a>
                  </h5>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>

                {{-- 8 送花帖子 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                                          alt=""></a>
                  <h5 style="line-height: 1.5em;">发布的帖子<span class="hover-ccc">📝 </span> <a href="" class="letter">《Laravel7
                      的简单隐式路由模型绑定Laravel7 的简单隐式路由模型绑定的简单隐式路由模型绑定》</a>获赠 <span class="hover-ccc">🌺 </span> 1 朵。赠送者：<a
                      href="" class="letter text-dark"><b>Bing</b></a></h5>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>
                {{-- 9 奖赏帖子 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                                          alt=""></a>
                  <h5 style="line-height: 1.5em;">发布的帖子<span class="hover-ccc">📝 </span> <a href="" class="letter">《Laravel7
                      的简单隐式路由模型绑定Laravel7 的简单隐式路由模型绑定的简单隐式路由模型绑定》</a>获奖赏 <span class="hover-ccc">💰</span> 1 金币。奖赏者：<a
                      href="" class="letter text-dark"><b>Bing</b></a></h5>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>
                {{-- 10 礼赞帖子 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                                          alt=""></a>
                  <h5 style="line-height: 1.5em;">发布的帖子<span class="hover-ccc">📝 </span> <a href="" class="letter">《Laravel7
                      的简单隐式路由模型绑定》</a>获得礼物 <span class="hover-ccc">🎁 </span> 1 份。礼赞者：<a href=""
                                                                                         class="letter text-dark"><b>Bing</b></a>
                  </h5>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>

              </div>


              {{--===== 我的私信 =========================================--}}
              {{-- 1 私信 --}}
              <div id="letter" class="container tab-pane fade pb-5"><br>
                {{-- 1 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                                          alt=""></a>
                  <a href="" class="letter text-dark"><b>Bing</b></a><span class="hover-ccc"> 📩 </span>
                  <p class="sixteen">私信内容Laravel 是优雅的 PHP Web 开发框架。具有高效、简洁、富于表达力等优点。采用 MVC 设计，是崇尚开发效率的全栈框架。是最受关注的 PHP
                    框架。
                  </p>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>
                {{-- 2 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                                          alt=""></a>
                  <a href="" class="letter text-dark"><b>Bing</b></a><span class="hover-ccc"> 📩 </span>
                  <p class="sixteen">私信内容Laravel 是优雅的 PHP Web 开发框架。具有高效、简洁、富于表达力等优点。
                  </p>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>
                {{-- 3 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                                          alt=""></a>
                  <a href="" class="letter text-dark"><b>Bing</b></a><span class="hover-ccc"> 📩 </span>
                  <p class="sixteen">私信内容Laravel 是优雅的 PHP Web 开发框架。具有高效、简洁、富于表达力等优点。采用 MVC 设计，是崇尚开发效率的全栈框架。是最受关注的 PHP
                    框架。内容Laravel 是优雅的 PHP Web 开发框架。具有高效、简洁、富于表达力等优点。采用 MVC 设计，是崇尚开发效率的全栈框架。是最受关注的 PHP 框架。
                  </p>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>
                {{-- 4 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="https://cdn.learnku.com/uploads/avatars/46186_1564453747.jpeg!/both/400x400"
                                                          alt=""></a>
                  <a href="" class="letter text-dark"><b>Bing</b></a><span class="hover-ccc"> 📩 </span>
                  <p class="sixteen">私信内容Laravel 是优雅的 PHP Web 开发框架。具有高效.
                  </p>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>
              </div>

              {{-- 系统公告 =============================================--}}
              <div id="notifications" class="container tab-pane fade pb-5"><br>
                {{-- 1 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="/images/logo/xs-logo.png" alt=""></a>
                  <h5>上月收益已发放，请注意查收。如有问题，请到【灵魂服务】发贴上报。上月收益已发放，请注意查收。如有问题，请到【灵魂服务】发贴上报。</h5>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>
                {{-- 2 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="/images/logo/xs-logo.png" alt=""></a>
                  <h5>上月收益已发放，请注意查收。如有问题，请到【灵魂服务】发贴上报。</h5>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>
                {{-- 3 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="/images/logo/xs-logo.png" alt=""></a>
                  <h5>上月收益已发放，请注意查收。如有问题，请到【灵魂服务】发贴上报。上月收益已发放，请注意查收。如有问题，请到【灵魂服务】发贴上报。</h5>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>
                {{-- 4 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="/images/logo/xs-logo.png" alt=""></a>
                  <h5>上月收益已发放，请注意查收。如有问题，请到【灵魂服务】发贴上报。</h5>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>
                {{-- 5 --}}
                <div class="mb-1 p-4 border-radius black-border">
                  <a href="" class="float-left pr-3"><img class="round-avatar"
                                                          src="/images/logo/xs-logo.png" alt=""></a>
                  <h5>上月收益已发放，请注意查收。如有问题，请到【灵魂服务】发贴上报。</h5>
                  <span class="float-right sixteen">⊙10分钟前　2019-12-11 12:54:08</span>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection


