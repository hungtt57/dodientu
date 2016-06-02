<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="{{asset('public/admin/img/favicon.png')}}">

    <title>Admin Manager</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('public/admin/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('public/admin/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('public/admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('public/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{asset('public/admin/css/owl.carousel.css')}}" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{asset('public/admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/admin/css/style-responsive.css')}}" rel="stylesheet" />
    <link href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
     
    @yield('css')
  </head>
  <section id="container">
      @include('admin.includes.header')
      @include('admin.includes.sidebar')
      @yield('content')
     
  </section>
   @include('admin.includes.footer')
  <body>

 <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('public/admin/js/jquery.js')}}"></script>
    <script src="{{asset('public/admin/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{asset('public/admin/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('public/admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('public/admin/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('public/admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/js/jquery.sparkline.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{asset('public/admin/js/owl.carousel.js')}}" ></script>
    <script src="{{asset('public/admin/js/jquery.customSelect.min.js')}}" ></script>
    <script src="{{asset('public/admin/js/respond.min.js')}}" ></script>

    <script class="include" type="text/javascript" src="{{asset('public/admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>

    <!--common script for all pages-->
    <script src="{{asset('public/admin/js/common-scripts.js')}}"></script>

    <!--script for this page-->
   
    <script src="{{asset('public/admin/js/count.js')}}"></script>

   
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
              autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
  @yield('js')
  </body>
  </html>