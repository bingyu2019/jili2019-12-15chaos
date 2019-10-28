
{{--手机轮播图 --}}
<div id="demo" class="carousel slide p-4 d-block d-sm-none" data-ride="carousel">
    {{--    指示符--}}
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    {{--轮播图片--}}
    <div class="carousel-inner mb-3">
        <div class="carousel-item active">
            <a href=""><img src="/images/LB 1.jpg" alt=" "
                            class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="carousel-item">
            <a href="#"><img src="/images/LB 2.jpg" alt=" "
                             class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="carousel-item">
            <a href=""><img src="/images/LB 3.jpg" alt=" " class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
    </div>
    {{--左右切换按钮--}}
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
