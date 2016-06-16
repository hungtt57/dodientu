<!DOCTYPE html>
<html>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:28:15 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/lib/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/lib/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/lib/select2/css/select2.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/lib/jquery.bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/lib/owl.carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/lib/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/reset.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/responsive.css')}}" />
    @yield('css')
    <title>Laptop Phong Linh - Chuyên Laptop USA chính hãng</title>
</head>
<body class="category-page">

<!-- HEADER -->
@include('front-end.includes.header')

<!-- end header -->

<div class="columns-container">
    <div class="container" id="columns">
        @yield('content')
    </div>
</div>

<!-- Footer -->
@include('front-end.includes.footer')


<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>

<!-- Script-->
<script type="text/javascript" src="{{asset('public/assets/lib/jquery/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/lib/select2/js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/lib/jquery.bxslider/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/lib/owl.carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/lib/jquery.countdown/jquery.countdown.min.js')}}"></script>

<script type="text/javascript" src="{{asset('public/assets/lib/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/jquery.actual.min.js')}}"></script>

<script type="text/javascript" src="{{asset('public/assets/js/theme-script.js')}}"></script>
@yield('script')
</body>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:29:23 GMT -->
</html>

