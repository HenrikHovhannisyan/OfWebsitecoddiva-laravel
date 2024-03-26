@extends('layouts.header')

@section('content')
    <div data-aos="zoom-in" class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">REFER</h2>
        <span class="line bottom_line"></span>
        <div class="row mt-5">
            <div class="col-12 col-lg-6">
                <p class="refer_title">Referral Program</p>
                <p class="refer_text">
                    Lorem Ipsum is simply dummy text of the printing and typesetting <br> industry.
                </p>
                <form action="" method="post">
                    <p class="refer_form_title">Your Details</p>
                    <div class="form-group">
                        <input type="text" class="form-control contact_form_input" placeholder="full name *"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control contact_form_input" placeholder="your email *"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control contact_form_input" placeholder="mobile number *"
                               required>
                    </div>
                    <p class="refer_form_title">Your Friend’s details</p>
                    <div class="form-group">
                        <input type="text" class="form-control contact_form_input" placeholder="full name *"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control contact_form_input" placeholder="your email *"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control contact_form_input" placeholder="mobile number *"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control contact_form_input" placeholder="instagram *"
                               required>
                    </div>
                    <div class="form-group text-end mb-3">
                        <button type="submit" class="contact_btn">SEND MESSAGE</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-6 text-end">
                <img src="../images/refer-1.png" class="img-fluid refer_img" alt="">
            </div>
        </div>

        <div class="refer_section">
            <p class="refer_section_title">How it Works when you partner with us</p>
            <div class="container">
                <div class="row refer_section_row">
                    <div data-aos="fade-right" class="col-12 col-lg-4">
                        <div class="refer_section_box">
                            <p class="refer_section_box_title">Submit Your First Referral</p>
                            <p class="refer_section_box_text">
                                When you submit a referral we will contact you when they sign up and begin the
                                next steps
                            </p>
                        </div>
                    </div>
                    <div data-aos="zoom-in" class="col-12 col-lg-4">
                        <div class="refer_section_box">
                            <p class="refer_section_box_title">Your Own Management Portal</p>
                            <p class="refer_section_box_text">
                                We believe in 100% transparency, we will give you access to your own dashboard
                                where you can see your earnings in real time.
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-left" class="col-12 col-lg-4">
                        <div class="refer_section_box">
                            <p class="refer_section_box_title">Get Paid Big</p>
                            <p class="refer_section_box_text">
                                If you refer just 15 models you can make up to $20,000 a month, this is just the
                                beginning too
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="refer_part_quest">Referral Partner Questions</h2>
        </div>

        <div data-aos="zoom-in" class="faq">
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
@endsection
