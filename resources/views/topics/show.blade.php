@extends('layouts.app')
@section('title','灵魂深触-经历网 Bing ')

@section('content')

    {{-- 在手机上隐藏 --}}
    <div class="mx-auto d-none d-sm-block">

        <div class="mx-auto" style="height: 100%; width: 1263px;">

            {{-- 顶部导航 --}}
            <div class="d-none d-sm-block">
                @include('layouts._other_header')
            </div>


            <div>
                {{-- 左则头像区域 --}}
                <div class=" float-left" style="width:350px;">

                    <div class="mx-auto text-light"
                         style="width: 250px;border-radius:5px;border: solid 2px #6A4D2E;background: linear-gradient(to right, #000, #E5A55D);">
                        <br>
                        <h5 class="ml-3 text-center">作者: Bingsdfasdfasd</h5>
                        <hr style="border: solid 1px #0C0C0C;">
                        <hr style="border: solid 1px #0C0C0C;">

                        <div class="mx-auto">
                            <a href=""><img class="img-thumbnail" src="/images/md/face.jpg"
                                            style="border-radius:5px;width: 250px;height: 250px;"></a>
                        </div>
                        <hr style="border: solid 1px #0C0C0C;">
                        <hr style="border: solid 1px #0C0C0C;">
                        <br>
                        <h5 class="ml-3">推荐区域</h5>
                        <p class="ml-3"></p>
                        <hr style="border: solid 1px #0C0C0C;">
                        <hr style="border: solid 1px #0C0C0C;">
                        <h5 class="ml-3 text-white">帖子推荐</h5>
                        <div class="topic-show-left"><a href="">◉ 我对马化腾不记仇；5G套餐出炉，月租最低128元</a></div>
                        <div class="topic-show-left"><a href="">◉ 功夫不负有心人！英国下议院批准约翰逊提出12月12日提前大选</a></div>
                        <div class="topic-show-left"><a href="">◉ 功夫不负有心人！英国下议院批准约翰逊提出12月12日提前大选</a></div>
                        <div class="topic-show-left"><a href="">◉ 功夫不负有心人！英国下议院批准约翰逊提出12月12日提前大选</a></div>
                        <div class="topic-show-left"><a href="">◉ 功夫不负有心人！英国下议院批准约翰逊提出12月12日提前大选</a></div>
                        <div class="topic-show-left"><a href="">◉ 功夫不负有心人！英国下议院批准约翰逊提出12月12日提前大选</a></div>
                        <div class="topic-show-left"><a href="">◉ 功夫不负有心人！英国下议院批准约翰逊提出12月12日提前大选</a></div>
                        <div class="topic-show-left"><a href="">◉ 功夫不负有心人！英国下议院批准约翰逊提出12月12日提前大选</a></div>
                        <div class="topic-show-left"><a href="">◉ 功夫不负有心人！英国下议院批准约翰逊提出12月12日提前大选</a></div>
                        <hr style="border: solid 1px #0C0C0C;">
                        <hr style="border: solid 1px #0C0C0C;">
                        <hr style="border: solid 1px #0C0C0C;">
                        <br>


                    </div>
                </div>

                {{-- 右则内容切换区域 --}}
                <div class="float-left" style="width:913px;">
                    <div
                        style="width: 860px;height: 80px;border-radius:5px;background: linear-gradient(to top, #000, #E5A55D); ">
                        {{-- 帖子标题 --}}
                        <h4 class="text-center text-white pt-2 mt-3 float-left" style="width: 700px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;功夫不负有心人！英国下议院批准约翰逊提出12月12
                        </h4>
                        {{-- 头像 --}}
                        <div class="dropdown float-right pr-5 pt-3" style="width: 100px;">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <img src="/images/md/face.jpg"
                                     class="float-right register-avatar img-responsive img-circle"
                                     width="30px" height="30px "
                                     style="border-radius: 50%;background-color: transparent;box-shadow:0px 0px 8px 5px #ccc; "
                                     ;></a>
                            <div class="dropdown-menu register-dropdown-menu float-right"
                                 aria-labelledby="navbarDropdown"
                                 style=" background: linear-gradient(red, blue);">
                                <a href="{{ route('topics.show') }}" class="dropdown-item">
                                    <i class="fas fa-tachometer-alt mr-2"></i>
                                    管理后台帖子入口
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('users.show') }}">
                                    <i class="far fa-user mr-2"></i>
                                    个人中心
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item btn-favor" href="">
                                    <i class="far fa-user mr-2"></i>
                                    我的收益
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="">
                                    <i class="far fa-edit mr-2"></i>
                                    编辑资料
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" id="logout" href="#">
                                    <form action="" method="POST" onsubmit="return confirm('您确定要退出吗？');">
                                        <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                    </form>
                                </a>
                            </div>
                        </div>

                    </div>
                    <br>

                    {{-- 帖子内容区域 --}}
                    <div class="float-left"
                         style="width:860px;background:linear-gradient(to bottom, #BC8348, #E5A55D);border-radius: 5px;">

                        <br><br>


                        {{-- 量统计：发表时间-回复-浏览-点赞-礼赞-收藏量 --}}
                        <div class="container text-cente float-left">
                            <div class="float-left" style="width: 25%;height: 25px;"></div>
                            {{-- 发表时间 --}}
                            <div class="float-left" style="width:10%;"><a href=""><img
                                        src="/images/md/icon-clo.png" alt="" style="width: 25px;" data-toggle="tooltip"
                                        data-placement="top" title="发布于：2019-10-30 14:24:20">一年前</a>
                            </div>
                            {{-- 浏览次数 --}}
                            <div class="float-left" style="width:8%;"><a href=""><img
                                        src="/images/md/icon-eye.png" alt="" style="width: 25px;" data-toggle="tooltip"
                                        data-placement="top" title="浏览次数">222 </a>
                            </div>
                            {{-- 回复次数 --}}
                            <div class="float-left" style="width:8%;"><a href=""><img
                                        src="/images/md/icon-rp.png" alt="" style="width: 28px;" data-toggle="tooltip"
                                        data-placement="top" title="回复次数">222 </a>
                            </div>
                            {{-- 收藏量 --}}
                            <div class="float-left" style="width:8%;"><a href=""><img
                                        src="/images/md/icon-like.png" alt="" style="width: 25px;" data-toggle="tooltip"
                                        data-placement="top" title="收藏量">222 </a>
                            </div>
                            <div class="float-left" style="width:8%;"><a href=""><img
                                        src="/images/md/icon-up.png" alt="" style="width: 25px;" data-toggle="tooltip"
                                        data-placement="top" title="一毛赞">222 </a>
                            </div>
                            <div class="float-left" style="width:8%;"><a href=""><img
                                        src="/images/md/icon-gift.png" alt="" style="width: 25px;" data-toggle="tooltip"
                                        data-placement="top" title="礼赞量">222 </a>
                            </div>

                        </div>
                        <br>

                        {{-- 清除浮动 --}}
                        <div class="clear"></div>


                        <div class="container p-5">
                            <h4>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容外汇天眼APP讯 :
                                今日10月30日（周三），欧元微震于1.1110，英镑回落整理于1.2860，澳大利亚第三季度CPI年率符合预期，澳元走高至0.6860，美元/日元整理于108.85，。亚盘金价微震于1490附近，国际原油走软至55.30。市场等待美联储利率决议

                                【股市收报】

                                台股：中国台湾加权指数10月30日（周三）收盘上涨46.41点，涨幅0.41%，报11380.28点。

                                澳股：澳大利亚ASX200指数10月30日（周三）收盘下跌55.90点，跌幅0.83%，报6689.50点。

                                港股：中国香港恒生指数10月30日（周三）发文前下跌108.840点，跌幅0.40%，报26782.420点。

                                【财经要闻】

                                澳大利亚第三季度CPI年率符合预期 澳元小幅走高

                                澳大利亚统计局(ABS)周三(10月30日)公布数据显示，澳大利亚2019年第三个季度CPI年率为1.7%，高于今年二季度的1.6%，符合市场预期的1.7%。

                                约翰逊赢得关键投票英国议会批准12月12日提前大选

                                英国将迎来近一个世纪以来的首次12月大选。首相约翰逊周二赢得了议会的批准，将举行提前大选以打破英退僵局。约翰逊此前在议会屡败屡战，但本周终于有所斩获，他提出的12月12日举行大选的简短议案在下议院以438票对20票获得通过。该法案现在已提交上议院。

                                美联储10月利率决议前瞻：委员偏向结束QE 市场预期基本一致

                                北京时间周四（10月30日）02:00，美联储（FED）就将在为期两天的议息会议结束后公布利率决议。北京时间周四02:30，美联储主席鲍威尔（Jerome
                                Powell）还将召开新闻发布会。

                                【外汇市场】

                                美元方面，今日亚盘美元指数微震于97.70水平。今日美国将公布10月ADP就业人数、第三季度实际GDP年化季率初值以及第三季度核心PCE物价指数等重磅美国经济数据，重点关注凌晨2:00美联储将公布利率决议及政策声明，随后2:30美联储主席鲍威尔召开新闻发布会。市场预期美联储几乎确定将在周四凌晨降息25个基点。


                                【大宗商品市场】

                                黄金方面，今日亚盘时段国际现货黄金承压1490下方微幅震荡，尽管美联储今晚降息似乎已板上钉钉，但一些业内人士仍担心，美联储今晚的降息可能是最后一降，而这可能令黄金承压。此前，英国议会通过了约翰逊有关提前大选的动议，令有序脱欧的乐观情绪进一步升温，黄金失守1490美元关口。同时还需关注美国GDP和ADP数据。


                                原油方面，今日亚盘国际原油小幅走软，因行业报告显示上周该指标原油在库欣的库存增加，投资者无视整体库存呈现下降，对于供应更加充足之际需求却迟滞的担忧又迅速升温。此外俄罗斯方面称，现在谈论OPEC及其他产油国加大减产力度为时太早，加剧市场承受的压力。</h4>
                        </div>

                        <br><br><br>
                        <div class=" container text-dark mx-auto
                    " style="border-radius: 5px;">
                        </div>
                        <br>

                    </div>

                </div>

            </div>

        </div>
    </div>


@stop
@section('script')
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@stop



























