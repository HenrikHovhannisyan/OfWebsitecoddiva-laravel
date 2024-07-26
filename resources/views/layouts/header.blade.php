<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="1qc08efEfDboTcCxOXlzkAvecW5I4MMab8CDxkfP4Ug" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}?v=<?php echo filemtime(public_path('css/app.css')); ?>">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="{{ asset('/js/app.js') }}?v=<?php echo filemtime(public_path('js/app.js')); ?>"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-3 bg-white menu" id="menu">
            <div class="">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('./images/logo.png') }}" width="108" alt="">
                </a>
                <div class="list-group menu_list">
                    <a href="{{ route('index') }}"
                       class="list-group-item list-group-item-action {{ isActiveRoute('index') }}" aria-current="true">HOME</a>
                    <a href="{{ route('services') }}"
                       class="list-group-item list-group-item-action {{ isActiveRoute('services') }}">SERVICES</a>
                    <a href="{{ route('talents') }}"
                       class="list-group-item list-group-item-action {{ isActiveRoute('talents') }}">TALENTS</a>
                    <a href="{{ route('about') }}"
                       class="list-group-item list-group-item-action {{ isActiveRoute('about') }}">ABOUT US</a>
                    <a href="{{ route('apply-now') }}"
                       class="list-group-item list-group-item-action {{ isActiveRoute('apply-now') }}">APPLY NOW</a>
                    <a href="{{ route('refer') }}"
                       class="list-group-item list-group-item-action {{ isActiveRoute('refer') }}">REFER</a>
                    <a href="{{ route('blog') }}"
                       class="list-group-item list-group-item-action {{ isActiveRoute('blog') }}">BLOG</a>
                </div>
            </div>
            @if(isActiveRoute('index') || isActiveRoute('services') || isActiveRoute('services-show'))
                <div class="home" style="background-image: url('./images/menu/HOME.png')">
                    @elseif(isActiveRoute('contact'))
                        <div class="home" style="background-image: url('./images/menu/CONTACT.png')">
                            @elseif(isActiveRoute('blog') || isActiveRoute('blog-show'))
                                <div class="home" style="background-image: url('./images/menu/BLOG.png')">
                                    @elseif(isActiveRoute('about') || isActiveRoute('talents') || isActiveRoute('talent-show'))
                                        <div class="home" style="background-image: url('./images/menu/ABOUT.png')">
                                            @elseif(isActiveRoute('apply-now'))
                                                <div class="home"
                                                     style="background-image: url('./images/menu/APPLY-NOW.png')">
                                                    @elseif(isActiveRoute('refer'))
                                                        <div class="home"
                                                             style="background-image: url('./images/menu/REFER.png')">
                                                            @elseif(isActiveRoute('legal'))
                                                                <div class="home"
                                                                     style="background-image: url('./images/menu/LEGAL.png')">
                                                                    @endif
                                                                    <a href="{{ $info->instagram }}" target="_blank">Instagram</a>
                                                                    <a href="{{ route('contact') }}">Contact</a>
                                                                    <a href="{{ route('legal') }}">Legal</a>
                                                                </div>
                                                        </div>

                                                        <div class="col-12 col-md-9 content ps-0 pe-0 m-auto me-0"
                                                             id="content">
                                                            <button type="button" class="btn btn-dark m-3" id="bars">
                                                                <i class="fa-solid fa-bars"></i>
                                                            </button>
                                                            @yield('content')
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
    </div>
</div>
</body>
</html>
