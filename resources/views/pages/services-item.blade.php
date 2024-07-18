@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">Our Services</h2>
        <span class="line bottom_line"></span>
        <div class="mt-5">
            <a class="blog_back" href="{{ route('index') }}">
                <i class="fa-solid fa-chevron-left"></i>
                Back
            </a>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <img src="https://i.ibb.co/1ZCCxSg/image-5.png" class="img-fluid mb-3 me-3" alt="" style="float: left">
                <p class="services_item_title">
                    {{--                    {{$blog->blog_title}}--}}
                    Subscriber Surge
                </p>
                <p class="services_item_description">
                    {{--                    {!! html_entity_decode($blog->blog_description) !!}--}}
                    Experience a continuous influx of hundreds of new subscribers each week with our unparalleled
                    OnlyFans management services.
                </p>
                <p class="services_item_description">
                    {{--                    {!! html_entity_decode($blog->description) !!}--}}

                    Lorem ipsum dolor sit amet consectetur. Faucibus elementum in lacus nibh ultricies ullamcorper. Nec
                    leo ac quisque urna nulla. Elit aliquam egestas vel fringilla in elementum. Magna dolor eget nulla
                    libero. Vitae justo maecenas amet neque. Nunc aenean arcu sed adipiscing. Sagittis nunc nisi
                    phasellus sem.
                    Semper dictum nisl sed in arcu. Sapien sed risus blandit vitae sapien risus diam augue pellentesque.
                    Enim tincidunt dui lectus eu. Ultrices velit morbi ac vitae nibh ac proin. In nullam imperdiet arcu
                    nullam pellentesque quam. Elementum vitae lorem sit dui proin. Sit fringilla faucibus.
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur. Non ultrices aliquam amet pretium nascetur eu aliquam et.
                    Volutpat accumsan quis natoque nunc. Velit eget laoreet cursus mus convallis adipiscing. Magna quis
                    odio tortor condimentum arcu quis. Turpis aliquam arcu placerat tincidunt commodo quis. Turpis
                    dignissim integer in at mauris mauris aliquam scelerisque nisl. Odio in rhoncus rhoncus nulla
                    integer volutpat amet nibh. Proin et cursus in viverra condimentum sollicitudin tellus sit
                    tristique.
                    Enim odio quam ultricies tincidunt lectus massa. Pellentesque velit mattis pulvinar elementum
                    molestie diam diam. Neque gravida adipiscing morbi est auctor consectetur. Nisl tincidunt sed lacus
                    aliquam vitae proin suspendisse vulputate sed. Egestas eget eleifend auctor amet morbi ipsum cursus
                    aliquam nunc. Lectus orci pretium enim magna felis tristique nulla proin. Arcu nulla nulla
                    vestibulum eget nulla hendrerit id. Viverra diam viverra neque magna enim tellus integer.
                    Ut tellus proin tellus odio facilisis ac gravida. Non proin vestibulum viverra massa sagittis
                    malesuada tempor. Scelerisque adipiscing nisl viverra fringilla dui ac. Duis pharetra convallis
                    semper facilisis facilisis laoreet interdum. Id eu habitasse sed tincidunt urna habitant eu.
                    Faucibus nascetur vitae eleifend nunc amet duis nisi integer. Lobortis habitant luctus enim a mi
                    lacinia gravida. In convallis libero sed pellentesque. Aliquet massa id aliquam varius. Pellentesque
                    eget leo pellentesque eget nisl a feugiat. Sagittis enim id enim et sed lectus fames ipsum. Egestas
                    vel non enim id massa. Tellus sagittis mollis feugiat quis.
                    Sed laoreet imperdiet etiam suscipit tellus at risus neque turpis. Nisi rhoncus fermentum sodales
                    integer vel porttitor quis tempus ipsum. Nisi vulputate sem turpis felis pharetra feugiat semper.
                    Convallis pellentesque neque habitasse libero scelerisque libero vitae in id. Sed malesuada pulvinar
                    lectus euismod faucibus enim. Amet ut est velit quis dignissim sit.
                    Pretium arcu bibendum odio pretium et auctor elementum in vitae. Phasellus.
                </p>
            </div>
        </div>
    </div>
@endsection
