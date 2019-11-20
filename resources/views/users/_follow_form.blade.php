{{-- 关注按钮-关注表单 --}}
{{--@can('follow', $user)--}}
    <div class="text-center mt-2">
        {{--        @if (Auth::user()->isFollowing($user->id))--}}
        <form action="" method="post">
            {{--                {{ csrf_field() }}--}}
            {{--                {{ method_field('DELETE') }}--}}

            <button type="submit" class="btn btn-outline-light text-center" style="width: 99%;text-shadow:2px 2px 4px #000000;"><h5 class="pt-2">  取消关注</h5></button>

            </form>
{{--        @else--}}
            <form action="" method="post">
{{--                {{ csrf_field() }}--}}
                <button type="submit" class="btn btn-outline-light text-center" style="width: 99%;text-shadow:2px 2px 4px #000000;"><h5 class="pt-2"><strong>+</strong>&nbsp; 关 注</h5></button>
            </form>
{{--        @endif--}}
    </div>
{{--@endcan--}}
