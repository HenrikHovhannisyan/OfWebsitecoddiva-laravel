@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">Our talents</h2>
        <span class="line bottom_line"></span>
        <section data-aos="zoom-in" id="talents_banner">
            <img src="../images/talents/talents_banner.png" class="img-fluid refer_img" alt="">
            <div id="talents_banner_content">
                <p class="talents_banner_title">Become one of our talents</p>
                <p class="talents_banner_description">
                    Interested in  joining XXXTC Model Management? Either refer talent or apply now! We offer a free 15-minute
                    consultation to help you learn more about our services and how to get started.
                </p>
                <a href="{{ $info->facebook }}" target="_blank" class="btn btn-light talents_banner_btn">APPLY NOW</a>
            </div>
        </section>
        <section data-aos="zoom-in" id="model">
            <p id="model_title">
                our process to become a model
            </p>
            <span class="line bottom_line float-end"></span>
            <div class="row w-100 mt-5">
                <div class="col-12 col-lg-4">
                    <div class="model_item">
                        <p class="model_item_title">
                            Step 1: Comprehensive account audit
                        </p>
                        <p class="model_item_description">
                            ‍Say goodbye to fake followers and hello to real, engaged fans! We kick-start your journey as
                            a new client by conducting an in-depth social media account audit. This allows us to
                            identify and resolve issues that may limit your potential to make money.
                        </p>
                    </div>
                    <div class="model_item">
                        <p class="model_item_title">
                            Step 2: Brand growth and management
                        </p>
                        <p class="model_item_description">
                            At XXXTC, we closely monitor your accounts and tailor content strategies that help you
                            establish a consistent and profitable brand image. Many of our clients have seen an influx
                            of new subscribers every week that eagerly invest dollars to access exclusive content.
                        </p>
                    </div>
                    <div class="model_item">
                        <p class="model_item_title">
                            Step 3: Subscriber engagement
                        </p>
                        <p class="model_item_description">
                            ‍Gaining new subscribers is only the beginning. The real profits can be found in your direct
                            messages. Our sales representatives will engage with your subscribers on your behalf,
                            helping you boost your earnings throughout the day.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-center pb-3">
                    <div class="geeks m-white">
                        <img src="../images/talents/model.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="model_item">
                        <p class="model_item_title">
                            Step 4: Photoshoots and content creation
                        </p>
                        <p class="model_item_description">
                            ‍High-quality photos are a game-changer. They work like magnets, instantly grabbing people’s
                            attention and compelling them to click on your profile.
                        </p>
                        <p class="model_item_description">
                            We will schedule professional photoshoots to help you establish a consistent brand and set
                            you apart from other creators.
                        </p>
                    </div>
                    <div class="model_item">
                        <p class="model_item_title">
                            Step 5: Networking
                        </p>
                        <p class="model_item_description">
                            ‍What truly sets XXXTC apart as an Only Fans management agency is our ability to give you
                            access to exclusive parties attended by the biggest celebrities on the planet. This way, you
                            can expand your network and discover growth opportunities.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section data-aos="zoom-in" id="talents">
            <p id="model_title" class="text-end">
                our talents
            </p>
            <span class="line bottom_line"></span>
            <div class="row w-100 mt-5">
                @foreach($talants as $talent)
                    @if( $loop->index & 1 )
                        <div data-aos="fade-left" class="col-12 mb-5">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <p class="talents_name">{{ $talent->name }}</p>
                                    <p class="talents_text">
                                        {{ $talent->description }}
                                    </p>
                                    <div class="geeks m-white m-0">
                                        <img src="{{asset('upload/models/'.$talent->image1)}}" class="img-fluid mb-3"
                                             alt="">
                                    </div>
                                    <p class="talents_title">
                                        HEIGHT {{ $talent->height }}" BUST {{ $talent->bust }}"
                                        WAIST {{ $talent->waist }}"
                                        HIP {{ $talent->hip }}"
                                    </p>
                                    <p class="talents_text talents_text_small">
                                        {{ $talent->description2 }}
                                    </p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="geeks m-white m-0">
                                        <img src="{{asset('upload/models/'.$talent->image)}}" class="img-fluid mb-3"
                                             alt="">
                                    </div>
                                    <p class="talents_text">
                                        {{ $talent->description1 }}
                                    </p>
                                </div>
                                <div class="w-100 text-center">
                                    <a href="{{ route('talent-show',$talent->id) }}" class="btn btn-light talents_banner_btn">
                                        View More
                                        <i class="fa-solid fa-right-long fa-beat text-dark ps-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @else
                        <div data-aos="fade-right" class="col-12 mb-5">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="geeks m-white m-0">
                                        <img src="{{asset('upload/models/'.$talent->image)}}" class="img-fluid mb-3"
                                             alt="">
                                    </div>
                                    <p class="talents_text talents_text_big">
                                        {{ $talent->description1 }}
                                    </p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p class="talents_name">{{ $talent->name }}</p>
                                    <p class="talents_text">
                                        {{ $talent->description }}
                                    </p>
                                    <div class="geeks m-white m-0">
                                        <img src="{{asset('upload/models/'.$talent->image1)}}" class="img-fluid mb-3"
                                             alt="">
                                    </div>
                                    <p class="talents_title">
                                        HEIGHT {{ $talent->height }}" BUST {{ $talent->bust }}"
                                        WAIST {{ $talent->waist }}"
                                        HIP {{ $talent->hip }}"
                                    </p>
                                    <p class="talents_text talents_text_small">
                                        {{ $talent->description2 }}
                                    </p>
                                </div>
                                <div class="w-100 text-center">
                                    <a href="{{ route('talent-show',$talent->id) }}" class="btn btn-light talents_banner_btn">
                                        View More
                                        <i class="fa-solid fa-right-long fa-beat text-dark ps-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endif
                @endforeach
            </div>
        </section>
    </div>
@endsection
