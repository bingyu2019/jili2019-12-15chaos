{{-- 我的粉丝 --}}
<div class="shadow pt-3 mb-2 rounded" style="background: #E5A55D">
  {{--                @if (count($topics))--}}
  <ul class="list-unstyled list-abc">
    {{--                    @foreach ($topics as $topic)--}}
    <li class="media">
      <div class="media-left">
        <a href="">
          &nbsp;&nbsp;&nbsp;<img class="media-object img-thumbnail mr-3" style="width: 52px; height: 52px;" src="{{ $user->avatar }}"
                                 title="Bing_2019">
        </a>
      </div>
      <div class="media-body">
        {{--        <div class="media-heading mt-0">--}}
        <a href="" title="标题" class="list">
          <b>Bing_2019</b>
        </a>
        <p>思想有多远，我就走多远！</p>
      </div>
      {{--      </div>--}}
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
