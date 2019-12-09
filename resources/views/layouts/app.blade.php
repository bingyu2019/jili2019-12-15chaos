<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', '灵魂深触-经历网') </title>
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  @yield('styles')
</head>

<body>
<div id="app" class="{{ route_class() }}-page">

  @yield('content')

</div>
<script src="{{ mix('js/app.js') }}"></script>
@yield('script')
</body>
</html>
