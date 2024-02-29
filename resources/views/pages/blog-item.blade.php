@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">BLOG</h2>
        <span class="line bottom_line"></span>
        <div class="mt-5">
            <a class="blog_back" href="{{ route('blog') }}">
                <i class="fa-solid fa-chevron-left"></i>
                All Blog Posts
            </a>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <img src="{{asset('upload/blogs/'.$blog->blog_image)}}" class="img-fluid mb-3 me-3" alt=""
                     style="float: left">
                <div class="_blog_date mt-0">
                    <span>
                        <i class="fa-solid fa-calendar-days"></i>
                        {{ substr($blog->updated_at, 0, 10) }}
                    </span>
                </div>
                <p class="blog_item_heading">
                    {{$blog->blog_title}}
                </p>
                <p class="blog_item_description">
                    {!! html_entity_decode($blog->blog_description) !!}
                </p>
                <img src="{{asset('upload/blogs/'.$blog->image1)}}" class="img-fluid mb-3 me-3" alt=""
                     style="float: left">
                <p class="blog_item_description">
                    {!! html_entity_decode($blog->description) !!}
                </p>
                <img src="{{asset('upload/blogs/'.$blog->image2)}}" class="img-fluid mb-4" alt="">
            </div>
        </div>
    </div>
@endsection
