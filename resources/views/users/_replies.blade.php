{{-- 我的回复 --}}
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
            外交部：中国人权状况怎么样 中国人民最有发言权
          </a>
          <a class="float-right" href="">
            <span class="badge badge-secondary badge-pill"> </span>
          </a>
        </div>
        <div class="media-heading mt-0">
          <p href="" title="标题">
            回复内容，
          </p>
          <span title="最后活跃于：10分钟前" style="color: black;">⊙10分钟前</span>

          <div class="hover-ccc ml-4 mr-3 float-right">
            {{--          {!! $reply->content !!}--}} 🎁 0
          </div>
          <div class="hover-ccc ml-4 float-right">
            {{--          {!! $reply->content !!}--}} 💰 0
          </div>
          <div class="hover-ccc ml-4 float-right">
            {{--          {!! $reply->content !!}--}} 🌺 0
          </div>
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
