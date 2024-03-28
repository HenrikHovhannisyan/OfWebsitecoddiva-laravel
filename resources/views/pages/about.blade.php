@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">ABOUT US</h2>
        <span class="line bottom_line"></span>
        <div data-aos="zoom-in" class="row mt-5">
            <div class="col-12 col-md-5">
                <div class="geeks m-white">
                    <img src="{{asset('upload/about/'.$about->image)}}" class="img-fluid" alt="about">
                </div>
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
        <div class="our_services_container">
            <h2 class="our_services_title">our services</h2>
            <span class="line bottom_line float-end"></span>
            <div class="our_services_items">
                <div data-aos="flip-left" class="our_services_item">
                    <div class="row w-100">
                        <div class="col-12 col-lg-6">
                            <p class="our_services_item_name">Account Audit & Market Research</p>
                            <hr class="mt-5 mb-5">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <p class="our_services_item_text">
                                        We will audit your current social profiles and we will come up with a strategy
                                        to improve your overall account.
                                    </p>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <p class="our_services_item_text">
                                        You tell us who you want to become and we will create a plan to create content
                                        so you can become better then that creator.
                                    </p>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <p class="our_services_item_text">
                                        We will audit your existing OF account and we will find where you're going wrong
                                        and where you can make more money.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 text-end">
                            <div class="geeks m-white">
                                <img src="../images/services/1.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="flip-left" class="our_services_item">
                    <div class="row w-100">
                        <div class="col-12 col-lg-6 text-start">
                            <div class="geeks m-white">
                                <img src="../images/services/2.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <p class="our_services_item_name">Brand & Growth Management</p>
                            <hr class="mt-5 mb-5">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <p class="our_services_item_text">
                                        We will manage your social media account, Instagram, OF, TikTok, Twitter,
                                        Facebook, etc
                                    </p>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <p class="our_services_item_text">
                                        We will do 24/7 live engagement hyper-growth, this is where we will get you real
                                        followers and likes on all your content.
                                    </p>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <p class="our_services_item_text">
                                        We will monitor your accounts and the internet to make sure your brand is
                                        constantly growing and on the rise.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="flip-left" class="our_services_item">
                    <div class="row w-100">
                        <div class="col-12 col-lg-6">
                            <p class="our_services_item_name">Account Audit & Market Research</p>
                            <hr class="mt-5 mb-5">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <p class="our_services_item_text">
                                        We offer 24/7 live messaging support in Slack our messaging tool.
                                    </p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p class="our_services_item_text">
                                        We will host weekly growth / coaching calls to improve your brand.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 text-end">
                            <div class="geeks m-white">
                                <img src="../images/services/3.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="flip-left" class="our_services_item">
                    <div class="row w-100">
                        <div class="col-12 col-lg-6 text-start">
                            <div class="geeks m-white">
                                <img src="../images/services/4.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <p class="our_services_item_name">24/7 Chatting Profit Service</p>
                            <hr class="mt-5 mb-5">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <p class="our_services_item_text">
                                        We will manage your social direct messages to drive content to your OF account
                                        so you can make sales.
                                    </p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p class="our_services_item_text">
                                        We will install our sales team inside the OF account 24/7 and even while you're
                                        sleeping you will be making thousands of dollars.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
