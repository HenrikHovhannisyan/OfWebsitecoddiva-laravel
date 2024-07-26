@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">Our Services</h2>
        <span class="line bottom_line"></span>
        <div class="mt-3">
            <a class="blog_back" href="{{ route('index') }}">
                <i class="fa-solid fa-chevron-left"></i>
                Back
            </a>
        </div>
        <div class="mt-3">
            @foreach($firstTwoServices as $service)
                <div class="row mb-5">
                    <div class="col-xl-7 order-xl-{{ $loop->odd ? 1 : 2 }}">
                        <img src="{{ asset('upload/services/'.$service->image) }}" class="img-fluid"
                             alt="{{ $service->title }}">
                    </div>
                    <div class="col-xl-5 order-xl-{{ $loop->odd ? 2 : 1 }}">
                        <p class="top_services_title">
                            {{ $service->title }}
                        </p>
                        <p class="top_services_description">
                            {!! html_entity_decode($service->description) !!}
                        </p>
                        <a href="{{ route('services-show', $service->id) }}" class="btn blog_btn mb-3">View</a>
                    </div>
                </div>
            @endforeach
            <div class="row">
                @foreach($remainingServices as $service)
                    <div class="col-xl-6 mb-5 top_services">
                        <img src="{{ asset('upload/services/'.$service->image) }}" class="img-fluid"
                             alt="{{ $service->title }}">
                        <p class="top_services_title">
                            {{ $service->title }}
                        </p>
                        <p class="top_services_description">
                            {!! html_entity_decode($service->description) !!}
                        </p>
                        <a href="{{ route('services-show', $service->id) }}" class="btn blog_btn mb-3 w-auto">View</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
