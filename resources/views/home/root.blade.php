@extends('layouts.app')
@section('title','灵魂深触-经历网')

@section('content')
  {{--==================== 主页-电脑版=========================--}}
  <div class="d-none d-sm-block">
    <div class="big-box mx-auto">

      <header>
        {{-- 电脑版 logo 注册登录 --}}
        @include('layouts._lg_header')

        {{-- 清除浮动 --}}
        <div class="clear"></div>

        {{-- 消息提醒视图 --}}
        @include('shared._messages')

        {{-- 引入 vue 组件 公告 --}}
        <notice></notice>


        {{-- 电脑主页轮播图 --}}
        @include('layouts._lg_carousel')

        <br>
      </header>

      {{-- 电脑主体书本导航块 --}}
      <nav class="root-nav row col-md-12 mt-2">
        <div class="root-nav-l">
          <ul class="row">
            <li><a href="{{ route('root') }}"><br>首<br>页</a></li>
            <li><a href="{{ route('experience') }}"><br>人<br>物<br>经<br>历</a></li>
            <li><a href="{{ route('myself') }}"><br>个<br>人<br>宣<br>传</a></li>
            <li><a href="{{route('art')}}"><br>灵<br>魂<br>艺<br>术</a></li>
            <li><a href="{{ route('college') }}"><br>灵<br>魂<br>学<br>院</a></li>
            <li><a href="{{ route('share') }}"><br>灵<br>魂<br>共<br>享</a></li>
            <li><a href="{{ route('gift') }}"><br>灵<br>魂<br>礼<br>赞</a></li>
            <li><a href="{{ route('show') }}"><br>灵<br>魂<br>展<br>览<br>馆</a></li>
            <li><a href="{{ route('heaven') }}"><br>灵<br>魂<br>极<br>乐</a></li>
            <li><a href="{{ route('serve') }}"><br>灵<br>魂<br>服<br>务</a></li>
          </ul>
        </div>
        <div class="root-nav-r">
          <img class="img-fluid" src="/images/root/md-nav-m.jpg">
          <img class="root-nav-r-b" src="/images/root/md-nav-r.jpg">
        </div>
      </nav>

      <section>
        {{-- 电脑主页搜索框 --}}
        @include('layouts._lg_search')

        <br>

        {{-- 【分类-最新-最热-帖子-区域】 --}}
        {{-- 【人物经历】 --}}
        <article>
          {{-- 清除浮动 --}}
          <div class="clear"></div>
          {{-- 【人物经历】 --}}
          <div class="root-category">
            <div>
              <div class="content-l">
                <h4 class="title-l text-center"><a href="{{ route('experience') }}">【人物经历】</a>
                </h4>
                <div class="text-l">
                  <a href=""><img class="pl-2 pt-2" src="/images/root/md-experience.jpg"
                                  alt=""></a>
                </div>
              </div>
            </div>
            <div>
              <div class="content-m">
                <h4 class="title-m"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最新</a><a
                    href="{{ route('experience') }} ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多➤➤➤</a>
                </h4>
                <div class="text-m">
                  <div class="t pt-3 pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                </div>
              </div>
            </div>
            <div>
              <div class="content-r">
                <h4 class="title-r"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最热</a></h4>
                <div class="text-r">
                  <div class="t pt-3 pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                </div>
              </div>
            </div>
          </div>
        </article>


        {{-- 【个人宣传】 --}}
        <article>
          {{-- 清除浮动 --}}
          <div class="clear"></div>
          <div class="root-category mt-5">
            <div>
              <div class="content-l">
                <h4 class="title-l text-center"><a href="{{ route('myself') }}">【个人宣传】</a></h4>
                <div class="text-l">
                  <a href=""><img class="pl-2 pt-2" src="/images/root/md-myself.png"
                                  alt=""></a>
                </div>
              </div>
            </div>
            <div>
              <div class="content-m">
                <h4 class="title-m"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最新</a><a
                    href=" {{ route('myself') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多➤➤➤</a>
                </h4>
                <div class="text-m">
                  <div class="t pt-3 pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                </div>
              </div>
            </div>
            <div>
              <div class="content-r">
                <h4 class="title-r"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最热</a></h4>
                <div class="text-r">
                  <div class="t pt-3 pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                </div>
              </div>
            </div>
          </div>
        </article>


        {{-- 【灵魂艺术】 --}}
        <article>
          {{-- 清除浮动 --}}
          <div class="clear"></div>
          <div class="root-category mt-5">
            <div>
              <div class="content-l">
                <h4 class="title-l text-center"><a href="{{ route('art') }}">【灵魂艺术】</a></h4>
                <div class="text-l">
                  <a href=""><img class="pl-2 pt-2" src="/images/root/md-art.png"
                                  alt=""></a>
                </div>
              </div>
            </div>
            <div>
              <div class="content-m">
                <h4 class="title-m"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最新</a><a
                    href="{{ route('art') }} ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多➤➤➤</a>
                </h4>
                <div class="text-m">
                  <div class="t pt-3 pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                </div>
              </div>
            </div>
            <div>
              <div class="content-r">
                <h4 class="title-r"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最热</a></h4>
                <div class="text-r">
                  <div class="t pt-3 pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                </div>
              </div>
            </div>
          </div>
        </article>


        {{-- 【灵魂学院】 --}}
        <article>
          {{-- 清除浮动 --}}
          <div class="clear"></div>
          <div class="root-category mt-5">
            <div>
              <div class="content-l">
                <h4 class="title-l text-center"><a href="{{ route('college') }}">【灵魂学院】</a></h4>
                <div class="text-l">
                  <a href=""><img class="pl-2 pt-2" src="/images/root/md-college.png"
                                  alt=""></a>
                </div>
              </div>
            </div>
            <div>
              <div class="content-m">
                <h4 class="title-m"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最新</a><a
                    href="{{ route('college') }} ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多➤➤➤</a>
                </h4>
                <div class="text-m">
                  <div class="t pt-3 pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                </div>
              </div>
            </div>
            <div>
              <div class="content-r">
                <h4 class="title-r"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最热</a></h4>
                <div class="text-r">
                  <div class="t pt-3 pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                </div>
              </div>
            </div>
          </div>
        </article>


        {{-- 【灵魂共享】 --}}
        <article>
          {{-- 清除浮动 --}}
          <div class="clear"></div>
          <div class="root-category mt-5">
            <div>
              <div class="content-l">
                <h4 class="title-l text-center"><a href="{{ route('share') }}">【灵魂共享】</a></h4>
                <div class="text-l">
                  <a href=""><img class="pl-2 pt-2" src="/images/root/md-share.png" alt=""></a>
                </div>
              </div>
            </div>
            <div>
              <div class="content-m">
                <h4 class="title-m"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最新</a><a
                    href="{{ route('share') }} ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多➤➤➤</a>
                </h4>
                <div class="text-m">
                  <div class="t pt-3 pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                </div>
              </div>
            </div>
            <div>
              <div class="content-r">
                <h4 class="title-r"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最热</a></h4>
                <div class="text-r">
                  <div class="t pt-3 pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                </div>
              </div>
            </div>
          </div>
        </article>


        {{-- 【灵魂礼赞】 --}}
        <article>
          {{-- 清除浮动 --}}
          <div class="clear"></div>
          <div class="root-category mt-5">
            <div>
              <div class="content-l">
                <h4 class="title-l text-center"><a href="{{ route('gift') }}">【灵魂礼赞】</a></h4>
                <div class="text-l">
                  <a href=""><img class="pl-2 pt-2" src="/images/root/md-gift.jpg" alt=""></a>
                </div>
              </div>
            </div>
            <div>
              <div class="content-m">
                <h4 class="title-m"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最新</a><a
                    href="{{ route('gift') }} ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多➤➤➤</a>
                </h4>
                <div class="text-m">
                  <div class="t pt-3 pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                </div>
              </div>
            </div>
            <div>
              <div class="content-r">
                <h4 class="title-r"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最热</a></h4>
                <div class="text-r">
                  <div class="t pt-3 pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                </div>
              </div>
            </div>
          </div>
        </article>


        {{-- 【灵魂展览馆】 --}}
        <article>
          {{-- 清除浮动 --}}
          <div class="clear"></div>
          <div class="root-category mt-5">
            <div>
              <div class="content-l">
                <h4 class="title-l text-center"><a href="{{ route('show') }}">【灵魂展览馆】</a></h4>
                <div class="text-l">
                  <a href=""><img class="pl-2 pt-2" src="/images/root/md-show.jpg" alt=""></a>
                </div>
              </div>
            </div>
            <div>
              <div class="content-m">
                <h4 class="title-m"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最新</a><a
                    href="{{ route('show') }} ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多➤➤➤</a>
                </h4>
                <div class="text-m">
                  <div class="t pt-3 pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                </div>
              </div>
            </div>
            <div>
              <div class="content-r">
                <h4 class="title-r"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最热</a></h4>
                <div class="text-r">
                  <div class="t pt-3 pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                </div>
              </div>
            </div>
          </div>
        </article>


        {{-- 【灵魂极乐】 --}}
        <article>
          {{-- 清除浮动 --}}
          <div class="clear"></div>
          <div class="root-category mt-5">
            <div>
              <div class="content-l">
                <h4 class="title-l text-center"><a href="{{ route('heaven') }}">【灵魂极乐】</a></h4>
                <div class="text-l">
                  <a href=""><img class="pl-2 pt-2" src="/images/root/md-heaven.jpg"
                                  alt=""></a>
                </div>
              </div>
            </div>
            <div>
              <div class="content-m">
                <h4 class="title-m"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;网葬</a><a
                    href=" {{ route('heaven') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多➤➤➤</a>
                </h4>
                <div class="text-m">
                  <div class="t pt-3 pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                </div>
              </div>
            </div>
            <div>
              <div class="content-r">
                <h4 class="title-r"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;追悼</a></h4>
                <div class="text-r">
                  <div class="t pt-3 pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                  <div class="pl-5"><a href="">⚫长征五号遥三运载火箭运抵海南文昌</a></div>
                </div>
              </div>
            </div>
          </div>
        </article>


        {{-- 清除浮动 --}}
        <div class="clear"></div>

        <br>
      </section>

      <footer>

        {{-- 电脑主页底部总导航 --}}
        <footer class="root-footer-nav mt-5">
          <ul>
            <li>
              <div class="dot-root"></div>
              <a href="{{ route('root') }}">首页</a></li>
            <li><a href="{{ route('experience') }}">人物经历</a></li>
            <li><a href="{{ route('myself') }}">个人宣传</a></li>
            <li><a href="{{ route('art') }}">灵魂艺术</a></li>
            <li><a href="{{ route('college') }}">灵魂学院</a></li>
            <li><a href="{{ route('share') }}">灵魂共享</a></li>
            <li><a href="{{ route('gift') }}">灵魂礼赞</a></li>
            <li><a href="{{ route('show') }}">灵魂展览馆</a></li>
            <li><a href="{{ route('heaven') }}">灵魂极乐</a></li>
            <li><a href="{{ route('serve') }}">灵魂服务</a></li>
          </ul>
        </footer>


      </footer>

    </div>

    @include('layouts._lg_footer')

  </div>


  {{--================== 手机版主页- 仅手机可见 ======================= --}}
  <div class="d-block d-sm-none">

    <header>
      {{-- 手机顶部导航 --}}
      @include('layouts._xs_header')


      {{-- 手机logo和文字 --}}
      <div class="container text-center">
        <br><br>
        <img class="img-fluid mt-3" src="/images/logo/logo.jpg" style="width: 90%;">
        <br><br>
        <a href=""><small>让每一个人都能够在网络上搜索到自己！</small></a><br>
        <a href=""><small>让有才华的您得到更多的奖赏！</small></a><br>
        <a href=""><small>让离去的人从此不再孤单！</small></a>
      </div>

      {{-- 消息提醒视图 --}}
      <div>
        @include('shared._messages')
      </div>

      <br>
      {{-- 轮播图片 --}}
      @include('layouts._xs_carousel')

      {{-- 搜索框 --}}
      @include('layouts._xs_search')

      <br><br>

    </header>

    <section>
      {{-- 手机分类 --}}
      <div class="mx-auto xs-root-category-box">

        {{-- 手机主页开头诗 --}}
        <article class="root-background-poetry mx-auto text-center shadow-lg p-3 mb-5 rounded">
          <h4><strong>我的心灵和我的一切</strong></h4>
          <small>作者：卡蒙斯【葡萄牙】 / &nbsp;翻译：肖佳平</small><br>
          <hr style="background: #000;">
          <h5>我的心灵和我的一切</h5>
          <h5>我都愿你拿去</h5>
          <h5>只求你给我留一双眼睛</h5>
          <h5>让我能看到你</h5>
          <h5>在我的身上</h5>
          <h5>没有不曾被你征服的东西</h5>
          <h5>你夺去了它的生命</h5>
          <h5>也就将它的死亡携去</h5>
          <h5>如果我还需失掉什么</h5>
          <h5>但愿你将我带去</h5>
          <h5>只求你给我留一双眼睛</h5>
          <h5>让我能看到你</h5>
          <br>
        </article>

        {{-- 各大分类 --}}
        <article class="xs-category-content">
          {{-- 人物经历 --}}
          <div class="root-background mx-auto shadow-lg p-3 mb-5 rounded">

            <div class="xs-category-title">
              <img class="img-fluid " src="/images/category/xs-experience.jpg" style="width: 100%;">

              <br><br>
              <h4>⚫ 人 物 经 历</h4>
              <hr style="background: #000;">
              <h5>✎ 您的经历就是您的财富！</h5>
              <hr style="background: #000;">

              {{-- 最新-更多 --}}
              <div>
                <h5 class="float-left pr-2" style="width: 30%;">最新</h5>
                <h5 class="float-right" style="width: 70%;"><a class="float-right" href="">更多 ➤➤</a>
                </h5>
              </div>
              {{-- 清除浮动 --}}
              <div class="clear"></div>

              {{-- 分类前十贴 --}}
              <div class="xs-category-up" style="width: 100%;">
                <div style="border-top: solid 1px #000;">
                  <a href="">➊ 中小学教师资格考试今举行，590万考生规模创新高</a>

                </div>

                <div>
                  <a href="">➋ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➌ WTO裁定中国可对36亿美元美国商品加征关税</a>
                </div>
                <div>
                  <a href="">➍ 一份回锅肉400元？商家：精品肉供应一斤58 要用4斤</a>
                </div>
                <div>
                  <a href="">➎ 袁家军主持省政府党组会议：学懂弄通做实十九届四中全会精神</a>
                </div>
                <div>
                  <a href="">➏ 今年教师资格考试报考热，传递出哪些信息？</a>
                </div>
                <div>
                  <a href="">➐ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➑ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➒ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➓ 划重点！十九届四中全会公报速读</a>
                </div>

              </div>


            </div>
          </div>
          {{-- 个人宣传 --}}
          <div class="root-background mx-auto shadow-lg p-3 mb-5 rounded">
            <div class="xs-category-title">
              <div class="pl-0">
                <img class="img-fluid" src="/images/category/xs-mysealf.jpg" style="width: 100%;">
              </div>
              <br>
              <h4>⚫ 个 人 宣 传</h4>
              <hr style="background: #000;">
              <h5>✎ 您的经历就是您的财富！</h5>
              <hr style="background: #000;">

              {{-- 最新-更多 --}}
              <div>
                <h5 class="float-left pr-2" style="width: 30%;">最新</h5>
                <h5 class="float-right" style="width: 70%;"><a class="float-right" href="">更多 ➤➤</a>
                </h5>
              </div>
              {{-- 清除浮动 --}}
              <div class="clear"></div>

              {{-- 分类前十贴 --}}
              <div class="xs-category-up" style="width: 100%;">
                <div style="border-top: solid 1px #000;">
                  <a href="">➊ 中小学教师资格考试今举行，590万考生规模创新高</a>
                </div>

                <div>
                  <a href="">➋ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➌ WTO裁定中国可对36亿美元美国商品加征关税</a>
                </div>
                <div>
                  <a href="">➍ 一份回锅肉400元？商家：精品肉供应一斤58 要用4斤</a>
                </div>
                <div>
                  <a href="">➎ 袁家军主持省政府党组会议：学懂弄通做实十九届四中全会精神</a>
                </div>
                <div>
                  <a href="">➏ 今年教师资格考试报考热，传递出哪些信息？</a>
                </div>
                <div>
                  <a href="">➐ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➑ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➒ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➓ 划重点！十九届四中全会公报速读</a>
                </div>

              </div>

            </div>

          </div>
          {{-- 灵魂艺术 --}}
          <div class="root-background mx-auto shadow-lg p-3 mb-5 rounded">
            <div class="xs-category-title">
              <img
                class=" img-fluid" src="/images/category/xs-art.jpg" style="width: 100%;">
              <br><br>
              <h4>⚫ 灵 魂 艺 术</h4>
              <hr style="background: #000;">
              <h5>✎ 您的经历就是您的财富！</h5>
              <hr style="background: #000;">

              {{-- 最新-更多 --}}
              <div>
                <h5 class="float-left pr-2" style="width: 30%;">最新</h5>
                <h5 class="float-right" style="width: 70%;"><a class="float-right" href="">更多 ➤➤</a>
                </h5>
              </div>
              {{-- 清除浮动 --}}
              <div class="clear"></div>

              {{-- 分类前十贴 --}}
              <div class="xs-category-up" style="width: 100%;">
                <div style="border-top: solid 1px #000;">
                  <a href="">➊ 中小学教师资格考试今举行，590万考生规模创新高</a>
                </div>

                <div>
                  <a href="">➋ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➌ WTO裁定中国可对36亿美元美国商品加征关税</a>
                </div>
                <div>
                  <a href="">➍ 一份回锅肉400元？商家：精品肉供应一斤58 要用4斤</a>
                </div>
                <div>
                  <a href="">➎ 袁家军主持省政府党组会议：学懂弄通做实十九届四中全会精神</a>
                </div>
                <div>
                  <a href="">➏ 今年教师资格考试报考热，传递出哪些信息？</a>
                </div>
                <div>
                  <a href="">➐ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➑ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➒ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➓ 划重点！十九届四中全会公报速读</a>
                </div>

              </div>

            </div>

          </div>
          {{-- 灵魂学院 --}}
          <div class="root-background mx-auto shadow-lg p-3 mb-5 rounded">
            <div class="xs-category-title">
              <img
                class=" img-fluid" src="/images/category/xs-college.jpg" style="width: 100%;">
              <br><br>
              <h4>⚫ 灵 魂 学 院</h4>
              <hr style="background: #000;">
              <h5>✎ 您的经历就是您的财富！</h5>
              <hr style="background: #000;">

              {{-- 最新-更多 --}}
              <div>
                <h5 class="float-left pr-2" style="width: 30%;">最新</h5>
                <h5 class="float-right" style="width: 70%;"><a class="float-right" href="">更多 ➤➤</a>
                </h5>
              </div>
              {{-- 清除浮动 --}}
              <div class="clear"></div>

              {{-- 分类前十贴 --}}
              <div class="xs-category-up" style="width: 100%;">
                <div style="border-top: solid 1px #000;">
                  <a href="">➊ 中小学教师资格考试今举行，590万考生规模创新高</a>
                </div>

                <div>
                  <a href="">➋ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➌ WTO裁定中国可对36亿美元美国商品加征关税</a>
                </div>
                <div>
                  <a href="">➍ 一份回锅肉400元？商家：精品肉供应一斤58 要用4斤</a>
                </div>
                <div>
                  <a href="">➎ 袁家军主持省政府党组会议：学懂弄通做实十九届四中全会精神</a>
                </div>
                <div>
                  <a href="">➏ 今年教师资格考试报考热，传递出哪些信息？</a>
                </div>
                <div>
                  <a href="">➐ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➑ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➒ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➓ 划重点！十九届四中全会公报速读</a>
                </div>

              </div>

            </div>

          </div>
          {{-- 灵魂共享 --}}
          <div class="root-background mx-auto shadow-lg p-3 mb-5 rounded">
            <div class="xs-category-title">
              <img
                class=" img-fluid" src="/images/category/xs-share.jpg" style="width: 100%;">
              <br><br>
              <h4>⚫ 灵 魂 共 享</h4>
              <hr style="background: #000;">
              <h5>✎ 您的经历就是您的财富！</h5>
              <hr style="background: #000;">

              {{-- 最新-更多 --}}
              <div>
                <h5 class="float-left pr-2" style="width: 30%;">最新</h5>
                <h5 class="float-right" style="width: 70%;"><a class="float-right" href="">更多 ➤➤</a>
                </h5>
              </div>
              {{-- 清除浮动 --}}
              <div class="clear"></div>

              {{-- 分类前十贴 --}}
              <div class="xs-category-up" style="width: 100%;">
                <div style="border-top: solid 1px #000;">
                  <a href="">➊ 中小学教师资格考试今举行，590万考生规模创新高</a>
                </div>

                <div>
                  <a href="">➋ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➌ WTO裁定中国可对36亿美元美国商品加征关税</a>
                </div>
                <div>
                  <a href="">➍ 一份回锅肉400元？商家：精品肉供应一斤58 要用4斤</a>
                </div>
                <div>
                  <a href="">➎ 袁家军主持省政府党组会议：学懂弄通做实十九届四中全会精神</a>
                </div>
                <div>
                  <a href="">➏ 今年教师资格考试报考热，传递出哪些信息？</a>
                </div>
                <div>
                  <a href="">➐ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➑ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➒ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➓ 划重点！十九届四中全会公报速读</a>
                </div>

              </div>

            </div>

          </div>
          {{-- 灵魂礼赞 --}}
          <div class="root-background mx-auto shadow-lg p-3 mb-5 rounded">
            <div class="xs-category-title">
              <img
                class=" img-fluid" src="/images/category/xs-gift.jpg" style="width: 100%;">
              <br><br>
              <h4>⚫ 灵 魂 礼 赞</h4>
              <hr style="background: #000;">
              <h5>✎ 您的经历就是您的财富！</h5>
              <hr style="background: #000;">

              {{-- 最新-更多 --}}
              <div>
                <h5 class="float-left pr-2" style="width: 30%;">最新</h5>
                <h5 class="float-right" style="width: 70%;"><a class="float-right" href="">更多 ➤➤</a>
                </h5>
              </div>
              {{-- 清除浮动 --}}
              <div class="clear"></div>

              {{-- 分类前十贴 --}}
              <div class="xs-category-up" style="width: 100%;">
                <div style="border-top: solid 1px #000;">
                  <a href="">➊ 中小学教师资格考试今举行，590万考生规模创新高</a>
                </div>

                <div>
                  <a href="">➋ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➌ WTO裁定中国可对36亿美元美国商品加征关税</a>
                </div>
                <div>
                  <a href="">➍ 一份回锅肉400元？商家：精品肉供应一斤58 要用4斤</a>
                </div>
                <div>
                  <a href="">➎ 袁家军主持省政府党组会议：学懂弄通做实十九届四中全会精神</a>
                </div>
                <div>
                  <a href="">➏ 今年教师资格考试报考热，传递出哪些信息？</a>
                </div>
                <div>
                  <a href="">➐ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➑ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➒ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➓ 划重点！十九届四中全会公报速读</a>
                </div>

              </div>

            </div>

          </div>
          {{-- 灵魂展览馆 --}}
          <div class="root-background mx-auto shadow-lg p-3 mb-5 rounded">
            <div class="xs-category-title">
              <img class="img-fluid" src="/images/category/xs-show.jpg" style="width: 100%;">
              <br><br>
              <h4>⚫ 灵 魂 展 览 馆</h4>
              <hr style="background: #000;">
              <h5>✎ 您的经历就是您的财富！</h5>
              <hr style="background: #000;">

              {{-- 最新-更多 --}}
              <div>
                <h5 class="float-left pr-2" style="width: 30%;">最新</h5>
                <h5 class="float-right" style="width: 70%;"><a class="float-right" href="">更多 ➤➤</a>
                </h5>
              </div>
              {{-- 清除浮动 --}}
              <div class="clear"></div>

              {{-- 分类前十贴 --}}
              <div class="xs-category-up" style="width: 100%;">
                <div style="border-top: solid 1px #000;">
                  <a href="">➊ 中小学教师资格考试今举行，590万考生规模创新高</a>
                </div>

                <div>
                  <a href="">➋ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➌ WTO裁定中国可对36亿美元美国商品加征关税</a>
                </div>
                <div>
                  <a href="">➍ 一份回锅肉400元？商家：精品肉供应一斤58 要用4斤</a>
                </div>
                <div>
                  <a href="">➎ 袁家军主持省政府党组会议：学懂弄通做实十九届四中全会精神</a>
                </div>
                <div>
                  <a href="">➏ 今年教师资格考试报考热，传递出哪些信息？</a>
                </div>
                <div>
                  <a href="">➐ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➑ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➒ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➓ 划重点！十九届四中全会公报速读</a>
                </div>

              </div>

            </div>

          </div>
          {{-- 灵魂极乐 --}}
          <div class="root-background mx-auto shadow-lg p-3 mb-5 rounded">
            <div class="xs-category-title">
              <img
                class=" img-fluid" src="/images/category/xs-heaven.jpg" style="width: 100%;">
              <br><br>
              <h4>⚫ 灵 魂 极 乐</h4>
              <hr style="background: #000;">
              <h5>✎ 您的经历就是您的财富！</h5>
              <hr style="background: #000;">

              {{-- 最新-更多 --}}
              <div>
                <h5 class="float-left pr-2" style="width: 30%;">最新</h5>
                <h5 class="float-right" style="width: 70%;"><a class="float-right" href="">更多 ➤➤</a>
                </h5>
              </div>
              {{-- 清除浮动 --}}
              <div class="clear"></div>

              {{-- 分类前十贴 --}}
              <div class="xs-category-up" style="width: 100%;">
                <div style="border-top: solid 1px #000;">
                  <a href="">➊ 中小学教师资格考试今举行，590万考生规模创新高</a>
                </div>

                <div>
                  <a href="">➋ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➌ WTO裁定中国可对36亿美元美国商品加征关税</a>
                </div>
                <div>
                  <a href="">➍ 一份回锅肉400元？商家：精品肉供应一斤58 要用4斤</a>
                </div>
                <div>
                  <a href="">➎ 袁家军主持省政府党组会议：学懂弄通做实十九届四中全会精神</a>
                </div>
                <div>
                  <a href="">➏ 今年教师资格考试报考热，传递出哪些信息？</a>
                </div>
                <div>
                  <a href="">➐ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➑ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➒ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➓ 划重点！十九届四中全会公报速读</a>
                </div>

              </div>

            </div>

          </div>
          {{-- 灵魂服务 --}}
          <div class="root-background mx-auto shadow-lg p-3 mb-5 rounded">
            <div class="xs-category-title">
              <img
                class=" img-fluid" src="/images/category/xs-sever.jpg" style="width: 100%;">
              <br><br>
              <h4>⚫ 灵 魂 服 务</h4>
              <hr style="background: #000;">
              <h5>✎ 您的经历就是您的财富！</h5>
              <hr style="background: #000;">

              {{-- 最新-更多 --}}
              <div>
                <h5 class="float-left pr-2" style="width: 30%;">最新</h5>
                <h5 class="float-right" style="width: 70%;"><a class="float-right" href="">更多 ➤➤</a>
                </h5>
              </div>
              {{-- 清除浮动 --}}
              <div class="clear"></div>

              {{-- 分类前十贴 --}}
              <div class="xs-category-up" style="width: 100%;">
                <div style="border-top: solid 1px #000;">
                  <a href="">➊ 中小学教师资格考试今举行，590万考生规模创新高</a>
                </div>

                <div>
                  <a href="">➋ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➌ WTO裁定中国可对36亿美元美国商品加征关税</a>
                </div>
                <div>
                  <a href="">➍ 一份回锅肉400元？商家：精品肉供应一斤58 要用4斤</a>
                </div>
                <div>
                  <a href="">➎ 袁家军主持省政府党组会议：学懂弄通做实十九届四中全会精神</a>
                </div>
                <div>
                  <a href="">➏ 今年教师资格考试报考热，传递出哪些信息？</a>
                </div>
                <div>
                  <a href="">➐ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➑ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➒ 划重点！十九届四中全会公报速读</a>
                </div>
                <div>
                  <a href="">➓ 划重点！十九届四中全会公报速读</a>
                </div>

              </div>

            </div>

          </div>
        </article>
      </div>
      <br>
      <hr style="background: #292929">
    </section>

    <footer>
      {{-- 手机主页底部 --}}
      @include('layouts._xs_footer')
    </footer>

  </div>


@stop
@section('script')
  <script>
      // 轮播图控件
      $('.carousel').carousel({
          interval: 2000
      });

  </script>
@endsection



