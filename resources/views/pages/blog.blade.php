@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">BLOG</h2>
        <span class="line bottom_line"></span>
        <div class="row mt-5">
            <div class="col col-lg-8">
                <img src="{{asset('upload/blogs/'.$blog_one->blog_image)}}" class="img-fluid" alt="">
                <div class="blog_item_container">
                    <div class="blog_date">
                            <span>
                                <i class="fa-solid fa-calendar-days"></i>
                                {{ substr($blog_one->updated_at, 0, 10) }}
                            </span>
                    </div>
                    <p class="blog_item_container_title">{{ $blog_one->blog_title }}</p>
                    <div class="blog_item_container_text">{!! html_entity_decode($blog_one->blog_description) !!}</div>
                    <a href="{{ route('blog-show',$blog_one->id) }}" class="btn blog_btn mb-3">view</a>
                </div>
            </div>
            <div class="col col-lg-4">
                @foreach($_blogs as $blog)
                    <div class="blog_item">
                        <a href="{{ route('blog-show',$blog->id) }}">
                            <img src="{{asset('upload/blogs/'.$blog->blog_image)}}" class="img-fluid" alt="">
                            <div class="blog_item_container">
                                <div class="blog_date">
                            <span>
                                <i class="fa-solid fa-calendar-days"></i>
                                {{ substr($blog->updated_at, 0, 10) }}
                            </span>
                                </div>
                                <p class="blog_item_container_title">{{ $blog->blog_title }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row mt-5">
            @foreach($blogs->slice(3) as $blog)
            <div class="col-6 col-md-4 blog_item">
                <a href="{{ route('blog-show',$blog->id) }}">
                    <img src="{{asset('upload/blogs/'.$blog->blog_image)}}" class="img-fluid" alt="">
                    <div class="blog_item_container">
                        <div class="blog_date">
                            <span>
                                <i class="fa-solid fa-calendar-days"></i>
                                {{ substr($blog->updated_at, 0, 10) }}
                            </span>
                        </div>
                        <p class="blog_item_container_title">{{ $blog->blog_title }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
