@extends('layouts.header')

@section('content')
    <div data-aos="zoom-in" class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">CONTACT US</h2>
        <span class="line bottom_line"></span>
        <div class="row mt-5">
            <div class="col-12 col-md-6">
                <img src="../images/contact_us.png" class="img-fluid" alt="about">
                <div class="mt-5">
                    <p class="text-white mb-0">Contact</p>
                    <p class="about_text">
                        {{$info->contact}}
                    </p>
                    <p class="text-white mb-0">Phone</p>
                    <a href="tel:{{$info->phone}}" class="about_text">{{$info->phone}}</a>
                    <p class="text-white mb-0">Email</p>
                    <a href="mailto:{{$info->email}}" class="about_text">{{$info->email}}</a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Full name *</label>
                        <input type="text" class="form-control contact_form_input" id="name" placeholder="John David"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your email *</label>
                        <input type="email" class="form-control contact_form_input" id="email"
                               placeholder="example@yourmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Company *</label>
                        <input type="text" class="form-control contact_form_input" id="company"
                               placeholder="your company name here" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea style="" class="form-control contact_form_input message" id="message"
                                  placeholder="Hello there, I would like to talk about how to..." required></textarea>
                    </div>
                    <div class="form-group text-end">
                        <button type="submit" class="contact_btn">SEND MESSAGE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
