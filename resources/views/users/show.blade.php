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
                        <div class="" style="height: 250px;">
                            <a href=""><img src="/images/md/face.jpg" class="img-fluid" width="250px" height="250px" ;
                                            style="border-radius:5px;"></a>
                        </div>
                        <br>
                        <h5 class="ml-3">⚫个人简介</h5>
                        <p class="ml-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>

                        <hr style="border: solid 1px #0C0C0C;">
                        <h5 class="ml-3">⚫关注按钮</h5>
                        <p class="ml-4"></p>

                        <hr style="border: solid 1px #0C0C0C;">
                        <h5 class="ml-3">⚫关注-粉丝-帖子</h5>
                        <p class="ml-3"></p>

                        <hr style="border: solid 1px #0C0C0C;">
                        <h5 class="ml-3 text-white">⚫注册于</h5>
                        <p class="ml-4">2019-10-29 13：36：56</p>

                        <hr style="border: solid 1px #0C0C0C;">
                        <h5 class="ml-3">⚫最后活跃</h5>
                        <p class="ml-4">2019-10-29 13：36：56</p>

                    </div>
                </div>

                {{-- 右则内容切换区域 --}}
                <div class="float-left" style="width:913px;">
                    <div
                        style="width: 860px;height: 70px;border-radius:5px;background: linear-gradient(to top, #000, #E5A55D); ">
                        <h1 class="text-center text-white pt-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bing


                            {{-- 头像 --}}
                            <div class="dropdown float-right pr-5 pt-3">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <img class="" src="/images/md/face.jpg" class="register-avatar img-responsive img-circle"
                                         width="30px" height="30px "
                                         style="border-radius: 50%;background-color: transparent;box-shadow:0px 0px 8px 5px #ccc; "
                                         ;></a>
                                <div class="dropdown-menu register-dropdown-menu" aria-labelledby="navbarDropdown"
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
                                            <button class="btn btn-block btn-danger" type="submit" name="button">退出
                                            </button>
                                        </form>
                                    </a>
                                </div>
                            </div>
                            {{-- 消息通知 --}}
                            <div class="float-right mt-3 pr-3">
                                ✉
                            </div>
                        </h1>


                        <br>
                        <h5 class="text-white float-right mr-5 pt-0">第 1 号用户</h5>
                    </div>

                    <br>

                    {{-- 选项卡区域 --}}
                    <div class="float-left"
                         style="width:860px;background:linear-gradient(to bottom, #BC8348, #E5A55D);border-radius: 5px;">


                        <br><br><br>
                        <div class="container text-dark mx-auto" style="border-radius: 5px;">

                            <br>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#a">我的关注</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#b">我的发布</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#c">我的回复</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#d">我的收藏</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#e">我的经历</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#f">我的礼物</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="a" class="container tab-pane active"><br>
                                    <h3>我的关注</h3>
                                    <h5>富人有很多手段能拿到低成本的资金，然后用高杠杆去盈利。
                                        如果成功就是一本万利、失败对他们来说不过是损失一小部分投资，高杠杆投机的诱惑就在于收益要远远大过失败的损失。
                                        金融衍生品越丰富，金融市场越发达，但是，财富也会快速向上层流去。

                                        前几年，赵（某）薇想用30.6亿元收购万家传媒的股份、成为第一大股东，其中本金只有6000万，杠杆达到了51倍，一时间火遍各大媒体。

                                        最终，这次收购被叫停，该资本大鳄也被禁市。当初的还珠格格，如今竟然是资本大鳄，这个转身真是让人有点措手不及。
                                        第二届中国国际进口博览会将于11月5号~10号在上海举行。10月29日，中国国际进口博览会组委会办公室主任、商务部副部长王炳南在商务部吹风会上表示，在各有关方面的共同努力下，目前第二届中国国际进口博览会国家展、企业展和第二届虹桥国际经济论坛的各项筹备工作已经基本就绪。

                                        王炳南表示，国家展总展览面积三万平方米，集中展示各个国家的发展成就、营商环境和特色产业。各个国家馆的形象设计独具本国特色，共有64个国家（含中国）、3个国际组织参展，15个主宾国分别是：柬埔寨、捷克、法国、希腊、印度、意大利、牙买加、约旦、哈萨克斯坦、马来西亚、秘鲁、俄罗斯、泰国、乌兹别克斯坦和赞比亚。

                                        此外，王炳南透露，国家馆中的中国馆场馆设计开放、大气、灵动、通透，别具东方的神韵和现代的气息，是一张亮丽的中国名片。以庆祝新中国成立70周年为主题，以高质量发展为主线，重点展示我国经济社会发展的历史性成就和新时代新机遇。企业展总展览面积33万平方米，由各国的参展商展示商品、技术和服务，实现“买全球、惠全球”。涵盖了装备、消费、食品、健康、服务等五大板块、七个展区，来自150多个国家地区的3000多家企业参展。

                                        富人有很多手段能拿到低成本的资金，然后用高杠杆去盈利。
                                        如果成功就是一本万利、失败对他们来说不过是损失一小部分投资，高杠杆投机的诱惑就在于收益要远远大过失败的损失。
                                        金融衍生品越丰富，金融市场越发达，但是，财富也会快速向上层流去。

                                        前几年，赵（某）薇想用30.6亿元收购万家传媒的股份、成为第一大股东，其中本金只有6000万，杠杆达到了51倍，一时间火遍各大媒体。

                                        最终，这次收购被叫停，该资本大鳄也被禁市。当初的还珠格格，如今竟然是资本大鳄，这个转身真是让人有点措手不及。
                                        第二届中国国际进口博览会将于11月5号~10号在上海举行。10月29日，中国国际进口博览会组委会办公室主任、商务部副部长王炳南在商务部吹风会上表示，在各有关方面的共同努力下，目前第二届中国国际进口博览会国家展、企业展和第二届虹桥国际经济论坛的各项筹备工作已经基本就绪。

                                        王炳南表示，国家展总展览面积三万平方米，集中展示各个国家的发展成就、营商环境和特色产业。各个国家馆的形象设计独具本国特色，共有64个国家（含中国）、3个国际组织参展，15个主宾国分别是：柬埔寨、捷克、法国、希腊、印度、意大利、牙买加、约旦、哈萨克斯坦、马来西亚、秘鲁、俄罗斯、泰国、乌兹别克斯坦和赞比亚。

                                        此外，王炳南透露，国家馆中的中国馆场馆设计开放、大气、灵动、通透，别具东方的神韵和现代的气息，是一张亮丽的中国名片。以庆祝新中国成立70周年为主题，以高质量发展为主线，重点展示我国经济社会发展的历史性成就和新时代新机遇。企业展总展览面积33万平方米，由各国的参展商展示商品、技术和服务，实现“买全球、惠全球”。涵盖了装备、消费、食品、健康、服务等五大板块、七个展区，来自150多个国家地区的3000多家企业参展。
                                    </h5>
                                </div>
                                <div id="b" class="container tab-pane fade"><br>
                                    <h3>我的发布</h3>
                                    <p>富人有很多手段能拿到低成本的资金，然后用高杠杆去盈利。
                                        如果成功就是一本万利、失败对他们来说不过是损失一小部分投资，高杠杆投机的诱惑就在于收益要远远大过失败的损失。
                                        金融衍生品越丰富，金融市场越发达，但是，财富也会快速向上层流去。

                                        前几年，赵（某）薇想用30.6亿元收购万家传媒的股份、成为第一大股东，其中本金只有6000万，杠杆达到了51倍，一时间火遍各大媒体。

                                        最终，这次收购被叫停，该资本大鳄也被禁市。当初的还珠格格，如今竟然是资本大鳄，这个转身真是让人有点措手不及。
                                        第二届中国国际进口博览会将于11月5号~10号在上海举行。10月29日，中国国际进口博览会组委会办公室主任、商务部副部长王炳南在商务部吹风会上表示，在各有关方面的共同努力下，目前第二届中国国际进口博览会国家展、企业展和第二届虹桥国际经济论坛的各项筹备工作已经基本就绪。

                                        王炳南表示，国家展总展览面积三万平方米，集中展示各个国家的发展成就、营商环境和特色产业。各个国家馆的形象设计独具本国特色，共有64个国家（含中国）、3个国际组织参展，15个主宾国分别是：柬埔寨、捷克、法国、希腊、印度、意大利、牙买加、约旦、哈萨克斯坦、马来西亚、秘鲁、俄罗斯、泰国、乌兹别克斯坦和赞比亚。

                                        此外，王炳南透露，国家馆中的中国馆场馆设计开放、大气、灵动、通透，别具东方的神韵和现代的气息，是一张亮丽的中国名片。以庆祝新中国成立70周年为主题，以高质量发展为主线，重点展示我国经济社会发展的历史性成就和新时代新机遇。企业展总展览面积33万平方米，由各国的参展商展示商品、技术和服务，实现“买全球、惠全球”。涵盖了装备、消费、食品、健康、服务等五大板块、七个展区，来自150多个国家地区的3000多家企业参展。

                                        富人有很多手段能拿到低成本的资金，然后用高杠杆去盈利。
                                        如果成功就是一本万利、失败对他们来说不过是损失一小部分投资，高杠杆投机的诱惑就在于收益要远远大过失败的损失。
                                        金融衍生品越丰富，金融市场越发达，但是，财富也会快速向上层流去。

                                        前几年，赵（某）薇想用30.6亿元收购万家传媒的股份、成为第一大股东，其中本金只有6000万，杠杆达到了51倍，一时间火遍各大媒体。

                                        最终，这次收购被叫停，该资本大鳄也被禁市。当初的还珠格格，如今竟然是资本大鳄，这个转身真是让人有点措手不及。
                                        第二届中国国际进口博览会将于11月5号~10号在上海举行。10月29日，中国国际进口博览会组委会办公室主任、商务部副部长王炳南在商务部吹风会上表示，在各有关方面的共同努力下，目前第二届中国国际进口博览会国家展、企业展和第二届虹桥国际经济论坛的各项筹备工作已经基本就绪。

                                        王炳南表示，国家展总展览面积三万平方米，集中展示各个国家的发展成就、营商环境和特色产业。各个国家馆的形象设计独具本国特色，共有64个国家（含中国）、3个国际组织参展，15个主宾国分别是：柬埔寨、捷克、法国、希腊、印度、意大利、牙买加、约旦、哈萨克斯坦、马来西亚、秘鲁、俄罗斯、泰国、乌兹别克斯坦和赞比亚。

                                        此外，王炳南透露，国家馆中的中国馆场馆设计开放、大气、灵动、通透，别具东方的神韵和现代的气息，是一张亮丽的中国名片。以庆祝新中国成立70周年为主题，以高质量发展为主线，重点展示我国经济社会发展的历史性成就和新时代新机遇。企业展总展览面积33万平方米，由各国的参展商展示商品、技术和服务，实现“买全球、惠全球”。涵盖了装备、消费、食品、健康、服务等五大板块、七个展区，来自150多个国家地区的3000多家企业参展。
                                    </p>
                                </div>
                                <div id="c" class="container tab-pane fade"><br>
                                    <h3>我的回复</h3>
                                    <p>富人有很多手段能拿到低成本的资金，然后用高杠杆去盈利。
                                        如果成功就是一本万利、失败对他们来说不过是损失一小部分投资，高杠杆投机的诱惑就在于收益要远远大过失败的损失。
                                        金融衍生品越丰富，金融市场越发达，但是，财富也会快速向上层流去。

                                        前几年，赵（某）薇想用30.6亿元收购万家传媒的股份、成为第一大股东，其中本金只有6000万，杠杆达到了51倍，一时间火遍各大媒体。

                                        最终，这次收购被叫停，该资本大鳄也被禁市。当初的还珠格格，如今竟然是资本大鳄，这个转身真是让人有点措手不及。</p>
                                </div>
                                <div id="d" class="container tab-pane fade"><br>
                                    <h3>Ta的收藏</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque
                                        laudantium,
                                        totam rem aperiam.</p>
                                </div>
                                <div id="e" class="container tab-pane fade"><br>
                                    <h3>Ta的收藏</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque
                                        laudantium,
                                        totam rem aperiam.</p>
                                </div>
                                <div id="f" class="container tab-pane fade"><br>
                                    <h3>我的的收藏</h3>
                                    <p>富人有很多手段能拿到低成本的资金，然后用高杠杆去盈利。
                                        如果成功就是一本万利、失败对他们来说不过是损失一小部分投资，高杠杆投机的诱惑就在于收益要远远大过失败的损失。
                                        金融衍生品越丰富，金融市场越发达，但是，财富也会快速向上层流去。

                                        前几年，赵（某）薇想用30.6亿元收购万家传媒的股份、成为第一大股东，其中本金只有6000万，杠杆达到了51倍，一时间火遍各大媒体。

                                        最终，这次收购被叫停，该资本大鳄也被禁市。当初的还珠格格，如今竟然是资本大鳄，这个转身真是让人有点措手不及。
                                        第二届中国国际进口博览会将于11月5号~10号在上海举行。10月29日，中国国际进口博览会组委会办公室主任、商务部副部长王炳南在商务部吹风会上表示，在各有关方面的共同努力下，目前第二届中国国际进口博览会国家展、企业展和第二届虹桥国际经济论坛的各项筹备工作已经基本就绪。

                                        王炳南表示，国家展总展览面积三万平方米，集中展示各个国家的发展成就、营商环境和特色产业。各个国家馆的形象设计独具本国特色，共有64个国家（含中国）、3个国际组织参展，15个主宾国分别是：柬埔寨、捷克、法国、希腊、印度、意大利、牙买加、约旦、哈萨克斯坦、马来西亚、秘鲁、俄罗斯、泰国、乌兹别克斯坦和赞比亚。

                                        此外，王炳南透露，国家馆中的中国馆场馆设计开放、大气、灵动、通透，别具东方的神韵和现代的气息，是一张亮丽的中国名片。以庆祝新中国成立70周年为主题，以高质量发展为主线，重点展示我国经济社会发展的历史性成就和新时代新机遇。企业展总展览面积33万平方米，由各国的参展商展示商品、技术和服务，实现“买全球、惠全球”。涵盖了装备、消费、食品、健康、服务等五大板块、七个展区，来自150多个国家地区的3000多家企业参展。

                                        富人有很多手段能拿到低成本的资金，然后用高杠杆去盈利。
                                        如果成功就是一本万利、失败对他们来说不过是损失一小部分投资，高杠杆投机的诱惑就在于收益要远远大过失败的损失。
                                        金融衍生品越丰富，金融市场越发达，但是，财富也会快速向上层流去。

                                        前几年，赵（某）薇想用30.6亿元收购万家传媒的股份、成为第一大股东，其中本金只有6000万，杠杆达到了51倍，一时间火遍各大媒体。

                                        最终，这次收购被叫停，该资本大鳄也被禁市。当初的还珠格格，如今竟然是资本大鳄，这个转身真是让人有点措手不及。
                                        第二届中国国际进口博览会将于11月5号~10号在上海举行。10月29日，中国国际进口博览会组委会办公室主任、商务部副部长王炳南在商务部吹风会上表示，在各有关方面的共同努力下，目前第二届中国国际进口博览会国家展、企业展和第二届虹桥国际经济论坛的各项筹备工作已经基本就绪。

                                        王炳南表示，国家展总展览面积三万平方米，集中展示各个国家的发展成就、营商环境和特色产业。各个国家馆的形象设计独具本国特色，共有64个国家（含中国）、3个国际组织参展，15个主宾国分别是：柬埔寨、捷克、法国、希腊、印度、意大利、牙买加、约旦、哈萨克斯坦、马来西亚、秘鲁、俄罗斯、泰国、乌兹别克斯坦和赞比亚。

                                        此外，王炳南透露，国家馆中的中国馆场馆设计开放、大气、灵动、通透，别具东方的神韵和现代的气息，是一张亮丽的中国名片。以庆祝新中国成立70周年为主题，以高质量发展为主线，重点展示我国经济社会发展的历史性成就和新时代新机遇。企业展总展览面积33万平方米，由各国的参展商展示商品、技术和服务，实现“买全球、惠全球”。涵盖了装备、消费、食品、健康、服务等五大板块、七个展区，来自150多个国家地区的3000多家企业参展。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>

                    </div>

                </div>

            </div>

        </div>
    </div>


@stop





























