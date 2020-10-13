<!doctype html>
<html>
<head>
    @yield('head')
</head>
<body>

    <header class="row">
        @include('includes.notification-bar')
        @include('includes.header')
    </header>

    <div id="main" class="row">
            @yield('content')
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>


@if(config('app.env') == 'local')
    <script src="http://localhost:35729/livereload.js"></script>
@endif

</body>
</html>