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
            <h4> <a href="{{route('index')}}">الرئيسية</a> /  المسئولية الإجتماعية </h4>
        </div>
        <!--End Carousel-->

    </section>
    <!-- End Header -->



    <!----------------- Start responsability ----------->
    <section class="responsability all-sections" id="responsability">
        <div class="container">

<!--
            <div class="sideLogo">
                <img src="img/small_logo.png">
            </div>
-->
            <h2 class="h2-after"> المسئولية الإجتماعية </h2>
            <p>

                {!! getsetting('responsability') !!}
                      </p>

        </div>
    </section>
    <!----------------- End responsability ----------->

@stop
@section('scripts')

    <script src="{{asset('website/js/script.js')}}"></script>
@stop
