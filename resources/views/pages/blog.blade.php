@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">BLOG</h2>
        <span class="line bottom_line"></span>
        <div class="row mt-5">
            <div class="col-6 col-md-4 blog_item" style="background-image: url('../images/blog/1.png')">
                <a href="{{ route('blog-item') }}">
                    <div class="blog_item_container">
                        <p class="blog_item_container_title">Places for a photo session</p>
                        <p class="blog_item_container_text">Are you looking to come out of your next trade show
                            with the most engagement
                            possible? </p>
                        <div class="blog_date">
                                <span>
                                    <i class="fa-solid fa-calendar-days"></i>
                                    24.08.23
                                </span>
                            <span>
                                    <i class="fa-regular fa-eye"></i>
                                    785
                                </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 blog_item" style="background-image: url('../images/blog/2.png')">
                <a href="{{ route('blog-item') }}">
                    <div class="blog_item_container">
                        <p class="blog_item_container_title">Model portfolio</p>
                        <p class="blog_item_container_text">
                            Recommendations for creating a model portfolio. What are snaps and tests, what types
                            they beat and how to create them correctly.
                        </p>
                        <div class="blog_date">
                                <span>
                                    <i class="fa-solid fa-calendar-days"></i>
                                    24.08.23
                                </span>
                            <span>
                                    <i class="fa-regular fa-eye"></i>
                                    785
                                </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 blog_item" style="background-image: url('../images/blog/3.png')">
                <a href="{{ route('blog-item') }}">
                    <div class="blog_item_container">
                        <p class="blog_item_container_title">Photo studios</p>
                        <p class="blog_item_container_text">
                            List of the best photo studios. Prices, halls, addresses and personal photography
                            experience in these locations.
                        </p>
                        <div class="blog_date">
                                <span>
                                    <i class="fa-solid fa-calendar-days"></i>
                                    24.08.23
                                </span>
                            <span>
                                    <i class="fa-regular fa-eye"></i>
                                    785
                                </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 blog_item" style="background-image: url('../images/blog/4.png')">
                <a href="{{ route('blog-item') }}">
                    <div class="blog_item_container">
                        <p class="blog_item_container_title">Paris Fashion Week S/S 24!</p>
                        <p class="blog_item_container_text">
                            Are you looking to come out of your next trade show with the most engagement
                            possible?
                        </p>
                        <div class="blog_date">
                                <span>
                                    <i class="fa-solid fa-calendar-days"></i>
                                    24.08.23
                                </span>
                            <span>
                                    <i class="fa-regular fa-eye"></i>
                                    785
                                </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 blog_item" style="background-image: url('../images/blog/5.png')">
                <a href="{{ route('blog-item') }}">
                    <div class="blog_item_container">
                        <p class="blog_item_container_title">Model portfolio</p>
                        <p class="blog_item_container_text">
                            Recommendations for creating a model portfolio. What are snaps and tests, what types
                            they beat and how to create them correctly.
                        </p>
                        <div class="blog_date">
                                <span>
                                    <i class="fa-solid fa-calendar-days"></i>
                                    24.08.23
                                </span>
                            <span>
                                    <i class="fa-regular fa-eye"></i>
                                    785
                                </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 blog_item d-flex align-items-center">
                <a href="{{ route('blog-item') }}">
                    <div class="popular_blog">
                        <p class="popular_blog_title">Popular Blog</p>
                        <p class="popular_blog_text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
