@extends('layouts.app')
@section('title', $user->name .' 的个人中心')
@section('content')
  {{--===========================  电脑版 ==================================--}}
  {{-- 电脑-顶部总导航 --}}
  @include('layouts._lg_other_header')
  <h5>
    @include('shared._messages')
  </h5>
  {{-- 设计全页个人中心 --}}
  <div class="col-md-12 float-left ">
    <div class="header-color col-md-3 float-left pl-3 pt-2" style="height: 90px;">
      <h4><b>❂ jili20.com</b></h4>
      <h5 class="text-center font-hover">第 {{ $user->id }} 号 用户</h5>
    </div>
    <div class="col-md-9 float-left">
      <div class="header-color" style="height: 90px;">
        <h2 class="text-center pt-4 text-light"><b>{{ $user->name }}</b></h2>
      </div>
    </div>
    <div class="float-left three-color" style="width: 98.8%;">
      <div class="col-md-3 float-left p-3">
        <a href=""><img class="img-fluid rounded emergence-avatar" src="{{ $user->avatar }}"
                        alt="{{ $user->name}}" style="height: 250px;"></a>
        {{-- 关注按钮--}}
        @include('users._follow_form')
        {{-- 私信 --}}
        @include('users._private_letter')
      </div>
      <div class="col-md-9 float-left p-3 pl-5">
        {{-- 关注-粉丝-统计--}}
        @include('shared._statistics')
        <div class="mt-3">
          <h5 class="hover-ccc">❂ 个人简介</h5>
          <p class="hover-ccc pr-2 pb-1 p">{{ $user->introduction }}</p>
          <h5 class="hover-ccc">❂ 用户组</h5>
          <p class="p"><span class="grade-box login">Founder</span>
            <span class="grade-box login">开发者</span>
            <span class="grade-box login">管理员</span>
            <span class="grade-box login">管理员</span>
            <span class="grade-box login">管理员</span>
            <span class="grade-box login">管理员</span>
            <span class="grade-box login">管理员</span>
            <span class="grade-box login">小学生</span></p>
          <h5 class="hover-ccc">❂ 注册于</h5>
          <p class="hover-ccc p">{{ $user->created_at->diffForHumans() }}{{ $user->created_at }}</p>
          <h5 class="hover-ccc">❂ 最后活跃时间</h5>
          <p class="hover-ccc p">2019-10-29 13：36：56</p>
          <div class="total">
            <h4>👀 <small>893759</small></h4>
            <h4 class="ml-4">💬 <small>893759</small></h4>
            <h4 class="ml-4">🤍 <small>893759</small></h4>
            <h4 class="ml-4">🌺 <small>893759</small></h4>
            <h4 class="ml-4">💰 <small>8937598089</small></h4>
            <h4 class="ml-4">🎁 <small>89375980</small></h4>
          </div>
          <div class="clear"></div>
          <div style="border: solid 0.5px black;width: 100%;"></div>
        </div>
      </div>
      <div class="float-left rounded" style="width: 100%;">
        {{-- 选项卡内容 --}}
        <div class="container">
          <br>
          <ul class="nav nav-tabs change-title" role="tablist">
            <li class="nav-item">
              <a class="nav-link active text-dark" data-toggle="tab" href="#">关注人动态</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#topics">我的发布</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#replies">我的回复</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#experience">我的经历</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#favorite">我的收藏</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#followings">我的关注</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#fans">我的粉丝</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#flowers">我的红花 </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#i">我的金币</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" data-toggle="tab" href="#j">我的礼物 </a>
            </li>
          </ul>
          <div class="tab-content">
            {{--  关注动态 --}}
            <div id="a" class="container tab-pane active"><br>
              @include('topics._topic_list')
              @include('topics._topic_list')

            </div>
            {{-- 我的帖子 --}}
            <div id="topics" class="container tab-pane fade"><br>
              @include('topics._topic_list')
              @include('topics._topic_list')

            </div>
            {{-- 我的回复 --}}
            <div id="replies" class="container tab-pane fade"><br>
              @include('users._replies')
              @include('users._replies')

            </div>
            {{-- 我的经历 --}}
            <div id="experience" class="container tab-pane fade"><br>
              @include('topics._topic_list')
            </div>
            {{-- 我的收藏 --}}
            <div id="favorite" class="container tab-pane fade"><br>
              @include('users._favorite')
              @include('topics._topic_list')
            </div>
            {{-- 我的关注 --}}
            <div id="followings" class="container tab-pane fade"><br>
              @include('users._followings')
              @include('users._followings')
            </div>
            {{-- 我的粉丝 --}}
            <div id="fans" class="container tab-pane fade"><br>
              @include('users._followers')
              @include('users._followers')
            </div>
            {{-- 我的红花 --}}
            <div id="flowers" class="container tab-pane fade"><br>
              @include('users._flowers')
            </div>
            {{-- 我的金币 --}}
            <div id="i" class="container tab-pane fade"><br>
              @include('users._coin')
            </div>
            {{-- 我的礼物 --}}
            <div id="j" class="container tab-pane fade"><br>
              @include('users._gift')
            </div>
          </div>
        </div>
      </div>
    </div>

    {{--===========================  手机版 ==================================--}}
    {{-- 手机顶部总导航 --}}
    <div class="d-block d-sm-none">
      <br><br>
      @include('layouts._xs_header')
    </div>

    <h5 class="d-block d-sm-none">
      @include('shared._messages')
    </h5>

    {{-- 手机-头像-简单-社交统计 --}}
    <div class="col-xs-12 d-block d-sm-none user-info text-center mx-auto"
         style="background: linear-gradient(to right, #7C3A08,#de8719, #A75615);rounded:5px;width: 99%;">
      {{-- 左则：头像-简介-社交信息 --}}
      <div>
      <!-- <a href=""><img class="img-fluid" src="{{ $user->avatar }}" style="rounded:5px;" alt="{{ $user->name }}"></a> -->
        <a href=""><img class="img-fluid mt-2 p-2" src="{{ $user->avatar }}"
                        style="rounded:5px;border: solid 1px wheat;" alt="{{ $user->name}}"></a>


      </div>

      {{-- 用户名--}}
      <h1 class="text-white mt-2">{{ $user->name }}</h1>

      <div class="mt-3">
        <h5>❂ 个人简介</h5>
        <p>{{ $user->introduction }}</p>
      </div>

      <button type="button" class="btn btn-outline-light"
              style="width: 90%;"><h5 class="pt-2">✉ &nbsp;私信</h5>
      </button>
      <br>
      {{--关注按钮--}}
      @include('users._follow_form')

      {{--注-粉丝-统计--}}
      @include('shared._statistics')

      <hr>
      <h5>❂ 注册于</h5>
      <p>{{ $user->created_at->diffForHumans() }} &nbsp;&nbsp;{{ $user->created_at }}</p>

      <hr>
      <h5>❂ jili20.com</h5>
      <p>第 {{ $user->id }} 号 用户</p>

      <hr>
      <h5>❂ 用户组</h5>
      <p><span style="border: solid 1px white;padding: 2px;rounded: 5px;">Founder</span>
        <span style="border: solid 1px white;padding: 2px;rounded: 5px;">开发者</span>
        <span style="border: solid 1px white;padding: 2px;rounded: 5px;">管理员</span>
        <span style="border: solid 1px white;padding: 2px;rounded: 5px;">小学生</span></p>


      <hr>
      <h5>❂ 最后活跃</h5>
      <p>2019-10-29 13：36：56</p>
      <br>
    </div>

    {{-- 手机-个人关注-帖子-回复-收藏-经历-礼物 --}}
    {{--  <div class="col-xs-12 float-left d-block d-sm-none text-white text-center">--}}
    {{--    --}}{{-- 选项卡区域--}}
    {{--    <div class="text-dark mx-auto" style="width:99%;background: #E5A55D;">--}}

    {{--      <br>--}}
    {{--      <div class="text-dark mx-auto" style="rounded: 5px;">--}}

    {{--        <!-- 选项  -->--}}
    {{--        <!-- Nav tabs -->--}}
    {{--        <ul class="nav nav-tabs" role="tablist">--}}
    {{--          <li class="nav-item">--}}
    {{--            <a class="nav-link active text-dark" data-toggle="tab" href="#h">我的关注</a>--}}
    {{--          </li>--}}
    {{--          <li class="nav-item">--}}
    {{--            <a class="nav-link text-dark" data-toggle="tab" href="#i">我的发布</a>--}}
    {{--          </li>--}}
    {{--          <li class="nav-item">--}}
    {{--            <a class="nav-link text-dark" data-toggle="tab" href="#j">我的回复</a>--}}
    {{--          </li>--}}
    {{--          <li class="nav-item">--}}
    {{--            <a class="nav-link text-dark" data-toggle="tab" href="#k">我的经历</a>--}}
    {{--          </li>--}}
    {{--          <li class="nav-item">--}}
    {{--            <a class="nav-link text-dark" data-toggle="tab" href="#l">我的收藏</a>--}}
    {{--          </li>--}}
    {{--          <li class="nav-item">--}}
    {{--            <a class="nav-link text-dark" data-toggle="tab" href="#n">我的礼物</a>--}}
    {{--          </li>--}}
    {{--        </ul>--}}

    {{--        <!-- Tab panes -->--}}
    {{--        <div class="tab-content">--}}
    {{--          <div id="h" class="container tab-pane active"><br>--}}
    {{--            <h3>我的关注</h3>--}}
    {{--            <h5>富人有很多手段能拿到低成本的资金，然后用高杠杆去盈利。--}}
    {{--              如果成功就是一本万利、失败对他们来说不过是损失一小部分投资，高杠杆投机的诱惑就在于收益要远远大过失败的损失。--}}
    {{--              金融衍生品越丰富，金融市场越发达，但是，财富也会快速向上层流去。--}}

    {{--              前几年，赵（某）薇想用30.6亿元收购万家传媒的股份、成为第一大股东，其中本金只有6000万，杠杆达到了51倍，一时间火遍各大媒体。--}}

    {{--              最终，这次收购被叫停，该资本大鳄也被禁市。当初的还珠格格，如今竟然是资本大鳄，这个转身真是让人有点措手不及。--}}
    {{--              第二届中国国际进口博览会将于11月5号~10号在上海举行。10月29日，中国国际进口博览会组委会办公室主任、商务部副部长王炳南在商务部吹风会上表示，在各有关方面的共同努力下，目前第二届中国国际进口博览会国家展、企业展和第二届虹桥国际经济论坛的各项筹备工作已经基本就绪。--}}

    {{--              王炳南表示，国家展总展览面积三万平方米，集中展示各个国家的发展成就、营商环境和特色产业。各个国家馆的形象设计独具本国特色，共有64个国家（含中国）、3个国际组织参展，15个主宾国分别是：柬埔寨、捷克、法国、希腊、印度、意大利、牙买加、约旦、哈萨克斯坦、马来西亚、秘鲁、俄罗斯、泰国、乌兹别克斯坦和赞比亚。--}}

    {{--              此外，王炳南透露，国家馆中的中国馆场馆设计开放、大气、灵动、通透，别具东方的神韵和现代的气息，是一张亮丽的中国名片。以庆祝新中国成立70周年为主题，以高质量发展为主线，重点展示我国经济社会发展的历史性成就和新时代新机遇。企业展总展览面积33万平方米，由各国的参展商展示商品、技术和服务，实现“买全球、惠全球”。涵盖了装备、消费、食品、健康、服务等五大板块、七个展区，来自150多个国家地区的3000多家企业参展。--}}

    {{--              富人有很多手段能拿到低成本的资金，然后用高杠杆去盈利。--}}
    {{--              如果成功就是一本万利、失败对他们来说不过是损失一小部分投资，高杠杆投机的诱惑就在于收益要远远大过失败的损失。--}}
    {{--              金融衍生品越丰富，金融市场越发达，但是，财富也会快速向上层流去。--}}

    {{--              前几年，赵（某）薇想用30.6亿元收购万家传媒的股份、成为第一大股东，其中本金只有6000万，杠杆达到了51倍，一时间火遍各大媒体。--}}

    {{--              最终，这次收购被叫停，该资本大鳄也被禁市。当初的还珠格格，如今竟然是资本大鳄，这个转身真是让人有点措手不及。--}}
    {{--              第二届中国国际进口博览会将于11月5号~10号在上海举行。10月29日，中国国际进口博览会组委会办公室主任、商务部副部长王炳南在商务部吹风会上表示，在各有关方面的共同努力下，目前第二届中国国际进口博览会国家展、企业展和第二届虹桥国际经济论坛的各项筹备工作已经基本就绪。--}}

    {{--              王炳南表示，国家展总展览面积三万平方米，集中展示各个国家的发展成就、营商环境和特色产业。各个国家馆的形象设计独具本国特色，共有64个国家（含中国）、3个国际组织参展，15个主宾国分别是：柬埔寨、捷克、法国、希腊、印度、意大利、牙买加、约旦、哈萨克斯坦、马来西亚、秘鲁、俄罗斯、泰国、乌兹别克斯坦和赞比亚。--}}

    {{--              此外，王炳南透露，国家馆中的中国馆场馆设计开放、大气、灵动、通透，别具东方的神韵和现代的气息，是一张亮丽的中国名片。以庆祝新中国成立70周年为主题，以高质量发展为主线，重点展示我国经济社会发展的历史性成就和新时代新机遇。企业展总展览面积33万平方米，由各国的参展商展示商品、技术和服务，实现“买全球、惠全球”。涵盖了装备、消费、食品、健康、服务等五大板块、七个展区，来自150多个国家地区的3000多家企业参展。--}}
    {{--            </h5>--}}
    {{--          </div>--}}
    {{--          <div id="i" class="container tab-pane fade"><br>--}}
    {{--            <h3>我的发布</h3>--}}
    {{--            <p>富人有很多手段能拿到低成本的资金，然后用高杠杆去盈利。--}}
    {{--              如果成功就是一本万利、失败对他们来说不过是损失一小部分投资，高杠杆投机的诱惑就在于收益要远远大过失败的损失。--}}
    {{--              金融衍生品越丰富，金融市场越发达，但是，财富也会快速向上层流去。--}}

    {{--              前几年，赵（某）薇想用30.6亿元收购万家传媒的股份、成为第一大股东，其中本金只有6000万，杠杆达到了51倍，一时间火遍各大媒体。--}}

    {{--              最终，这次收购被叫停，该资本大鳄也被禁市。当初的还珠格格，如今竟然是资本大鳄，这个转身真是让人有点措手不及。--}}
    {{--              第二届中国国际进口博览会将于11月5号~10号在上海举行。10月29日，中国国际进口博览会组委会办公室主任、商务部副部长王炳南在商务部吹风会上表示，在各有关方面的共同努力下，目前第二届中国国际进口博览会国家展、企业展和第二届虹桥国际经济论坛的各项筹备工作已经基本就绪。--}}

    {{--              王炳南表示，国家展总展览面积三万平方米，集中展示各个国家的发展成就、营商环境和特色产业。各个国家馆的形象设计独具本国特色，共有64个国家（含中国）、3个国际组织参展，15个主宾国分别是：柬埔寨、捷克、法国、希腊、印度、意大利、牙买加、约旦、哈萨克斯坦、马来西亚、秘鲁、俄罗斯、泰国、乌兹别克斯坦和赞比亚。--}}

    {{--              此外，王炳南透露，国家馆中的中国馆场馆设计开放、大气、灵动、通透，别具东方的神韵和现代的气息，是一张亮丽的中国名片。以庆祝新中国成立70周年为主题，以高质量发展为主线，重点展示我国经济社会发展的历史性成就和新时代新机遇。企业展总展览面积33万平方米，由各国的参展商展示商品、技术和服务，实现“买全球、惠全球”。涵盖了装备、消费、食品、健康、服务等五大板块、七个展区，来自150多个国家地区的3000多家企业参展。--}}

    {{--              富人有很多手段能拿到低成本的资金，然后用高杠杆去盈利。--}}
    {{--              如果成功就是一本万利、失败对他们来说不过是损失一小部分投资，高杠杆投机的诱惑就在于收益要远远大过失败的损失。--}}
    {{--              金融衍生品越丰富，金融市场越发达，但是，财富也会快速向上层流去。--}}

    {{--              前几年，赵（某）薇想用30.6亿元收购万家传媒的股份、成为第一大股东，其中本金只有6000万，杠杆达到了51倍，一时间火遍各大媒体。--}}

    {{--              最终，这次收购被叫停，该资本大鳄也被禁市。当初的还珠格格，如今竟然是资本大鳄，这个转身真是让人有点措手不及。--}}
    {{--              第二届中国国际进口博览会将于11月5号~10号在上海举行。10月29日，中国国际进口博览会组委会办公室主任、商务部副部长王炳南在商务部吹风会上表示，在各有关方面的共同努力下，目前第二届中国国际进口博览会国家展、企业展和第二届虹桥国际经济论坛的各项筹备工作已经基本就绪。--}}

    {{--              王炳南表示，国家展总展览面积三万平方米，集中展示各个国家的发展成就、营商环境和特色产业。各个国家馆的形象设计独具本国特色，共有64个国家（含中国）、3个国际组织参展，15个主宾国分别是：柬埔寨、捷克、法国、希腊、印度、意大利、牙买加、约旦、哈萨克斯坦、马来西亚、秘鲁、俄罗斯、泰国、乌兹别克斯坦和赞比亚。--}}

    {{--              此外，王炳南透露，国家馆中的中国馆场馆设计开放、大气、灵动、通透，别具东方的神韵和现代的气息，是一张亮丽的中国名片。以庆祝新中国成立70周年为主题，以高质量发展为主线，重点展示我国经济社会发展的历史性成就和新时代新机遇。企业展总展览面积33万平方米，由各国的参展商展示商品、技术和服务，实现“买全球、惠全球”。涵盖了装备、消费、食品、健康、服务等五大板块、七个展区，来自150多个国家地区的3000多家企业参展。--}}
    {{--            </p>--}}
    {{--          </div>--}}
    {{--          <div id="j" class="container tab-pane fade"><br>--}}
    {{--            <h3>我的回复</h3>--}}
    {{--            <p>富人有很多手段能拿到低成本的资金，然后用高杠杆去盈利。--}}
    {{--              如果成功就是一本万利、失败对他们来说不过是损失一小部分投资，高杠杆投机的诱惑就在于收益要远远大过失败的损失。--}}
    {{--              金融衍生品越丰富，金融市场越发达，但是，财富也会快速向上层流去。--}}

    {{--              前几年，赵（某）薇想用30.6亿元收购万家传媒的股份、成为第一大股东，其中本金只有6000万，杠杆达到了51倍，一时间火遍各大媒体。--}}

    {{--              最终，这次收购被叫停，该资本大鳄也被禁市。当初的还珠格格，如今竟然是资本大鳄，这个转身真是让人有点措手不及。</p>--}}
    {{--          </div>--}}
    {{--          <div id="k" class="container tab-pane fade"><br>--}}
    {{--            <h3>Ta的收藏</h3>--}}
    {{--            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium--}}
    {{--              doloremque--}}
    {{--              laudantium,--}}
    {{--              totam rem aperiam.</p>--}}
    {{--          </div>--}}
    {{--          <div id="l" class="container tab-pane fade"><br>--}}
    {{--            <h3>Ta的收藏</h3>--}}
    {{--            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium--}}
    {{--              doloremque--}}
    {{--              laudantium,--}}
    {{--              totam rem aperiam.</p>--}}
    {{--          </div>--}}
    {{--          <div id="n" class="container tab-pane fade"><br>--}}
    {{--            <h3>我的的收藏</h3>--}}
    {{--            <p>富人有很多手段能拿到低成本的资金，然后用高杠杆去盈利。--}}
    {{--              如果成功就是一本万利、失败对他们来说不过是损失一小部分投资，高杠杆投机的诱惑就在于收益要远远大过失败的损失。--}}
    {{--              金融衍生品越丰富，金融市场越发达，但是，财富也会快速向上层流去。--}}

    {{--              前几年，赵（某）薇想用30.6亿元收购万家传媒的股份、成为第一大股东，其中本金只有6000万，杠杆达到了51倍，一时间火遍各大媒体。--}}

    {{--              最终，这次收购被叫停，该资本大鳄也被禁市。当初的还珠格格，如今竟然是资本大鳄，这个转身真是让人有点措手不及。--}}
    {{--              第二届中国国际进口博览会将于11月5号~10号在上海举行。10月29日，中国国际进口博览会组委会办公室主任、商务部副部长王炳南在商务部吹风会上表示，在各有关方面的共同努力下，目前第二届中国国际进口博览会国家展、企业展和第二届虹桥国际经济论坛的各项筹备工作已经基本就绪。--}}

    {{--              王炳南表示，国家展总展览面积三万平方米，集中展示各个国家的发展成就、营商环境和特色产业。各个国家馆的形象设计独具本国特色，共有64个国家（含中国）、3个国际组织参展，15个主宾国分别是：柬埔寨、捷克、法国、希腊、印度、意大利、牙买加、约旦、哈萨克斯坦、马来西亚、秘鲁、俄罗斯、泰国、乌兹别克斯坦和赞比亚。--}}

    {{--              此外，王炳南透露，国家馆中的中国馆场馆设计开放、大气、灵动、通透，别具东方的神韵和现代的气息，是一张亮丽的中国名片。以庆祝新中国成立70周年为主题，以高质量发展为主线，重点展示我国经济社会发展的历史性成就和新时代新机遇。企业展总展览面积33万平方米，由各国的参展商展示商品、技术和服务，实现“买全球、惠全球”。涵盖了装备、消费、食品、健康、服务等五大板块、七个展区，来自150多个国家地区的3000多家企业参展。--}}

    {{--              富人有很多手段能拿到低成本的资金，然后用高杠杆去盈利。--}}
    {{--              如果成功就是一本万利、失败对他们来说不过是损失一小部分投资，高杠杆投机的诱惑就在于收益要远远大过失败的损失。--}}
    {{--              金融衍生品越丰富，金融市场越发达，但是，财富也会快速向上层流去。--}}

    {{--              前几年，赵（某）薇想用30.6亿元收购万家传媒的股份、成为第一大股东，其中本金只有6000万，杠杆达到了51倍，一时间火遍各大媒体。--}}

    {{--              最终，这次收购被叫停，该资本大鳄也被禁市。当初的还珠格格，如今竟然是资本大鳄，这个转身真是让人有点措手不及。--}}
    {{--              第二届中国国际进口博览会将于11月5号~10号在上海举行。10月29日，中国国际进口博览会组委会办公室主任、商务部副部长王炳南在商务部吹风会上表示，在各有关方面的共同努力下，目前第二届中国国际进口博览会国家展、企业展和第二届虹桥国际经济论坛的各项筹备工作已经基本就绪。--}}

    {{--              王炳南表示，国家展总展览面积三万平方米，集中展示各个国家的发展成就、营商环境和特色产业。各个国家馆的形象设计独具本国特色，共有64个国家（含中国）、3个国际组织参展，15个主宾国分别是：柬埔寨、捷克、法国、希腊、印度、意大利、牙买加、约旦、哈萨克斯坦、马来西亚、秘鲁、俄罗斯、泰国、乌兹别克斯坦和赞比亚。--}}

    {{--              此外，王炳南透露，国家馆中的中国馆场馆设计开放、大气、灵动、通透，别具东方的神韵和现代的气息，是一张亮丽的中国名片。以庆祝新中国成立70周年为主题，以高质量发展为主线，重点展示我国经济社会发展的历史性成就和新时代新机遇。企业展总展览面积33万平方米，由各国的参展商展示商品、技术和服务，实现“买全球、惠全球”。涵盖了装备、消费、食品、健康、服务等五大板块、七个展区，来自150多个国家地区的3000多家企业参展。--}}
    {{--            </p>--}}
    {{--          </div>--}}
    {{--        </div>--}}
    {{--      </div>--}}
    {{--      <br>--}}

    {{--    </div>--}}

    {{--  </div>--}}

    <div class="clear"></div>

    {{-- 手机 底部 --}}
    <div class="">
      <br><br>
      @include('layouts._xs_footer')
    </div>

@stop
