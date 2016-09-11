<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <script src="/js/jquery-3.1.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/base.css">
        @section('head')
        @show
    </head>
    <body>
        <header>
<img class="logo" src="img/logo.png" alt="">
        </header>
        <div class="container">
            <div class="inner">
                @yield('content')
            </div>
        </div>
        <footer>
            <div class="bottom">
                @@copy2016 FM本州
            </div>
        </footer>
    </body>
</html>
