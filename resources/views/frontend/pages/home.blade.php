@extends('frontend.layout.master')
@section('css')
<link rel='stylesheet' type='text/css' media='all' href="{{asset('public/frontend/css/mediaelementplayer.css')}}" />
@endsection
@section('content')

<div class="em-wrapper-main">
    <div class="container container-main">
        <div class="em-inner-main">
            <div class="em-wrapper-area01">
                <div class="row em-wrapper-ads-13 hidden-xs">
                    <div class="text-box col-sm-8"><a class="icon-banner-left pull-left" title="Tech Support 247" href="#"><em class="fa fa-fw"></em></a>
                        <div class="em-banner-right">
                            <h5><a title="Tech Support 247" href="#">Thân Thiện</a></h5>
                            <p>Vintage pastel tucked t-shirt leather cami</p>
                        </div>
                    </div>
                    <div class="text-box col-sm-8"><a class="icon-banner-left pull-left" title="Free shipping all order" href="#"><em class="fa fa-fw"></em></a>
                        <div class="em-banner-right">
                            <h5><a title="Free shipping all order" href="#">An Toàn</a></h5>
                            <p>Get Free Shipping on all orders</p>
                        </div>
                    </div>
                    <div class="text-box col-sm-8"><a class="icon-banner-left pull-left" title="30 days return" href="#"><em class="fa fa-fw"></em></a>
                        <div class="em-banner-right">
                            <h5><a title="30 days return" href="#">Đáng Tin Cậy</a></h5>
                            <p>The total billed is discount for member</p>
                        </div>
                    </div>
                </div><!-- /.em-wrapper-ads-13-->
            </div><!-- /.em-wrapper-area01 -->

            <div class="em-main-container em-col2-left-layout">
                <div class="row">
                    <div class="col-sm-18 col-sm-push-6 em-col-main">
                        <div class="em-wrapper-area03">
                            <div class="em-slideshow">
                                <div class="em-owlcarousel-slideshow">
                                    <div id="em_owlcarousel_2_2484_sync1" class="owl-carousel">
                                        <div class="item">
                                            <a href="#"> <img alt="1435569308_0_1.jpg" class="lazyOwl img-responsive" src="{{asset('public/frontend/images/loading.gif')}}" data-src="{{asset('public/image/slide/thanthien.jpg')}}" /> </a>
                                            <div class="em-owlcarousel-description">
                                                <div class="fadeInLeft em-owlcarousel-des em-owlcarousel-des-0">

                                                </div>
                                            </div>
                                        </div><!-- /.item -->
                                        <div class="item">
                                            <a href="#"> <img alt="1435569308_1_2.jpg" class="lazyOwl img-responsive" src="{{asset('public/frontend/images/loading.gif')}}" data-src="{{asset('public/frontend/images/em_minislideshow/1435569308_1_2.jpg')}}" /> </a>
                                            <div class="em-owlcarousel-description">
                                                <div class="fadeInDown em-owlcarousel-des em-owlcarousel-des-1">
                                                    <h4 style="font:italic 3rem/1 Lora,Helvetica Neue, Helvetica, Arial, sans-serif;  margin-bottom: 3.5rem;">Hot discounts of the week</h4>
                                                    <h2 style="font:700 6rem/1 Raleway,Helvetica Neue, Helvetica, Arial, sans-serif;  margin-bottom: 3rem;" class="em-text-upercase">sale up 70% off</h2>
                                                    <h4 class="em-text-upercase" style="font:500 2rem/1 Lato,Helvetica Neue, Helvetica, Arial, sans-serif;">only over oders on $99.99</h4>
                                                </div>
                                            </div>
                                        </div><!-- /.item -->
                                        <div class="item">
                                            <a href="#"> <img alt="1436500083_0_slideshow3.jpg" class="lazyOwl img-responsive" src="{{asset('public/frontend/images/loading.gif')}}" data-src="{{asset('public/frontend/images/em_minislideshow/1436500083_0_slideshow3.jpg')}}" /> </a>
                                            <div class="em-owlcarousel-description">
                                                <div class="fadeInRight em-owlcarousel-des em-owlcarousel-des-2">
                                                    <h3 style="font:italic 2rem/1 Lora,Helvetica Neue, Helvetica, Arial, sans-serif;margin-bottom:1.7rem;">Long Weekend Sale Off</h3>
                                                    <h1 style="font:700 6rem/1 Raleway,Helvetica Neue, Helvetica, Arial, sans-serif; margin-bottom: 3rem;" class="em-text-upercase">couple shop</h1> <a href="#" class="button-link first"><span>purchase now</span></a> <a href="#" class="button-link"><span>shop now</span></a>
                                                </div>
                                            </div>
                                        </div><!-- /.item -->
                                    </div><!-- /# em_owlcarousel_2_2484_sync1 -->
                                </div><!-- /.em-owlcarousel-slideshow -->
                            </div><!-- /.em-slideshow -->
                        </div><!-- /.em-wrapper-area03 -->
                        <div class="std"></div>
                        <div class="row hidden-xs">
                            <div class="em-wrapper-banners">
                                                <!-- <div class="col-sm-8  text-center">
                                                    <div class="img-banner">
                                                        <a class="banner-img" title="em-sample-title" href="#"> <img class="img-responsive retina-img" alt="em-sample-alt" src="{{asset('public/frontend/images/wysiwyg/em_ads_06.jpg')}}" /> </a>
                                                        <a class="banner-text effect-line" title="em-sample-title" href="#"> <img class="img-responsive" alt="em-sample-alt" src="{{asset('public/frontend/images/wysiwyg/em_ads_text_01.png')}}" /> </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8  img-banner text-center">
                                                    <div class="effect-hover-text4">
                                                        <a class="banner-img" title="em-sample-title" href="#"> <img class="img-responsive retina-img" alt="em-sample-alt" src="{{asset('public/frontend/images/wysiwyg/em_ads_07.jpg')}}" /> </a>
                                                        <a class="banner-text effect-line" title="em-sample-title" href="#"> <img class="img-responsive" alt="em-sample-alt" src="{{asset('public/frontend/images/wysiwyg/em_ads_text_02.png')}}" /> </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 text-center">
                                                    <div class="img-banner">
                                                        <a class="banner-img" title="em-sample-title" href="#"> <img class="img-responsive retina-img" alt="em-sample-alt" src="{{asset('public/frontend/images/wysiwyg/em_ads_08.jpg')}}" /> </a>
                                                        <a class="banner-text effect-line" title="em-sample-title" href="#"> <img class="img-responsive" alt="em-sample-alt" src="{{asset('public/frontend/images/wysiwyg/em_ads_text_03.png')}}" /> </a>
                                                    </div>
                                                </div> -->
                                            </div><!-- /.em-wrapper-banners -->
                                        </div>

                                        <div class="em-wrapper-new-arrivals-tabs">
                                            <div class="em-new-arrivals-tabs em-line-01">
                                                <div class="emtabs-ajaxblock-loaded">
                                                    <div class="em-tabs-widget tabs-widget ">
                                                        <div class="widget-title em-widget-title">
                                                            <h3><span>Sản Phẩm Mới</span></h3>
                                                        </div>
                                                        <div id="emtabs_1" class="em-tabs emtabs r-tabs">
                                                            <ul class="em-tabs-control tabs-control r-tabs-nav">
                                                                <li class="r-tabs-tab r-tabs-state-active">
                                                                    <a class="r-tabs-anchor active" href="#tab_emtabs_1_1" data-hover="Shirt"> <span class="icon"></span>Sản Phẩm Mới</a>
                                                                </li>
                                                                
                                                            </ul>
                                                            <div class="em-tabs-content tab-content">
                                                                <div class="r-tabs-accordion-title active">
                                                                    <a class="r-tabs-anchor" href="#tab_emtabs_1_1"> <span class="icon tab_emtabs_1_1"></span>Sản Phẩm Mới</a>
                                                                </div>
                                                                <div id="tab_emtabs_1_1" class="tab-pane tab-item content_tab_emtabs_1_1 r-tabs-panel r-tabs-state-active">
                                                                    <div class="wrapper button-show01 button-hide-text em-wrapper-loaded">
                                                                        <div class="emfilter-ajaxblock-loaded">
                                                                            <div id="em_fashion_new_arrivals_tab01" class="em-grid-20 ">

                                                                                <div class="widget em-filterproducts-grid">
                                                                                    <div class="widget-products em-widget-products">
                                                                                        <div class="emcatalog-desktop-4" id="em-grid-mode-em_fashion_new_arrivals_tab01">
                                                                                            <div class="products-grid ">


                                                                                                @foreach($new_products as $key => $new_product)
                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="{{asset('/chitietsanpham/'.$new_product->id.'/'.$new_product->alias)}}" title=" Metallic Midi Cut Out Midi Dress" class="product-image"><img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="{{asset($new_product->anhdaidien)}}" data-original="{{asset($new_product->anhdaidien)}}" alt=" Metallic Midi Cut Out Midi Dress" height="350" width="350">
                                                                                                                <img class="img-responsive em-alt-org em-lazy-loaded" src="{{asset($new_product->anhdaidien)}}" data-original="{{asset($new_product->anhdaidien)}}" alt=" Metallic Midi Cut Out Midi Dress" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">

                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Chi tiết sản phẩm" >Chi tiết sản phẩm</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 19px;" class="product-name"><a href="#" title=" Metallic Midi Cut Out Midi Dress">{{$new_product->ten}}</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:67%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(1)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-177-emprice-659da6b027ea5433ad0a985675d8fd89">
                                                                                                                        <span class="price">{{$new_product->gia}}</span> </span>

                                                                                                                    </div>

                                                                                                                </div>
                                                                                                            </div><!-- /.product-shop -->
                                                                                                        </div>
                                                                                                    </div><!-- item -->
                                                                                                    @endforeach





                                                                                                </div><!-- /.products-grid -->
                                                                                            </div><!-- /.emcatalog-desktop-4 -->
                                                                                        </div><!-- /.widget-products -->
                                                                                    </div><!-- /.widget -->

                                                                                </div><!-- /#em_fashion_new_arrivals_tab01 -->
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- /#tab_emtabs_1_1 -->


                                                                </div><!-- /.tab-content -->
                                                            </div><!-- /#emtabs_1 -->
                                                        </div>
                                                    </div>
                                                </div><!-- /.em-new-arrivals-tabs -->
                                            </div><!-- /.em-wrapper-new-arrivals-tabs -->

                                            <div class="em-wrapper-banners hidden-xs">
                                                <div class="em-effect06">
                                                    <a class="em-eff06-03" title="em-sample-title" href="#"> <img class="img-responsive" alt="em-sample-alt" src="{{asset('public/frontend/images/wysiwyg/em_ads_10.jpg')}}" /> </a>
                                                </div>
                                            </div><!-- /.em-wrapper-banners -->

                                            <div class="em-best-sales em-wrapper-product-15">
                                                <div class="emfilter-ajaxblock-loaded">
                                                    <div class="em-grid-15 custom-product-list">
                                                        <div class="widget-title em-widget-title">
                                                            <h3><span>Bài viết mới nhất</span></h3>
                                                        </div>

                                                        <div class="widget em-filterproducts-list">
                                                            <div class="widget-products em-widget-products">
                                                                <div class="products-list ">
                                                                    <div class="item first" style="  ">
                                                                        <a href="#" title=" Pretty Playsuit" class="product-image">

                                                                            <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="{{asset('public/frontend/images/product/110x110/clothing_sp19_2.jpg')}}" data-original="{{asset('public/frontend/images/product/110x110/clothing_sp19_2.jpg')}}" alt=" Pretty Playsuit" height="110" width="110">
                                                                            <img class="img-responsive em-alt-org em-lazy-loaded" src="{{asset('public/frontend/images/product/110x110/clothing_sp19_1.jpg')}}" data-original="{{asset('public/frontend/images/product/110x110/clothing_sp19_1.jpg')}}" alt=" Pretty Playsuit" height="110" width="110">
                                                                        </a>
                                                                        <div class="product-shop">
                                                                            <div class="f-fix">
                                                                                <!--product name-->
                                                                                <h3 class="product-name"><a href="#" title=" Pretty Playsuit"> Pretty Playsuit</a></h3>
                                                                                <!--product description-->
                                                                                <!--product reviews-->
                                                                                <div class="ratings">
                                                                                    <div class="rating-box">
                                                                                        <div class="rating" style="width:0%"></div>
                                                                                    </div>
                                                                                    <span class="amount"><a href="#" onclick="184">(0)</a></span>
                                                                                </div>
                                                                                <!--product price-->
                                                                                <div class="price-box">

                                                                                    <p class="old-price">
                                                                                        <span class="price-label">Regular Price:</span>
                                                                                        <span class="price" id="old-price-184-emprice-9c7acb644d253ae8c0c656d97ce7a00f">$130.00</span>
                                                                                    </p>

                                                                                    <p class="special-price">
                                                                                        <span class="price-label">Special Price</span>
                                                                                        <span class="price" content="90" id="product-price-184-emprice-9c7acb644d253ae8c0c656d97ce7a00f"> $90.00</span>
                                                                                    </p>


                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div><!-- /.item -->
                                                                    <div class="item" style="  ">
                                                                        <a href="#" title="Cross Back Dress" class="product-image">


                                                                            <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="{{asset('public/frontend/images/product/110x110/clothing_sp1_2.jpg')}}" data-original="{{asset('public/frontend/images/product/110x110/clothing_sp1_2.jpg')}}" alt="Cross Back Dress" height="110" width="110">
                                                                            <img class="img-responsive em-alt-org em-lazy-loaded" src="{{asset('public/frontend/images/product/110x110/clothing_sp1_1.jpg')}}" data-original="{{asset('public/frontend/images/product/110x110/clothing_sp1_1.jpg')}}" alt="Cross Back Dress" height="110" width="110">
                                                                        </a>
                                                                        <div class="product-shop">
                                                                            <div class="f-fix">
                                                                                <!--product name-->
                                                                                <h3 class="product-name"><a href="#" title="Cross Back Dress">Cross Back Dress</a></h3>
                                                                                <!--product description-->
                                                                                <!--product reviews-->
                                                                                <div class="ratings">
                                                                                    <div class="rating-box">
                                                                                        <div class="rating" style="width:%"></div>
                                                                                    </div>
                                                                                    <span class="amount"><a href="#" onclick="166">(0)</a></span>
                                                                                </div>
                                                                                <!--product price-->



                                                                                <div class="price-box">
                                                                                    <span class="regular-price" id="product-price-166-emprice-420d7edd38e60d3ae400966629e226d2">
                                                                                        <span class="price">$750.00</span> </span>

                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div><!-- /.item -->
                                                                        <div class="item last" style="  ">
                                                                            <a href="#" title="Drape Back Playsuit " class="product-image">


                                                                                <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="{{asset('public/frontend/images/product/110x110/clothing_sp17_2.jpg')}}" data-original="{{asset('public/frontend/images/product/110x110/clothing_sp17_2.jpg')}}" alt="Drape Back Playsuit " height="110" width="110">
                                                                                <img class="img-responsive em-alt-org em-lazy-loaded" src="{{asset('public/frontend/images/product/110x110/clothing_sp17_1.jpg')}}" data-original="{{asset('public/frontend/images/product/110x110/clothing_sp17_1.jpg')}}" alt="Drape Back Playsuit " height="110" width="110">
                                                                            </a>
                                                                            <div class="product-shop">
                                                                                <div class="f-fix">
                                                                                    <!--product name-->
                                                                                    <h3 class="product-name"><a href="#" title="Drape Back Playsuit ">Drape Back Playsuit </a></h3>
                                                                                    <!--product description-->
                                                                                    <!--product reviews-->
                                                                                    <div class="ratings">
                                                                                        <div class="rating-box">
                                                                                            <div class="rating" style="width:100%"></div>
                                                                                        </div>
                                                                                        <span class="amount"><a href="#" onclick="182">(1)</a></span>
                                                                                    </div>
                                                                                    <!--product price-->



                                                                                    <div class="price-box">

                                                                                        <p class="old-price">
                                                                                            <span class="price-label">Regular Price:</span>
                                                                                            <span class="price" id="old-price-182-emprice-b0a1e32195ca82a58e889da04d6711df">$70.00</span>
                                                                                        </p>

                                                                                        <p class="special-price">
                                                                                            <span class="price-label">Special Price</span>
                                                                                            <span class="price" content="60" id="product-price-182-emprice-b0a1e32195ca82a58e889da04d6711df">$60.00</span>
                                                                                        </p>


                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div><!-- /.item -->
                                                                    </div><!-- /.products-list -->
                                                                    <div class="products-list ">
                                                                        <div class="item first" style="  ">
                                                                            <a href="#" title="Embellished Playsuit" class="product-image">
                                                                                <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="{{asset('public/frontend/images/product/110x110/clothing_sp18_2.jpg')}}" data-original="{{asset('public/frontend/images/product/110x110/clothing_sp18_2.jpg')}}" alt="Embellished Playsuit" height="110" width="110">
                                                                                <img class="img-responsive em-alt-org em-lazy-loaded" src="{{asset('public/frontend/images/product/110x110/clothing_sp18_1.jpg')}}" data-original="{{asset('public/frontend/images/product/110x110/clothing_sp18_1.jpg')}}" alt="Embellished Playsuit" height="110" width="110">
                                                                            </a>
                                                                            <div class="product-shop">
                                                                                <div class="f-fix">
                                                                                    <!--product name-->
                                                                                    <h3 class="product-name"><a href="#" title="Embellished Playsuit">Embellished Playsuit</a></h3>
                                                                                    <!--product description-->
                                                                                    <!--product reviews-->
                                                                                    <div class="ratings">
                                                                                        <div class="rating-box">
                                                                                            <div class="rating" style="width:%"></div>
                                                                                        </div>
                                                                                        <span class="amount"><a href="#" onclick="183">(0)</a></span>
                                                                                    </div>
                                                                                    <!--product price-->
                                                                                    <div class="price-box">

                                                                                        <p class="old-price">
                                                                                            <span class="price-label">Regular Price:</span>
                                                                                            <span class="price" id="old-price-183-emprice-447f1b9a2238137e1de786f67b42bb85">$150.00</span>
                                                                                        </p>

                                                                                        <p class="special-price">
                                                                                            <span class="price-label">Special Price</span>
                                                                                            <span class="price" content="80" id="product-price-183-emprice-447f1b9a2238137e1de786f67b42bb85">$80.00</span>
                                                                                        </p>


                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div><!-- /.item -->
                                                                        <div class="item" style="  ">
                                                                            <a href="#" title="Geometric Dress" class="product-image">
                                                                                <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="{{asset('public/frontend/images/product/110x110/clothing_sp20_2.jpg')}}" data-original="{{asset('public/frontend/images/product/110x110/clothing_sp20_2.jpg')}}" alt="Geometric Dress" height="110" width="110">
                                                                                <img class="img-responsive em-alt-org em-lazy-loaded" src="{{asset('public/frontend/images/product/110x110/clothing_sp20_1.jpg')}}" data-original="{{asset('public/frontend/images/product/110x110/clothing_sp20_1.jpg')}}" alt="Geometric Dress" height="110" width="110">
                                                                            </a>
                                                                            <div class="product-shop">
                                                                                <div class="f-fix">
                                                                                    <!--product name-->
                                                                                    <h3 class="product-name"><a href="#" title="Geometric Dress">Geometric Dress</a></h3>
                                                                                    <!--product description-->
                                                                                    <!--product reviews-->
                                                                                    <div class="ratings">
                                                                                        <div class="rating-box">
                                                                                            <div class="rating" style="width:%"></div>
                                                                                        </div>
                                                                                        <span class="amount"><a href="#" onclick="185">(0)</a></span>
                                                                                    </div>
                                                                                    <!--product price-->
                                                                                    <div class="price-box">

                                                                                        <p class="old-price">
                                                                                            <span class="price-label">Regular Price:</span>
                                                                                            <span class="price" id="old-price-185-emprice-b9cbb909aac3b0c33ee82836547d5755">$120.00</span>
                                                                                        </p>

                                                                                        <p class="special-price">
                                                                                            <span class="price-label">Special Price</span>
                                                                                            <span class="price" content="100" id="product-price-185-emprice-b9cbb909aac3b0c33ee82836547d5755">$100.00</span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- /.item -->
                                                                        <div class="item last" style="  ">
                                                                            <a href="#" title="Mono Scallop" class="product-image">
                                                                                <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="{{asset('public/frontend/images/product/110x110/clothing_sp16_2.jpg')}}" data-original="{{asset('public/frontend/images/product/110x110/clothing_sp16_2.jpg')}}" alt="Mono Scallop" height="110" width="110">
                                                                                <img class="img-responsive em-alt-org em-lazy-loaded" src="{{asset('public/frontend/images/product/110x110/clothing_sp16_1.jpg')}}" data-original="{{asset('public/frontend/images/product/110x110/clothing_sp16_1.jpg')}}" alt="Mono Scallop" height="110" width="110">
                                                                            </a>
                                                                            <div class="product-shop">
                                                                                <div class="f-fix">
                                                                                    <!--product name-->
                                                                                    <h3 class="product-name"><a href="#" title="Mono Scallop">Mono Scallop</a></h3>
                                                                                    <!--product description-->
                                                                                    <!--product reviews-->
                                                                                    <div class="ratings">
                                                                                        <div class="rating-box">
                                                                                            <div class="rating" style="width:%"></div>
                                                                                        </div>
                                                                                        <span class="amount"><a href="#" onclick="181">(0)</a></span>
                                                                                    </div>
                                                                                    <!--product price-->
                                                                                    <div class="price-box">

                                                                                        <p class="old-price">
                                                                                            <span class="price-label">Regular Price:</span>
                                                                                            <span class="price" id="old-price-181-emprice-f425d011393677da16e76f16bed41113">$175.00</span>
                                                                                        </p>

                                                                                        <p class="special-price">
                                                                                            <span class="price-label">Special Price</span>
                                                                                            <span class="price" content="75" id="product-price-181-emprice-f425d011393677da16e76f16bed41113">$75.00</span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- /.item -->
                                                                    </div><!-- /.products-list -->
                                                                </div>
                                                            </div><!-- /.widget -->

                                                        </div><!-- /.em-grid-15 -->
                                                    </div>
                                                </div><!-- /.em-best-sales -->
                                            </div><!-- /.em-col-main -->

                                            <div class="col-sm-6 col-sm-pull-18 em-col-left em-sidebar">
                                                <div class="em-wrapper-area02">
                                                    <div class="menu-wrapper hidden-xs">
                                                        <div id="menuleftText" class="all_categories">
                                                            <div class="menuleftText-title">
                                                                <div class="menuleftText"><span class="em-text-upercase">DANH MỤC</span>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.menuleftText -->
                                                        <div class="menuleft">
                                                            <div id="menu-default" class="mega-menu em-menu-icon">
                                                                <div class="megamenu-wrapper wrapper-5_4607">
                                                                    <div class="em_nav" id="toogle_menu_5_4607">
                                                                        <ul class="vnav em-menu-icon effect-menu em-menu-long">
                                                                            @foreach ($allCategories as $key => $category)
                                                                            <li class="menu-item-link menu-item-depth-0 fa fa-leaf hidden-sm ">
                                                                                <a class="em-menu-link" href="{{asset('/loaisanpham/'.$category->id.'/'.$category->alias)}}"> <span> {{ $category->ten }} </span> </a>
                                                                            </li><!-- /.menu-item-link -->
                                                                            @endforeach   
                                                                        </ul><!-- /.vnav -->
                                                                    </div>
                                                                </div><!-- /.megamenu-wrapper -->
                                                            </div>
                                                        </div><!-- /.menuleft -->
                                                    </div>
                                                </div><!-- /.em-wrapper-area02 -->

                                                <div class="row">
                                                    <div class="col-sm-24">
                                                        <div class="em-wrapper-ads-15">
                                                        
                                                       <video width="280" height="250" id="youtube1" preload="none" controls autoplay>
                                                    <source type="video/youtube" src="https://www.youtube.com/watch?v=2NR_2_NhclQ" />
                                                        </video>
                                                        </div>
                                                    </div>
                                                </div><!-- /.row -->
                                                <div class="row">
                                                    <div class="col-sm-24">
                                                        <div class="em-wrapper-ads-10 em-line-01">
                                                            <div class="em-block-title">
                                                                <h2><span>TIN TỨC</span></h2>
                                                            </div>
                                                            <div class="em-blog-style01">
                                                                <div class="em-from-our-blog">
                                                                    @foreach($blogs as $key => $blog)
                                                                    <div class="em-blog-item em-effect-13">
                                                                        <div class="em-blog-content bkg-top">
                                                                            <a title="em-sample-title" class="img-banner-small" href="{{asset('/baiviet/'.$blog->id.'/'.$blog->alias)}}"> <img alt="em_blog" class="img-responsive" src="{{asset($blog->image)}}" /> </a>

                                                                            <div class="hov">&nbsp;</div>
                                                                        </div>
                                                                        <div class="em-box bkg-bottom">
                                                                            <h4 class="em-blog-title"><a href="{{asset('/baiviet/'.$blog->id.'/'.$blog->alias)}}">{{$blog->title}}</a></h4>
                                                                            <p class="em-blog-des">{{$blog->description}}&hellip;</p>
                                                                            <p><a class="link-more" href="{{asset('/baiviet/'.$blog->id.'/'.$blog->alias)}}">Đọc thêm</a>
                                                                            </p>
                                                                        </div>
                                                                    </div><!-- /.em-blog-item -->
                                                                    @endforeach
                                                                </div>
                                                            </div><!-- /.em-blog-style01 -->
                                                        </div>
                                                    </div>
                                                </div><!-- /.row -->
                                                <div class="img-banner hidden-xs">
                                           <!--  <div class="effect-hover-text2">
                                                <a class="banner-img" title="em-sample-title" href="#"> <img class="img-responsive retina-img" alt="em-sample-alt" src="{{asset('public/frontend/images/wysiwyg/em_ads_05.jpg')}}" /> </a>
                                                <a class="banner-text" title="em-sample-title" href="#"> <img class="img-responsive" alt="em-sample-alt" src="{{asset('public/frontend/images/wysiwyg/em_ads_text_05.png')}}" /> </a>
                                            </div> -->
                                        </div><!-- /.img-banner -->
                                    </div><!-- /.em-sidebar -->
                                </div>
                            </div><!-- /.em-main-container -->

                            <div class="em-wrapper-area04">
                                <div class="row hidden-xs">
                                    <div class="em-wrapper-banners">
                                        <div class="col-sm-6 first img-banner text-center">
                                            <!-- <div class="effect-hover-text">
                                                <a class="banner-img" title="em-sample-title" href="#"> <img class="img-responsive retina-img" alt="em-sample-alt" src="{{asset('public/frontend/images/wysiwyg/em_ads_11.jpg')}}" /> </a>
                                                <a class="banner-text" title="em-sample-title" href="#"> <img class="img-responsive" alt="em-sample-alt" src="{{asset('public/frontend/images/wysiwyg/em_ads_text_07.png')}}" /> </a>
                                            </div> -->
                                        </div><!-- /.img-banner -->
                                        <div class="col-sm-12  img-banner text-center">
                                            <!-- <div class="effect-hover-text4">
                                                <a class="banner-img" title="em-sample-title" href="#"> <img class="img-responsive retina-img" alt="em-sample-alt" src="{{asset('public/frontend/images/wysiwyg/em_ads_12.jpg')}}" /> </a>
                                                <a class="banner-text" title="em-sample-title" href="#"> <img class="img-responsive" alt="em-sample-alt" src="{{asset('public/frontend/images/wysiwyg/em_ads_text_08.png')}}" /> </a>
                                            </div> -->
                                        </div><!-- /.img-banner -->
                                        <div class="col-sm-6 last img-banner text-center">
                                            <!-- <div class="effect-hover-text3">
                                                <a class="banner-img" title="em-sample-title" href="#"> <img class="img-responsive retina-img" alt="em-sample-alt" src="{{asset('public/frontend/images/wysiwyg/em_ads_13.jpg')}}" /> </a>
                                                <a class="banner-text" title="em-sample-title" href="#"> <img class="img-responsive" alt="em-sample-alt" src="{{asset('public/frontend/images/wysiwyg/em_ads_text_09.png')}}" /> </a>
                                            </div> -->
                                        </div><!-- /.img-banner -->
                                    </div>
                                </div>
                            </div><!-- /.em-wrapper-area04 -->


                            <div class="em-wrapper-area06">
                                <div class="em-wrapper-brands">
                                    <div class=" slider-style02">
                                        <div class="em-slider em-slider-banners em-slider-navigation-icon" data-emslider-navigation="true" data-emslider-items="6" data-emslider-desktop="5" data-emslider-desktop-small="4" data-emslider-tablet="3" data-emslider-mobile="2">

                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_03.jpg" src="{{asset('public/image/slide_bottom/1.png')}}" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_04.jpg" src="{{asset('public/image/slide_bottom/2.png')}}" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_05.jpg" src="{{asset('public/image/slide_bottom/3.png')}}" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_06.jpg" src="{{asset('public/image/slide_bottom/4.png')}}" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_07.jpg" src="{{asset('public/image/slide_bottom/5.png')}}" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_01.jpg" src="{{asset('public/image/slide_bottom/6.png')}}" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_02.jpg" src="{{asset('public/image/slide_bottom/7.png')}}" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_02.jpg" src="{{asset('public/image/slide_bottom/8.png')}}" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_02.jpg" src="{{asset('public/image/slide_bottom/9.png')}}" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_02.jpg" src="{{asset('public/image/slide_bottom/10.png')}}" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_02.jpg" src="{{asset('public/image/slide_bottom/11.png')}}" />
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- /.slider-style02 -->
                                </div>
                            </div><!-- /.em-wrapper-area06 -->

                        </div><!-- /.em-inner-main -->
                    </div><!-- /.container -->
                </div><!-- /.em-wrapper-main -->
                @endsection
                @section('js')
                <script type="text/javascript">
                jQuery(document).ready(function($) {
    $('#youtube1').mediaelementplayer();
});</script>
                @endsection