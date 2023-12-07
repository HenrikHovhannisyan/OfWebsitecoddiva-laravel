@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">APPLY NOW</h2>
        <span class="line bottom_line"></span>
        <div class="row mt-5">
            <div class="col-12 apply_container">
                <p class="apply_title">
                    “How To Make 1K Per Day With OF In The Next 48 Hours Or Less Starting Today...Guaranteed!”
                </p>
                <iframe width="100%" height="100%"
                        src="https://www.youtube.com/embed/{{$info->video}}?si=Wl6aUbPRyiPO5VGE"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
@endsection
