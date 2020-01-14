@extends('layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{asset('website/css/svg.css')}}">
@stop
@section('content')

           <!---------------------- Start Header ---------------------->
    <section class="header sm-head">

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
                        <a href="#header" class="logo-nav"><img src="{{asset('website/img/small_logo.png')}}"></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-9 col-xs-0 no-padding">
                    <div class="navy">
                        <ul class="nav cf" id="ul1">
                            <li><a href="{{route('index')}}">الرئيسية</a></li>
                            <li><a href="{{route('goals')}}">الرؤية والرسالة</a></li>
                            <li><a href="{{route('index')}}#testimon">عملاؤنا</a></li>
                            <li><a href="{{route('skelton')}}">الهيكل التنظيمى</a></li>
                            <li><a href="{{route('index')}}#who-us">من نحن</a></li>
                            <li><a href="{{route('consultation')}}">طلب إستشارة - دراسة جدوى</a></li>
                            <li><a href="{{route('index')}}#contact">اتصل بنا</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
        <!--End Navbar-->



        <!--Start Carousel-->
        <div class="crumbs">
            <h4> <a href="{{route('index')}}">الرئيسية</a> /  خدماتنا </h4>
        </div>
        <!--End Carousel-->

    </section>
    <!-- End Header -->



    <!----------------- Start Tasks ----------->
    <section class="tasks all-sections">
        <div class="container">
            <h2 class="h2-after"> خدماتنا </h2>
            <div class="row">

                @foreach($services as $service)
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
                                                <div class="field-item even"><img src="{{getimg($service->image)}}" alt="Drupal for developers" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="pane-content">
                                        <div class="fieldable-panels-pane pane-style-full center pane-style-light">
                                            <div class="pane-style-full-inner pane-content-inner">

                                                <div class="cta-text">
                                                    <h2><a>{{ $service->name()}}</a></h2>
                                                    <div class="field field-name-field-cta-body field-type-text-long field-label-hidden">
                                                        <div class="field-items">
                                                            <div class="field-item even">
                                                                <p>
                                                                    {{$service->desc()}}
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

            </div>
        </div>
    </section>
    <!----------------- End Tasks ----------->

 @stop

@section('scripts')

    <script src="{{asset('website/js/script.js')}}"></script>

    <!----------------- These for here Only ----------------->
    <script type="text/javascript" src="{{asset('website/js/1.js')}}"></script>
    <script type="text/javascript" src="{{asset('website/js/3.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('website/js/9.js')}}"></script>
@stop
