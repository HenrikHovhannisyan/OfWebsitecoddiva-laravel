@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">BLOG</h2>
        <span class="line bottom_line"></span>
        <div class="row mt-5">
            <div class="col-12">
                <p class="blog_item_heading">
                    {{$blog->title}}
                </p>
                <p class="blog_item_description">
                    <img src="{{asset('upload/blogs/'.$blog->image1)}}" class="img-fluid mb-3 me-3" alt=""
                         style="float: left">
                    {!! html_entity_decode($blog->description) !!}
                </p>
                <img src="{{asset('upload/blogs/'.$blog->image2)}}" class="img-fluid mb-4" alt="">
                <div class="blog_date mt-1">
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
        </div>
    </div>
@endsection
