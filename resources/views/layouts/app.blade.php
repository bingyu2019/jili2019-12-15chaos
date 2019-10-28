<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', '灵魂深触-经历网') </title>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div id="app" class="{{ route_class() }}-page">
    <div class="mx-auto" style="height: 100%; width: 1263px;background: black;">

        {{-- 电脑版主页 logo --}}
        @include('layouts._logo')


        {{-- 电脑注册登录---}}
        @include('layouts._lg_register')


        <div class="container">
            @include('shared._messages')
        </div>

        @yield('content')






        @include('layouts._lg_footer')

    </div>
</div>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
@yield('script')
</body>

</html>
