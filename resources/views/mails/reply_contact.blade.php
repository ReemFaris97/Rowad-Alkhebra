<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title> 404 Not-Found </title>
    <link rel="stylesheet" href="{{asset('_site/css/bootstrap.min.css')}}">
    <link rel="shortcut icon" href="{{asset('_site/img/logo.png')}}">
    <link rel="stylesheet" href="{{asset('_site/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('_site/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('_site/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('_site/css/404.css')}}">
    <!------ IE -------->
    <script src="{{asset('_site/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('_site/js/respond.min.js')}}"></script>
</head>



<body>
<div class="body-overlay"></div>
<!-- Start Loading-Page -->
<div class="loader">
    <div class="in-load">
        <div>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- End Loading-Page -->



<!--Start 404-->
<div class="page_404">
    <div class="page_404__wrapper">
        <div class="page_404__zirkaAndry_img">
            <img src="{{$logo}}">
        </div>
        <p class="page_404__mainText">{{$email}}, مرحبا  </p>
        {{--@dd($message)--}}
        <div class="btn-3"><span>تشرفنا برسالتك وهذا رد من عليها : </span> {{$alert}} </div>

    </div>
</div>

<!--End 404-->


<!--Scroll Button-->
<div id="scroll-top">
    <i class="fa fa-angle-up"></i>
</div>



<!-- Strat End -->
<!--===============================
     SCRIPT
     ===================================-->

<script src="{{asset('_site/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('_site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('_site/js/all.min.js')}}"></script>

<!----------------- These for here Only ----------------->


<script src="{{asset('_site/js/wow.min.js')}}"></script>
<script>
    new WOW().init();

</script>
<script src="{{asset('_site/js/script.js')}}"></script>

</body>

</html>
