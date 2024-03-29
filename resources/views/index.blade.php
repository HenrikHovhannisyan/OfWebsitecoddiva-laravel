@extends('layouts.header')

@section('content')
    <section id="banner">
        <div class="container-fluid ps-0">
            <div class="row">
                <div class="col-lg-6 d-lg-block d-none">
                    <img src="../images/banner.png" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-6 ps-4 d-flex align-items-center">
                    <div>
                        <p id="banner_title">Where Dreams Become Reality!</p>
                        <p id="banner_text">At Model Management, we transform dreams into reality as a
                            leading OnlyFans
                            management company. We empower content creators and influencers worldwide to unlock their
                            full
                            earning potential.
                        </p>
                        <a href="{{ $info->facebook }}" target="_blank" class="btn banner_btn">Apply now</a>
                    </div>
                </div>
            </div>
            <img src="../images/banner_bg.png" class="img-fluid" alt="">
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
                                From account setup and audit to content scheduling and 24/7 subscriber engagement, we
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
    <section data-aos="fade-left" id="home_our_services">
        <p id="home_our_services_title">
            our services
        </p>
        <span class="line bottom_line"></span>
        <div class="row w-100 mt-5">
            <div class="col-12 col-lg-4">
                <div class="model_item">
                    <p class="model_item_title">
                        Subscriber Surge
                    </p>
                    <p class="model_item_description">
                        Experience a continuous influx of hundreds of new subscribers each week with our unparalleled
                        OnlyFans management services.
                    </p>
                </div>
                <div class="model_item">
                    <p class="model_item_title">
                        Account Audit & Market Research
                    </p>
                    <p class="model_item_description">
                        Elevate your online presence with our in-depth analysis of your social profiles. We identify
                        opportunities for improvement and craft a custom content strategy tailored to your brand.
                    </p>
                </div>
                <div class="model_item">
                    <p class="model_item_title">
                        Daily + Weekly Coaching Calls
                    </p>
                    <p class="model_item_description">
                        Boost your brand and confidence through our daily and weekly growth and coaching calls.
                        Personalized guidance to take your content creation to new heights.
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-4 text-center pb-3">
                <div class="geeks m-white ">
                    <img src="../images/home_our_services.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="model_item">
                    <p class="model_item_title">
                        Networking & Event Management
                    </p>
                    <p class="model_item_description">
                        Step into the spotlight by rubbing shoulders with A-listers at the hottest global parties and
                        prestigious fashion shows.
                    </p>
                </div>
                <div class="model_item">
                    <p class="model_item_title">
                        24/7 Chatting Profit Service
                    </p>
                    <p class="model_item_description">
                        Let us handle your direct messages round the clock, 365 days a year. We're your constant
                        support, managing your account with precision.
                    </p>
                </div>
                <div class="model_item">
                    <p class="model_item_title">
                        Brand & Growth Management
                    </p>
                    <p class="model_item_description">
                        Our 24/7 live engagement hyper-growth strategy ensures a surge in likes and followers across
                        Instagram, OnlyFans, TikTok, Twitter, and Facebook.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section data-aos="fade-right" id="home_testimonials">
        <div class="container-fluid">
            <p id="model_title">
                our testimonials
            </p>
            <span class="line bottom_line float-end"></span>
            <div class="container-fluid mt-5">
                <div class="owl-carousel owl-theme owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item">
                                <div class="d-flex align-items-center">
                                    <img src="../images/testimonials/1.png" class="home_owl_img" alt="">
                                    <div class="ms-5">
                                        <p class="home_owl_img_title">Sophie H.</p>
                                        <p class="home_owl_img_text mb-0">
                                            Model Management turned my OnlyFans journey into a dream. Their coaching
                                            calls
                                            are a game-changer, and the networking opportunities are beyond my wildest
                                            expectations!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="d-flex align-items-center">
                                    <img src="../images/testimonials/2.png" class="home_owl_img" alt="">
                                    <div class="ms-5">
                                        <p class="home_owl_img_title">Sophie H.</p>
                                        <p class="home_owl_img_text mb-0">
                                            Model Management turned my OnlyFans journey into a dream. Their coaching
                                            calls
                                            are a game-changer, and the networking opportunities are beyond my wildest
                                            expectations!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-aos="fade-left" id="home_faq">
        <p id="home_our_services_title">
            FREQUENTLy asked questions
        </p>
        <span class="line bottom_line"></span>
        <div class="row w-100 mt-5">
            <div class="faq">
                <div class="accordion">
                    @foreach($faqs as $faq)
                        <div class="accordion_item">
                            <div class="accordion-item-header">
                                {{$faq->question}}
                            </div>
                            <div class="accordion-item-body">
                                <div class="accordion-item-body-content">
                                    {{$faq->answer}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
