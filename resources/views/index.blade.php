@extends('layouts.header')

@section('content')
    <div class="container ps-0 pe-0">
        <section id="banner" class="pt-5">
            <div class="owl-carousel owl-theme owl-loaded" id="owl-carousel-banner">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <div class="row">
                                <div class="col-lg-6 d-lg-block d-none">
                                    <img src="{{ asset('images/banner/1.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-12 col-lg-6 ps-4 d-flex align-items-center baner_btn">
                                    <div>
                                        <p class="banner_title">Where Dreams Become Reality!</p>
                                        <p class="banner_text">At XXXTC Model Management, we transform dreams into
                                            reality as
                                            a
                                            leading OnlyFans
                                            management company. We empower content creators and influencers worldwide to
                                            unlock their
                                            full
                                            earning potential.
                                        </p>
                                        <a href="{{ $info->facebook }}" target="_blank" class="btn banner_btn">Apply
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="row">
                                <div class="col-lg-6 d-lg-block d-none">
                                    <img src="{{ asset('images/banner/2.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-12 col-lg-6 ps-4 d-flex align-items-center baner_btn">
                                    <div>
                                        <p class="banner_title">Where Dreams Become Reality!</p>
                                        <p class="banner_text">At XXXTC Model Management, we transform dreams into
                                            reality as
                                            a
                                            leading OnlyFans
                                            management company. We empower content creators and influencers worldwide to
                                            unlock their
                                            full
                                            earning potential.
                                        </p>
                                        <a href="{{ $info->facebook }}" target="_blank" class="btn banner_btn">Apply
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="row">
                                <div class="col-lg-6 d-lg-block d-none">
                                    <img src="{{ asset('images/banner/3.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-12 col-lg-6 ps-4 d-flex align-items-center baner_btn">
                                    <div>
                                        <p class="banner_title">Where Dreams Become Reality!</p>
                                        <p class="banner_text">At Model Management, we transform dreams into reality as
                                            a
                                            leading OnlyFans
                                            management company. We empower content creators and influencers worldwide to
                                            unlock their
                                            full
                                            earning potential.
                                        </p>
                                        <a href="{{ $info->facebook }}" target="_blank" class="btn banner_btn">Apply
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="row">
                                <div class="col-lg-6 d-lg-block d-none">
                                    <img src="{{ asset('images/banner/4.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-12 col-lg-6 ps-4 d-flex align-items-center baner_btn">
                                    <div>
                                        <p class="banner_title">Where Dreams Become Reality!</p>
                                        <p class="banner_text">At Model Management, we transform dreams into reality as
                                            a
                                            leading OnlyFans
                                            management company. We empower content creators and influencers worldwide to
                                            unlock their
                                            full
                                            earning potential.
                                        </p>
                                        <a href="{{ $info->facebook }}" target="_blank" class="btn banner_btn">Apply
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner_text_animation">
                <img src="{{asset('images/before.png')}}" alt="">
                <p class="animation_text">
                    Premier OnlyFans Management Agency for Real Growth
                </p>
                <img src="{{asset('images/after.png')}}" alt="">
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
                            <img src="{{ asset('images/home_info/1.png') }}" class="img-fluid me-3" alt="">
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
                            <img src="{{ asset('images/home_info/2.png') }}" class="img-fluid me-3" alt="">
                            <div>
                                <p class="home_info_item_title">Lucrative Referral Program</p>
                                <p class="home_info_item_text mb-0">
                                    Earn more with our attractive referral program
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 d-flex mb-5">
                            <img src="{{ asset('images/home_info/3.png') }}" class="img-fluid me-3" alt="">
                            <div>
                                <p class="home_info_item_title">Exclusive Incentives</p>
                                <p class="home_info_item_text mb-0">
                                    Enjoy luxurious incentives that set us apart.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 d-flex mb-5">
                            <img src="{{ asset('images/home_info/4.png') }}" class="img-fluid me-3" alt="">
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
                    @foreach($firstChunk as $service)
                        <div class="model_item">
                            <p class="model_item_title">
                                {{ $service->title }}
                            </p>
                            <p class="model_item_description">
                                {!! html_entity_decode($service->description) !!}
                            </p>
                            <a href="{{ route('services-show',$service->slug) }}" class="text-light">View</a>

                        </div>
                    @endforeach
                </div>
                <div class="col-12 col-lg-4 text-center pb-3">
                    <div class="geeks m-white ">
                        <img src="{{ asset('images/home_our_services.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    @foreach($secondChunk  as $service)
                        <div class="model_item">
                            <p class="model_item_title">
                                {{ $service->title }}
                            </p>
                            <p class="model_item_description">
                                {!! html_entity_decode($service->description) !!}
                            </p>
                            <a href="{{ route('services-show',$service->slug) }}" class="text-light">View</a>

                        </div>
                    @endforeach
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
                    <div class="owl-carousel owl-theme owl-loaded" id="owl-carousel-testimonials">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item">
                                    <div class="d-block d-lg-flex align-items-center">
                                        <img src="{{ asset('images/testimonials/1.png') }}" class="home_owl_img" alt="">
                                        <div class="ms-0 ms-lg-5">
                                            <p class="home_owl_img_title">Bella Thorne</p>
                                            <p class="home_owl_img_text mb-0">
                                                Bella Thorne is a captivating artist whose variety knows no boundaries.
                                                Bella's genuine energy and honesty have captivated fans since her days
                                                as a Disney Channel star, and she continues to do so in film and
                                                television. Her ability to smoothly segue across genres demonstrates her
                                                amazing versatility as an actress, while her adventurous narrative style
                                                defies norms and stimulates innovation. Aside from her dramatic
                                                abilities, Bella's commitment to activism and outspokenness on key
                                                causes heightens her effect, making her not just a notable actress but
                                                also a force for change. Working with Bella is an amazing experience
                                                since she brings unrivaled devotion and enthusiasm to each project,
                                                leaving an everlasting impression on the business and individuals who
                                                are lucky enough.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="d-block d-lg-flex align-items-center">
                                        <img src="{{ asset('images/testimonials/2.png') }}" class="home_owl_img" alt="">
                                        <div class="ms-0 ms-lg-5">
                                            <p class="home_owl_img_title">Cardi B</p>
                                            <p class="home_owl_img_text mb-0">
                                                Cardi B personifies current celebrity, transcending musical borders to
                                                become a societal sensation. With her flamboyant demeanor, irresistible
                                                personality, and chart-topping tunes, she has emerged as one of
                                                entertainment's most powerful people. Aside from her remarkable musical
                                                skill, Cardi B's uncompromising sincerity and vocal activism have
                                                solidified her reputation as a voice for empowerment and social change.
                                                Cardi B continues to fascinate audiences across the world, whether she's
                                                dominating the charts with electric concerts or utilizing her platform
                                                to elevate vital topics, making a lasting stamp on the industry and
                                                altering the cultural landscape for future generations.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="d-block d-lg-flex align-items-center">
                                        <img src="{{ asset('images/testimonials/2.png') }}" class="home_owl_img" alt="">
                                        <div class="ms-0 ms-lg-5">
                                            <p class="home_owl_img_title">Blac Chyna</p>
                                            <p class="home_owl_img_text mb-0">
                                                Blac Chyna is a trailblazer who has fearlessly carved her own path in
                                                the entertainment industry. With her magnetic presence, entrepreneurial
                                                spirit, and unapologetic confidence, she has become an influential
                                                figure in popular culture. From her beginnings as a model to her success
                                                as a businesswoman and reality TV star, Blac Chyna has demonstrated
                                                resilience and determination in the face of adversity. Her ability to
                                                command attention and break barriers has inspired countless individuals
                                                to embrace their unique identity and pursue their dreams with passion.
                                                Collaborating with Blac Chyna is an inspiring experience, as she brings
                                                a dynamic energy and unwavering commitment to everything she does,
                                                leaving a lasting impression on those fortunate enough to work alongside
                                                her.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="d-block d-lg-flex align-items-center">
                                        <img src="{{ asset('images/testimonials/1.png') }}" class="home_owl_img" alt="">
                                        <div class="ms-0 ms-lg-5">
                                            <p class="home_owl_img_title">Tana Mongeau</p>
                                            <p class="home_owl_img_text mb-0">
                                                "Tana Mongeau is a burst of imagination and sincerity. Her honest
                                                approach to storytelling and unabashed attitude have catapulted her to
                                                the forefront of internet entertainment. Tana bravely shares her life
                                                with her audience, bringing them into her world with comedy, candor, and
                                                an infectious energy that captivates millions. Aside from her
                                                larger-than-life image, Tana's support for mental health awareness and
                                                LGBTQ+ rights demonstrates her depth and compassion. Working with Tana
                                                is an amazing experience since she brings unrivaled enthusiasm and
                                                inventiveness to every project, leaving an everlasting impact on both
                                                the digital world and the hearts of her loyal fans."
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
        <section id="blog">
            <h2 class="content_title mb-0">BLOG</h2>
            <span class="line bottom_line"></span>
            <div class="container-fluid mt-4">
                <div class="row p-3">
                    <div class="col-12 col-lg-5 geeks p-0">
                        <img src="{{asset('upload/blogs/'.$blog_one->blog_image)}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-lg-7 blog_item_container">
                        <div class="blog_date">
                            <span>
                                <i class="fa-solid fa-calendar-days"></i>
                                {{ substr($blog_one->updated_at, 0, 10) }}
                            </span>
                        </div>
                        <p class="blog_item_container_title">{{ $blog_one->blog_title }}</p>
                        <div class="blog_item_container_text"
                             id="home_blog">{!! html_entity_decode($blog_one->blog_description) !!}</div>
                        <a href="{{ route('blog-show',$blog_one->id) }}" class="btn blog_btn mb-3">view</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
