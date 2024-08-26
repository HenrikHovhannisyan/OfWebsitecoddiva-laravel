@section('title')
    {{$talent->name}} |
@endsection

@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">Our talents</h2>
        <span class="line bottom_line"></span>
        <div class="row mt-5">
            <div class="col-12 col-lg-6 order-1 order-lg-0">
                <p class="talent_item_info">
                    {{$talent->info}}
                </p>
                <img src="{{asset('upload/models/'.$talent->image)}}" class="img-fluid mt-3" alt="">
                <p class="talent_item_des">
                    {{$talent->description1}}
                </p>
            </div>
            <div class="col-12 col-lg-6 order-0 order-lg-1">
                <p class="talent_item_name">{{$talent->name}}</p>
                <p class="talent_item_des" id="talent_item_des">
                    {{$talent->description}}
                </p>
                <p class="talent_item_des">
                    {{$talent->description2}}
                </p>
                <img src="{{asset('upload/models/'.$talent->image1)}}" class="img-fluid mt-3" alt="">
            </div>
        </div>
    </div>
@endsection
