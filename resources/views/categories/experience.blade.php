@extends('layouts.app')
@section('title','灵魂深触-人物经历')
@section('content')

    {{--================== 人物经历-电脑版  ======================= --}}
    <div class="d-none d-sm-block">
        <div class="big-box mx-auto">
            <header>
                {{-- 电脑版 logo 注册登录 --}}
                @include('layouts._header')

                {{-- 清除浮动 --}}
                <div class="clear"></div>
                <br>
            </header>

            {{-- 分类页面主体导航--}}
            <nav class="root-nav row col-md-12">
                @include('layouts._lg_category_nav')
                <div class="float-right">
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;<img
                        class=" img-fluid" src="/images/category/md-experience.jpg">
                </div>
            </nav>

            <section>
                {{-- 清除浮动 --}}
                <div class="clear"></div>

                {{-- 搜索框 --}}
                @include('layouts._lg_search')

                {{-- 分类主体内容区域 --}}
                <div>
                    {{-- 分类标题 --}}
                    <div class="experience-title container mt-4 col-sm-11">
                        <h3 class="text-white text-center pt-2">人 &nbsp;&nbsp;物&nbsp;&nbsp; 经&nbsp; &nbsp;历</h3>
                    </div>
                    {{-- 分类二级类别 --}}
                    <div class="subclass container col-sm-11">
                        <div class="float-left col-md-1">
                            <h3 class="text-white mt-3 pl-5">行 <br>业</h3>
                        </div>
                        <div class="float-left col-md-11 mt-3">
                            <ul class="text-white float-left">
                                <li class="float-left">|&nbsp;<a href=""><small>IT互联网&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>发明制造&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>教育培训&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>人工智能&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>影视文学&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>广告传媒&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>设计策划&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>印刷出版&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>婚庆摄影&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>书画艺术&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>音乐歌舞&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>人民公仆&nbsp;</small></a>|&nbsp;</li>
                                <br>
                                <li class="float-left">|&nbsp;<a href=""><small>金融理财&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>商业投资&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>财政服务&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>云商直销&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>商务服务&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>交通服务&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>医疗服务&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>体育健身&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>美容美发&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>保健理疗&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>仓储物流&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>手工艺&nbsp;</small></a>|&nbsp;</li>
                                <br>
                                <li class="float-left">|&nbsp;<a href=""><small>建筑装修建材&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>休闲娱乐&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>旅游酒店&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>餐饮美食&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>批发采购&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>农林牧副渔&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>家政便民服务&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>工厂制造&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>经纪中介&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>环卫服务&nbsp;</small></a>|&nbsp;</li>
                                <li class="float-left"><a href=""><small>其它行业&nbsp;</small></a>|&nbsp;</li>
                            </ul>
                        </div>
                    </div>


                    {{-- 排序--}}
                    <div class="order container navbar navbar-expand-lg col-sm-11"
                         style="background-image:url('/images/background/order.png');">
                        <table>
                            <tr>
                                <td class="pt-3"><h5><b>查看顺序 ➤➤</b></h5></td>
                                <td class="pl-4" style="width: 100px;">▆<a href="">&nbsp; 最新</a> ▆</td>
                                <td style="width: 60px;"><a href="">活跃</a> &nbsp;▆</td>
                                <td style="width: 60px;"><a href="">最早 </a>&nbsp;▆</td>
                                <td style="width: 60px;"><a href="">留言</a> &nbsp;▆</td>
                                <td style="width: 60px;"><a href="">点赞</a> &nbsp;▆</td>
                                <td style="width: 60px;"><a href="">礼赞</a> &nbsp;▆</td>
                                <td style="width: 60px;"><a href="">阅读</a> &nbsp;▆</td>
                                <td style="width: 60px;"><a href="">收藏</a> &nbsp;▆</td>
                                <td style="width: 460px;" class="pt-2"><a href=""> @include('layouts._pen')</a></td>
                            </tr>
                        </table>
                    </div>

                    {{-- 清除浮动 --}}
                    <div class="clear"></div>

                    {{-- 内容区域-表格 --}}
                    <div>
                        <div class="order-title container col-sm-11" style="border-top: solid 5px black;">
                            <table class="table category-table-center">
                                <thead>
                                <tr>
                                    <th scope="col">头像</th>
                                    <th scope="col">经历主人</th>
                                    <th scope="col">日期</th>
                                    <th scope="col">留言</th>
                                    <th scope="col">点赞</th>
                                    <th scope="col">阅读</th>
                                    <th scope="col">收藏</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td scope="row"><a href=""><img src="/images/avatar/face100px.jpg"
                                                                    class="img-thumbnail " alt="Cinque Terre"
                                                                    style="width: 60px;"></a></td>
                                    <td style="width: 350px;"><a href="">了不起的比尔盖茨了了不起的比尔盖茨了了不起的比尔盖茨了</a></td>
                                    <td style="width: 160px">2019-11-12</td>
                                    <td style="width: 130px">188888888</td>
                                    <td style="width: 130px">222222</td>
                                    <td style="width: 120px">333333</td>
                                    <td>666666</td>
                                </tr>

                                </tbody>
                            </table>

                        </div>

                        <div class="order container navbar navbar-expand-lg col-sm-11"
                             style="background-image:url('/images/background/order.png');">
                        </div>
                    </div>


                </div>

                {{-- 清除浮动 --}}
                <div class="clear"></div>

            </section>

            <footer>
                {{-- 电脑主页底部总导航 --}}
                <div class="root-footer-nav mt-5 d-none d-sm-block">
                    <ul>
                        <li><a href="{{ route('root') }}">首页</a></li>
                        <li>
                            <div class="dot-experience"></div>
                            <a href="{{ route('experience') }}">人物经历</a></li>
                        <li><a href="{{ route('myself') }}">个人宣传</a></li>
                        <li><a href="{{ route('art') }}">灵魂艺术</a></li>
                        <li><a href="{{ route('college') }}">灵魂学院</a></li>
                        <li><a href="{{ route('share') }}">灵魂共享</a></li>
                        <li><a href="{{ route('gift') }}">灵魂礼赞</a></li>
                        <li><a href="{{ route('show') }}">灵魂展览馆</a></li>
                        <li><a href="{{ route('heaven') }}">灵魂极乐</a></li>
                        <li><a href="{{ route('serve') }}">灵魂服务</a></li>
                    </ul>
                </div>

                {{-- 清除浮动 --}}
                <div class="clear"></div>
            </footer>

        </div>

        @include('layouts._lg_footer')

    </div>



    {{--================== 人物经历-手机版  ======================= --}}
    <div class="d-block d-sm-none">

        <header>
            {{-- 手机顶部导航 --}}
            <div class="xs-root">
                @include('layouts._xs_header')
            </div>

            <br><br><br><br>
            {{-- 分类名称 --}}
            <div>
                <h3 class="text-center text-white">❖ 人物经历 ❖</h3>
                <br>
                <p class=" mx-auto text-center text-white" style="width: 90%;">世界上没有一条道路是重复的，<br>也没有一个人生是可以替代的。<br>——余华</p>
            </div>

            {{-- 轮播图片 --}}
            <div>
                @include('layouts._xs_carousel')
            </div>


            {{-- 搜索框 --}}
            @include('layouts._xs_search')

            <br><br>
        </header>

        <section>
            {{-- 帖子 --}}
            <div class="xs-category" style="background:#000;">
                {{-- 排序--}}
                <div class="category-content-xs mb-1">
                    <a type="button" class="btn btn-light" href="#" style="width: 19%;">最新</a>
                    <a type="button" class="btn btn-light" href="#" style="width: 19%;">活跃</a>
                    <a type="button" class="btn btn-light" href="#" style="width: 19%;">点赞</a>
                    <a type="button" class="btn btn-light" href="#" style="width: 19%;">留言</a>
                    <a type="button" class="btn btn-light" href="#" style="width: 19%;">阅读</a>
                </div>

                {{-- 帖子内容 --}}
                <div>
                    <div class="category-background mx-auto p-3 mb-1 rounded">
                        <div class="float-left mt-0" style="width: 20%;">
                            <a href="#"><img class="float-left"
                                             src="https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=1507100205,3674590583&fm=26&gp=0.jpg"
                                             style="width: 92%;border-radius: 50%;border: solid 3px whitesmoke;"></a>
                        </div>
                        <div class="float-right mt-0" style="width: 80%;">
                            <h5 style="white-space: pre-wrap">我的心灵和我的一切</h5>
                            <small>作者：卡蒙斯【葡萄牙】888888888888 / &nbsp;回复：8 / 浏览：9999999999999999</small><br>
                        </div>
                        <div class="clear"></div>
                    </div>


                    <div class="category-background mx-auto p-3 mb-1 rounded">
                        <div class=" float-left mt-0" style="width: 20%;">
                            <a href="#"><img
                                    src="https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=1507100205,3674590583&fm=26&gp=0.jpg"
                                    style="width: 90%;border-radius: 50%;border: solid 3px whitesmoke;"></a>
                        </div>
                        <div class="float-right mt-0" style="width: 80%;">
                            <h5 style="white-space: pre-wrap">我的心灵和我的一切我都愿你拿去</h5>
                            <small>作者：卡蒙斯【葡萄牙】 / &nbsp;回复：8 / 浏览：99999</small><br>
                        </div>
                        <div class="clear"></div>
                    </div>


                    <div class="category-background mx-auto p-3 mb-1 rounded">
                        <div class=" float-left mt-0" style="width: 20%;">
                            <a href="#"><img
                                    src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1572807338374&di=579295e5bc688b64c5aada32c693b072&imgtype=0&src=http%3A%2F%2Fhbimg.b0.upaiyun.com%2F78f62b856593947731c7216b75c94484eca4ef5131d75-PmkTi3_fw658"
                                    style="width: 90%;border-radius: 50%;border: solid 3px whitesmoke;"></a>
                        </div>
                        <div class="float-right mt-0" style="width: 80%;">
                            <h5 style="white-space: pre-wrap">我的心灵和我的一切我都愿你拿去只求你给我留一双眼睛</h5>
                            <small>作者：卡蒙斯【葡萄牙】 / &nbsp;回复：8 / 浏览：99999</small><br>
                        </div>
                        <div class="clear"></div>
                    </div>


                    <div class="category-background mx-auto p-3 mb-1 rounded">
                        <div class=" float-left mt-0" style="width: 20%;">
                            <a href="#"><img
                                    src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=146502947,4265986118&fm=26&gp=0.jpg"
                                    style="width: 90%;border-radius: 50%;border: solid 3px whitesmoke;"></a>
                        </div>
                        <div class="float-right mt-0" style="width: 80%;">
                            <h5 style="white-space: pre-wrap">
                                我的心灵和我的一切我都愿你拿去只求你给我留一双眼睛让我的心灵和我的一切我都愿你拿去只求你给我留一双眼睛让</h5>
                            <small>作者：卡蒙斯【葡萄牙】 / &nbsp;回复：8 / 浏览：99999</small><br>
                        </div>
                        <div class="clear"></div>
                    </div>


                    <div class="category-background mx-auto p-3 mb-1 rounded">
                        <div class=" float-left mt-0" style="width: 20%;">
                            <a href="#"><img
                                    src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1573402131&di=6284e8725b9850302af78cbdffa3a945&imgtype=jpg&er=1&src=http%3A%2F%2Fb-ssl.duitang.com%2Fuploads%2Fitem%2F201805%2F25%2F20180525175518_dbyte.jpg"
                                    style="width: 90%;border-radius: 50%;border: solid 3px whitesmoke;"></a>
                        </div>
                        <div class="float-right mt-0" style="width: 80%;">
                            <h5 style="white-space: pre-wrap">
                                我的心灵和我的一切我都愿你拿去只求你给我留一双眼睛让我的心灵和我的一切我都愿你拿去只求你给我留一双眼睛让</h5>
                            <small>作者：卡蒙斯【葡萄牙】 / &nbsp;回复：8 / 浏览：99999</small><br>
                        </div>
                        <div class="clear"></div>
                    </div>


                    <div class="category-background mx-auto p-3 mb-1 rounded">
                        <div class=" float-left mt-0" style="width: 20%;">
                            <a href="#"><img
                                    src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1573402131&di=6284e8725b9850302af78cbdffa3a945&imgtype=jpg&er=1&src=http%3A%2F%2Fb-ssl.duitang.com%2Fuploads%2Fitem%2F201805%2F25%2F20180525175518_dbyte.jpg"
                                    style="width: 90%;border-radius: 50%;border: solid 3px whitesmoke;"></a>
                        </div>
                        <div class="float-right mt-0" style="width: 80%;">
                            <h5 style="white-space: pre-wrap">
                                我的心灵和我的一切我都愿你拿去只求你给我留一双眼睛让我的心灵和我的一切我都愿你拿去只求你给我留一双眼睛让</h5>
                            <small>作者：卡蒙斯【葡萄牙】 / &nbsp;回复：8 / 浏览：99999</small><br>
                        </div>
                        <div class="clear"></div>
                    </div>


                    <br><br>
                </div>

            </div>
        </section>

        <footer>
            <div class="clear"></div>
            {{-- 手机底部内容 --}}
            <div>
                @include('layouts._xs_footer')
            </div>
        </footer>

    </div>



@stop


