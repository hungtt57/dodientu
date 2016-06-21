<!DOCTYPE html>
<html>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:11:25 GMT -->
<head>
  <meta http-equiv="content-Type" content="text/html; charset=utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="http://media.web5s.com.vn/sites/1227/lg5.png" type="image/x-icon" />

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
  <title>Laptop Phong Linh - Chuyên Laptop USA chính hãng</title>

  <meta name="description" content="CaliFox - Multipurpose Resposive Web5s Theme" />
  <meta name="keywords" content="CaliFox - Multipurpose Resposive Web5s Theme" />
  <meta name="news_keywords" content="CaliFox - Multipurpose Resposive Web5s Theme" />

  <meta property="og:site_name" content="http://laptopphonglinh.vn/" />
  <meta property="og:locale" content="VN" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="http://media.web5s.com.vn/sites/1227/w.png" />
  <meta property="og:title" content="Laptop Phong Linh - Chuyên Laptop USA chính hãng" />
  <meta property="og:url" content="http://laptopphonglinh.vn/" />
  
  <link rel="canonical" href="http://laptopphonglinh.vn/" />
  <meta property="fb:app_id" content="600247426797446">

  <meta property="fb:admins" content="https://www.facebook.com/is.emty" />


</head>
<body class="home">

  <div id="header" class="header">
    <div class="top-header">
      <div class="container">
        <div class="nav-top-links">
         <a class="first-item" href="">Laptop Phong Linh</a>
         <a href="#"><i class="fa fa-phone"></i>  (+84) 0961996998</a>
       </div>
       <div class="top-bar-social">
        <a href="https://www.facebook.com/laptopphonglinh/"><i class="fa fa-facebook"></i></a>

      </div>
    </div>
  </div>
  <!--/.top-header -->
  <!-- MAIN HEADER -->
  <div class="container main-header">
    <div class="row">
      <div class="col-xs-12 col-sm-3 logo">
        <a href="{{asset('/')}}"><img alt="Kute Shop" src="{{$logo->link}}" /></a>
      </div>
      <div class="col-xs-7 col-sm-7 header-search-box">
        <form class="form-inline" method="get" action="{{asset('tim-kiem')}}">

          <div class="form-group input-serach">
            <input type="text"  name= "search" placeholder="Từ khóa tìm kiếm..." style="line-height: 40px;">
          </div>
          <button type="submit" class="pull-right btn-search"></button>
        </form>
      </div>

    </div>
  </div>
  <!-- END MANIN HEADER -->
  <div id="nav-top-menu" class="nav-top-menu">
    <div class="container">
      <div class="row">
        <div class="col-sm-3" id="box-vertical-megamenus">
          <div class="box-vertical-megamenus">
            <h4 class="title">
              <span class="title-menu">Danh Mục</span>
              <span class="btn-open-mobile pull-right"><i class="fa fa-bars"></i></span>
            </h4>
            <div class="vertical-menu-content is-home">
              <ul class="vertical-menu-list">
                @foreach($allCategories as $data => $category)
                <li><a href="{{asset('/loai-san-pham/'.$category->alias)}}"><img class="icon-menu" alt="Funky roots" src="public/assets/data/3.png">{{$category->name}}</a></li>
                @endforeach 
              </ul>
              <div class="all-category"><span class="open-cate">Tất cả danh mục</span></div>
            </div>
          </div>
        </div>
        <div id="main-menu" class="col-sm-9 main-menu">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#">MENU</a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Trang chủ</a></li>
                  @foreach($Categories as $data => $parent_category)
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$parent_category->name}}</a>
                    <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 830px;">
                     @if ($category_childs = DB::table('categories')->where('parent_id','=',$parent_category->id)->get())

                     @for ($i = 0; $i < count($category_childs); $i++)
                     @if($i%3==0)
                     <li class="block-container col-sm-3">
                      <ul class="block">
                       @for ($j = $i; $j < $i+3; $j++)
                       @if($j<count($category_childs))   
                       <li class="link_container"><a href="{{asset('/loai-san-pham/'.$category_childs[$j]->alias)}}">{{$category_childs[$j]->name}}</a></li> 
                       @endif
                       @endfor   
                     </ul>
                   </li>
                   @endif
                   @endfor
                   @endif 
                 </ul>
               </li>
               @endforeach
               <li><a href="{{asset('/lien-he')}}">Liên hệ</a></li>
               <li><a href="{{asset('/khuyen-mai')}}">Khuyến mãi</a></li>
             </ul>
           </div><!--/.nav-collapse -->
         </div>
       </nav>
     </div>
   </div>
   <!-- userinfo on top-->
   <div id="form-search-opntop">
   </div>
   <!-- userinfo on top-->
   <div id="user-info-opntop">
   </div>
   <!-- CART ICON ON MMENU -->
   <div id="shopping-cart-box-ontop">
    <i class="fa fa-shopping-cart"></i>
    <div class="shopping-cart-box-ontop-content"></div>
  </div>
</div>
</div>
</div>
<!-- end header -->
<!-- Home slideder-->
<div id="home-slider">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 slider-left"></div>
      <div class="col-sm-9 header-top-right">
        <div class="homeslider">
          <div class="content-slide">
            <ul id="contenhomeslider">
              @foreach($banners as $data => $val)
              <li><img alt="" src="{{$val->link}}" title="" /></li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="header-banner banner-opacity">
          <a href="{{$banner_event->link_facebook}}"><img alt="Funky roots" src="{{$banner_event->link}}" /></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Home slideder-->
<!-- servives -->
<div class="container">
  <div class="service ">
    <div class="col-xs-6 col-sm-3 service-item">
      <div class="icon">
        <img alt="services" src="public/assets/data/s1.png" />
      </div>
      <div class="info">
        <a href=""><h3>Vận chuyển toàn quốc</h3></a>
        <span>Ship hàng tận nhà</span>
      </div>
    </div>
    <div class="col-xs-6 col-sm-3 service-item">
      <div class="icon">
        <img alt="services" src="public/assets/data/s2.png" />
      </div>
      <div class="info">
        <a href=""><h3>Bảo hành cực tốt</h3></a>
        <span>Lỗi thiết bị 1 đổi 1</span>
      </div>
    </div>
    <div class="col-xs-6 col-sm-3 service-item">
      <div class="icon">
        <img alt="services" src="public/assets/data/s3.png" />
      </div>

      <div class="info" >
        <a href=""><h3>Hỗ trợ 24/7</h3></a>
        <span>Đội ngũ hỗ trợ nhiệt tình.</span>
      </div>
    </div>
    <div class="col-xs-6 col-sm-3 service-item">
      <div class="icon">
        <img alt="services" src="public/assets/data/s4.png" />
      </div>
      <div class="info">
        <a href=""><h3>Giá luôn tốt nhất</h3></a>
        <span>Cam kết giá thấp nhất thị trường</span>
      </div>
    </div>
  </div>
</div>
<!-- end services -->


<div class="content-page">
  <div class="container">

    <!-- featured category fashion -->
    <div class="category-featured">
      <nav class="navbar nav-menu nav-menu-red show-brand">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-brand"><a href="#"><i class="fa fa-laptop" aria-hidden="true"></i>&nbsp;&nbsp;Máy Tính Mới</a></div>
          <span class="toggle-menu"></span>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse">           
            <ul class="nav navbar-nav" id = "resultsBox">

              <?php $count = 1;?>
              @foreach($allCategories as $data => $val)
              <?php if($count == 1){ ?>
              <li class="active"><a data-toggle="tab" href="#{{$val->id}}">{{$val->name}}</a></li>
              <?php } else { ?>
              <li class=""><a data-toggle="tab" href="#{{$val->id}}">{{$val->name}}</a></li>
              <?php }
              $count = $count + 1;
              ?>

              @endforeach

            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        <div id="elevator-1" class="floor-elevator">
          <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
          <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
        </div>
      </nav>
      <div class="category-banner">
        <div class="col-sm-6 banner">
          <a href="#"><img alt="ads2" class="img-responsive" src="public/assets/data/banner_hp.jpg" /></a>
        </div>
        <div class="col-sm-6 banner">
          <a href="#"><img alt="ads2" class="img-responsive" src="public/assets/data/banner_dell.jpg" /></a>
        </div>
      </div>
      <div class="product-featured clearfix">

        <div class="product-featured-content">

          <div class="tab-container">
            <!-- tab product -->
            <?php $count2 = 1;?>
            @foreach($allCategories as $data => $val)
            @if($products = DB::table('products')->where('category_id','=',$val->id)->get())
            <?php if($count2 == 1){ ?>
            <div class="tab-panel active" id="{{$val->id}}">
              <?php } else { ?>
              <div class="tab-panel" id="{{$val->id}}">
               <?php }
               $count2 = $count2 + 1;
               ?>
               <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplay="true" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                @foreach($products as $data => $val)
                <li>
                  <div class="left-block">
                    <a href="{{asset('/chi-tiet-san-pham/'.$val->alias)}}">
                      <img class="img-responsive" alt="product" src="{{$val->image}}" /></a>

                      <div class="add-to-cart">
                        <a title="Add to Cart" href="{{asset('/chi-tiet-san-pham/'.$val->alias)}}">Xem chi tiết</a>
                      </div>
                    </div>
                    <div class="right-block">
                      <h5 class="product-name"><a href="#">{{$val->name}}</a></h5>
                      <div class="content_price">
                        <span class="price product-price">{{number_format($val->new_price,0,",",".")}} đ</span>
                        <span class="price old-price">{{number_format($val->old_price,0,",",".")}} đ</span>
                      </div>

                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
              @endif
              @endforeach
              <!-- tab product -->

            </div>

          </div>
        </div>
      </div>
      <!-- end featured category fashion -->

      <div id="content-wrap">
        <div class="container">
          <div id="hot-categories" class="row">
            <div class="col-sm-12 group-title-box">
              <h2 class="group-title ">
                <span>Sản phẩm mới</span>
              </h2>
            </div>
            @foreach($products_new as $data => $val)
            <div class="col-sm-6  col-lg-3 cate-box">
              <div class="cate-tit" >
                <div class="div-1" style="width: 46%;">

                  <a href="{{asset('/chi-tiet-san-pham/'.$val->alias)}}" class="cate-link link-active" data-ac="flipInX" ><span>shop now</span></a>
                </div>
                <div class="div-2" >
                  <a href="{{asset('/chi-tiet-san-pham/'.$val->alias)}}">
                    <img src="{{$val->image}}"  class="hot-cate-img" />
                  </a>
                </div>

              </div>
              <div class="cate-content">
                <ul>
                  <li><a >{{$val->name}}</a></li>
                  <li><a >{{number_format($val->new_price,0,",",".")}} đ</a></li>

                </ul>
              </div>
            </div> <!-- /.cate-box -->
            @endforeach                                    
          </div> <!-- /#hot-categories -->

        </div> <!-- /.container -->
      </div>     




    </div>
  </div>

  <div class="container">
    <div class="brand-showcase">
      <h2 class="brand-showcase-title">
        Nhãn hàng
      </h2>
      <ul class="band-logo owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "2" data-autoplay="true" data-responsive='{"0":{"items":3},"600":{"items":5},"1000":{"items":8}}'>
        <li>
          <a href="#"><img src="public/assets/data/dell.jpg" alt="Band logo"></a>
        </li>
        <li>
          <a href="#"><img src="public/assets/data/hp.jpg" alt="Band logo"></a>
        </li>
        <li>
          <a href="#"><img src="public/assets/data/thinkpad.jpg" alt="Band logo"></a>
        </li>
        <li>
          <a href="#"><img src="public/assets/data/dell.jpg" alt="Band logo"></a>
        </li>
        <li>
          <a href="#"><img src="public/assets/data/hp.jpg" alt="Band logo"></a>
        </li>
        <li>
          <a href="#"><img src="public/assets/data/thinkpad.jpg" alt="Band logo"></a>
        </li>
        <li>
          <a href="#"><img src="public/assets/data/dell.jpg" alt="Band logo"></a>
        </li>
        <li>
          <a href="#"><img src="public/assets/data/hp.jpg" alt="Band logo"></a>
        </li>
        <li>
          <a href="#"><img src="public/assets/data/thinkpad.jpg" alt="Band logo"></a>
        </li>
      </ul>

    </div>
  </div>



  <!-- Footer -->
  <footer id="footer">
   <div class="container">
    <!-- introduce-box -->
    <div id="introduce-box" class="row">
      <div class="col-md-3">
        <div id="address-box">
         <a href="{{asset('/')}}"><img alt="Kute Shop" src="{{$logo->link}}" /></a>
         <div id="address-list">
          <div class="tit-name">Địa chỉ:</div>
          <div class="tit-contain">99 Ngõ Núi Trúc, Giang Văn Minh, Ba Đình, Hà Nội</div>
          <div class="tit-name">Phone:</div>
          <div class="tit-contain">0911782459</div>
          <div class="tit-name">Fax:</div>
          <div class="tit-contain">0961996998</div>
          <div class="tit-name">Email:</div>
          <div class="tit-contain">laptopphonglinh@gmail.com</div>
        </div>
      </div> 
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-sm-6">
          <div class="introduce-title">Laptop Phong Linh</div>
          <ul id="introduce-company"  class="introduce-list">
            <li><a href="{{asset('/lien-he')}}">Liên hệ</a></li>
          </ul>
        </div>
        <div class="col-sm-6">
          <div class="introduce-title">Thông tin tài khoản</div>
          <ul id = "introduce-Account" class="introduce-list">
            <li><a href="#"><span>Vietcombank - CN Hà Nội<span><br>
              <span>Số tài khoản: 0021000260989</span><br>
              <span>Chủ TK: Phan Thanh Tuấn</span></a></li>

            </ul>
          </div>

        </div>
      </div>
      <div class="col-md-3">

        <div class="introduce-title">Liên kết với chúng tôi</div>
        <div class="social-link">
          <div class="fb-page" data-href="https://www.facebook.com/laptopphonglinh/?ref=ts&fref=ts"  data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="hhttps://www.facebook.com/laptopphonglinh/?ref=ts&fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/laptopphonglinh/?ref=ts&fref=ts">Laptop PhongLinh</a></blockquote></div>

        </div>
      </div>

    </div>
  </div><!-- /#introduce-box -->




  <div id="footer-menu-box">



    <p class="text-center">Laptop Phong Linh - Phong cách mới - Giá trị mới</p>
  </div><!-- /#footer-menu-box -->
</div> 
</footer>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- fb live chat -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=600247426797446";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<style>
  #cfacebook{
    position: fixed; 
    bottom: 0px;
    right: 8px;
    z-index: 999999999999999;
    width: 250px; height: auto;
    box-shadow: 6px 6px 6px 10px rgba(0,0,0,0.2);
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    overflow: hidden;
  }
  #cfacebook .fchat{float: left; width: 100%; height: 295px; overflow: hidden; display: none; background-color: #fff;}
  #cfacebook .fchat .chat-single{float: left; line-height: 25px; line-height: 25px; color: #333; width: 100%;}
  #cfacebook .fchat .chat-single a{float: right; text-decoration: none; margin-right: 10px; color: #888; font-size: 12px;}
  #cfacebook .fchat .chat-single a:hover{color: #222;}

  #cfacebook .fchat .fb-page{margin-top: -130px; float: left;}
  #cfacebook a.chat_fb{
    float: left;
    padding: 0 25px;
    width: 250px;
    color: #fff;
    text-decoration: none;
    height: 40px;
    line-height: 40px;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);        

    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAqCAMAAABFoMFOAAAAWlBMV…8/UxBxQDQuFwlpqgBZBq6+P+unVY1GnDgwqbD2zGz5e1lBdwvGGPE6OgAAAABJRU5ErkJggg==);
    background-repeat: repeat-x;
    background-size: auto;
    background-position: 0 0;
    background-color: #0065BF;
    border: 0;
    border-bottom: 1px solid #0065BF;
    z-index: 9999999;
    margin-right: 12px; font-size: 18px;}
    #cfacebook a.chat_fb:hover{color: yellow; text-decoration: none;}
  </style>
  <script>
    function fchat()
    {
      var tchat= document.getElementById("tchat").value;
      if(tchat==0 || tchat=='0')
      {                
        document.getElementById("fchat").style.display = "block";
        document.getElementById("tchat").value=1;
      }else{
        document.getElementById("fchat").style.display = "none";
        document.getElementById("tchat").value=0;
      }             
    }
    setTimeout(function() {document.getElementById("fchat").style.display = "block";}, 6000);
  </script>

  <div id="cfacebook">
    <a href="javascript:;" class="chat_fb" onclick="javascript:fchat();"><i class="fa fa-comments"></i> Hỗ trợ trực tuyến</a>
    <div id="fchat" class="fchat">
      <div class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/laptopphonglinh/?ref=ts&fref=ts" data-width="250" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
      <div class="chat-single"><a target="_blank" href="https://www.facebook.com/laptopphonglinh/?ref=ts&fref=ts"><i class="fa fa-facebook-square"></i> Fanpage Laptopphonglinh.vn</a></div>
    </div>
    <input type="hidden" id="tchat" value="0"/>
  </div>
  <!-- Script-->
  <script type="text/javascript" src="{{asset('public/assets/lib/jquery/jquery-1.11.2.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('public/assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('public/assets/lib/select2/js/select2.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('public/assets/lib/jquery.bxslider/jquery.bxslider.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('public/assets/lib/owl.carousel/owl.carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('public/assets/lib/jquery.countdown/jquery.countdown.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('public/assets/js/jquery.actual.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('public/assets/js/theme-script.js')}}"></script>

</body>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:15:06 GMT -->
</html>