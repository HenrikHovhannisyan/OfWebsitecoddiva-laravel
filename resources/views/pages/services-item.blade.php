@section('title')
    {{ $service->title }} |
@endsection

@extends('layouts.header')
@section('meta_title'){{ $service->meta_title }}@endsection
@section('meta_description'){{ $service->meta_description }}@endsection

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">Our Services</h2>
        <span class="line bottom_line"></span>
        <div class="mt-5">
            <a class="blog_back" href="{{ route('services') }}">
                <i class="fa-solid fa-chevron-left"></i>
                Back
            </a>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <img src="{{asset('upload/services/'.$service->image)}}" class="img-fluid mb-3 me-3" alt="" style="float: left">
                <p class="services_item_title">
                    {{ $service->title }}
                </p>
                <p class="services_item_description">
                    {!! html_entity_decode($service->description) !!}
                </p>
                <p class="services_item_description">
                    {!! html_entity_decode($service->text) !!}
                </p>
            </div>
        </div>
    </div>
@endsection
