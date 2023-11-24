<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-3 bg-white menu">
            <div class="">
                <a href="./index.html">
                    <img src="./images/logo.png" alt="">
                </a>
                <div class="list-group menu_list">
                    <a href="./index.html" class="list-group-item list-group-item-action active" aria-current="true">HOME</a>
                    <a href="./pages/contact.html" class="list-group-item list-group-item-action">CONTACT</a>
                    <a href="./pages/blog.html" class="list-group-item list-group-item-action">BLOG</a>
                    <a href="./pages/about.html" class="list-group-item list-group-item-action">ABOUT US</a>
                    <a href="./pages/apply-now.html" class="list-group-item list-group-item-action">APPLY NOW</a>
                    <a href="./pages/refer.html" class="list-group-item list-group-item-action">REFER</a>
                    <a href="./pages/legal.html" class="list-group-item list-group-item-action">LEGAL</a>
                </div>
            </div>
            <div class="home" style="background-image: url('./images/menu/HOME.png')">
                <a href="">Instagram</a>
                <a href="">Facebook</a>
                <a href="">Pinterest</a>
            </div>
        </div>

        <div class="col-12 col-md-9 content">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
