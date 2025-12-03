<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Shooting Star Burgers - @yield('title')</title>
    <!-- // Source - https://stackoverflow.com/questions/63975930/laravel-access-css-and-js-file-from-resources-css-and-js-directory -->
    <!-- // Posted by Pashupati Sah -->
    <!-- // Retrieved 2025-11-05, License - CC BY-SA 4.0 -->
    <link rel="stylesheet" href="{{asset(path: 'css/output.css')}}">

</head>
<body>
    @include('partial.sidebar')
    @include('partial.nav')
    <section>
        @yield('content')
    </section>
    @yield('javascript')
    <!-- AlwaysActiveScripts -->
    <script src="{{asset('js/Sidebar.js')}}"></script>

</body>
</html>