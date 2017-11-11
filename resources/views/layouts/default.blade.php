<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', '测试微博')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('layouts._header')

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @if(($_SERVER['REQUEST_URI'])!=='/about')
        @include('layouts._footer')
        @else
        @include('layouts._about_footer')
        @endif
      </div>
    </div>

    <script src="/js/app.js"></script>
  </body>
</html>
