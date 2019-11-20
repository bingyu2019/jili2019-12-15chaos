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
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
{{--    <script type="text/javascript" src="{{asset('js/vue.js')}}"></script>--}}
</head>

<body>
<div id="app" class="{{ route_class() }}-page">



         @yield('content')


    </div>


<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
@yield('script')

</body>
</html>
