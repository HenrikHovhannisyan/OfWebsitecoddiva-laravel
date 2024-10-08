@section('title')
    Contact us |
@endsection

@extends('layouts.header')

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show ms-3 me-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div data-aos="zoom-in" class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">CONTACT US</h2>
        <span class="line bottom_line"></span>
        <div class="row mt-5">
            <div class="col-12 col-md-6">
                <div class="geeks">
                    <img src="{{ asset('images/contact_us.png') }}" class="img-fluid" alt="about">
                </div>
                <div class="mt-5">
                    @if($info->contact)
                        <p class="text-white mb-0">Contact</p>
                        <p class="about_text">
                            {{$info->contact}}
                        </p>
                    @endif
                    @if($info->phone)
                        <p class="text-white mb-0">Phone</p>
                        <a href="tel:{{$info->phone}}" class="about_text">{{$info->phone}}</a>
                    @endif
                    @if($info->email)
                        <p class="text-white mb-0">Email</p>
                        <a href="mailto:{{$info->email}}" class="about_text">{{$info->email}}</a>
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-6">
                <form id="contact-form" method="post">
                    <div class="form-group">
                        <label for="name">Full name *</label>
                        <input type="text" class="form-control contact_form_input" id="name" name="name"
                               placeholder="John David"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your email *</label>
                        <input type="email" class="form-control contact_form_input" id="email" name="email"
                               placeholder="example@yourmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Company *</label>
                        <input type="text" class="form-control contact_form_input" id="company" name="company"
                               placeholder="your company name here" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea style="" class="form-control contact_form_input message" id="message" name="message"
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
