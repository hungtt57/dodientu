@extends('frontend.layout.master')
@section('css')


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
                        <li class="contact"> <strong>Tìm kiếm</strong>
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
                            <h1> Tìm kiếm với từ khóa:{{$key}}</h1>
                            <h1>
                                @if(count($products)==0 &&count($blogs)==0)
                                Không tìm thấy kết quả:vui lòng thử lại
                                @else

                                @endif

                            </h1>
                        </div>
                        <div class="category-products">

                            <div id="em-grid-mode">
                                <ul class="emcatalog-grid-mode products-grid emcatalog-disable-hover-below-mobile">
                                    @if(count($products))
                                    <h2> Sản phẩm</h2>
                                    @endif
                                    @foreach($products as $key => $product)

                                    <li class="item">
                                        <div class="product-item">
                                            <div class="product-shop-top">
                                                <a href="{{asset('/chitietsanpham/'.$product->id.'/'.$product->alias)}}" title="{{$product->alias}} " class="product-image"> <img class="em-img-lazy img-responsive em-alt-hover" src="{{asset($product->anhdaidien)}}" width="220" height="220"/> 
                                                    <img id="product-collection-image-217" class="em-img-lazy img-responsive em-alt-org" src="{{asset($product->anhdaidien)}}" width="220" height="220" alt="WIASSI Version 12" /><span class="bkg-hover"></span> </a>
                                                    <div class="bottom">
                                                        <div class="em-btn-addto text-center ">
                                                            <button type="button" title="Add to Cart" class="button btn-cart" onclick="217"><span><span>Add to Cart</span></span>
                                                            </button>
                                                            <ul class="add-to-links">
                                                                <li><a href="#217" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                </li>
                                                                <li><a href="#217" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="quickshop-link-container"> <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-shop">
                                                    <div class="f-fix">
                                                        <h2 class="product-name text-center  "><a href="product-detail.html" title="{{$product->ten}}"> {{$product->ten}} </a></h2>
                                                        <div class=" text-center">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:%"></div>
                                                                </div> <span class="amount"><a href="#" onclick="217">(0)</a></span>
                                                            </div>
                                                        </div>
                                                        <div class="text-center ">
                                                            <div class="price-box"> <span class="regular-price" id="product-price-217"> <span class="price"  content="1200">{{$product->gia}}</span> </span>
                                                            </div>
                                                        </div>
                                                        <div class="desc std text-center em-element-display-hover"></div>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-item -->
                                        </li>
                                        @endforeach

                                             {!!  $products->setPath('')->appends(Input::query())->render() !!}
                                             
                                        @if(count($blogs))
                                        <h2> Tin tức</h2>
                                        @endif

                                        @foreach($blogs as $key => $blog)

                                        <li class="item1" style=" padding: 0 10px;
                                        margin-right: 0;
                                        border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        -webkit-border-radius: 5px;

                                        border-color: #e1e1e1;
                                        border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        -webkit-border-radius: 5px;

                                        width: 20%;

                                        margin: 0 0 20px;
                                        border: 1px;

                                        float: left;
                                        text-align: center;
                                        position: relative;
                                        height: 300px">
                                        <div class="product-item">
                                            <div class="product-shop-top">
                                                <a href="{{asset('/blog_detail/'.$blog->id.'/'.$blog->alias)}}" title="{{$blog->title}} " class="product-image"> 

                                                    <img class="em-img-lazy img-responsive em-alt-hover" src="{{asset($blog->image)}}" width="220" height="220"/> 
                                                    <img id="product-collection-image-217" class="em-img-lazy img-responsive em-alt-org" src="{{asset($blog->image)}}" width="220" height="220" alt="WIASSI Version 12" /><span class="bkg-hover"></span> </a>

                                                </div>
                                                <div class="product-shop">
                                                    <div class="f-fix">
                                                        <h2 class="product-name text-center  "><a href="{{asset('/blog_detail/'.$blog->id.'/'.$blog->alias)}}" title="{{$blog->title}}"> {{$blog->title}} </a></h2>


                                                        <div class="desc std text-center em-element-display-hover"></div>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-item -->
                                        </li>
                                        @endforeach
                                        <div>
                                         {!! $blogs->setPath('')->appends(Input::query())->render() !!}
                                        </div>







                                    </ul>
                                </div><!-- /.em-grid-mode -->


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