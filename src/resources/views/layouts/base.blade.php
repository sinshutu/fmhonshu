<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <script src="/js/jquery-3.1.0.min.js"></script>
        <link rel="stylesheet" href="/css/base.css">
    </head>
    <body>
        <header>
        </header>
        <div class="container">
            @yield('content')
        </div>
        <footer>
            <div class="bottom">
                @@copy2016 FM本州
            </div>
        </footer>
    </body>
</html>
