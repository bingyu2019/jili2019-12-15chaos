@extends('layouts.app')
@section('title','灵魂深触-经历网 Bing ')

@section('content')

  {{--===========================  电脑版 ==================================--}}
  {{-- 电脑-顶部总导航 --}}
  @include('layouts._lg_other_header')

  {{-- 电脑-左则-内容区域 --}}
  <div class="col-md-3 col-xs-12 float-left d-none d-sm-block">
    {{-- 左则：头像-简介-社交信息 --}}
    <div class="user-info text-center"
         style="background: linear-gradient(to right, #7C3A08,#DE9008, #A75615);border-radius:5px;">

      <a href="{{ route('users.show', Auth::id()) }}"><h3 class="text-white pt-3 pb-2">作者：Bing </h3></a>

      <div>
        <a href="{{ route('users.show', Auth::id()) }}"><img class="img-fluid" src="/images/avatar/face250px.jpg"
                                                             style="border-radius:5px;"></a>
      </div>

      <div class="mt-3">
        <h5>❂ 个人简介</h5>
        <p>思想有多远，我就走多远！</p>
      </div>
      {{--关注按钮--}}
      @include('users._follow_form')

      {{-- 私信 --}}
      @include('users._private_letter')

      <br><br>
      {{-- 帖子推荐 --}}
      @include('topics._lg_topics_recommendation')

    </div>
  </div>

  {{-- 电脑-右则-内容区域 --}}
  <div class="col-md-9 col-xs-12 float-left d-none d-sm-block">
    {{-- 右则-用户名-头像-通知 --}}
    <div class="container">
      <div class="text-white">

        <div style="height: 90px;border-radius:5px;background: linear-gradient(to top, #000, #7C3A08,#EB9A02);">

          {{-- 帖子标题--}}
          <h3 class="text-center pt-4">印巴关系突破，2500万印度锡克教徒完成朝圣心愿</h3>

        </div>
        {{-- 帖子内容区域--}}
        <div class="text-dark border-radius text-container" style="width:100%;">
          <br>
          {{-- 量统计：发表时间-回复-浏览-点赞-礼赞-收藏量 --}}
          <div class="topic-show-total container text-cente float-left">
            <div class="float-left" style="width: 33%;height: 25px;"></div>
            {{-- 发表时间 --}}
            <div class="float-left" style="width:11%;"><a href="" data-toggle="tooltip"
                                                          data-placement="top" title="发布于：2019-10-30 14:24:20">🕒
                一年前 </a>
            </div>
            {{-- 浏览次数 --}}
            <div class="float-left" style="width:8%;"><a href="" data-toggle="tooltip"
                                                         data-placement="top" title="阅读"> 👀 222 </a>
            </div>
            {{-- 回复次数 --}}
            <div class="float-left" style="width:8%;"><a href="" data-toggle="tooltip"
                                                         data-placement="top" title="回复"> 💬 222 </a>
            </div>
            {{-- 收藏量 --}}
            <div class="float-left" style="width:8%;"><a href="" data-toggle="tooltip"
                                                         data-placement="top" title="收藏"> 🤍 222 </a>
            </div>
          </div>
          <br>
          {{-- 帖子正文 --}}
          <div style="padding: 20px;">
            <h5>
              央视新闻客户端11月10日消息，当地时间9日，印度与巴基斯坦首次开通边境免签通道，来自印度一侧的锡克教徒可以很方便地来到位于巴基斯坦一侧的“格尔达布尔”锡克教神庙，进行朝圣活动。


              “格尔达布尔”锡克教神庙是为了纪念锡克教创始人古鲁·那纳克而建，那里也是全世界3000万锡克教徒心中的圣地。1947年印巴分治后，这座锡克教神庙被划在了巴基斯坦境内，距离印巴边境只有4公里。目前，印度境内有近2500万锡克教徒，其中大约80%都生活在与巴基斯坦接壤的旁遮普邦。对于印度锡克教徒们来说，前往“格尔达布尔”锡克教神庙朝圣一直是他们的心愿，但由于印巴历史上的三次战争和无数小规模冲突，要实现这样的心愿却非常困难。


              <div class="operate">
                <hr>
                <a href="" class="btn btn-outline-secondary btn-sm" role="button">
                  <i class="far fa-edit"></i> 编辑
                </a>
                <form action="" method="post"
                      style="display: inline-block;"
                      onsubmit="return confirm('您确定要删除吗？');">
                  {{--                                    {{ csrf_field() }}--}}
                  {{--                                    {{ method_field('DELETE') }}--}}
                  <button type="submit" class="btn btn-outline-secondary btn-sm">
                    <i class="far fa-trash-alt"></i> 删除
                  </button>
                </form>
              </div>
            </h5>
          </div>
        </div>
      </div>
      <br>
      {{-- 赏花--}}
      <div class="border-radius text-container topic-show-total float-left" style="width:100%;">
        <h3 class="pl-3 float-left pt-3 pr-3 pb-1">🌺 <a href="#">2 人赏花</a></h3>
        <img src="/images/avatar/Founder.png" class="round-avatar float-left mt-2 mr-2" >
        <img src="/images/avatar/Founder.png" class="round-avatar float-left mt-2 mr-2" >
        <img src="/images/avatar/Founder.png" class="round-avatar float-left mt-2 mr-2" >
        <img src="/images/avatar/Founder.png" class="round-avatar float-left mt-2 mr-2" >
        <img src="/images/avatar/Founder.png" class="round-avatar float-left mt-2 mr-2" >
        <img src="/images/avatar/face100px.jpg" class="round-avatar float-left mt-2 mr-1" >
      </div>
      {{-- 赏銀 --}}
      <div class="border-radius text-container topic-show-total float-left mt-3" style="width:100%;">
        <h3 class="pl-3 float-left pt-3 pr-3 pb-1">💰 <a href="#" class="mb-2">3 人赏银</a></h3>
        <img src="/images/avatar/Founder.png" class="round-avatar float-left mt-2 mr-2" >
        <img src="/images/avatar/face100px.jpg" class="round-avatar float-left mt-2 mr-2">
        <img src="/images/avatar/face100px.jpg" class="round-avatar float-left mt-2 mr-2">
        <img src="/images/avatar/face100px.jpg" class="round-avatar float-left mt-2 mr-2">
        <img src="/images/avatar/face100px.jpg" class="round-avatar float-left mt-2 mr-2">
        <img src="/images/avatar/face100px.jpg" class="round-avatar float-left mt-2 mr-2">
        <img src="/images/avatar/face100px.jpg" class="round-avatar float-left mt-2 mr-2">
        <img src="/images/avatar/face100px.jpg" class="round-avatar float-left mt-2 mr-2">

      </div>
      {{-- 赏礼 --}}
      <div class="border-radius text-container topic-show-total float-left mt-3" style="width:100%;">
        <h3 class="pl-3 float-left pt-3 pr-3 pb-1">🎁 <a href="#" class="pb-1">1 人礼赞</a></h3>
        <img src="/images/avatar/Founder.png" class="round-avatar float-left mt-2 mr-2" >
        <img src="/images/avatar/face100px.jpg" class="round-avatar float-left mt-2 mr-2">
      </div>

      {{-- 回复列表 --}}
      <div class="border-radius text-container topic-show-total float-left mt-3" style="width:100%;">
        <h3 class="pl-3 float-left pt-3 pr-3 pb-1">🎁 <a href="#" class="pb-1">1 人礼赞</a></h3>
        <img src="/images/avatar/Founder.png" class="round-avatar float-left mt-2 mr-2" >
        <img src="/images/avatar/face100px.jpg" class="round-avatar float-left mt-2 mr-2">
      </div>
    </div>
  </div>





  {{--===========================  手机版 ==================================--}}
  {{-- 手机顶部总导航 --}}
  <div class="d-block d-sm-none">
    <br><br><br><br>
    @include('layouts._xs_header')
  </div>

  {{-- 手机-头像-简单-社交统计 --}}
  <div class="col-xs-12 float-left d-block d-sm-none user-info text-center"
       style="background: linear-gradient(to right, #7C3A08,#DE9008, #A75615);border-radius:5px;">
    {{-- 作者 --}}
    <a href="{{ route('users.show', Auth::id()) }}"><h3 class="pt-3 pb-2 text-light">作者：Bing </h3></a>

    {{-- 左则：头像-简介-社交信息 --}}
    <div>
      <a href="{{ route('users.show', Auth::id()) }}"><img class="img-fluid" src="/images/avatar/face250px.jpg"
                                                           style="border-radius:5px;"></a>
    </div>

    <div class="mt-3">
      <h5>❂ 个人简介</h5>
      <p>思想有多远，我就走多远！</p>
    </div>

    {{--关注按钮--}}
    @include('users._follow_form')

    {{-- 私信 --}}
    @include('users._private_letter')
    <br><br>
  </div>

  <div class="clear"></div>

  {{-- 帖子推荐 --}}
  @include('topics._xs_topics_recommendation')

  {{-- 帖子 --}}
  <div class="col-xs-12 float-left d-block d-sm-none text-white text-center">
    <div class="text-dark text-container" style="width:100%;">

      {{-- 帖子标题 --}}
      <div style="background: linear-gradient(to bottom, #AA6A21,#E5A55D);">
        <h4 class="text-center text-dark pt-5 pb-3" style="width: 98%;"><b>印巴关系突破，2500万印度锡克教徒完成朝圣心愿</b></h4>
      </div>

      {{-- 统计区域--}}
      <div class="text-dark" style="width:100%;background: #E5A55D;">
        <div class=" container text-dark border-radius">
          {{-- 量统计：发表时间-回复-浏览-点赞-礼赞-收藏量 --}}
          <div class="topic-show-total container">
            <div class="" style="width: 22%;height: 25px;"></div>
            {{-- 发表时间 --}}
            <div class="float-left" style="width:30%;"><a href="" data-toggle="tooltip"
                                                          data-placement="top" title="发布于：2019-10-30 14:24:20">🕒
                一年前</a>
            </div>
            {{-- 浏览次数 --}}
            <div class="float-left" style="width:20%;"><a href="" data-toggle="tooltip"
                                                          data-placement="top" title="阅读"> 👀 222 </a>
            </div>
            {{-- 回复次数 --}}
            <div class="float-left" style="width:20%;"><a href="" data-toggle="tooltip"
                                                          data-placement="top" title="回复"> 💬 222 </a>
            </div>
            {{-- 收藏量 --}}
            <div class="float-left" style="width:20%;"><a href="" data-toggle="tooltip" data-placement="top" title="收藏">
                🤍 222 </a>
            </div>
            <br>
          </div>

          <br><br><br><br>
          {{-- 帖子正文 --}}
          <div>
            <h5>
              央视新闻客户端11月10日消息，当地时间9日，印度与巴基斯坦首次开通边境免签通道，来自印度一侧的锡克教徒可以很方便地来到位于巴基斯坦一侧的“格尔达布尔”锡克教神庙，进行朝圣活动。


              “格尔达布尔”锡克教神庙是为了纪念锡克教创始人古鲁·那纳克而建，那里也是全世界3000万锡克教徒心中的圣地。1947年印巴分治后，这座锡克教神庙被划在了巴基斯坦境内，距离印巴边境只有4公里。目前，印度境内有近2500万锡克教徒，其中大约80%都生活在与巴基斯坦接壤的旁遮普邦。对于印度锡克教徒们来说，前往“格尔达布尔”锡克教神庙朝圣一直是他们的心愿，但由于印巴历史上的三次战争和无数小规模冲突，要实现这样的心愿却非常困难。


              经过多年的协商之后，印巴两国终于达成协议，决定开通一条免签通道，以方便印度锡克教徒前来巴基斯坦一侧朝圣。免签通道开通后，每天可以允许5000人通行。


              9日当天，印度总理莫迪前往印巴边界的边防站参加免签通道开通仪式，他在讲话中感谢巴基斯坦总理伊姆兰·汗尊重印度锡克教徒的宗教情感，以及为通道开通所做的努力。

              仪式之后，印度前总理辛格率领由数百人组成的朝圣队伍，进入巴基斯坦一侧。

              巴基斯坦总理伊姆兰·汗在巴基斯坦边境一侧参加了开通仪式，并欢迎印度朝圣者的到来。

              最近一段时间来，印巴两国再次因克什米尔问题而关系紧绷，在这种情况下，免签通道依然得以开通，堪称印巴关系的一次突破。


              印度锡克教徒 辛格：巴方把一切安排得都很好。在这条免签走廊开通之前，我们来这里一趟不知有多麻烦，现在好太多了，我们确实感到很方便。


              本月12日正逢那纳克诞辰550周年，预计将有大约8000~10000名朝圣者从全球各地抵达“格尔达布尔”神庙，参加盛大的纪念活动。

              央视新闻客户端11月10日消息，当地时间9日，印度与巴基斯坦首次开通边境免签通道，来自印度一侧的锡克教徒可以很方便地来到位于巴基斯坦一侧的“格尔达布尔”锡克教神庙，进行朝圣活动。


              “格尔达布尔”锡克教神庙是为了纪念锡克教创始人古鲁·那纳克而建，那里也是全世界3000万锡克教徒心中的圣地。1947年印巴分治后，这座锡克教神庙被划在了巴基斯坦境内，距离印巴边境只有4公里。目前，印度境内有近2500万锡克教徒，其中大约80%都生活在与巴基斯坦接壤的旁遮普邦。对于印度锡克教徒们来说，前往“格尔达布尔”锡克教神庙朝圣一直是他们的心愿，但由于印巴历史上的三次战争和无数小规模冲突，要实现这样的心愿却非常困难。


              经过多年的协商之后，印巴两国终于达成协议，决定开通一条免签通道，以方便印度锡克教徒前来巴基斯坦一侧朝圣。免签通道开通后，每天可以允许5000人通行。


              9日当天，印度总理莫迪前往印巴边界的边防站参加免签通道开通仪式，他在讲话中感谢巴基斯坦总理伊姆兰·汗尊重印度锡克教徒的宗教情感，以及为通道开通所做的努力。

              仪式之后，印度前总理辛格率领由数百人组成的朝圣队伍，进入巴基斯坦一侧。

              巴基斯坦总理伊姆兰·汗在巴基斯坦边境一侧参加了开通仪式，并欢迎印度朝圣者的到来。

              最近一段时间来，印巴两国再次因克什米尔问题而关系紧绷，在这种情况下，免签通道依然得以开通，堪称印巴关系的一次突破。


              印度锡克教徒 辛格：巴方把一切安排得都很好。在这条免签走廊开通之前，我们来这里一趟不知有多麻烦，现在好太多了，我们确实感到很方便。


              本月12日正逢那纳克诞辰550周年，预计将有大约8000~10000名朝圣者从全球各地抵达“格尔达布尔”神庙，参加盛大的纪念活动。
            </h5>
          </div>

          <br>
          <br>

        </div>

      </div>


    </div>

    <div class="text-dark text-container" style="width:100%;">
      {{--      <div class="mx-auto">--}}
      {{--        <div class="float-left" style="width:30%;"><a href=""><img--}}
      {{--              src="/images/icon/md-up.png" alt="" style="width: 25px;" data-toggle="tooltip"--}}
      {{--              data-placement="top" title="赞一朵">222 </a>--}}
      {{--        </div>--}}
      {{--        --}}{{-- 打赏 --}}
      {{--        <div class="float-left" style="width:30%;"><a href=""><img--}}
      {{--              src="/images/icon/md-reward.png" alt="" style="width: 28px;"--}}
      {{--              data-toggle="tooltip"--}}
      {{--              data-placement="top" title="打赏">222 </a>--}}
      {{--        </div>--}}
      {{--        <div class="float-left" style="width:30%;"><a href=""><img--}}
      {{--              src="/images/icon/md-gift.png" alt="" style="width: 25px;" data-toggle="tooltip"--}}
      {{--              data-placement="top" title="礼赞">222 </a>--}}
      {{--        </div>--}}

      {{--      </div>--}}
    </div>
  </div>








  <div class="clear"></div>

  {{-- 手机 底部 --}}
  <div class="">
    <br><br>
    @include('layouts._xs_footer')
  </div>

@stop

