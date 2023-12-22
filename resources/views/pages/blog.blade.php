@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">BLOG</h2>
        <span class="line bottom_line"></span>
        <div class="row mt-5">
            @foreach($blogs as $blog)
            <div class="col-6 col-md-4 blog_item" style="background-image: url('{{asset('upload/blogs/'.$blog->blog_image)}}')">
                <a href="{{ route('blog-show',$blog->id) }}">
                    <div class="blog_item_container">
                        <p class="blog_item_container_title">{{ $blog->blog_title }}</p>
                        <p class="blog_item_container_text">{{ $blog->blog_description }}</p>
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
            @endforeach
            <div class="col-6 col-md-4 blog_item d-flex align-items-center">
                <a href="">
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
