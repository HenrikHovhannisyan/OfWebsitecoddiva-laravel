@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">Our talents</h2>
        <span class="line bottom_line"></span>
        <section id="talents_banner">
            <img src="../images/talents/talents_banner.png" class="img-fluid refer_img" alt="">
            <div id="talents_banner_content">
                <p class="talents_banner_title">Become one of our talents</p>
                <p class="talents_banner_description">
                    Interested in joining Model Management? Either refer talent or apply now! We offer a free 15-minute
                    consultation to help you learn more about our services and how to get started.
                </p>
                <a href="{{ $info->facebook }}" target="_blank" class="btn btn-light talents_banner_btn">APPLY NOW</a>
            </div>
        </section>
        <section id="model">
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
                            ‍Say goodbye to fake followers and hello to real, engaged fans! We kickstart your journey as
                            a new client by conducting an in-depth social media account audit. This allows us to
                            identify and resolve issues that may limit your potential to make money.
                        </p>
                    </div>
                    <div class="model_item">
                        <p class="model_item_title">
                            Step 2: Brand growth and management
                        </p>
                        <p class="model_item_description">
                            At Banx, we closely monitor your accounts and tailor content strategies that help you
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
                    <img src="../images/talents/model.png" class="img-fluid" alt="">
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
                            ‍What truly sets Banx apart as an Only Fans management agency is our ability to give you
                            access to exclusive parties attended by the biggest celebrities on the planet. This way, you
                            can expand your network and discover growth opportunities.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="talents">
            <p id="model_title" class="text-end">
                our talents
            </p>
            <span class="line bottom_line"></span>
            <div class="row w-100 mt-5">
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <img src="../images/talents/1.png" class="img-fluid mb-3" alt="">
                            <p class="talents_text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                            <p class="talents_text">
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            </p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <p class="talents_name">martina</p>
                            <p class="talents_text">
                                London-based model and stylist MARTINA expresses his style through vibrant colors and
                                themed photo shoots. His portfolio website has a playful vibe and shows visitors exactly
                                who he is.
                            </p>
                            <img src="../images/talents/2.png" class="img-fluid mb-3" alt="">
                            <p class="talents_title">
                                HEIGHT 5' 8" BUST 32" WAIST 25" HIP 35"
                            </p>
                            <p class="talents_text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <p class="talents_name">martina</p>
                            <p class="talents_text">
                                London-based model and stylist MARTINA expresses his style through vibrant colors and
                                themed photo shoots. His portfolio website has a playful vibe and shows visitors exactly
                                who he is.
                            </p>
                            <img src="../images/talents/3.png" class="img-fluid mb-3" alt="">
                            <p class="talents_title">
                                HEIGHT 5' 8" BUST 32" WAIST 25" HIP 35"
                            </p>
                            <p class="talents_text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <img src="../images/talents/4.png" class="img-fluid mb-3" alt="">
                            <p class="talents_text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                            <p class="talents_text">
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <img src="../images/talents/5.png" class="img-fluid mb-3" alt="">
                            <p class="talents_text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                            <p class="talents_text">
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            </p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <p class="talents_name">martina</p>
                            <p class="talents_text">
                                London-based model and stylist MARTINA expresses his style through vibrant colors and
                                themed photo shoots. His portfolio website has a playful vibe and shows visitors exactly
                                who he is.
                            </p>
                            <img src="../images/talents/6.png" class="img-fluid mb-3" alt="">
                            <p class="talents_title">
                                HEIGHT 5' 8" BUST 32" WAIST 25" HIP 35"
                            </p>
                            <p class="talents_text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <p class="talents_name">martina</p>
                            <p class="talents_text">
                                London-based model and stylist MARTINA expresses his style through vibrant colors and
                                themed photo shoots. His portfolio website has a playful vibe and shows visitors exactly
                                who he is.
                            </p>
                            <img src="../images/talents/7.png" class="img-fluid mb-3" alt="">
                            <p class="talents_title">
                                HEIGHT 5' 8" BUST 32" WAIST 25" HIP 35"
                            </p>
                            <p class="talents_text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <img src="../images/talents/8.png" class="img-fluid mb-3" alt="">
                            <p class="talents_text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                            <p class="talents_text">
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
