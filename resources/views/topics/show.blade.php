@extends('layouts.app')
@section('title','灵魂深触-经历网 Bing ')
@section('content')
  {{--===========================  电脑版 ==================================--}}
  @include('layouts._xs_header')
  {{-- 电脑-顶部总导航 --}}
  @include('layouts._lg_other_header')
  {{-- 电脑-左则-内容区域 --}}
  <div class="col-md-3 col-xs-12 float-left">
    {{-- 左则：头像-简介-社交信息 --}}
    <div class="user-info text-center"
         style="background: linear-gradient(to right, #7C3A08,#DE9008, #A75615);border-radius:5px;">
      <a href="{{ route('users.show', Auth::id()) }}"><h3 class="text-white pt-3 pb-2 hover-ccc">作者：Bing </h3></a>
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
  <div class="col-md-9 col-xs-12 float-left ">
    {{-- 右则-用户名-头像-通知 --}}
    <div class="container">
      <div class="text-white">
        <div class="header-color" style="height: 90px;">
          {{-- 帖子标题--}}
          <h3 class="text-center pt-4 hover-ccc">印巴关系突破，2500万印度锡克教徒完成朝圣心愿</h3>
        </div>
        {{-- 帖子内容区域--}}
        <div class="text-dark border-radius text-container">
          <br>
          {{-- 量统计：发表时间-回复-浏览-点赞-礼赞-收藏量 --}}
          <div class="topic-show-total container text-cente float-left hover-ccc">
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
          {{-- 帖子正文 ===========================--}}
          <div style="padding: 20px;">
            <h5>
              央视新闻客户端11月10日消息，当地时间9日，印度与巴基斯坦首次开通边境免签通道，来自印度一侧的锡克教徒可以很方便地来到位于巴基斯坦一侧的“格尔达布尔”锡克教神庙，进行朝圣活动。
              “格尔达布尔”锡克教神庙是为了纪念锡克教创始人古鲁·那纳克而建，那里也是全世界3000万锡克教徒心中的圣地。1947年印巴分治后，这座锡克教神庙被划在了巴基斯坦境内，距离印巴边境只有4公里。目前，印度境内有近2500万锡克教徒，其中大约80%都生活在与巴基斯坦接壤的旁遮普邦。对于印度锡克教徒们来说，前往“格尔达布尔”锡克教神庙朝圣一直是他们的心愿，但由于印巴历史上的三次战争和无数小规模冲突，要实现这样的心愿却非常困难。
              <div class="operate">
                <hr>
                {{-- data-toggle="tooltip" title=" 举报违规内容，共建美好家园 "  --}}
                <a href="" class="btn btn-outline-secondary btn-sm" role="button"  data-toggle="modal" data-target="#report"> 举报</a>
                <a href="" class="btn btn-outline-secondary btn-sm" role="button"> 编辑 </a>

                <form action="" method="post"
                      style="display: inline-block;"
                      onsubmit="return confirm('您确定要删除吗？');">
                  {{--                                    {{ csrf_field() }}--}}
                  {{--                                    {{ method_field('DELETE') }}--}}
                  <button type="submit" class="btn btn-outline-secondary btn-sm"> 删除</button>
                </form>
              </div>
            </h5>
          </div>
        </div>
      </div>
      <br>
      {{-- 送花 ====================================--}}
      <div class="border-radius followers-container topic-show-total float-left">
        <a href="#" data-toggle="modal" data-target="#followers"><h2 class="pl-3 float-left pt-3 pr-3 pb-1">🌺 <small>2
              人送花</small></h2></a>
        <img src="https://cdn.learnku.com/uploads/avatars/27828_1572963233.png!/both/400x400"
             class="round-avatar float-left m-2 mt-3">
        <img src="https://cdn.learnku.com/uploads/images/201801/03/1/ow6ZdlsdS2.jpg"
             class="round-avatar float-left m-2 mt-3">
      </div>
      {{-- 奖赏 --}}
      <div class="border-radius followers-container topic-show-total float-left mt-4">
        <a href="#" class="mb-2" data-toggle="modal" data-target="#gold"><h2
            class="pl-3 float-left pt-3 pr-3 pb-1">💰 <small>3 人奖赏</small></h2></a>
        <img src="https://cdn.learnku.com/uploads/avatars/29780_1537002042.jpg!/both/400x400"
             class="round-avatar float-left m-2 mt-3">
        <img src="https://cdn.learnku.com/uploads/avatars/42627_1560587560.jpg!/both/400x400"
             class="round-avatar float-left m-2 mt-3">
      </div>
      {{-- 礼赞 --}}
      <div class="border-radius followers-container topic-show-total float-left mt-4">
        <a href="#" class="pb-1" data-toggle="modal" data-target="#appreciation"><h2
            class="pl-3 float-left pt-3 pr-3 pb-1">🎁
            <small>1 人礼赞</small></h2></a>
        <img src="/images/avatar/Founder.png" class="round-avatar float-left m-2 mt-3">
        <img src="https://cdn.learnku.com/uploads/avatars/20049_1571133240.png!/both/400x400"
             class="round-avatar float-left m-2 mt-3">
      </div>


      {{--为帖子送花模态框==================================--}}
      <div class="container">
        <div class="modal fade" id="followers">
          <div class="modal-dialog modal-lg">
            <div class=" modal-content">
              {{--模态框头部--}}
              <div class="modal-header  my-modal-header" >
                <h4 class="modal-title text-light">送花 <span class="hover-ccc">🌺</span></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body rounded">
                <form action="">
                  {{--送花用户名--}}
                  <h5><b>Jsonbom</b></h5>
                  <h5>您现在拥有金币 <b style="color: red;">0</b> 个 　　银币 <b style="color: red;">0</b> 个　　１<span
                      class="hover-ccc">🌺</span> ＝１银币</h5>
                  <h5><a href="" type="btn" class="btn wallets-a">去换银币</a> <a href="" type="btn" class="btn wallets-a">去兑换金币</a>
                  </h5>
                  <div class="form-group ">
                    <h5>给<a href="" class="letter">《印巴关系突破，2500万印度锡克教徒完成朝圣心愿》</a>的作者 <a href=""
                                                                                        class="letter"><b>Bing</b></a>
                      赠送小红花 <span class="hover-ccc">🌺</span></h5>

                    <input type="number" class="form-control" id="" placeholder="请输入赠送小红花的整数数量">
                  </div>
                  {{--　这里用 vue 的 v-model --}}
                  <h5 class="ml-2 text-center"><b style="color: red;"> 5 </b>朵　支付银币<b style="color: red;"> 5 </b>个</h5>
                  {{--模态框底部--}}
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-lg">确定</button>

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


      {{--奖赏帖子模态框==================================--}}
      <div class="container">
        <div class="modal fade" id="gold">
          <div class="modal-dialog modal-lg">
            <div class=" modal-content">
              {{--模态框头部--}}
              <div class="modal-header  my-modal-header" >
                <h4 class="modal-title text-light">奖赏 <span class="hover-ccc">💰</span></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body rounded">
                <form action="">
                  {{--送花用户名--}}
                  <h5><b>Jsonbom</b></h5>
                  <h5>您现在拥有金币 <b style="color: red;">0</b> 个 　　银币 <b style="color: red;">0</b> 个 　　奖赏需金币　1金币或以上</h5>
                  <h5><a href="" type="btn" class="btn wallets-a">去兑换金币</a>
                  </h5>
                  <div class="form-group ">
                    <h5>奖赏<a href="" class="letter">《印巴关系突破，2500万印度锡克教徒完成朝圣心愿》</a>的作者 <a href=""
                                                                                         class="letter"><b>Bing</b></a>
                      金币<span class="hover-ccc">💰</span></h5>

                    <input type="number" class="form-control" id="" placeholder="请输入奖赏金币的整数数量">
                  </div>
                  {{--　这里用 vue 的 v-model --}}
                  <h5 class="ml-2 text-center"><b style="color: red;"> 5 </b>个</h5>
                  {{--模态框底部--}}
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-lg">确定</button>

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


      {{--礼赞帖子模态框==================================--}}
      <div class="container">
        <div class="modal fade" id="appreciation">
          <div class="modal-dialog modal-lg">
            <div class=" modal-content">
              {{--模态框头部--}}
              <div class="modal-header  my-modal-header">
                <h4 class="modal-title text-light">礼赞 <span class="hover-ccc">🎁</span></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body rounded">
                <form action="">
                  {{--送花用户名--}}
                  <h5><b>Jsonbom</b></h5>
                  <h5>您现在拥有礼物 <b style="color: red;">0</b> 份</h5>
                  <h5><a href="" type="btn" class="btn wallets-a">去购买礼物</a> <a href="" type="btn" class="btn wallets-a">去兑换金币</a>
                  </h5>
                  <h5>您现在拥有礼物 <b style="color: red;">3</b> 份</h5>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" value="">
                      <h5 class="float-left ml-２">🎁<a href="" class="letter">《你是我心里最美的月光》</a>使用版权　1　次 </h5>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" value="">
                      <h5 class="float-left ml-２">🎁<a href="" class="letter">《你是我心里最美的月光》</a>使用版权　1　次 </h5>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" value=""><h5 class="float-left ml-２">🎁<a
                          href="" class="letter">《你是我心里最美的月光》</a>使用版权　1　次 </h5>
                    </label>
                  </div>
                  <div class="form-group ">
                    <h5>您确定要把选中的礼物送给<a href="" class="letter">《印巴关系突破，2500万印度锡克教徒完成朝圣心愿》</a>的作者 <a href=""
                                                                                                   class="letter"><b>Bing</b></a>吗？<span
                        class="hover-ccc">🎁</span></h5>
                  </div>
                  {{--模态框底部--}}
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-lg">确定</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


      {{-- 回复输入框================================= --}}
      <div class="border-radius text-container  float-left mt-4">
        <br>
        <h5 class="reply-container p-3">
          ⛔ 请勿发布不友善或者负能量的内容。与人为善，比有才华更重要！
        </h5>
        <div class="reply-container mt-4">
          <textarea name="" id="" class="form-control"
                    rows="5"></textarea>
        </div>
        <a href="#"><h2 class="float-left m-3 ml-4">😶</h2></a>
        <a href="#"><h2 class="float-left mt-3">🌁</h2></a>
        <button type="submit" class="btn btn-dark float-right m-3" id="editor"> &nbsp;评论 &nbsp;</button>
      </div>


      {{-- 回复列表 --}}
      <div class="border-radius text-container text-light float-left mt-4">
        <img src="https://cdn.learnku.com/uploads/avatars/27828_1572963233.png!/both/400x400"
             class="square-avatar float-left m-2 mt-3 ml-3">
        <a href="" class="text-dark float-left m-2 mt-4 ml-3"><h4><b>Smoker</b></h4></a>
        <small class="grade-box login float-left m-2 mt-4 ml-1">Founder</small>
        <div class="clear" style="border-bottom: solid 1px white;"></div>
        <h5 class="text-dark p-3">
          为了简便起见，第一个字节中 FIN=1，opcode 设置为
          1，接下来检查数据的长度，这部分内容和解析数据长度的步骤刚好相反，就不再分析了，如果你把之前的都看懂了，这里也应该没有问题，但是特别注意了，之前我们就已经提到过，服务器返回给客户端的数据，不能加密，所以 mask
          必须设置为 0，mask key 的长度为 0。
          <br><br>
          <small>🕒 昨天</small>
        </h5>
        <div class="clear" style="border-bottom: solid 1px white;"></div>
        <table class="float-left text-center reply-list pt-1" style="width: 60%;height: 50px;">
          <tr>
            <td><a href="" data-toggle="modal" data-target="#replyFollowers"><h4 class="pt-2" data-toggle="tooltip"
                                                                                 title=" 送花 ">🌺 <small>888</small></h4>
              </a></td>
            <td><a href="" data-toggle="modal" data-target="#replyGold"><h4 class="pt-2" data-toggle="tooltip"
                                                                            title=" 赏银 ">💰 <small>888</small></h4></a>
            </td>
            <td><a href="" data-toggle="modal" data-target="#replYappreciation"><h4 class="pt-2" data-toggle="tooltip"
                                                                                    title=" 礼赞 ">🎁 <small>8888</small>
                </h4></a></td>
            <td><a href="" data-toggle="modal" data-target="#replReport"><h4 class="pt-2" data-toggle="tooltip"
                                                                         title=" 举报违规内容，共建美好家园 ">
                  &nbsp;🚩<small>&nbsp;</small>
                </h4></a></td>
            <td><a href="" class="btn btn-outline-secondary btn-sm" role="button">编辑</a></td>
            <td>
              <form action="" method="post"
                    style="display: inline-block;"
                    onsubmit="return confirm('您确定要删除吗？');">
                {{--                                    {{ csrf_field() }}--}}
                {{--                                    {{ method_field('DELETE') }}--}}
                <button type="submit" class="btn btn-outline-secondary btn-sm">删除</button>
              </form>
            </td>
          </tr>
        </table>
      </div>
      <div class="border-radius text-container text-light float-left mt-4">
        <img src="https://cdn.learnku.com/uploads/avatars/27828_1572963233.png!/both/400x400"
             class="square-avatar float-left m-2 mt-3 ml-3">
        <a href="" class="text-dark float-left m-2 mt-4 ml-3"><h4><b>Bing</b></h4></a>
        <small class="grade-box login float-left m-2 mt-4 ml-1">Founder</small>
        <div class="clear" style="border-bottom: solid 1px white;"></div>
        <h5 class="text-dark p-3">
          为了简便起见，第一个字节中 FIN=1，opcode 设置为
          <br><br>
          <small>🕒 昨天</small>
        </h5>
        <div class="clear" style="border-bottom: solid 1px white;"></div>
        <table class="float-left text-center reply-list pt-1" style="width: 60%;height: 50px;">
          <tr>
            <td><a href="" data-toggle="modal" data-target="#replyFollowers"><h4 class="pt-2" data-toggle="tooltip"
                                                                                 title=" 送花 ">🌺 <small>888</small></h4>
              </a></td>
            <td><a href="" data-toggle="modal" data-target="#replyGold"><h4 class="pt-2" data-toggle="tooltip"
                                                                            title=" 赏银 ">💰 <small>8</small></h4></a>
            </td>
            <td><a href="" data-toggle="modal" data-target="#replYappreciation"><h4 class="pt-2" data-toggle="tooltip"
                                                                                    title=" 礼赞 ">🎁 <small>88</small>
                </h4></a></td>
            <td><a href="" data-toggle="modal" data-target="#replReport"><h4 class="pt-2" data-toggle="tooltip"
                                                                         title=" 举报违规内容，共建美好家园 ">
                  &nbsp;🚩<small>&nbsp;</small>
                </h4></a></td>
            <td><a href="" class="btn btn-outline-secondary btn-sm" role="button"> 编辑 </a></td>
            <td>
              <form action="" method="post"
                    style="display: inline-block;"
                    onsubmit="return confirm('您确定要删除吗？');">
                {{--                                    {{ csrf_field() }}--}}
                {{--                                    {{ method_field('DELETE') }}--}}
                <button type="submit" class="btn btn-outline-secondary btn-sm"> 删除</button>
              </form>
            </td>
          </tr>
        </table>


        {{--为评论送花模态框==================================--}}
        <div class="container">
          <div class="modal fade" id="replyFollowers">
            <div class="modal-dialog modal-lg">
              <div class=" modal-content">
                {{--模态框头部--}}
                <div class="modal-header  my-modal-header" >
                  <h4 class="modal-title text-light">送花 <span class="hover-ccc">🌺</span></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body rounded text-dark">
                  <form action="">
                    {{--送花用户名--}}
                    <h5><b>Jsonbom</b></h5>
                    <h5>您现在拥有金币 <b style="color: red;">0</b> 个 　　银币 <b style="color: red;">0</b> 个　　１<span
                        class="hover-ccc">🌺</span> ＝１银币</h5>
                    <h5><a href="" type="btn" class="btn wallets-a">去换银币</a> <a href="" type="btn"
                                                                                class="btn wallets-a">去兑换金币</a>
                    </h5>
                    <div class="form-group ">
                      <h5>给<a href="" class="letter"><b> Smoker </b></a>的回复 <a href=""
                                                                               class="letter"></a>赠送小红花 <span
                          class="hover-ccc">🌺</span></h5>

                      <input type="number" class="form-control" id="" placeholder="请输入赠送小红花的整数数量">
                    </div>
                    {{--　这里用 vue 的 v-model --}}
                    <h5 class="ml-2 text-center"><b style="color: red;"> 5 </b>朵　支付银币<b style="color: red;"> 5 </b>个
                    </h5>
                    {{--模态框底部--}}
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-danger btn-lg">确定</button>

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>


        {{--奖赏评论模态框==================================--}}
        <div class="container">
          <div class="modal fade" id="replyGold">
            <div class="modal-dialog modal-lg">
              <div class=" modal-content">
                {{--模态框头部--}}
                <div class="modal-header  my-modal-header" >
                  <h4 class="modal-title text-light">奖赏 <span class="hover-ccc">💰</span></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body rounded text-dark">
                  <form action="">
                    {{--送花用户名--}}
                    <h5><b>Jsonbom</b></h5>
                    <h5>您现在拥有金币 <b style="color: red;">0</b> 个 　　银币 <b style="color: red;">0</b> 个 　　奖赏需金币　1金币或以上</h5>
                    <h5><a href="" type="btn" class="btn wallets-a">去兑换金币</a>
                    </h5>
                    <div class="form-group ">
                      <h5>奖赏<a href=""
                               class="letter"><b>Bing</b></a>在<a href="" class="letter">《印巴关系突破，2500万印度锡克教徒完成朝圣心愿》</a>中的回复
                        金币<span class="hover-ccc">💰</span></h5>

                      <input type="" class="form-control" id="" placeholder="请输入奖赏金币的数量">
                    </div>
                    {{--　这里用 vue 的 v-model --}}
                    <h5 class="ml-2 text-center"><b style="color: red;"> 5 </b>个</h5>
                    {{--模态框底部--}}
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-danger btn-lg">确定</button>

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>


        {{--礼赞评论模态框==================================--}}
        <div class="container">
          <div class="modal fade" id="replYappreciation">
            <div class="modal-dialog modal-lg">
              <div class=" modal-content">
                {{--模态框头部--}}
                <div class="modal-header  my-modal-header" >
                  <h4 class="modal-title text-light">礼赞 <span class="hover-ccc">🎁</span></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body rounded text-dark">
                  <form action="">
                    {{--送花用户名--}}
                    <h5><b>Jsonbom</b></h5>
                    <h5>您现在拥有礼物 <b style="color: red;">0</b> 份</h5>
                    <h5><a href="" type="btn" class="btn wallets-a">去购买礼物</a> <a href="" type="btn"
                                                                                 class="btn wallets-a">去兑换金币</a>
                    </h5>
                    <h5>您现在拥有礼物 <b style="color: red;">3</b> 份</h5>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">
                        <h5 class="float-left ml-２">🎁<a href="" class="letter">《你是我心里最美的月光》</a>使用版权　1　次 </h5>
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">
                        <h5 class="float-left ml-２">🎁<a href="" class="letter">《你是我心里最美的月光》</a>使用版权　1　次 </h5>
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""><h5 class="float-left ml-２">🎁<a
                            href="" class="letter">《你是我心里最美的月光》</a>使用版权　1　次 </h5>
                      </label>
                    </div>
                    <div class="form-group ">
                      <h5>您确定要把选中的礼物送给<a href="" class="letter">《印巴关系突破，2500万印度锡克教徒完成朝圣心愿》</a>的回复者 <a href=""
                                                                                                      class="letter"><b>Bing</b></a>吗？<span
                          class="hover-ccc">🎁</span></h5>
                    </div>
                    {{--模态框底部--}}
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-danger btn-lg">确定</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>


        {{--举报评论-模态框==================================--}}
        <div class="container">
          <div class="modal fade" id="replReport">
            <div class="modal-dialog modal-lg">
              <div class=" modal-content text-dark sixteen">
                {{--模态框头部--}}
                <div class="modal-header header-color">
                  <h4 class="modal-title text-light">举报评论 <span class="hover-ccc">🚩</span></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="rounded container m-3">
                  <form action="">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">侵权（未经授权，滥用原创。冒充他人，侵犯名誉等）
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">欺诈、散播谣言、不实信息
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">违法、犯罪、暴力、血腥
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">色情、骚扰、诱导、行骗
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">人身攻击、挑衅辱骂、恶意行为
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">其它理由：请补充说明
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label reply-container">
                        <textarea name="" id="" class="form-control" rows="5"></textarea>
                      </label>
                    </div>
                    <button type="submit" class="report btn btn-danger btn-lg float-right"> 确定 &nbsp;</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>



        {{--举报帖子-模态框==================================--}}
        <div class="container">
          <div class="modal fade" id="report">
            <div class="modal-dialog modal-lg">
              <div class=" modal-content text-dark sixteen">
                {{--模态框头部--}}
                <div class="modal-header header-color">
                  <h4 class="modal-title text-light">举报帖子 <span class="hover-ccc">🚩</span></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="rounded container m-3">
                  <form action="">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">侵权（未经授权，滥用原创。冒充他人，侵犯名誉等）
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">欺诈、散播谣言、不实信息
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">违法、犯罪、暴力、血腥
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">色情、骚扰、诱导、行骗
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">人身攻击、挑衅辱骂、恶意行为
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">其它理由：请补充说明
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label reply-container">
          <textarea name="" id="" class="form-control" rows="5"></textarea>
                      </label>
                    </div>
                      <button type="submit" class="report btn btn-danger btn-lg float-right"> 确定 &nbsp;</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>


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

            </h5>
          </div>
          <br>
          <br>
        </div>
      </div>
    </div>
    <div class="text-dark text-container" style="width:100%;">
    </div>
  </div>
  <div class="clear"></div>

  {{-- 手机 底部 --}}
  <div class="">
    <br><br>
    @include('layouts._xs_footer')
  </div>

@stop
