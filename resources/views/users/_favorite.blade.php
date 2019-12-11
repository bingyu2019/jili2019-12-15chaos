{{-- 我的收藏 --}}
<div class="shadow p-3 mb-5 rounded" style="background: #E5A55D">
  {{--                @if (count($topics))--}}
  <ul class="list-unstyled list-abc">
    {{--                    @foreach ($topics as $topic)--}}
    <li class="media">
      <div class="media-left">
        <a href="">
          <img class="media-object img-thumbnail mr-3" style="width: 52px; height: 52px;" src="{{ $user->avatar }}"
               title="Bing">
        </a>
      </div>
      <div class="media-body">
        <div class="media-heading mt-0 mb-1">
          <a href="" title="标题" class="list">
            收藏帖子的标题-金融深1度：资本市场新一轮改革加速推进
          </a>
          <a class="float-right" href="">
            <span class="badge badge-secondary badge-pill"> </span>
          </a>
        </div>
        <small class="media-body meta text-secondary">
          <a class="list" href="#" title="分类名称">
            ❖灵魂共享❖
          </a>
          <span> • </span>
          <a class="list" href="" title="作者">
            ☺ Bing
          </a>
          <span> • </span>
          <span title="最后活跃于：10分钟前" style="color: black;">⊙10分钟前</span>
        </small>
        <div class="reply-content hover-ccc mr-2 float-right">
          {{--          {!! $reply->content !!}--}} 🎁 30698
        </div>
        <div class="reply-content hover-ccc mr-2 float-right">
          {{--          {!! $reply->content !!}--}} 💰 309879700
        </div>
        <div class="reply-content hover-ccc mr-2 float-right">
          {{--          {!! $reply->content !!}--}} 🌺 30698
        </div>
        <div class="reply-content hover-ccc mr-2 float-right">
          {{--          {!! $reply->content !!}--}} 🤍 30
        </div>
        <div class="reply-content hover-ccc mr-2 float-right">
          {{--          {!! $reply->content !!}--}} 💬 30
        </div>
        <div class="reply-content hover-ccc mr-2 float-right">
          {{--          {!! $reply->content !!}--}}  👀 30
        </div>

      </div>
    </li>

    {{--                      @if ( ! $loop->last)--}}
    {{--                        <hr>--}}
    {{--                      @endif--}}

    {{--                    @endforeach--}}
  </ul>

  {{--                @else--}}
  {{--  <div style="color: black;">暂无数据 ~_~</div>--}}
  {{--                @endif--}}

</div>
