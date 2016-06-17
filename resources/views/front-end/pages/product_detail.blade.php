@extends('front-end.layouts.master')
@section('title')
{{$product_detail->name}} | Laptop Phong Linh
@endsection
@section('content')

<!-- breadcrumb -->
<div class="breadcrumb clearfix">
    <a class="home" href="{{asset('/')}}" title="Return to Home">Trang chủ</a>
    <span class="navigation-pipe">&nbsp;</span>
    <a href="{{asset('loai-san-pham/'.$category->alias)}}" title="Return to Home">{{$category->name}}</a>
    <span class="navigation-pipe">&nbsp;</span>
    <a href="{{asset('chi-tiet-san-pham/'.$product_detail->alias)}}" title="Return to Home">{{$product_detail->name}}</a>
</div>
<!-- ./breadcrumb -->
<!-- row -->
<div class="row">
    <!-- Left colunm -->
    <div class="column col-xs-12 col-sm-3" id="left_column">


        <!-- ./block category  -->
        <!-- block best sellers -->
        <div class="block left-module">
            <p class="title_block">BEST SELLERS</p>
            <div class="block_content">
                <div class="owl-carousel owl-best-sell" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplay="true" data-autoplayHoverPause = "true" data-items="1">
                    <ul class="products-block best-sell">
                        <li>
                            <div class="products-block-left">
                                <a href="#">
                                    <img src="assets/data/product-100x122.jpg" alt="SPECIAL PRODUCTS">
                                </a>
                            </div>
                            <div class="products-block-right">
                                <p class="product-name">
                                    <a href="#">Woman Within Plus Size Flared</a>
                                </p>
                                <p class="product-price">$38,95</p>
                                <p class="product-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="products-block-left">
                                <a href="#">
                                    <img src="assets/data/p11.jpg" alt="SPECIAL PRODUCTS">
                                </a>
                            </div>
                            <div class="products-block-right">
                                <p class="product-name">
                                    <a href="#">Woman Within Plus Size Flared</a>
                                </p>
                                <p class="product-price">$38,95</p>
                                <p class="product-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="products-block-left">
                                <a href="#">
                                    <img src="assets/data/p12.jpg" alt="SPECIAL PRODUCTS">
                                </a>
                            </div>
                            <div class="products-block-right">
                                <p class="product-name">
                                    <a href="#">Plus Size Rock Star Skirt</a>
                                </p>
                                <p class="product-price">$38,95</p>
                                <p class="product-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </p>
                            </div>
                        </li>
                    </ul>
                    <ul class="products-block best-sell">
                        <li>
                            <div class="products-block-left">
                                <a href="#">
                                    <img src="assets/data/p13.jpg" alt="SPECIAL PRODUCTS">
                                </a>
                            </div>
                            <div class="products-block-right">
                                <p class="product-name">
                                    <a href="#">Woman Within Plus Size Flared</a>
                                </p>
                                <p class="product-price">$38,95</p>
                                <p class="product-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="products-block-left">
                                <a href="#">
                                    <img src="assets/data/p14.jpg" alt="SPECIAL PRODUCTS">
                                </a>
                            </div>
                            <div class="products-block-right">
                                <p class="product-name">
                                    <a href="#">Woman Within Plus Size Flared</a>
                                </p>
                                <p class="product-price">$38,95</p>
                                <p class="product-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="products-block-left">
                                <a href="#">
                                    <img src="assets/data/p15.jpg" alt="SPECIAL PRODUCTS">
                                </a>
                            </div>
                            <div class="products-block-right">
                                <p class="product-name">
                                    <a href="#">Plus Size Rock Star Skirt</a>
                                </p>
                                <p class="product-price">$38,95</p>
                                <p class="product-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ./block best sellers  -->

        <!-- left silide -->
        <div class="col-left-slide left-module">
            <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                <li><a href="#"><img src="assets/data/slide-left.jpg" alt="slide-left"></a></li>
                <li><a href="#"><img src="assets/data/slide-left2.jpg" alt="slide-left"></a></li>
                <li><a href="#"><img src="assets/data/slide-left3.png" alt="slide-left"></a></li>
            </ul>
        </div>
        <!--./left silde-->
        <!-- block best sellers -->
        <div class="block left-module">
            <p class="title_block">ON SALE</p>
            <div class="block_content product-onsale">
                <ul class="product-list owl-carousel" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                    <li>
                        <div class="product-container">
                            <div class="left-block">
                                <a href="#">
                                    <img class="img-responsive" alt="product" src="assets/data/product-260x317.jpg" />
                                </a>
                                <div class="price-percent-reduction2">-30% OFF</div>
                            </div>
                            <div class="right-block">
                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                <div class="product-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                    <span class="price old-price">$52,00</span>
                                </div>
                            </div>
                            <div class="product-bottom">
                                <a class="btn-add-cart" title="Add to Cart" href="#add">Add to Cart</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="product-container">
                            <div class="left-block">
                                <a href="#">
                                    <img class="img-responsive" alt="product" src="assets/data/p35.jpg" />
                                </a>
                                <div class="price-percent-reduction2">-10% OFF</div>
                            </div>
                            <div class="right-block">
                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                <div class="product-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                    <span class="price old-price">$52,00</span>
                                </div>
                            </div>
                            <div class="product-bottom">
                                <a class="btn-add-cart" title="Add to Cart" href="#add">Add to Cart</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="product-container">
                            <div class="left-block">
                                <a href="#">
                                    <img class="img-responsive" alt="product" src="assets/data/p37.jpg" />
                                </a>
                                <div class="price-percent-reduction2">-42% OFF</div>
                            </div>
                            <div class="right-block">
                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                <div class="product-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                    <span class="price old-price">$52,00</span>
                                </div>
                            </div>
                            <div class="product-bottom">
                                <a class="btn-add-cart" title="Add to Cart" href="#add">Add to Cart</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./block best sellers  -->
        <!-- left silide -->
        <div class="col-left-slide left-module">
            <div class="banner-opacity">
                <a href="#"><img src="assets/data/ads-banner.jpg" alt="ads-banner"></a>
            </div>
        </div>
        <!--./left silde-->
    </div>
    <!-- ./left colunm -->
    <!-- Center colunm-->
    <div class="center_column col-xs-12 col-sm-9" id="center_column">
        <!-- Product -->
        <div id="product">
            <div class="primary-box row">
                <div class="pb-left-column col-xs-12 col-sm-6">
                    <!-- product-imge-->
                    <div class="product-image">
                        <div class="product-full">
                            <img id="product-zoom" src='{{$product_detail->image}}' data-zoom-image="{{$product_detail->image}}"/>
                        </div>
                        <div class="product-img-thumb" id="gallery_01">
                            <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false" data-margin="20" data-loop="true">
                                @foreach($image_details as $data => $val)
                                <li>
                                    <a href="#" data-image="{{$val->link}}" data-zoom-image="{{$val->link}}">
                                        <img id="product-zoom"  src="{{$val->link}}" /> 
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- product-imge-->
                </div>
                <div class="pb-right-column col-xs-12 col-sm-6">
                    <h1 class="product-name">{{$product_detail->name}}</h1>
               
                    <div class="product-price-group">
                        @if($product_detail->new_price!==$product_detail->old_price)
                        <span class="price">{{number_format($product_detail->new_price,0,",",".")}} đ</span>
                        <span class="old-price">{{number_format($product_detail->old_price,0,",",".")}} đ</span>
                        <span class="discount">- {{$product_detail->sale }}%</span>
                        @else
                        <span class="price">{{number_format($product_detail->new_price,0,",",".")}} đ</span>
                        @endif

                    </div>
                    <div class="info-orther">

                        <p>Tình trạng: <span class="in-stock">Còn hàng</span></p>

                    </div>
                    <div class="product-desc">
                     {{$product_detail->short_description}}
                 </div>

                 <div class="form-share">
                    <div class="sendtofriend-print">
                        <?php
                        function curPageURL() {
                          $pageURL = 'http';
                          if (isset( $_SERVER["HTTPS"] ) && strtolower( $_SERVER["HTTPS"] ) == "on" ) {
                           $pageURL .= 's';
                       }
                       $pageURL .= '://';
                       if ($_SERVER['SERVER_PORT'] != '80') {
                        $pageURL .= $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
                    } else {
                        $pageURL .= $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                    }
                    return $pageURL;
                } 

                ?>
                <div class="fb-like" data-href="<?php echo curPageURL();?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=600247426797446";
                  fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>
          </div>
          <div class="network-share">
          </div>
      </div>
  </div>
</div>
<!-- tab product -->
<div class="product-tab">
    <ul class="nav-tab">
        <li class="active">
            <a aria-expanded="false" data-toggle="tab" href="#product-detail">Mô tả sản phẩm</a>
        </li>
        <li>
            <a aria-expanded="true" data-toggle="tab" href="#information">Thông số kỹ thuật</a>
        </li>

    </ul>
    <div class="tab-container">
        <div id="product-detail" class="tab-panel active">
            <p><?php echo $product_detail->description; ?></p>
        </div>
        <div id="information" class="tab-panel">
          <p><?php echo $product_detail->info;  ?></p>
      </div>
      <div id="reviews" class="tab-panel">
        <div class="product-comments-block-tab">
            <div class="comment row">
                <div class="col-sm-3 author">
                    <div class="grade">
                        <span>Grade</span>
                        <span class="reviewRating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </span>
                    </div>
                    <div class="info-author">
                        <span><strong>Jame</strong></span>
                        <em>04/08/2015</em>
                    </div>
                </div>
                <div class="col-sm-9 commnet-dettail">
                    Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar
                </div>
            </div>
            <div class="comment row">
                <div class="col-sm-3 author">
                    <div class="grade">
                        <span>Grade</span>
                        <span class="reviewRating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </span>
                    </div>
                    <div class="info-author">
                        <span><strong>Author</strong></span>
                        <em>04/08/2015</em>
                    </div>
                </div>
                <div class="col-sm-9 commnet-dettail">
                    Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar
                </div>
            </div>
            <p>
                <a class="btn-comment" href="#">Write your review !</a>
            </p>
        </div>

    </div>
    <div id="extra-tabs" class="tab-panel">
        <p>Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.</p>

        <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>

        <p>Maecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.</p> 
    </div>
    <div id="guarantees" class="tab-panel">
        <p>Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.</p>

        <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>

        <p>Maecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.</p> 
        <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>
    </div>
</div>
</div>
<!-- ./tab product -->
<!-- box product -->

<div class="page-product-box">
    <h3 class="heading">Related Products</h3>
    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
        @foreach($product_cate as $data => $val)
        <li>
            <div class="product-container">
                <div class="left-block">
                    <a href="{{asset('/chi-tiet-san-pham/'.$val->alias)}}">
                        <img class="img-responsive" alt="product" src="{{$val->image}}" />
                    </a>

                    <div class="add-to-cart">
                        <a title="Add to Cart" href="{{asset('/chi-tiet-san-pham/'.$val->alias)}}">Chi tiết sản phẩm</a>
                    </div>
                </div>
                <div class="right-block">
                    <h5 class="product-name"><a href="#">{{$val->name}}</a></h5>

                    <div class="content_price">
                        <span class="price product-price">{{number_format($val->new_price,0,",",".")}} đ</span>
                        <span class="price old-price">{{number_format($val->old_price,0,",",".")}} đ</span>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
<!-- ./box product -->



<div class="page-product-box">
<div class="fb-comments" data-href="<?php echo curPageURL();?>" data-width="850" data-numposts="5"></div>
</div>
</div>
<!-- Product -->
</div>
<!-- ./ Center colunm -->
</div>
<!-- ./row-->

@endsection
@section('script')

</script>
<script type="text/javascript" src="{{asset('public/assets/lib/jquery.elevatezoom.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/lib/fancyBox/jquery.fancybox.js')}}"></script>
@endsection