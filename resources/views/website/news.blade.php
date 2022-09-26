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
                        <a href="#header" class="logo-nav"><img src="{{ asset('website/img/small_logo.png') }}"></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-9 col-xs-0 no-padding">
                    <div class="navy">
                        <ul class="nav cf" id="ul1">
                            <li><a href="{{ route('index') }}">الرئيسية</a></li>
                            <li><a href="{{ route('goals') }}">الرؤية والرسالة</a></li>
                            <li><a href="#">الاخبار</a></li>
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
            <h4> <a href="{{ route('index') }}">الرئيسية</a> / الاخبار</h4>
        </div>
        <!--End Carousel-->
    </section>
    <!-- End Header -->


    <!-----------------Start-News-Section----------->
    <section class="news-section all-sections">
        <div class="container">
            <div class="row">
                @for ($i = 0; $i <= 10;$i++)
                    
                <div class="col-lg-4 col-sm-12 wow animate__fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="news-card">
                        <a class="news-img" href="#">
                            <div class="view-btn">
                                <img src="{{ asset('website/img/more-icon.svg') }}" alt="dots">
                            </div>
                            <img src="https://rowadco.com.sa/storage/photos/CfpW2pzua7BAHgTBFgNjOmeJnfmC1anaBzaOXXxO.jpeg"
                                alt="news-img">
                        </a>
                        <div class="news-content">
                            <div>
                                <p class="new-title">اجتماع الجمعية العمومية الرابع</p>
                                <span class="date">٢١ مايو السبت</span>
                            </div>
                            <p class="new-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium
                                in
                                cumque id,
                                cupiditate, temporibus vel nihil maxime harum tempora totam quaerat quas labore illo
                                praesentium? Exercitationem similique hic molestiae aliquid!</p>
                        </div>
                    </div>
                </div>
                @endfor

            </div>
        </div>
    </section>
    <!-----------------End-News-Section----------->


@stop

@section('scripts')
    <script src="{{ asset('website/js/script.js') }}"></script>
@stop
