@extends('layouts.app')
@section('title','灵魂学院')

@section('content')
    {{-- 在手机上隐藏 --}}
    <div class="d-none d-sm-block">
        {{-- 分类页面主体导航--}}
        <div class="root-nav row col-md-12">
            @include('layouts._lg_category_nav')
            <div class="float-right">
                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<img
                    class=" img-fluid" src="/images/md/category-college.png">
            </div>
        </div>


        {{-- 搜索框 --}}
        <div>
            @include('layouts._search_box')
        </div>

        {{-- 分类主体内容区域 --}}
        <div>
            {{-- 分类标题 --}}
            <div class="experience-title container mt-4 col-sm-11">
                <h3 class="text-white text-center pt-2">灵 &nbsp;&nbsp;魂&nbsp;&nbsp; 学&nbsp; &nbsp;院</h3>
            </div>
            {{-- 分类二级类别 --}}
            <div class="subclass container">
                <div>
                    <ul class="college-subclass text-center pt-5 col-sm-11">
                        <li class="float-left text-white">│ <a href=""> &nbsp;好人好事 &nbsp;</a>│</li>
                        <li class="float-left text-white"><a href="">&nbsp;礼仪礼节&nbsp;</a>│</li>
                        <li class="float-left text-white"><a href="">&nbsp;文明生活&nbsp;</a>│</li>
                        <li class="float-left text-white"><a href="">&nbsp; 名言格言 &nbsp</a>│</li>
                        <li class="float-left text-white"><a href="">&nbsp; 感人短片 &nbsp;</a>│</li>
                        <li class="float-left text-white"><a href="">&nbsp;思想哲学 &nbsp;</a>│</li>
                        <li class="float-left text-white"><a href="">&nbsp;小故事大道理 &nbsp;</a>│</li>
                        <li class="float-left text-white"><a href="">&nbsp; 那些我们犯过的错 &nbsp;</a>│</li>
                    </ul>
                </div>
            </div>
            {{-- 排序--}}
            <div class="order container navbar navbar-expand-lg col-sm-11"
                 style="background-image:url('/images/experience_rank_top.png')">
                <h5 class="mt-3 ml-3"><b>查看顺序 ▶▶</b></h5>
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

            {{-- 表头 --}}
            <div class="order-title container col-sm-11">
                <ul class="navbar navbar-expand-lg text-center">
                    <li class="text-center pr-4" style="width: 100px"><p>头像</p></li>
                    <li class="text-center pr-3" style="width: 100px"><p>贴号</p></li>
                    <li style="width: 350px"><p>标题</p></li>
                    <li class="pl-3" style="width: 150px"><p>作者</p></li>
                    <li class="pl-2" style="width: 150px"><p>日期</p></li>
                    <li class="pl-2" style="width: 120px"><p>浏览</p></li>
                    <li class="pl-2" style="width: 120px"><p>礼赞</p></li>
                </ul>
            </div>
            {{-- 表格 --}}
            <div class="order-table container col-sm-11">
                <table class="table ">
                    <tbody>
                    <tr class="text-center">
                        <td style="width: 100px"><p><img src="/images/md/face.jpg" class="img-thumbnail "
                                                         alt="Cinque Terre"
                                                         style="height: 60px; width: 60px;"></p></td>
                        <td class="pl-1" style="width: 100px"><p>9999999999</p></td>
                        <td style="width: 350px"><p>了不起比尔盖茨了不起比尔盖茨了</p></td>
                        <td style="width: 150px"><p>小鱼儿</p></td>
                        <td style="width: 150px"><p>2019-10-24</p></td>
                        <td style="width: 120px"><p>999999</p></td>
                        <td class="pl-1" style="width: 120px"><p>999999</p></td>
                    </tr>
                    <tr class="text-center">
                        <td style="width: 100px"><p><img src="/images/md/face.jpg" class="img-thumbnail "
                                                         alt="Cinque Terre"
                                                         style="height: 60px; width: 60px;"></p></td>
                        <td class="pl-1" style="width: 100px"><p>9999999999</p></td>
                        <td style="width: 350px"><p>了不起比尔盖茨了不起比尔盖茨了</p></td>
                        <td style="width: 150px"><p>小鱼儿</p></td>
                        <td style="width: 150px"><p>2019-10-24</p></td>
                        <td style="width: 120px"><p>999999</p></td>
                        <td class="pl-1" style="width: 120px"><p>999999</p></td>
                    </tr>
                    <tr class="text-center">
                        <td style="width: 100px"><p><img src="/images/md/face.jpg" class="img-thumbnail "
                                                         alt="Cinque Terre"
                                                         style="height: 60px; width: 60px;"></p></td>
                        <td class="pl-1" style="width: 100px"><p>9999999999</p></td>
                        <td style="width: 350px"><p>了不起比尔盖茨了不起比尔盖茨了</p></td>
                        <td style="width: 150px"><p>小鱼儿</p></td>
                        <td style="width: 150px"><p>2019-10-24</p></td>
                        <td style="width: 120px"><p>999999</p></td>
                        <td class="pl-1" style="width: 120px"><p>999999</p></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="order container navbar navbar-expand-lg col-sm-11"
                 style="background-image:url('/images/experience_rank_top.png')">
            </div>
        </div>

        <br><br>

        {{-- 电脑底部总导航 --}}
        <div class="root-footer-nav">
            <ul>
                <a href="{{ route('root') }}">首页</a></li>
                <li><a href="{{ route('experience') }}">人物经历</a></li>
                <li><a href="{{ route('myself') }}">个人宣传</a></li>
                <li><a href="{{ route('art') }}">灵魂艺术</a></li>
                <li>
                    <div class="dot-college"></div>
                    <a href="{{ route('college') }}">灵魂学院</a></li>
                <li><a href="{{ route('share') }}">灵魂共享</a></li>
                <li><a href="{{ route('gift') }}">灵魂礼赞</a></li>
                <li><a href="{{ route('show') }}">灵魂展览馆</a></li>
                <li><a href="{{ route('heaven') }}">灵魂极乐</a></li>
                <li><a href="{{ route('serve') }}">灵魂服务</a></li>
            </ul>
        </div>

    </div>


@stop
