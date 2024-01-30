@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">ABOUT US</h2>
        <span class="line bottom_line"></span>
        <div class="row mt-5">
            <div class="col-12 col-md-5">
                <img src="{{asset('upload/about/'.$about->image)}}" class="img-fluid" alt="about">
            </div>
            <div class="col-12 col-md-7">
                <h3 class="about_title">{{$about->title}}</h3>
                <p class="about_text">
                    {!! html_entity_decode( $about->text_one) !!}
                </p>
                <hr class="mt-5 mb-5">
                <p class="about_text">
                    {!! html_entity_decode( $about->text_one) !!}
                </p>
            </div>
        </div>
    </div>
@endsection
