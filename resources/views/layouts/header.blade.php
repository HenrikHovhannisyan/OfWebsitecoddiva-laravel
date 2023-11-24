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
                <a href="{{ route('index') }}">
                    <img src="{{ asset('./images/logo.png') }}" alt="">
                </a>
                <div class="list-group menu_list">
                    <a href="{{ route('index') }}" class="list-group-item list-group-item-action {{ isActiveRoute('index') }}" aria-current="true">HOME</a>
                    <a href="{{ route('contact') }}" class="list-group-item list-group-item-action {{ isActiveRoute('contact') }}">CONTACT</a>
                    <a href="{{ route('blog') }}" class="list-group-item list-group-item-action {{ isActiveRoute('blog') }}">BLOG</a>
                    <a href="{{ route('about') }}" class="list-group-item list-group-item-action {{ isActiveRoute('about') }}">ABOUT US</a>
                    <a href="{{ route('apply-now') }}" class="list-group-item list-group-item-action {{ isActiveRoute('apply-now') }}">APPLY NOW</a>
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
