@extends('layouts.app')
@section('title','灵魂深触-经历网')

@section('content')
    {{-- 在手机上隐藏 --}}
<div class="d-none d-sm-block">
    {{-- 清除浮动 --}}
    <div class="clear"></div>
    {{-- 电脑主页轮播图 --}}
    @include('layouts._lg_carousel')

    <br><br>
    {{-- 电脑主体书本导航块 --}}
    <div class="root-nav row col-md-12">
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
            <img class="img-fluid" src="/images/md/root-nav-m.jpg">
            <img class="root-nav-r-b" src="/images/md/root-nav-r.jpg">
        </div>
    </div>

    <br>
    {{-- 电脑主页搜索框 --}}
    @include('layouts._search_box')

    <br>

    {{-- 【分类-最新-最热-帖子-区域】 --}}
    <di>
        {{-- 【人物经历】 --}}
        <div>
            {{-- 清除浮动 --}}
            <div class="clear"></div>
            {{-- 【人物经历】 --}}
            <div class="root-category">
                <div>
                    <div class="content-l">
                        <h4 class="title-l text-center"><a href="">【人物经历】</a></h4>
                        <div class="text-l">
                            <a href=""><img class="pl-2 pt-2" src="images/md/picture-experience.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="content-m">
                        <h4 class="title-m"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最新</a><a href=" ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多➤➤➤</a>
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
        </div>


        {{-- 【个人宣传】 --}}
        <div>
            {{-- 清除浮动 --}}
            <div class="clear"></div>
            <div class="root-category mt-5">
                <div>
                    <div class="content-l">
                        <h4 class="title-l text-center"><a href="">【个人宣传】</a></h4>
                        <div class="text-l">
                            <a href=""><img class="pl-2 pt-2" src="images/md/picture-experience.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="content-m">
                        <h4 class="title-m"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最新</a><a href=" ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多➤➤➤</a>
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
        </div>


        {{-- 【灵魂艺术】 --}}
        <div>
            {{-- 清除浮动 --}}
            <div class="clear"></div>
            <div class="root-category mt-5">
                <div>
                    <div class="content-l">
                        <h4 class="title-l text-center"><a href="">【灵魂艺术】</a></h4>
                        <div class="text-l">
                            <a href=""><img class="pl-2 pt-2" src="images/md/picture-experience.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="content-m">
                        <h4 class="title-m"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最新</a><a href=" ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多➤➤➤</a>
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
        </div>


        {{-- 【灵魂学院】 --}}
        <div>
            {{-- 清除浮动 --}}
            <div class="clear"></div>
            <div class="root-category mt-5">
                <div>
                    <div class="content-l">
                        <h4 class="title-l text-center"><a href="">【灵魂学院】</a></h4>
                        <div class="text-l">
                            <a href=""><img class="pl-2 pt-2" src="images/md/picture-experience.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="content-m">
                        <h4 class="title-m"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最新</a><a href=" ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多➤➤➤</a>
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
        </div>


        {{-- 【灵魂共享】 --}}
        <div>
            {{-- 清除浮动 --}}
            <div class="clear"></div>
            <div class="root-category mt-5">
                <div>
                    <div class="content-l">
                        <h4 class="title-l text-center"><a href="">【灵魂共享】</a></h4>
                        <div class="text-l">
                            <a href=""><img class="pl-2 pt-2" src="images/md/picture-experience.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="content-m">
                        <h4 class="title-m"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最新</a><a href=" ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多➤➤➤</a>
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
        </div>


        {{-- 【灵魂礼赞】 --}}
        <div>
            {{-- 清除浮动 --}}
            <div class="clear"></div>
            <div class="root-category mt-5">
                <div>
                    <div class="content-l">
                        <h4 class="title-l text-center"><a href="">【灵魂礼赞】</a></h4>
                        <div class="text-l">
                            <a href=""><img class="pl-2 pt-2" src="images/md/picture-show.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="content-m">
                        <h4 class="title-m"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最新</a><a href=" ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多➤➤➤</a>
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
        </div>


        {{-- 【灵魂展览馆】 --}}
        <div>
            {{-- 清除浮动 --}}
            <div class="clear"></div>
            <div class="root-category mt-5">
                <div>
                    <div class="content-l">
                        <h4 class="title-l text-center"><a href="">【灵魂展览馆】</a></h4>
                        <div class="text-l">
                            <a href=""><img class="pl-2 pt-2" src="images/md/picture-show.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="content-m">
                        <h4 class="title-m"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最新</a><a href=" ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多➤➤➤</a>
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
        </div>


        {{-- 【灵魂极乐】 --}}
        <div>
            {{-- 清除浮动 --}}
            <div class="clear"></div>
            <div class="root-category mt-5">
                <div>
                    <div class="content-l">
                        <h4 class="title-l text-center"><a href="">【灵魂极乐】</a></h4>
                        <div class="text-l">
                            <a href=""><img class="pl-2 pt-2" src="images/md/picture-experience.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="content-m">
                        <h4 class="title-m"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;最近</a><a href=" ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多➤➤➤</a>
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
        </div>


    </di>


    {{-- 清除浮动 --}}
    <div class="clear"></div>

    <br>

    {{-- 电脑主页底部总导航 --}}
    <div class="root-footer-nav mt-5 d-none d-sm-block">
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
    </div>
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
