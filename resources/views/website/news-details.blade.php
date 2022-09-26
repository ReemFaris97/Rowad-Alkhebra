@extends('layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('website/css/jquery.fancybox.min.css') }}">
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
                        <a href="#header" class="logo-nav"><img src="{{ asset('website/img/small_logo.png') }}"></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-9 col-xs-0 no-padding">
                    <div class="navy">
                        <ul class="nav cf" id="ul1">
                            <li><a href="{{ route('index') }}">الرئيسية</a></li>
                            <li><a href="{{ route('goals') }}">الرؤية والرسالة</a></li>
                            <li><a href="">الاخبار</a></li>
                            <li><a href="{{ route('index') }}#testimon">عملاؤنا</a></li>
                            <li><a href="{{ route('skelton') }}">الهيكل التنظيمى</a></li>
                            <li><a href="{{ route('index') }}#who-us">من نحن</a></li>
                            <li><a href="{{ route('consultation') }}">طلب إستشارة - دراسة جدوى</a></li>
                            <li><a href="{{ route('index') }}#contact">اتصل بنا</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
        <!--End Navbar-->

        <!--Start Carousel-->
        <div class="crumbs">
            <h4> <a href="{{ route('index') }}">الرئيسية</a> / تفاصيل - الاخبار</h4>
        </div>
        <!--End Carousel-->
    </section>
    <!-- End Header -->

    <!-----------------Start-News-Details-Section----------->
    <section class="news-details-section all-sections">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="right-details">
                        <a href="https://rowadco.com.sa/storage/photos/CfpW2pzua7BAHgTBFgNjOmeJnfmC1anaBzaOXXxO.jpeg"
                            data-fancybox="gallery">
                            <img src="https://rowadco.com.sa/storage/photos/CfpW2pzua7BAHgTBFgNjOmeJnfmC1anaBzaOXXxO.jpeg"
                                alt="details-img">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="left-details">
                        <h2>اجتماع الجمعية العمومية الرابع</h2>
                        <span class="date">السبت،21 مايو 2022</span>
                        <div class="writer">
                            <span>الكاتب : </span>
                            <span>kamal</span>
                        </div>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, maiores fugiat. Totam
                            aperiam provident doloremque maxime deserunt quidem. Nostrum, reprehenderit. Dolor rem
                            voluptatem labore quisquam impedit ex eum, id et.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-----------------End-News-Details-Section----------->
@stop

@section('scripts')
    <script src="{{ asset('website/js/script.js') }}"></script>
    <script src="{{ asset('website/js/jquery.fancybox.min.js') }}"></script>
@stop
