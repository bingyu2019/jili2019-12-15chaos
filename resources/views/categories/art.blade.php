@extends('layouts.app')
@section('title','灵魂艺术')

@section('content')
    {{--=================== 灵魂艺术-电脑版 ======================--}}
    <div class="d-none d-sm-block">
        <div class="big-box mx-auto">
            <header>
                {{-- 电脑版 logo 注册登录 --}}
                @include('layouts._lg_header')
              <div class="clear"></div>
              <br>
            </header>
            {{-- 分类页面主体导航--}}
            <nav class="root-nav row col-md-12">
                @include('layouts._lg_category_nav')
                <div class="float-right">
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;<img class=" img-fluid" src="/images/category/md-art.png">
                </div>
            </nav>

            <section>

                {{-- 搜索框 --}}
                <div>
                    @include('layouts._lg_search')
                </div>

                {{-- 分类主体内容区域 --}}
                <div>

                    {{-- 分类标题 --}}
                    <div class="experience-title container mt-4 col-sm-11">
                        <h3 class="text-white text-center pt-2">灵 &nbsp;&nbsp;魂&nbsp;&nbsp; 艺&nbsp; &nbsp;术</h3>
                    </div>
                    {{-- 分类二级类别 --}}
                    <div class="subclass atr-subclass container col-sm-11">
                        <div>
                            <ul class="text-center pt-3">
                                <li class="float-left text-white">│ <a href=""> &nbsp;&nbsp;影视 &nbsp; </a>│</li>
                                <li class="float-left text-white"><a href="">&nbsp; &nbsp;散文&nbsp; </a>│</li>
                                <li class="float-left text-white"><a href="">&nbsp; &nbsp;书法&nbsp; </a>│</li>
                                <li class="float-left text-white"><a href="">&nbsp; &nbsp;音乐 &nbsp;</a>│</li>
                                <li class="float-left text-white"><a href="">&nbsp; &nbsp;摄影 &nbsp;</a>│</li>
                                <li class="float-left text-white"><a href="">&nbsp; &nbsp;朗诵 &nbsp;</a>│</li>
                                <li class="float-left text-white"><a href="">&nbsp; &nbsp;时尚 &nbsp;</a>│</li>
                            </ul>
                            <br>
                            <ul class="atr-subclass-ul-down">
                                <li class="float-left text-white">│ <a href=""> &nbsp;&nbsp;诗歌 &nbsp; </a>│</li>
                                <li class="float-left text-white"><a href="">&nbsp; &nbsp;段子&nbsp; </a>│</li>
                                <li class="float-left text-white"><a href="">&nbsp; &nbsp;美术&nbsp; </a>│</li>
                                <li class="float-left text-white"><a href="">&nbsp; &nbsp;歌舞 &nbsp;</a>│</li>
                                <li class="float-left text-white"><a href="">&nbsp; &nbsp;设计 &nbsp;</a>│</li>
                                <li class="float-left text-white"><a href="">&nbsp; &nbsp;演讲 &nbsp;</a>│</li>
                                <li class="float-left text-white"><a href="">&nbsp; &nbsp;更多 &nbsp;</a>│</li>
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
                                <td style="width: 60px;"><a href="">评论</a> &nbsp;▆</td>
                                <td style="width: 60px;"><a href="">点赞</a> &nbsp;▆</td>
                                <td style="width: 60px;"><a href="">礼赞</a> &nbsp;▆</td>
                                <td style="width: 60px;"><a href="">品读</a> &nbsp;▆</td>
                                <td style="width: 60px;"><a href="">收藏</a> &nbsp;▆</td>
                                <td style="width: 510px;" class="pt-2"><a href=""> @include('layouts._pen')</a></td>
                            </tr>
                        </table>
                    </div>

                    {{-- 清除浮动 --}}
                    <div class="clear"></div>

                    {{-- 内容区域-表格 --}}
                    <article>
                        <div class="order-title container col-sm-11">
                            <table class="table category-table-center">
                                <thead>
                                <tr class="text-center">
                                    <th scope="col">头像</th>
                                    <th scope="col">标题</th>
                                    <th scope="col">作者</th>
                                    <th scope="col">日期</th>
                                    <th scope="col">评论</th>
                                    <th scope="col">点赞</th>
                                    <th scope="col">品读</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr class="text-center">
                                    <td scope="row"><a href=""><img src="/images/avatar/face100px.jpg"
                                                                    class="img-thumbnail "
                                                                    alt="Cinque Terre"
                                                                    style="width: 60px;"></a></td>
                                    <td style="width: 360px;"><a href="">了不起的比尔盖茨了不起的比尔盖茨了不起的比尔盖茨</a></td>
                                    <td style="width: 150px">Bing</td>
                                    <td style="width: 150px">2019-11-12</td>
                                    <td style="width: 130px">333</td>
                                    <td style="width: 130px">222222</td>
                                    <td style="width: 120px">333333</td>
                                </tr>


                                </tbody>
                            </table>

                        </div>
                        <div class="order container navbar navbar-expand-lg col-sm-11"
                             style="background-image:url('/images/background/order.png');">
                        </div>
                    </article>

                    <br><br>

                    {{-- 清除浮动 --}}
                    <div class="clear"></div>

                </div>

            </section>

            <footer>
                {{-- 电脑底部总导航 --}}
                <div class="root-footer-nav">
                    <ul>
                        <li><a href="{{ route('root') }}">首页</a></li>
                        <li><a href="{{ route('experience') }}">人物经历</a></li>
                        <li><a href="{{ route('myself') }}">个人宣传</a></li>
                        <li>
                            <div class="dot-art"></div>
                            <a href="{{ route('art') }}">灵魂艺术</a></li>
                        <li><a href="{{ route('college') }}">灵魂学院</a></li>
                        <li><a href="{{ route('share') }}">灵魂共享</a></li>
                        <li><a href={{ route('gift') }}"">灵魂礼赞</a></li>
                        <li><a href="{{ route('show') }}">灵魂展览馆</a></li>
                        <li><a href="{{ route('heaven') }}">灵魂极乐</a></li>
                        <li><a href="{{ route('serve') }}">灵魂服务</a></li>
                    </ul>
                </div>
            </footer>

        </div>

        @include('layouts._lg_footer')

    </div>



    {{--================== 灵魂艺术-手机版 ======================= --}}
    <div class="d-block d-sm-none">

        <header>
            {{-- 手机顶部导航 --}}
            <div class="xs-root">
                @include('layouts._xs_header')
            </div>

            <br><br><br><br>
            {{-- 分类名称 --}}
            <div>
                <h3 class="text-center text-white">❖ 灵魂艺术 ❖</h3>
                <br>
                <p class=" mx-auto text-center text-white" style="width: 90%;">艺术给我们插上翅膀，把我们带到很远很远的地方。<br>——契诃夫</p>
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
                    <a type="button" class="btn btn-light" href="#" style="width: 19%;">品读</a>
                </div>

                {{-- 帖子内容 --}}
                <div>
                    <div class="category-background mx-auto p-3 mb-1 rounded">
                        <div class="float-left mt-0" style="width: 20%;">
                            <a href="#"><img class="mx-auto "
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
