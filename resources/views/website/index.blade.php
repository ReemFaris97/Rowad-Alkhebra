@extends('layouts.master')
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
                        <a href="#header" class="logo-nav"><img src="{{asset('website/img/logo.png')}}"></a>
                    </div>
                </div>

                <div class="col-md-8 col-sm-9 col-xs-0 no-padding">
                    <div class="navy">
                        <ul class="nav cf" id="ul1">
                            <li class="active"><a href="#header">الرئيسية</a></li>
                            <li><a href="{{route('goals')}}">الرؤية والرسالة</a></li>
                            <li><a href="#testimon">عملاؤنا</a></li>
                            <li><a href="#our-system">الهيكل التنظيمى</a></li>
                            <li><a href="#who-us">من نحن</a></li>
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

                <div class="item">
                    <div class="header-overlay"></div>
                    <img src="{{asset('website/img/header.png')}}">
                    <div class="carousel-caption">
                        <h3 class="wow slideInDown"> مع رواد الخبرة للاستشارات </h3>
                        <h4 class="wow slideInDown"> سوف تجد كل الحلول التى تنسابك </h4>
                        <p class="wow slideInDown">
                            الاقتصادية - الإدارية - التعليمية والتربوية
                        </p>
                        <a class="btn-3" href="#contact"><span> تواصل معنا </span></a>
                    </div>
                </div>

                <div class="item">
                    <div class="header-overlay"></div>
                    <img src="{{asset('website/img/slide1.png')}}">
                    <div class="carousel-caption">
                        <h3 class="wow slideInDown"> مع رواد الخبرة للاستشارات </h3>
                        <h4 class="wow slideInDown"> سوف تجد كل الحلول التى تنسابك </h4>
                        <p class="wow slideInDown">
                            الاقتصادية - الإدارية - التعليمية والتربوية
                        </p>
                        <a class="btn-3" href="#contact"><span> تواصل معنا </span></a>
                    </div>
                </div>

                <div class="item">
                    <div class="header-overlay"></div>
                    <img src="{{asset('website/img/slide2.png')}}">
                    <div class="carousel-caption">
                        <h3 class="wow slideInDown"> مع رواد الخبرة للاستشارات </h3>
                        <h4 class="wow slideInDown"> سوف تجد كل الحلول التى تنسابك </h4>
                        <p class="wow slideInDown">
                            الاقتصادية - الإدارية - التعليمية والتربوية
                        </p>
                        <a class="btn-3" href="#contact"><span> تواصل معنا </span></a>
                    </div>
                </div>

                <div class="item">
                    <div class="header-overlay"></div>

                    <img src="{{asset('website/img/header.png')}}">
                    <div class="carousel-caption">
                        <h3 class="wow slideInDown"> مع رواد الخبرة للاستشارات </h3>
                        <h4 class="wow slideInDown"> سوف تجد كل الحلول التى تنسابك </h4>
                        <p class="wow slideInDown">
                            الاقتصادية - الإدارية - التعليمية والتربوية
                        </p>
                        <a class="btn-3" href="#contact"><span> تواصل معنا </span></a>
                    </div>
                </div>


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

                <div class="col-sm-6 col-xs-12 wow slideInRight">
                    <div class="task1">

                        <div class="column-content-region tertiary-first">
                            <div class="column-content-region-inner tertiary-first-inner">
                                <div class="panel-pane pane-fieldable-panels-pane pane-vid-4476 d-persona d-persona-developers pane-bundle-cta pane-fpid-418">

                                    <div class="pane-graphic">
                                        <svg class="personas-morph" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                            <path class="start" d="M43.82,32c-62.91,43.27,9.78,157.21,150.4,151.87,92.86-3.53,111-121.06,42.08-129.08C148.65,44.55,109.16-13,43.82,32Z" style="fill: rgb(6, 120, 190);" data-original="M43.82,32c-62.91,43.27,9.78,157.21,150.4,151.87,92.86-3.53,111-121.06,42.08-129.08C148.65,44.55,109.16-13,43.82,32Z"></path>
                                            <path class="end" d="M35.27,54.16c-55,45,36.73,133.12,167.7,128.08,86.49-3.32,102.46-122.53,41-146C167.72,7.06,88,11,35.27,54.16Z" style="fill: #0464a5"></path>
                                        </svg>

                                        <div class="field field-name-field-cta-graphic field-type-image field-label-hidden">
                                            <div class="field-items">
                                                <div class="field-item even"><img src="{{asset('website/img/task1.png')}}" alt="Drupal for developers" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="pane-content">
                                        <div class="fieldable-panels-pane pane-style-full center pane-style-light">
                                            <div class="pane-style-full-inner pane-content-inner">

                                                <div class="cta-text">
                                                    <h2><a>استشارات</a></h2>
                                                    <div class="field field-name-field-cta-body field-type-text-long field-label-hidden">
                                                        <div class="field-items">
                                                            <div class="field-item even">
                                                                <p>
                                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص
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


                <div class="col-sm-6 col-xs-12 wow slideInRight">
                    <div class="task1">

                        <div class="column-content-region tertiary-first">
                            <div class="column-content-region-inner tertiary-first-inner">
                                <div class="panel-pane pane-fieldable-panels-pane pane-vid-4476 d-persona d-persona-developers pane-bundle-cta pane-fpid-418">

                                    <div class="pane-graphic">
                                        <svg class="personas-morph" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                            <path class="start" d="M43.82,32c-62.91,43.27,9.78,157.21,150.4,151.87,92.86-3.53,111-121.06,42.08-129.08C148.65,44.55,109.16-13,43.82,32Z" style="fill: rgb(6, 120, 190);" data-original="M43.82,32c-62.91,43.27,9.78,157.21,150.4,151.87,92.86-3.53,111-121.06,42.08-129.08C148.65,44.55,109.16-13,43.82,32Z"></path>
                                            <path class="end" d="M35.27,54.16c-55,45,36.73,133.12,167.7,128.08,86.49-3.32,102.46-122.53,41-146C167.72,7.06,88,11,35.27,54.16Z" style="fill: #0464a5"></path>
                                        </svg>

                                        <div class="field field-name-field-cta-graphic field-type-image field-label-hidden">
                                            <div class="field-items">
                                                <div class="field-item even"><img src="{{asset('website/img/task2.png')}}" alt="Drupal for developers" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="pane-content">
                                        <div class="fieldable-panels-pane pane-style-full center pane-style-light">
                                            <div class="pane-style-full-inner pane-content-inner">

                                                <div class="cta-text">
                                                    <h2><a>دراسات</a></h2>
                                                    <div class="field field-name-field-cta-body field-type-text-long field-label-hidden">
                                                        <div class="field-items">
                                                            <div class="field-item even">
                                                                <p>
                                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص
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


                <div class="col-sm-6 col-xs-12 wow slideInRight">
                    <div class="task1">

                        <div class="column-content-region tertiary-first">
                            <div class="column-content-region-inner tertiary-first-inner">
                                <div class="panel-pane pane-fieldable-panels-pane pane-vid-4476 d-persona d-persona-developers pane-bundle-cta pane-fpid-418">

                                    <div class="pane-graphic">
                                        <svg class="personas-morph" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                            <path class="start" d="M43.82,32c-62.91,43.27,9.78,157.21,150.4,151.87,92.86-3.53,111-121.06,42.08-129.08C148.65,44.55,109.16-13,43.82,32Z" style="fill: rgb(6, 120, 190);" data-original="M43.82,32c-62.91,43.27,9.78,157.21,150.4,151.87,92.86-3.53,111-121.06,42.08-129.08C148.65,44.55,109.16-13,43.82,32Z"></path>
                                            <path class="end" d="M35.27,54.16c-55,45,36.73,133.12,167.7,128.08,86.49-3.32,102.46-122.53,41-146C167.72,7.06,88,11,35.27,54.16Z" style="fill: #0464a5"></path>
                                        </svg>

                                        <div class="field field-name-field-cta-graphic field-type-image field-label-hidden">
                                            <div class="field-items">
                                                <div class="field-item even"><img src="{{asset('website/img/task3.png')}}" alt="Drupal for developers" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="pane-content">
                                        <div class="fieldable-panels-pane pane-style-full center pane-style-light">
                                            <div class="pane-style-full-inner pane-content-inner">

                                                <div class="cta-text">
                                                    <h2><a>تطوير</a></h2>
                                                    <div class="field field-name-field-cta-body field-type-text-long field-label-hidden">
                                                        <div class="field-items">
                                                            <div class="field-item even">
                                                                <p>
                                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص
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



                <div class="col-sm-6 col-xs-12 wow slideInRight">
                    <div class="task1">

                        <div class="column-content-region tertiary-first">
                            <div class="column-content-region-inner tertiary-first-inner">
                                <div class="panel-pane pane-fieldable-panels-pane pane-vid-4476 d-persona d-persona-developers pane-bundle-cta pane-fpid-418">

                                    <div class="pane-graphic">
                                        <svg class="personas-morph" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200">
                                            <path class="start" d="M43.82,32c-62.91,43.27,9.78,157.21,150.4,151.87,92.86-3.53,111-121.06,42.08-129.08C148.65,44.55,109.16-13,43.82,32Z" style="fill: rgb(6, 120, 190);" data-original="M43.82,32c-62.91,43.27,9.78,157.21,150.4,151.87,92.86-3.53,111-121.06,42.08-129.08C148.65,44.55,109.16-13,43.82,32Z"></path>
                                            <path class="end" d="M35.27,54.16c-55,45,36.73,133.12,167.7,128.08,86.49-3.32,102.46-122.53,41-146C167.72,7.06,88,11,35.27,54.16Z" style="fill: #0464a5"></path>
                                        </svg>

                                        <div class="field field-name-field-cta-graphic field-type-image field-label-hidden">
                                            <div class="field-items">
                                                <div class="field-item even"><img src="{{asset('website/img/task4.png')}}" alt="Drupal for developers" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="pane-content">
                                        <div class="fieldable-panels-pane pane-style-full center pane-style-light">
                                            <div class="pane-style-full-inner pane-content-inner">

                                                <div class="cta-text">
                                                    <h2><a>تأهيل</a></h2>
                                                    <div class="field field-name-field-cta-body field-type-text-long field-label-hidden">
                                                        <div class="field-items">
                                                            <div class="field-item even">
                                                                <p>
                                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص
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


                <div class="col-xs-12">
                    <p class="link">
                        تعرف على جميع خدماتنا
                        <a href="{{route('services')}}">من هنا </a>
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
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات
                            </p>
                            <a class="btn-3" href="{{route('goals')}}"><span> تعرف على أهدافنا </span></a>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <div class="viewimg">
                            <img src="{{asset('website/img/view.png')}}">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!----------------- Gallery Slider ----------------------->
        <div id="owl-gallery" class="owl-carousel owl-theme">
            <div class="item">
                <a data-fancybox="gallery" href="{{asset('website/img/header.png')}}">
                    <img src="{{asset('website/img/header.png')}}" alt="slide1">
                </a>
            </div>

            <div class="item">
                <a data-fancybox="gallery" href="{{asset('website/img/slide1.png')}}">
                    <img src="{{asset('website/img/slide1.png')}}" alt="slide2">
                </a>

            </div>

            <div class="item">
                <a data-fancybox="gallery" href="{{asset('website/img/slide2.png')}}">
                    <img src="{{asset('website/img/slide2.png')}}" alt="slide3">
                </a>
            </div>
        </div>


    </section>
    <!----------------- End View ----------->



    <!----------------- Start Testimonials ----------->
    <section class="theClients" id="testimon">
        <div class="container">

            <span class="qoute"> <i class="fas fa-quote-left"></i> </span>

            <div id="owl-testimon" class="owl-carousel owl-theme">
                <div class="item">
                    <p>
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
                    </p>
                    <h3> اسم العميل </h3>
                </div>

                <div class="item">
                    <p>
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
                    </p>
                    <h3> اسم العميل </h3>
                </div>

                <div class="item">
                    <p>
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
                    </p>
                    <h3> اسم العميل </h3>
                </div>
            </div>

        </div>
    </section>
    <!----------------- End Testimonials ----------->


    <!----------------- Start System ----------->
    <section class="our-system all-sections" id="our-system">
        <div class="container">
            <h4 class="title"> الهيكل التنظيمى </h4>
            <h2 class="h2-after"> رواد الخبرة للاستشارات </h2>

            <div class="system-in">
                
                
<!--<div id='ourprocessFlowchartContainer' class="ourprocessFlowchartContainer">-->
<svg id="theAnim" version="1.0" xmlns="http://www.w3.org/2000/svg" width="1359.000000pt" height="158.000000pt" viewBox="0 0 1359.000000 158.000000" preserveAspectRatio="xMidYMid meet" style="">
<metadata>
Created by potrace 1.15, written by Peter Selinger 2001-2017
</metadata>
<g transform="translate(0.000000,158.000000) scale(0.100000,-0.100000)" fill="none" stroke="none">
    
    
<path d="M2111 1549 c-121 -16 -427 -88 -462 -109 -12 -8 -11 -12 3 -27 17
-16 22 -15 110 10 236 67 391 89 592 85 144 -3 149 -2 157 18 7 19 3 22 -38
28 -62 8 -283 5 -362 -5z" fill="none" stroke="#9999F8" stroke-width="60px" class="upImFCwi_0"></path>
<path d="M6495 1553 c-139 -11 -391 -50 -444 -68 -10 -4 -7 -11 11 -24 23 -18
28 -19 93 -5 372 78 683 65 1006 -42 108 -36 112 -37 126 -19 17 24 18 23
-118 69 -216 72 -472 106 -674 89z" fill="none" stroke="#9999F8" stroke-width="60px" class="upImFCwi_1"></path>
<path d="M2600 1506 c0 -18 5 -26 18 -26 64 -1 406 -143 561 -233 57 -34 64
-36 88 -23 l26 13 -74 43 c-178 105 -460 223 -581 245 -36 7 -38 6 -38 -19z" fill="none" stroke="#9999F8" stroke-width="60px" class="upImFCwi_2"></path>
<path d="M12290 1523 c-284 -29 -785 -105 -802 -121 -4 -4 -1 -15 7 -25 13
-18 21 -17 217 17 375 66 508 80 773 81 257 0 324 -8 448 -52 223 -80 347
-220 539 -610 55 -112 104 -203 109 -203 5 0 9 18 9 40 0 30 -23 84 -95 227
-114 227 -176 323 -269 417 -169 172 -375 238 -731 234 -93 -1 -186 -3 -205
-5z" fill="none" stroke="#9999F8" stroke-width="60px" class="upImFCwi_3"></path>
<path d="M5760 1404 c-145 -46 -535 -186 -578 -208 -20 -10 -21 -14 -9 -31 14
-18 22 -15 203 52 151 57 345 122 562 189 16 5 -2 44 -21 44 -7 -1 -77 -21
-157 -46z" fill="none" stroke="#9999F8" stroke-width="60px" class="upImFCwi_4"></path>
<path d="M1365 1341 c-184 -70 -392 -154 -433 -175 -22 -12 -22 -12 -4 -29 18
-16 25 -15 143 34 68 29 205 83 304 120 164 62 180 70 183 93 2 15 0 26 -5 26
-4 -1 -89 -31 -188 -69z" fill="none" stroke="#9999F8" stroke-width="60px" class="upImFCwi_5"></path>
<path d="M11140 1334 c-354 -75 -708 -157 -722 -165 -10 -7 -10 -12 4 -25 16
-16 29 -15 225 30 265 60 717 156 738 156 14 0 14 3 -2 25 -10 13 -22 24 -28
24 -5 0 -102 -20 -215 -45z" fill="none" stroke="#9999F8" stroke-width="60px" class="upImFCwi_6"></path>
<path d="M7391 1348 c-7 -11 -11 -21 -9 -23 2 -1 40 -21 84 -43 177 -89 407
-236 699 -447 105 -76 195 -139 201 -142 9 -3 29 37 21 43 -1 1 -76 55 -167
121 -302 219 -546 376 -729 468 -85 42 -88 43 -100 23z" fill="none" stroke="#9999F8" stroke-width="60px" class="upImFCwi_7"></path>
<path d="M3373 1160 l-22 -17 39 -22 c21 -12 170 -109 331 -216 161 -107 296
-192 301 -189 4 3 8 14 8 25 0 14 -69 65 -267 197 -383 253 -365 243 -390 222z" fill="none" stroke="#9999F8" stroke-width="60px" class="upImFCwi_8"></path>
<path d="M4700 996 c-358 -154 -561 -244 -567 -250 -2 -2 -8 -17 -13 -35 l-9
-31 31 16 c43 22 582 258 776 339 141 59 187 85 153 85 -5 0 -11 6 -13 14 -2
10 -98 -27 -358 -138z" fill="none" stroke="#9999F8" stroke-width="60px" class="upImFCwi_9"></path>
<path d="M9844 1038 c-454 -109 -461 -111 -456 -135 2 -12 7 -23 10 -23 3 0
148 34 321 76 174 41 382 91 464 110 81 20 147 39 147 44 0 15 -12 40 -19 39
-3 0 -213 -51 -467 -111z" fill="none" stroke="#9999F8" stroke-width="60px" class="upImFCwi_10"></path>
<path d="M608 1027 c-115 -50 -208 -96 -208 -103 0 -33 45 -22 227 57 103 45
191 84 194 88 3 3 3 16 0 27 -6 21 -15 18 -213 -69z" fill="none" stroke="#9999F8" stroke-width="60px" class="upImFCwi_11"></path>
<path d="M9255 895 c-5 -2 -180 -45 -387 -95 -369 -90 -377 -92 -386 -119
l-10 -28 177 43 c97 24 282 69 413 100 236 57 236 57 225 81 -10 23 -13 25
-32 18z" fill="none" stroke="#9999F8" stroke-width="60px" class="upImFCwi_12"></path>
<path d="M133 818 c-116 -53 -133 -64 -133 -84 0 -13 3 -24 8 -24 4 0 75 30
159 67 143 64 151 69 136 85 -9 10 -21 18 -27 17 -6 0 -71 -28 -143 -61z" fill="none" stroke="#9999F8" stroke-width="60px" class="upImFCwi_13"></path>
</g>
<style data-made-with="vivus-instant">.upImFCwi_0{stroke-dasharray:1813 1815;stroke-dashoffset:1814;animation:upImFCwi_draw 369ms ease-in 0ms forwards;}.upImFCwi_1{stroke-dasharray:2577 2579;stroke-dashoffset:2578;animation:upImFCwi_draw 525ms ease-in 369ms forwards;}.upImFCwi_2{stroke-dasharray:1546 1548;stroke-dashoffset:1547;animation:upImFCwi_draw 315ms ease-in 895ms forwards;}.upImFCwi_3{stroke-dasharray:5149 5151;stroke-dashoffset:5150;animation:upImFCwi_draw 1050ms ease-in 1211ms forwards;}.upImFCwi_4{stroke-dasharray:1689 1691;stroke-dashoffset:1690;animation:upImFCwi_draw 344ms ease-in 2261ms forwards;}.upImFCwi_5{stroke-dasharray:1430 1432;stroke-dashoffset:1431;animation:upImFCwi_draw 291ms ease-in 2605ms forwards;}.upImFCwi_6{stroke-dasharray:2053 2055;stroke-dashoffset:2054;animation:upImFCwi_draw 418ms ease-in 2897ms forwards;}.upImFCwi_7{stroke-dasharray:2436 2438;stroke-dashoffset:2437;animation:upImFCwi_draw 496ms ease-in 3316ms forwards;}.upImFCwi_8{stroke-dasharray:1645 1647;stroke-dashoffset:1646;animation:upImFCwi_draw 335ms ease-in 3813ms forwards;}.upImFCwi_9{stroke-dasharray:2174 2176;stroke-dashoffset:2175;animation:upImFCwi_draw 443ms ease-in 4149ms forwards;}.upImFCwi_10{stroke-dasharray:1998 2000;stroke-dashoffset:1999;animation:upImFCwi_draw 407ms ease-in 4592ms forwards;}.upImFCwi_11{stroke-dasharray:960 962;stroke-dashoffset:961;animation:upImFCwi_draw 195ms ease-in 5000ms forwards;}.upImFCwi_12{stroke-dasharray:1744 1746;stroke-dashoffset:1745;animation:upImFCwi_draw 355ms ease-in 5196ms forwards;}.upImFCwi_13{stroke-dasharray:724 726;stroke-dashoffset:725;animation:upImFCwi_draw 147ms ease-in 5552ms forwards;}@keyframes upImFCwi_draw{100%{stroke-dashoffset:0;}}@keyframes upImFCwi_fade{0%{stroke-opacity:1;}95.95959595959596%{stroke-opacity:1;}100%{stroke-opacity:0;}}</style></svg>
<!--                </div>-->






                <div class="step step1">
                    <span class="step-num">1</span>
                    <div class="shape">
                        <img src="{{asset('website/img/management.png')}}">
                    </div>
                    <div class="step-body wow slideInUp">
                        <h3>التخطيط</h3>
                        <p>
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص 
                        </p>
                    </div>
                </div>
                
                <div class="step step2">
                    <span class="step-num">2</span>
                    <div class="shape">
                        <img src="{{asset('website/img/teamwork.png')}}">
                    </div>
                    <div class="step-body wow slideInUp">
                        <h3>التنظيم</h3>
                        <p>
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص 
                        </p>
                    </div>
                </div>
                
                <div class="step step3">
                    <span class="step-num">3</span>
                    <div class="shape">
                        <img src="{{asset('website/img/work.png')}}">
                    </div>
                    <div class="step-body wow slideInUp">
                        <h3>التوجيه</h3>
                        <p>
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص 
                        </p>
                    </div>
                </div>
                
                <div class="step step4">
                    <span class="step-num">4</span>
                    <div class="shape">
                        <img src="{{asset('website/img/partnership.png')}}">
                    </div>
                    <div class="step-body wow slideInUp">
                        <h3>القيادة</h3>
                        <p>
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص 
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!----------------- End System ----------->



    <!----------------- Start Who-us ----------->
    <section class="whoUs all-sections" id="who-us">
        <div class="container">
            <h4 class="title"> من نحن </h4>
            <h2 class="h2-after"> رواد الخبرة للاستشارات </h2>

            <div class="logo-sm">
                <img src="{{asset('website/img/logo-sm.png')}}">
            </div>

            <p>
                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات
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
                        <p>
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                        </p>
                        <form class="form2">

                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="الاسم">
                                    <span class="focus-border"><i></i></span>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="رقم الجوال">
                                    <span class="focus-border"><i></i></span>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="البريد الإلكترونى">
                                    <span class="focus-border"><i></i></span>
                                </div>
                            </div>


                            <div class="col-sm-6 col-xs-12">
                                <button type="button" class="btn-3">
                                    <span>ارسال</span>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!----------------- End Contact ----------->

 @stop



@section('scripts')

    <script src="{{asset('website/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('website/js/owl.carousel.min.js')}}"></script>
    <script>
        $("#owl-demo").owlCarousel({
            rtl: true,
            loop: true,
            autoplay: false,
            items: 1,
            dots: false,
            autoplayHoverPause: false,
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
                zoom: 7,
                center: {
                    lat: 26,
                    lng: 43
                }
            });
            var image =
                'img/mark.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 26.348180,
                    lng: 43.955276
                },
                map: map,
                icon: image
            });
        }

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi7RVqBGvLWMhmV_uv81zZ2Iv1ZvWOT9M&callback=initMap">
    </script>
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


    <script src="{{asset('website/js/script.js')}}"></script>


    <!----------------- These for here Only ----------------->
    <script type="text/javascript" src="{{asset('website/js/1.js')}}"></script>
    <script type="text/javascript" src="{{asset('website/js/3.js')}}">
    </script>
    <!--    <script type="text/javascript" src="js/4.js"></script>-->
    <script type="text/javascript" src="{{asset('website/js/9.js')}}"></script>


    <!------ ViVus ----------------->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js"></script>

@stop