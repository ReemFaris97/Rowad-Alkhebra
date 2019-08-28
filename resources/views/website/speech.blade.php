@extends('layouts.master')
@section('styles')
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
                        <a href="#header" class="logo-nav"><img src="{{asset('website/img/logo.png')}}"></a>
                    </div>
                </div>

                <div class="col-md-8 col-sm-9 col-xs-0 no-padding">
                    <div class="navy">
                        <ul class="nav cf" id="ul1">
                            <li><a href="{{route('index')}}">الرئيسية</a></li>
                            <li><a href="{{route('goals')}}">الرؤية والرسالة</a></li>
                            <li><a href="{{route('index')}}#testimon">عملاؤنا</a></li>
                            <li><a href="{{route('index')}}#our-system">الهيكل التنظيمى</a></li>
                            <li><a href="{{route('index')}}#who-us">من نحن</a></li>
                            <li><a href="{{route('index')}}#contact">اتصل بنا</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
        <!--End Navbar-->



        <!--Start Carousel-->
        <div class="crumbs">
            <h4> <a href="{{route('index')}}">الرئيسية</a> / كلمة مجلس الإدارة </h4>
        </div>
        <!--End Carousel-->

    </section>
    <!-- End Header -->



    <!----------------- Start responsability ----------->
    <section class="speech all-sections" id="speech">
        <div class="container">
            <h2 class="h2-after"> كلمة  المشرف  العام </h2>

            <div class="row">

                <div class="col-md-4 col-sm-3 col-xs-12">
                    <div class="sideLogo">
                        <img src="{{asset('website/img/logo.png')}}">
                    </div>
                </div>


                <div class="col-md-8 col-sm-9 col-xs-12">
                    <div class="letter">
                        <p>
                            {!! getsetting('mange') !!}
                        </p>
                        <div class="sign">

                            <h4 class="title">د/عبدالله بن صالح الشتيوى</h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!----------------- End responsability ----------->
    @stop


@section('scripts')

    <script src="{{asset('website/js/script.js')}}"></script>
@stop