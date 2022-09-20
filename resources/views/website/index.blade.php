@extends('layouts.master')

@section('styles')

    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/svg.css') }}">
@stop
@section('content')

    <!---------------------- Start Header ---------------------->
    <section class="header" id="header">

        <!--Start Navbar-->
        <div class="navbar">
            <div class="row">

                <div class="col-md-4 col-sm-3 col-xs-12 no-padding">
                    <div class="right-one">
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="nav-right">
                        <a href="#header" class="logo-nav"><img src="{{ asset('website/img/small_logo.png') }}"></a>
                    </div>
                </div>

                <div class="col-md-8 col-sm-9 col-xs-0 no-padding">
                    <div class="navy">
                        <ul class="nav cf" id="ul1">
                            <li class="active"><a href="#header">الرئيسية</a></li>
                            <li><a href="{{ route('goals') }}">الرؤية والرسالة</a></li>
                            <li><a href="#testimon">عملاؤنا</a></li>
                            <li><a href="{{ route('skelton') }}">الهيكل التنظيمى</a></li>
                            <li><a href="#who-us">من نحن</a></li>
                            <li><a href="{{ route('consultation') }}">طلب إستشارة - دراسة جدوى</a></li>
                            <li><a href="#contact">اتصل بنا</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!--End Navbar-->



        <!--Start Carousel-->
        <div class="slide">
            <div id="owl-demo" class="owl-carousel owl-theme">
                @foreach ($banners as $banner)
                    <div class="item">
                        <div class="header-overlay"></div>

                        @if (in_array(pathinfo(getimg($banner->image))['extension'], ['mp4', '3gp', 'mkv', 'mpeg', 'avi']))
                            <iframe src="{{ getimg($banner->image) }}" frameborder="0"></iframe>
                        @else
                            <img src="{{ getimg($banner->image) }}">
                        @endif

                        <div class="carousel-caption">
                            <h3 class="wow slideInDown"> مع رواد الخبرة للاستشارات </h3>
                            <h4 class="wow slideInDown"> سوف تجد كل الحلول التى تناسبك </h4>
                            <p class="wow slideInDown">
                                الاقتصادية - الإدارية - التعليمية والتربوية
                            </p>
                            <a class="btn-3" href="#contact"><span> تواصل معنا </span></a>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
        <!--End Carousel-->


        <!------------------ Svg Left ------------------------------->

        <div class="svg-left">
            <!--            <img src="img/Layer1.png">-->
        </div>

        <div class="wave-wrapper">
            <div class="wave"></div>
        </div>
    </section>
    <!-- End Header -->



    <!----------------- Start Tasks ----------->
    <section class="tasks all-sections">
        <div class="container">
            <div class="row">

                @foreach ($services as $service)
                    <div class="col-sm-6 col-xs-12 wow slideInRight">
                        <div class="task1">

                            <div class="column-content-region tertiary-first">
                                <div class="column-content-region-inner tertiary-first-inner">
                                    <div
                                        class="panel-pane pane-fieldable-panels-pane pane-vid-4476 d-persona d-persona-developers pane-bundle-cta pane-fpid-418">

                                        <div class="pane-graphic">
                                            <svg class="personas-morph" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 300 200">
                                                <path class="start"
                                                    d="M43.82,32c-62.91,43.27,9.78,157.21,150.4,151.87,92.86-3.53,111-121.06,42.08-129.08C148.65,44.55,109.16-13,43.82,32Z"
                                                    style="fill: rgb(6, 120, 190);"
                                                    data-original="M43.82,32c-62.91,43.27,9.78,157.21,150.4,151.87,92.86-3.53,111-121.06,42.08-129.08C148.65,44.55,109.16-13,43.82,32Z">
                                                </path>
                                                <path class="end"
                                                    d="M35.27,54.16c-55,45,36.73,133.12,167.7,128.08,86.49-3.32,102.46-122.53,41-146C167.72,7.06,88,11,35.27,54.16Z"
                                                    style="fill: #0464a5"></path>
                                            </svg>

                                            <div
                                                class="field field-name-field-cta-graphic field-type-image field-label-hidden">
                                                <div class="field-items">
                                                    <div class="field-item even"><img src="{{ getimg($service->image) }}"
                                                            alt="Drupal for developers"
                                                            style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="pane-content">
                                            <div class="fieldable-panels-pane pane-style-full center pane-style-light">
                                                <div class="pane-style-full-inner pane-content-inner">

                                                    <div class="cta-text">
                                                        <h2><a>{{ $service->name() }}</a></h2>
                                                        <div
                                                            class="field field-name-field-cta-body field-type-text-long field-label-hidden">
                                                            <div class="field-items">
                                                                <div class="field-item even">
                                                                    <p>
                                                                        {{ $service->desc() }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                @endforeach


                <div class="col-xs-12">
                    <p class="link">
                        تعرف على جميع خدماتنا
                        <a href="{{ route('services') }}">من هنا </a>
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!----------------- End Tasks ----------->


    <!----------------- Start View ----------->
    <section class="theView all-sections" id="our-view">
        <div class="container">
            <div class="contentView">
                <div class="row">

                    <div class="col-md-6 col-sm-8 col-xs-12">
                        <div class="view">
                            <h4 class="title"> الرؤية والأهداف </h4>
                            <h2 class="h2-after"> رواد الخبرة للاستشارات </h2>
                            <p>

                                {!! getsetting('goals') !!}
                            </p>
                            <a class="btn-3" href="{{ route('goals') }}"><span> تعرف على أهدافنا </span></a>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <div class="viewimg">
                            <img src="{{ asset('website/img/view.png') }}">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!----------------- Gallery Slider ----------------------->
        <div id="owl-gallery" class="owl-carousel owl-theme">

            @foreach ($galleries as $gallery)
                <div class="item">
                    <a data-fancybox="gallery" href="{{ getimg($gallery->image) }}">
                        <img src="{{ getimg($gallery->image) }}" alt="slide1">
                    </a>
                </div>
            @endforeach

        </div>


    </section>
    <!----------------- End View ----------->



    <!----------------- Start Testimonials ----------->
    <section class="theClients" id="testimon">
        <div class="container">

            <span class="qoute"> <i class="fas fa-quote-left"></i> </span>

            <div id="owl-testimon" class="owl-carousel owl-theme">
                @foreach ($clients as $client)
                    <div class="item">
                        <div class="the-client-image">
                            <img src="{{ getimg($client->image) }}" alt="{{ $client->name() }}">
                        </div>
                        <h3> {{ $client->name() }} </h3>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!----------------- End Testimonials ----------->


    <!----------------- Start System ----------->
    <section class="our-system all-sections" id="our-system">
        <div class="container">
            <h4 class="title"> الهيكل التنظيمى </h4>
            <h2 class="h2-after"> رواد الخبرة للاستشارات </h2>

            <h4 class="note1"> عملنا يسير وفق الأسس العلمية التالية : </h4>
            <div class="system-in">


                <!--<div id='ourprocessFlowchartContainer' class="ourprocessFlowchartContainer">-->
                <!--
                        <svg class="infographic-icon" version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                         viewBox="0 0 63.3 63.3" style="enable-background:new 0 0 63.3 63.3;" xml:space="preserve">
                                                    <g>
                                                        <path style="fill:none;stroke:#231F20;stroke-width:2;stroke-miterlimit:10;" d="M25.7,34.8v6.3l-13,4.8c-3,1.1-5,4-5,7.2v4h48v-4
                                                    c0-3.2-2.1-6.1-5.1-7.2l-12.9-4.8v-6.8"/>
                                                        <ellipse style="fill:none;stroke:#231F20;stroke-width:2;stroke-miterlimit:10;" cx="31.3" cy="21.3" rx="12.6" ry="15.1"/>
                                                        <path style="fill:none;stroke:#231F20;stroke-width:2;stroke-miterlimit:10;" d="M43.9,20c-0.4,0.1-0.8,0-1.2,0.1
                                                    c-4.3,0.8-7.1-0.7-9.4-4.9c-1.4,2.7-5.9,4.9-9.5,4.9c-1.8,0-3.3-0.4-4.9-1.2"/>
                                                    </g>
                                                </svg>

                        -->






                <svg class="infographic-icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <metadata>
                        Created by potrace 1.15, written by Peter Selinger 2001-2017
                    </metadata>
                    <g transform="translate(0.000000,158.000000) scale(0.100000,-0.100000)">


                        <path
                            d="M2111 1549 c-121 -16 -427 -88 -462 -109 -12 -8 -11 -12 3 -27 17
-16 22 -15 110 10 236 67 391 89 592 85 144 -3 149 -2 157 18 7 19 3 22 -38
28 -62 8 -283 5 -362 -5z"
                            style="fill:none;stroke:#9999F8;stroke-width:60;stroke-miterlimit:10;"></path>
                        <path
                            d="M6495 1553 c-139 -11 -391 -50 -444 -68 -10 -4 -7 -11 11 -24 23 -18
28 -19 93 -5 372 78 683 65 1006 -42 108 -36 112 -37 126 -19 17 24 18 23
-118 69 -216 72 -472 106 -674 89z"
                            style="fill:none;stroke:#9999F8;stroke-width:60;stroke-miterlimit:10;"></path>
                        <path
                            d="M2600 1506 c0 -18 5 -26 18 -26 64 -1 406 -143 561 -233 57 -34 64
-36 88 -23 l26 13 -74 43 c-178 105 -460 223 -581 245 -36 7 -38 6 -38 -19z"
                            style="fill:none;stroke:#9999F8;stroke-width:60;stroke-miterlimit:10;"></path>
                        <path
                            d="M12290 1523 c-284 -29 -785 -105 -802 -121 -4 -4 -1 -15 7 -25 13
-18 21 -17 217 17 375 66 508 80 773 81 257 0 324 -8 448 -52 223 -80 347
-220 539 -610 55 -112 104 -203 109 -203 5 0 9 18 9 40 0 30 -23 84 -95 227
-114 227 -176 323 -269 417 -169 172 -375 238 -731 234 -93 -1 -186 -3 -205
-5z"
                            style="fill:none;stroke:#9999F8;stroke-width:60;stroke-miterlimit:10;"></path>
                        <path
                            d="M5760 1404 c-145 -46 -535 -186 -578 -208 -20 -10 -21 -14 -9 -31 14
-18 22 -15 203 52 151 57 345 122 562 189 16 5 -2 44 -21 44 -7 -1 -77 -21
-157 -46z"
                            style="fill:none;stroke:#9999F8;stroke-width:60;stroke-miterlimit:10;"></path>
                        <path
                            d="M1365 1341 c-184 -70 -392 -154 -433 -175 -22 -12 -22 -12 -4 -29 18
-16 25 -15 143 34 68 29 205 83 304 120 164 62 180 70 183 93 2 15 0 26 -5 26
-4 -1 -89 -31 -188 -69z"
                            style="fill:none;stroke:#9999F8;stroke-width:60;stroke-miterlimit:10;"></path>
                        <path
                            d="M11140 1334 c-354 -75 -708 -157 -722 -165 -10 -7 -10 -12 4 -25 16
-16 29 -15 225 30 265 60 717 156 738 156 14 0 14 3 -2 25 -10 13 -22 24 -28
24 -5 0 -102 -20 -215 -45z"
                            style="fill:none;stroke:#9999F8;stroke-width:60;stroke-miterlimit:10;"></path>
                        <path
                            d="M7391 1348 c-7 -11 -11 -21 -9 -23 2 -1 40 -21 84 -43 177 -89 407
-236 699 -447 105 -76 195 -139 201 -142 9 -3 29 37 21 43 -1 1 -76 55 -167
121 -302 219 -546 376 -729 468 -85 42 -88 43 -100 23z"
                            style="fill:none;stroke:#9999F8;stroke-width:60;stroke-miterlimit:10;"></path>
                        <path
                            d="M3373 1160 l-22 -17 39 -22 c21 -12 170 -109 331 -216 161 -107 296
-192 301 -189 4 3 8 14 8 25 0 14 -69 65 -267 197 -383 253 -365 243 -390 222z"
                            style="fill:none;stroke:#9999F8;stroke-width:60;stroke-miterlimit:10;"></path>
                        <path
                            d="M4700 996 c-358 -154 -561 -244 -567 -250 -2 -2 -8 -17 -13 -35 l-9
-31 31 16 c43 22 582 258 776 339 141 59 187 85 153 85 -5 0 -11 6 -13 14 -2
10 -98 -27 -358 -138z"
                            style="fill:none;stroke:#9999F8;stroke-width:60;stroke-miterlimit:10;"></path>
                        <path
                            d="M9844 1038 c-454 -109 -461 -111 -456 -135 2 -12 7 -23 10 -23 3 0
148 34 321 76 174 41 382 91 464 110 81 20 147 39 147 44 0 15 -12 40 -19 39
-3 0 -213 -51 -467 -111z"
                            style="fill:none;stroke:#9999F8;stroke-width:60;stroke-miterlimit:10;"></path>
                        <path
                            d="M608 1027 c-115 -50 -208 -96 -208 -103 0 -33 45 -22 227 57 103 45
191 84 194 88 3 3 3 16 0 27 -6 21 -15 18 -213 -69z"
                            style="fill:none;stroke:#9999F8;stroke-width:60;stroke-miterlimit:10;"></path>
                        <path
                            d="M9255 895 c-5 -2 -180 -45 -387 -95 -369 -90 -377 -92 -386 -119
l-10 -28 177 43 c97 24 282 69 413 100 236 57 236 57 225 81 -10 23 -13 25
-32 18z"
                            style="fill:none;stroke:#9999F8;stroke-width:60;stroke-miterlimit:10;"></path>
                        <path
                            d="M133 818 c-116 -53 -133 -64 -133 -84 0 -13 3 -24 8 -24 4 0 75 30
159 67 143 64 151 69 136 85 -9 10 -21 18 -27 17 -6 0 -71 -28 -143 -61z"
                            style="fill:none;stroke:#9999F8;stroke-width:60;stroke-miterlimit:10;"></path>
                    </g>
                </svg>
                <!--                </div>-->





                @foreach ($structures as $structure)
                    <div class="step step{{ $structure->id }}">
                        <button class="toggle"> <img src="{{ getimg($structure->image) }}"> </button>
                        <span class="step-num">{{ $structure->id }}</span>
                        <div class="shape">
                            <img src="{{ getimg($structure->image) }}">
                        </div>
                        <div class="step-body wow slideInUp">
                            <h3>{{ $structure->name() }}</h3>
                            <!--
                                <p>
                                    {{ $structure->desc() }}
                                </p>
        -->
                        </div>
                    </div>
                @endforeach



            </div>

            <b class="lg-orange">وظائف الإدارة</b>

        </div>
    </section>
    <!----------------- End System ----------->



    <!----------------- Start Who-us ----------->
    <section class="whoUs all-sections" id="who-us">
        <div class="container">
            <h4 class="title"> من نحن </h4>
            <h2 class="h2-after"> رواد الخبرة للاستشارات </h2>

            <div class="logo-sm">
                <img src="{{ asset('website/img/logo-sm.png') }}">
            </div>

            <p>
                {!! getsetting('about') !!}
            </p>

        </div>
    </section>
    <!----------------- End Who-us ----------->



    <!----------------- Start Contact ----------->
    <section class="contact" id="contact">
        <div class="row no-margin">

            <div class="col-md-6 col-sm-4 col-xs-12 no-padding">
                <div class="map-content">
                    <div class="header-overlay"></div>
                    <div id="map"> </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-8 col-xs-12 no-padding">
                <div class="mailing">
                    <div class="header-overlay"></div>
                    <div class="call">
                        <h4 class="title"> تواصل مع رواد الخبرة للاستشارات </h4>
                        <h2 class="h2-after"> رواد الخبرة للاستشارات </h2>
                        <!--
                                <p>
                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                </p>
        -->

                        {!! Form::open(['route' => 'Contacts', 'class' => 'form2', 'method' => 'Post', 'files' => true]) !!}

                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="الاسم">
                                <span class="focus-border"><i></i></span>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="number" class="form-control" name="phone" placeholder="رقم الجوال">
                                <span class="focus-border"><i></i></span>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email"
                                    placeholder="البريد الإلكترونى">
                                <span class="focus-border"><i></i></span>
                            </div>
                        </div>


                        <div class="col-sm-6 col-xs-12">
                            <button type="submit" class="btn-3">
                                <span>ارسال</span>
                            </button>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!----------------- End Contact ----------->

@stop



@section('scripts')

    <script src="{{ asset('website/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('website/js/owl.carousel.min.js') }}"></script>
    <script>
        $("#owl-demo").owlCarousel({
            rtl: true,
            loop: true,
            autoplay: true,
            items: 1,
            dots: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            margin: 0,
            responsiveClass: true,
            animateOut: 'flipOutX',
            animateIn: 'flipInX',
            nav: true,
            navText: [
                '<i class="fas fa-angle-right"></i>',
                '<i class="fas fa-angle-left"></i>'
            ],
            rewindNav: false,
            responsive: {
                0: {
                    items: 1,
                },
                500: {
                    items: 1,
                },
                768: {
                    items: 1,
                }
            },

            center: false,
            lazyLoad: false,
            autoplayTimeout: 10000,
            smartSpeed: 200,
            autoWidth: false,

        });

        //        var options={
        //
        //    items: 1
        //    };
        //   if($('#owl-demo .owl-item').length>1){
        //       options.loop=true;
        //   }
        //   $('#owl-demo').owlCarousel(options);
    </script>
    <script>
        $("#owl-gallery").owlCarousel({
            rtl: true,
            center: true,
            autoplay: false,
            autoplayTimeout: 3000,
            margin: 20,
            autoplayHoverPause: false,
            nav: true,
            navText: [
                '<i class="fas fa-long-arrow-alt-right"></i>',
                '<i class="fas fa-long-arrow-alt-left"></i>'
            ],
            transitionStyle: true,
            dots: true,
            loop: true,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>
    <script>
        $("#owl-testimon").owlCarousel({
            rtl: true,
            loop: true,
            autoplay: false,
            items: 1,
            dots: false,
            autoplayHoverPause: false,
            margin: 0,
            responsiveClass: true,
            animateOut: 'slideOutUp',
            animateIn: 'slideInUp',
            nav: true,
            navText: [
                '<i class="fas fa-angle-right"></i>',
                '<i class="fas fa-angle-left"></i>'
            ],
            rewindNav: false,
            responsive: {
                0: {
                    items: 1,
                },
                500: {
                    items: 1,
                },
                768: {
                    items: 1,
                }
            },

            center: false,
            lazyLoad: false,
            autoplayTimeout: 10000,
            smartSpeed: 200,
            autoWidth: false,

        });
    </script>

    <!-------------- MAp --------------->
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: {
                    lat: 26.367117,
                    lng: 43.940920
                }
            });
            var image =
                '{{ asset('website/img/mark.png') }}';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 26.367117,
                    lng: 43.940920
                },
                map: map,
                icon: image
            });
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDF-7f4KwYdJHXqb4DFU5q341ry19VnnGg&callback=initMap"></script>
    <!---------------->
    <!----------- Dynamic Height ---------->
    <!--
                <script>
                    $(document).ready(function() {
                        var divHeight = $('.mailing').height();
                        $('.map-content').css('height', divHeight + 'px');
                    });
                </script>
            -->
    <!----------------------------------- END ------------------------------------------>


    <script src="{{ asset('website/js/script.js') }}"></script>


    <!----------------- These for here Only ----------------->
    <script type="text/javascript" src="{{ asset('website/js/1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/3.js') }}"></script>
    <!--    <script type="text/javascript" src="js/4.js"></script>-->
    <script type="text/javascript" src="{{ asset('website/js/9.js') }}"></script>


    <!------ ViVus ----------------->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/vivus/latest/vivus.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js">
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
    <script type="text/javascript" charset="utf-8">
        // Init ScrollMagic Controller
        var controller = new ScrollMagic.Controller();
        $('body').each(function() {
            new ScrollMagic.Scene({
                    triggerElement: this,
                    duration: 300,
                    reverse: true
                })
                .on('enter', function() {
                    // setTimeout(function() {
                    var container = this.triggerElement();
                    $(container).find('.infographic-icon').each(function() {
                        new Vivus(this, {
                            duration: 300,
                            type: 'sync'
                        });
                    });
                    // }, index * 600);
                }).on('leave', function() {
                    // animatedIcons.reset();
                }).addTo(controller);
        });
    </script>


    <script>
        $(document).ready(function() {
            function isScrolledIntoView(elem) {
                var docViewTop = $(window).scrollTop();
                var docViewBottom = docViewTop + $(window).height();

                var elemTop = $(elem).offset().top;
                var elemBottom = elemTop + $(elem).height();

                return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
            }

            $(window).scroll(function() {

                if (isScrolledIntoView('#our-system') === true) {
                    $('.shape').addClass('bg-clr')
                }

            });
        });
    </script>

    <!--
                <script>
                    $(document).ready(function() {
                        new Vivus('my-svg', {
                            type: 'delayed',
                            duration: 150,
                            animTimingFunction: Vivus.EASE
                        });
                    });
                </script>
            -->




    <script>
        $(document).ready(function() {


            $(".toggle").click(function() {
                $(".step-body").not($(this).parent(".step").children()).css({
                    display: 'none',
                    visibility: 'hidden'
                });
                $(this).parent(".step").children(".step-body").css({
                    display: 'block',
                    visibility: 'visible'
                }).removeClass("wow").removeClass("slideInUp");
            });

        });
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
@stop
