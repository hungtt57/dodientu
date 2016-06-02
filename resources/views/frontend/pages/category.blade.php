@extends('frontend.layout.master')
@section('css')

<!-- Blog Style CSS -->
<link rel="stylesheet" type="text/css')}}" href="{{asset('public/frontend/css/blog-styles.css')}}" media="all" />
@endsection
@section('content')

<div class="wrapper-breadcrums">
    <div class="container">
        <div class="row">
            <div class="col-sm-24">
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"> <a href="{{asset('/')}}" title="Home"><span>Trang chủ</span></a> <span class="separator">/ </span>
                        </li>
                        <li class="contact"> <strong>{{$name_cate->ten}}</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.wrapper-breadcrums -->

<div class="em-wrapper-main">
                    <div class="container container-main">
                        <div class="em-inner-main">
                            <div class="em-wrapper-area02"></div>
                            <div class="em-wrapper-area03"></div>
                            <div class="em-wrapper-area04"></div>
                            <div class="em-main-container em-col1-layout">
                                <div class="row">
                                    <div class="em-col-main col-sm-24">
                                        <div class="page-title category-title">
                                            <h1>{{$name_cate->ten}}</h1>
                                        </div>
                                        <div class="category-products">
                                            
                                            <div id="em-grid-mode">
                                                <ul class="emcatalog-grid-mode products-grid emcatalog-disable-hover-below-mobile">
                                          
                                                    @foreach($product_cates as $key => $product_cate)
                                                    <li class="item">
                                                        <div class="product-item">
                                                            <div class="product-shop-top">
                                                                <a href="{{asset('/chitietsanpham/'.$product_cate->id.'/'.$product_cate->alias)}}" title="{{$product_cate->alias}} " class="product-image"> <img class="em-img-lazy img-responsive em-alt-hover" src="{{asset($product_cate->anhdaidien)}}" width="220" height="220"/> 
                                                                <img id="product-collection-image-217" class="em-img-lazy img-responsive em-alt-org" src="{{asset($product_cate->anhdaidien)}}" width="220" height="220" alt="WIASSI Version 12" /><span class="bkg-hover"></span> </a>
                                                                <div class="bottom">
                                                                    <div class="em-btn-addto text-center ">
                                                                       
                                                                    </div>
                                                                    <div class="quickshop-link-container"> <a href="#" class="quickshop-link" title="Chi tiết sản phẩm">Chi tiết sản phẩm</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-shop">
                                                                <div class="f-fix">
                                                                    <h2 class="product-name text-center  "><a href="product-detail.html" title="{{$product_cate->ten}}"> {{$product_cate->ten}} </a></h2>
                                                                    <div class=" text-center">
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating" style="width:%"></div>
                                                                            </div> <span class="amount"><a href="#" onclick="217">(0)</a></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-center ">
                                                                        <div class="price-box"> <span class="regular-price" id="product-price-217"> <span class="price"  content="1200">{{$product_cate->gia}}</span> </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="desc std text-center em-element-display-hover"></div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-item -->
                                                    </li>
                                                    @endforeach
                                                
                                                </ul>
                                            </div><!-- /.em-grid-mode -->
                                            
                                            <div class="toolbar-bottom em-box-03">
                                                <div class="toolbar">
                                                    <div class="pager">
                                                        
                                                        <div style="float:right;">
                                                    
                                                        {!!$product_cates->setPath('')->appends(Input::query())->render() !!}
                                                        
                                                    
                                                </div>
                                                    </div><!-- /.pager -->
                                                    
                                                </div>
                                            </div><!-- /.toolbar-bottom -->
                                        </div><!-- /.category-products -->
                                    </div>
                                </div>
                            </div><!-- /.em-main-container -->
                        </div>
                    </div>
                </div><!-- /.em-wrapper-main -->
@endsection
@section('js')
<!-- Category Js -->
<script type="text/javascript" src="{{asset('public/frontend/js/em_category.js')}}"></script>
<!-- Slider Js -->
<script type="text/javascript" src="{{asset('public/frontend/js/jquery-ui.min.js')}}"></script>
<!-- Custom Js -->.
   <script type="text/javascript">
            (function($) {
                if (typeof EM == 'undefined') EM = {};
                if (typeof EM.SETTING == 'undefined') EM.SETTING = {};

                function setColumnCountGridMode() {
                    var wWin = $(window).width();
                    if (EM.SETTING.DISABLE_RESPONSIVE == 1) {
                        var sDesktop = 'emcatalog-desktop-';
                        var sDesktopSmall = 'emcatalog-desktop-small-';
                        var sTablet = 'emcatalog-tablet-';
                        var sMobile = 'emcatalog-mobile-';
                        var sGrid = $('#em-grid-mode');
                        if (wWin > 1200) {
                            sGrid.removeClass().addClass(sDesktop + '5');
                        } else {
                            if (wWin <= 1200 && wWin > 768) {
                                sGrid.removeClass().addClass(sDesktopSmall + '4');
                            } else {
                                if (wWin <= 768 && wWin > 480) {
                                    sGrid.removeClass().addClass(sTablet + '3');
                                } else {
                                    sGrid.removeClass().addClass(sMobile + '2');
                                }
                            }
                        }
                    } else {
                        var sDesktop = 'emcatalog-desktop-';
                        var sGrid = $('#em-grid-mode');
                        sGrid.removeClass().addClass(sDesktop + '5');
                    }
                };
                //Ready Function
                $(document).ready(function() {
                    setColumnCountGridMode();
                });
                $(window).resize($.throttle(300, function() {
                    setColumnCountGridMode();
                }));
            })(jQuery);
        </script>
@endsection