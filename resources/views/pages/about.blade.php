@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">ABOUT US</h2>
        <span class="line bottom_line"></span>
        <div class="row mt-5">
            <div class="col-12 col-md-6">
                <img src="../images/about-1.png" class="img-fluid" alt="about">
                <div class="mt-4">
                    <p class="about_text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of
                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <p class="about_text">
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                        piece of classical Latin literature from 45 BC, making it over 2000 years old.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h3 class="about_title">MARTINA</h3>
                <p class="about_text">
                    London-based model and stylist MARTINA expresses his style through vibrant colors and themed
                    photo shoots. His portfolio website has a playful vibe and shows visitors exactly who he is.
                </p>
                <img src="../images/about-2.png" class="img-fluid mt-4" alt="">
                <p class="about_info">HEIGHT 5' 8" BUST 32" WAIST 25" HIP 35"</p>
                <p class="about_text">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book.
                </p>
            </div>
        </div>
    </div>
@endsection
