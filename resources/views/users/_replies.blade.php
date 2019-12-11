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
            “我们认为各方应进一步促进和保护人权，恪守《联合国宪章》宗旨和原则，尊重各国自主选择的人权发展道路，秉持客观、公正、非选择性立场，避免将人权问题政治化和搞双重标准。中方愿继续在平等和互相尊重的基础上，同各方加强人权领域交流与合作，以合作促发展，以发展促人权，共同构建人类命运共同体。”她说。
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
