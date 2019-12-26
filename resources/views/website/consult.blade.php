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
            <h4> <a href="{{route('index')}}">الرئيسية</a> /  طلب إستشارة </h4>
        </div>
        <!--End Carousel-->

    </section>
    <!-- End Header -->

    <!----------------- Start Tasks ----------->
    <section class="tasks all-sections">
        <div class="container">
            <h2 class="h2-after"> طلب إستشارة </h2>
            <div class="row">
                <div class="consult-form">
                    {!!Form::open( ['route' => 'postConsultation' ,'class'=>'form2', 'method' => 'Post','files' => true]) !!}

                    <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="الاسم">
                            <span class="focus-border"><i></i></span>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" class="form-control" name="phone" placeholder="رقم الجوال" required>
                            <span class="focus-border"><i></i></span>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="البريد الإلكترونى">
                            <span class="focus-border"><i></i></span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                            <textarea class="form-control" name="subject" placeholder="ملخص عن الموضوع"></textarea>
                            <span class="focus-border"><i></i></span>
                        </div>
                    </div>


                    <div class="col-sm-12 col-xs-12">
                        <button type="submit" class="btn-3">
                            <span>ارسال</span>
                        </button>
                    </div>

                    {!!Form::close() !!}

                </div>
            </div>
        </div>
    </section>

    <!----------------- End Tasks ----------->

@stop

@section('scripts')
    <script src="{{asset('website/js/script.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
@stop
