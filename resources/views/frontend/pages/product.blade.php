@extends('frontend.layout.master')
@section('css')
<!-- Cloud Zoom CSS -->
    <link rel="stylesheet" type="text/css')}}" href="{{asset('public/frontend/css/em_cloudzoom.css')}}" media="all" />
<!-- Blog Style CSS -->
    <link rel="stylesheet" type="text/css')}}" href="{{asset('public/frontend/css/blog-styles.css')}}" media="all" />
    <link rel="stylesheet" type="text/css')}}" href="{{asset('public/frontend/css/em_quickshop.css')}}" media="all" />
     <!-- Lightbox CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/lightbox.css')}}" media="all" />
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
                                        <li class="category36"> <a href="{{asset('/loaisanpham/'.$category->id.'/'.$category->alias)}}"><span>{{$category->ten}}</span></a> <span class="separator">/ </span>
                                        </li>
                                        <li class="product"> <strong>{{$product_detail->ten}}</strong>
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
                                        <div id="messages_product_view"></div>
                                        <div class="product-view">
                                            <div class="product-essential">
                                                <form method="post" id="product_addtocart_form" action="{{asset('/muahang/'.$product_detail->id.'/'.$product_detail->alias)}}">
                                                {!! csrf_field() !!}
                                                    <input name="form_key" type="hidden" value="N4DL2crX27DuHSDk" />
                                                    <div class="product-view-detail">
                                                        <div class="em-product-view row">
                                                            <div class="em-product-view-primary em-product-img-box col-sm-16 first">
                                                                <div id="em-product-shop-pos-top"></div>
                                                                <div class="product-img-box">
                                                                    <div class="media-left">
                                                                        <p class="product-image">
                                                                            <a > <img class="em-product-main-img" src="{{asset($product_detail->anhdaidien)}}" alt='' title="WIASSI Version 1" /> </a> 
                                                                        </p>
                                                                    </div><!-- /.media-left -->
                                                                    <div class="more-views">
                                                                        <ul class="em-moreviews-slider ">
                                                                           
                                                                        </ul>
                                                                    </div><!-- /.more-views -->
                                                                </div>
                                                            </div><!-- /.em-product-view-primary -->
                                                            <div class="em-product-view-secondary em-product-shop col-sm-8">
                                                                <div class="product-shop  fix_menu">
                                                                    <div id="em-product-info-basic">
                                                                        <div class="product-name">
                                                                            <h1>{{$product_detail->ten}}</h1>
                                                                        </div>
                                                                        <div class="em-review-email">
                                                                            <!-- <div class="ratings"> -->
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                <!-- <div class="rating-box"> -->
                                                                                    <!-- <div class="rating" style="width:67%"></div> <span>67</span> -->
                                                                              <!--   </div> -->
                                                                                <!-- <p class="rating-links"> <a href="#" class="r-lnk link_review_list">1 Review(s)</a> <span class="separator">|</span> <a href="#" class="r-lnk link_review_form">Add Your Review</a>
                                                                                </p> -->
                                                                            <!-- </div> --><!-- /.ratings -->
                                                                            
                                                                        </div>
                                                                        <div class="em-sku-availability">
                                                                          <!--   <p class="sku">SKU: Sho_1</p> -->
                                                                            <p class="availability in-stock"> Availability: <span class="value">In stock</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="short-description">
                                                                            <h2>Quick Overview</h2>
                                                                            <div class="std">{{$product_detail->donggoi}}</div>
                                                                        </div>
                                                                        <div class="em-addthis-plug"> <span>Share</span>
                                                                            <a href="#" target="_blank"><img alt="Facebook" src="{{asset('public/frontend/images/social/facebook.png')}}" />
                                                                            </a>
                                                                            <a href="#" target="_blank"><img alt="Twitter" src="{{asset('public/frontend/images/social/twitter.png')}}" />
                                                                            </a>
                                                                            <a href="#" target="_blank"><img alt="Google+" src="{{asset('public/frontend/images/social/google_plusone_share.png')}}" />
                                                                            </a>
                                                                            <a href="#" target="_blank"><img alt="Pinterest" src="{{asset('public/frontend/images/social/pinterest.png')}}" />
                                                                            </a>
                                                                            <a href="#" target="_blank"><img alt="LinkedIn" src="{{asset('public/frontend/images/social/linkedin.png')}}" />
                                                                            </a>
                                                                            <a href="#" target="_blank"><img alt="Email" src="{{asset('public/frontend/images/social/email.png')}}" />
                                                                            </a>
                                                                        </div><!-- /.em-addthis-plug -->
                                                                        <div>
                                                                            
                                                                            <p class="availability in-stock">Availability: <span>In stock</span>
                                                                            </p>
                                                                            
                                                                            <div class="price-box"> <span class="regular-price" id="product-price-206"> <span class="price"  content="750">{{$product_detail->gia}}</span> </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="add-to-box">
                                                                            <div class="add-to-cart">
                                                                                <label for="qty">Số lượng</label>
                                                                                <div class="qty_cart">
                                                                                    <div class="qty-ctl">
                                                                                        <button title="decrease" onclick="changeQty(0); return false;" class="decrease">decrease</button>
                                                                                    </div>
                                                                                    <input type="text" name="qty" id="qty" maxlength="15" value="1" title="Qty" class="input-text qty" />
                                                                                    <div class="qty-ctl">
                                                                                        <button title="increase" onclick="changeQty(1); return false;" class="increase">increase</button>
                                                                                    </div>
                                                                                </div>
                                                                                <ul class="add-to-links">
                                                                                    <!-- <li><a title="Add to Wishlist" href="#" class="link-wishlist">Add to Wishlist</a>
                                                                                    </li>
                                                                                    <li><span class="separator">|</span> <a href="#" title="Add to Compare" class="link-compare">Add to Compare</a>
                                                                                    </li> -->
                                                                                </ul>
                                                                                <div class="button_addto">
                                                                                    <button  title="Add to Cart" type ="Submit" id="em-buy-now" class="button btn-em-buy-now"><span><span>Add to Cart</span></span>
                                                                                    </button>
                                                                                    
                                                                                </div>
                                                                            </div><!-- /.add-to-cart -->
                                                                        </div><!-- /.add-to-box -->
                                                                    </div><!-- /.em-product-info-basic -->
                                                                </div>
                                                            </div><!-- /.em-product-view-secondary -->
                                                        </div>
                                                        <div class="clearer"></div>
                                                    </div><!-- /.product-view-detail -->
                                                </form>
                                            </div><!-- /.product-essential -->
                                            <div class="row">
                                                <div class="em-product-view-primary col-sm-16 first">
                                                    <div class="em-product-info ">
                                                        <div class="em-product-details ">
                                                            <div class="em-details-tabs product-collateral">
                                                                <div class="em-details-tabs-content">
                                                                    <div class="box-collateral em-line-01 box-description">
                                                                        <div class="em-block-title">
                                                                            <h2>Công dụng</h2>
                                                                        </div>
                                                                        <div class="box-collateral-content">
                                                                            <div class="std"><?php echo $product_detail->congdung; ?></div>
                                                                        </div>
                                                                    </div><!-- /.box-collateral -->
                                                                    <div class="box-collateral box-tags em-line-01">
                                                                        <div class="em-block-title">
                                                                            <h2>Cách dùng</h2>
                                                                        </div>
                                                                        <div class="box-collateral-content">
                                                                            <div class="std"><?php echo $product_detail->cachdung; ?> </div>
                                                                        </div>
                                                                    </div><!-- /.box-collateral -->
                                                                   
                                                                    
                                                                </div><!-- /.em-details-tabs-content -->
                                                            </div><!-- /.em-details-tabs -->
                                                            <div class="box-collateral box-reviews em-line-01" id="customer-reviews">
                                                                <div id="customer_review_list" class="reviews">
                                                                    <div class="em-block-title">
                                                                        <h2>Customer Reviews</h2>
                                                                    </div>
                                                                    <div class="em-box-review">
                                                                        <table>
                                                                            <colgroup>
                                                                                <col style="width:1%;" />
                                                                                <col style="width:1%;" />
                                                                                <col />
                                                                            </colgroup>
                                                                            <tr>
                                                                                <td class="em-review-nickname"> sdfd</td>
                                                                                <td>
                                                                                    <table class="ratings-table">
                                                                                        <col style="width:1%;" />
                                                                                        <col />
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <th>Quality</th>
                                                                                                <td>
                                                                                                    <div class="rating-box">
                                                                                                        <div class="rating" style="width:60%;"></div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>Price</th>
                                                                                                <td>
                                                                                                    <div class="rating-box">
                                                                                                        <div class="rating" style="width:80%;"></div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>Value</th>
                                                                                                <td>
                                                                                                    <div class="rating-box">
                                                                                                        <div class="rating" style="width:60%;"></div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                                <td>
                                                                                    <p><a href="http://demo.emthemes.com/everything/index.php/review/product/view/id/110/">sdfds</a>
                                                                                    </p>
                                                                                    <p>test</p>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div><!-- /.em-box-review -->
                                                                </div><!-- /#ustomer_review_list -->
                                                                
                                                            </div><!-- /.box-collateral -->
                                                            
                                                        </div><!-- /.em-product-details -->
                                                    </div><!-- /.em-product-info -->
                                                    <div id="em-product-shop-pos-bottom" style="display:inline-block;"></div>
                                                </div>
                                            </div>
                                        </div><!-- /.product-view -->
                                    </div>
                                </div>
                            </div><!-- /.em-main-container -->
                        </div>
                    </div>
                </div><!-- /.em-wrapper-main -->
@endsection
@section('js')
        <script type="text/javascript" src="{{asset('public/frontend/js/cloud-zoom.js')}}"></script>
          <script type="text/javascript">
            layout = '1column';
        </script>
        <!-- Product View Js -->
        <script type="text/javascript" src="{{asset('public/frontend/js/em_product_view.js')}}"></script>
        <!-- Lightbox Js -->
        <script type="text/javascript" src="{{asset('public/frontend/js/lightbox.min.js')}}"></script>
        <script type="text/javascript">
            jQuery('.cloud-zoom-gallery').click(function() {
                jQuery('#zoom-btn').attr('href', this.href);
            });
            function doSliderMoreview() {
                var owl = $("ul.em-moreviews-slider");
                if (owl.length) {
                    owl.owlCarousel({
                        // Navigation
                        navigation: true,
                        navigationText: ["Previous", "Next"],
                        pagination: false,
                        paginationNumbers: false,
                        // Responsive
                        responsive: true,
                        items: 7,
                        /*items above 1200px browser width*/
                        itemsDesktop: [1200, 4],
                        /*//items between 1199px and 981px*/
                        itemsDesktopSmall: [992, 7],
                        itemsTablet: [768, 3],
                        itemsMobile: [480, 2],
                        // CSS Styles
                        baseClass: "owl-carousel",
                        theme: "owl-theme",
                        transitionStyle: false,
                        addClassActive: true,
                    });
                }
            }

            function changeQty(increase) {
                var qty = parseInt($('#qty').val());
                if (!isNaN(qty)) {
                    console.log(qty)
                    qty = increase ? qty + 1 : (qty > 1 ? qty - 1 : 1);
                    $('#qty').val(qty);
                }
            }

            /* Related Product */
            var relatedProductsCheckFlag = false;

            function selectAllRelated(txt) {
                if (relatedProductsCheckFlag == false) {
                    $('.related-checkbox').each(function(elem) {
                        elem.checked = true;
                    });
                    relatedProductsCheckFlag = true;
                    txt.innerHTML = "unselect all";
                } else {
                    $('.related-checkbox').each(function(elem) {
                        elem.checked = false;
                    });
                    relatedProductsCheckFlag = false;
                    txt.innerHTML = "select all";
                }
                addRelatedToProduct();
            };
            function addRelatedToProduct() {
                var checkboxes = $('.related-checkbox');
                var values = [];
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].checked) values.push(checkboxes[i].value);
                }
                if ($('related-products-field')) {
                    $('related-products-field').value = values.join(',');
                }
            };

            (function($) {
                $(window).load(function() {
                    if (!isPhone) {
                        $('.cloud-zoom, .cloud-zoom-gallery').CloudZoom();
                    }
                    doSliderMoreview();

                    /* Related Slider */
                    var owl = $('#em-related').find('.em-related-slider');
                    if (owl.length) {
                        owl.owlCarousel({
                            // Navigation
                            navigation: true,
                            navigationText: ["Previous", "Next"],
                            pagination: false,
                            paginationNumbers: false,
                            // Responsive
                            responsive: true,
                            items: 4,
                            /*items above 1200px browser width*/
                            itemsDesktop: [1200, 4],
                            /*//items between 1199px and 981px*/
                            itemsDesktopSmall: [992, 3],
                            itemsTablet: [768, 3],
                            itemsMobile: [480, 2],
                            // CSS Styles
                            baseClass: "owl-carousel",
                            theme: "owl-theme",
                            transitionStyle: false,
                            addClassActive: true,
                            afterMove: function() {
                                var $_img = owl.find('img.em-img-lazy');
                                if ($_img.length) {
                                    var timeout = setTimeout(function() {
                                        $_img.trigger("appear");
                                    }, 200);
                                }
                            },
                        });
                    }

                    /* Related Checkbox */
                    $( ".related-checkbox" ).on( "click", function() {
                        addRelatedToProduct()
                    });
                });
            })(jQuery);
        </script>
@endsection