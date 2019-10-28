{{-- 电脑轮播图--}}
<div class="root-carousel d-none d-sm-block"
     style="background-image:url('/images/root-carousel.jpg')">
    <div id="demo2" class="carousel slide p-4" data-ride="carousel">
        {{--指示符--}}
        <ul class="carousel-indicators">
            <li data-target="#demo2" data-slide-to="0" class="active"></li>
            <li data-target="#demo2" data-slide-to="1"></li>
        </ul>
        {{--轮播图片--}}
        <div class="carousel-inner mb-3">
            <div class="carousel-item active">
                <a href=""><img src="/images/md/carousel-1.jpg" alt=" " class="mx-auto d-block"></a>
            </div>
            <div class="carousel-item">
                <a href=""><img src="/images/md/carousel-2.jpg" alt=" " class="mx-auto d-block"></a>
            </div>

        </div>
        <a class="carousel-control-prev" href="#demo2" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo2" data-slide="next">
            <span class="carousel-control-next-icon"><</span>
        </a>
    </div>
</div>
