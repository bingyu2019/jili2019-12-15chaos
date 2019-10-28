@extends('layouts.app')
@section('title','灵魂深触-人物经历')
@section('content')

    {{-- 在手机上隐藏 --}}
    <div class="d-none d-sm-block">

        {{-- 分类页面主体导航--}}
        <div class="root-nav row col-md-12">
            @include('layouts._lg_category_nav')
            <div class="float-right">
                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<img
                    class=" img-fluid" src="/images/md/category-experience.jpg">
            </div>
        </div>

        {{-- 清除浮动 --}}
        <div class="clear"></div>

        <br>
        {{-- 搜索框 --}}
        @include('layouts._search_box')

        <br>


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
                 style="background-image:url('/images/experience_rank_top.png')">
                <h5 class="mt-3 ml-3"><b>查看顺序 ➤➤</b></h5>
                <ul class="navbar navbar-expand-lg mt-4">
                    <li>▆&nbsp;&nbsp;<a href=""> 最早&nbsp; &nbsp;</a>▆&nbsp;&nbsp;</li>
                    <li><a href=""> &nbsp;最新&nbsp;&nbsp; </a>▆&nbsp;&nbsp;</li>
                    <li><a href="">&nbsp; 活跃&nbsp;&nbsp; </a>▆&nbsp;&nbsp;</li>
                    <li><a href=""> &nbsp;阅读量&nbsp; &nbsp;</a>▆&nbsp;&nbsp;</li>
                    <li><a href=""> &nbsp;点赞量&nbsp; &nbsp;</a>▆&nbsp;&nbsp;</li>
                    <li><a href=""> &nbsp;礼赞量&nbsp; &nbsp;</a>▆&nbsp;&nbsp;</li>
                    <li><a href=""> &nbsp;收藏量 &nbsp;&nbsp;</a>▆&nbsp;</li>
                    @include('layouts._pen')
                </ul>
            </div>

            {{-- 清除浮动 --}}
            <div class="clear"></div>

            {{-- 表头 --}}
            <div class="order-title container col-sm-11">
                <ul class="navbar navbar-expand-lg text-center pt-3">
                    <li class="pr-4" style="width: 100px"><p class="mr-3">头像</p></li>
                    <li class="text-center" style="width: 100px"><p>经历号</p></li>
                    <li class="pl-3" style="width: 300px"><p>经历主人</p></li>
                    <li style="width: 150px"><p class="ml-4">日期</p></li>
                    <li style="width: 120px"><p class="ml-4">阅读</p></li>
                    <li style="width: 120px"><p class="ml-4">留言</p></li>
                    <li style="width: 120px"><p class="ml-4">礼赞</p></li>
                    <li style="width: 120px"><p class="ml-4">收藏</p></li>
                </ul>
            </div>
            {{-- 表格 --}}
            <div class="order-table container col-sm-11">
                <table class="table ">
                    <tbody>
                    <tr class="text-center">
                        <td style="width: 100px"><p><img src="/images/md/face.jpg" class="img-thumbnail "
                                                         alt="Cinque Terre" style="height: 60px; width: 60px;"></p></td>
                        <td style="width: 100px"><p>1</p></td>
                        <td style="width: 300px">
                            <div class="td-title pt-2">了不起比尔盖茨了不起比尔盖茨了不起比尔盖茨了不起比尔盖茨</div>
                        </td>
                        <td style="width: 150px"><p>2019-10-24</p></td>
                        <td style="width: 120px"><p>999999</p></td>
                        <td class="pl-1" style="width: 120px"><p>999999</p></td>
                        <td class="pl-1" style="width: 120px"><p>999999</p></td>
                        <td class="pl-1" style="width: 120px"><p>999999</p></td>
                    </tr>
                    <tr class="text-center">
                        <td style="width: 100px"><p><img src="/images/md/face.jpg" class="img-thumbnail"
                                                         alt="Cinque Terre" style="height: 60px; width: 60px;"></p></td>
                        <td style="width: 100px"><p>2</p></td>
                        <td style="width: 300px"><p>明天的明天</p></td>
                        <td style="width: 150px"><p>2019-10-24</p></td>
                        <td style="width: 120px"><p>999999</p></td>
                        <td class="pl-1" style="width: 120px"><p>999999</p></td>
                        <td class="pl-1" style="width: 120px"><p>999999</p></td>
                        <td class="pl-1" style="width: 120px"><p>999999</p></td>
                    </tr>
                    <tr class="text-center">
                        <td style="width: 100px"><p><img src="/images/md/face.jpg" class="img-thumbnail"
                                                         alt="Cinque Terre" style="height: 60px; width: 60px;"></p></td>
                        <td style="width: 100px"><p>9999999999</p></td>
                        <td style="width: 300px"><p>明天的明天</p></td>
                        <td style="width: 150px"><p>2019-10-24</p></td>
                        <td style="width: 120px"><p>999999</p></td>
                        <td class="pl-1" style="width: 120px"><p>999999</p></td>
                        <td class="pl-1" style="width: 120px"><p>999999</p></td>
                        <td class="pl-1" style="width: 120px"><p>999999</p></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="order container navbar navbar-expand-lg col-sm-11"
                 style="background-image:url('/images/experience_rank_top.png')">
            </div>
        </div>


        {{-- 清除浮动 --}}
        <div class="clear"></div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
        <br><br>
    </div>
@stop
