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
            <h4> <a href="{{route('index')}}">الرئيسية</a> /  أهدافنا </h4>
        </div>
        <!--End Carousel-->

    </section>
    <!-- End Header -->



    <!----------------- Start View ----------->
    <section class="theView newGoals all-sections" id="our-view">
        <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-8 col-xs-12">
                        <div class="view">
                            <h4 class="title"> الرؤية والأهداف </h4>
                            <h2 class="h2-after"> رواد الخبرة للاستشارات </h2>
                            <p>
                                {!! getsetting('goals') !!}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <div class="viewimg">
                            <img src="{{asset('website/img/view.png')}}">
                        </div>
                    </div>

                </div>
        </div>

    </section>
    <!----------------- End View ----------->


    <!----------------- Start Goals ----------->
    <section class="goals all-sections">
        <div class="container">
            <h2 class="h2-after"> أهدافنا </h2>

                <div class="row">
              @foreach($goals as $goal)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                        <div class="goal1">
                            <div class="goal-img">
                                <img src="{{getimg($goal->image)}}">
                            </div>
                            <h3>{{$goal->name()}}</h3>
                            <p>
                                {{$goal->desc()}}
                            </p>
                        </div>
                    </div>


                 @endforeach

                </div>
        </div>

    </section>
    <!----------------- End Goals ----------->

@stop

@section('scripts')

<script src="{{asset('website/js/script.js')}}"></script>
    @stop
