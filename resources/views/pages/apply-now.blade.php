@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">APPLY NOW</h2>
        <span class="line bottom_line"></span>
        <section data-aos="zoom-in" id="talents_banner">
            <img src="../images/apply_banner.png" class="img-fluid refer_img" alt="">
            <div id="talents_banner_content">
                <p class="talents_banner_title">Become one of our talents</p>
                <p class="talents_banner_description">
                    Interested in joining XXXTC Model Management? Either refer talent or apply now! We offer a free 15-minute
                    consultation to help you learn more about our services and how to get started.
                </p>
                <a href="{{ $info->facebook }}" target="_blank" class="btn btn-light talents_banner_btn">APPLY NOW</a>
            </div>
        </section>
        <section data-aos="fade-right" id="home_info">
            <div class="container-fluid">
                <p id="model_title">
                    Why Choose Model Management?
                </p>
                <span class="line bottom_line float-end"></span>
                <div class="container-fluid mt-5">
                    <div class="row w-100">
                        <div class="col-12 col-lg-6 d-flex mb-5">
                            <img src="../images/home_info/1.png" class="img-fluid me-3" alt="">
                            <div>
                                <p class="home_info_item_title">Comprehensive Services</p>
                                <p class="home_info_item_text mb-0">
                                    From account setup and audit to content scheduling and 24/7 subscriber engagement,
                                    we
                                    cover
                                    every aspect.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 d-flex mb-5">
                            <img src="../images/home_info/2.png" class="img-fluid me-3" alt="">
                            <div>
                                <p class="home_info_item_title">Lucrative Referral Program</p>
                                <p class="home_info_item_text mb-0">
                                    Earn more with our attractive referral program
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 d-flex mb-5">
                            <img src="../images/home_info/3.png" class="img-fluid me-3" alt="">
                            <div>
                                <p class="home_info_item_title">Exclusive Incentives</p>
                                <p class="home_info_item_text mb-0">
                                    Enjoy luxurious incentives that set us apart.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 d-flex mb-5">
                            <img src="../images/home_info/4.png" class="img-fluid me-3" alt="">
                            <div>
                                <p class="home_info_item_title">A-List Networking</p>
                                <p class="home_info_item_text mb-0">
                                    Access unparalleled networking opportunities with the elite.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div data-aos="fade-left" class="row mt-5">
            <p id="model_title" class="text-end mt-5">
                APPLY NOW
            </p>
            <span class="line bottom_line"></span>
            <div class="col-12 apply_container">
                <div class="d-grid d-lg-flex align-items-center justify-content-between">
                    <p class="apply_title">
                        “How To Make 1K Per Day With OF In The Next 48 Hours Or Less Starting Today...Guaranteed!”
                    </p>
                    <a href="{{ $info->facebook }}" target="_blank" class="btn btn-light talents_banner_btn mb-3">APPLY
                        NOW</a>
                </div>
                <iframe width="100%" height="100%"
                        src="https://www.youtube.com/embed/{{$info->video}}?si=Wl6aUbPRyiPO5VGE"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
@endsection
