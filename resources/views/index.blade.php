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
                        <button class="btn banner_btn">Apply now</button>
                    </div>
                </div>
            </div>
            <img src="../images/banner_bg.png" class="img-fluid" alt="">
        </div>
    </section>
    <section id="home_info">
        <div class="container">
            <p id="model_title">
                Why Choose Model Management?
            </p>
            <span class="line bottom_line float-end"></span>
            <div class="container mt-5">
                <div class="row w-100">
                    <div class="col-12 col-lg-6 d-flex mb-5">
                        <img src="../images/home_info/1.png" class="img-fluid me-3" alt="">
                        <div>
                            <p class="home_info_item_title">Comprehensive Services</p>
                            <p class="home_info_item_text mb-0">
                                From account setup and audit to content scheduling and 24/7 subscriber engagement, we cover
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
@endsection
