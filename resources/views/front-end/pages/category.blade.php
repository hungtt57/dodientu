@extends('front-end.layouts.master')
@section('title')
{{$name_cate->name}} | Laptop Phong Linh
@endsection
@section('content')
 <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="{{asset('/')}}" title="Return to Home">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">{{$name_cate->name}}</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block filter -->
                <div class="block left-module">
                    <p class="title_block">Lọc sản phẩm</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-filter-price">
                            
                            <!-- filter price -->
                            <div class="layered_subtitle">Giá</div>
                            <div class="layered-content slider-range">
                                
                            
                                <ul class="check-box-list">
                                    <li>
                                        <input type="checkbox" id="p1" name="price" value="1" />
                                        <label for="p1">
                                        <span class="button"></span>
                                       Dưới 500.000 đ
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="p2" name="price" value="2"/>
                                        <label for="p2">
                                        <span class="button"></span>
                                        500.000 đ - 1.000.000 đ
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="p3" name="price" value="3"/>
                                        <label for="p3">
                                        <span class="button"></span>
                                        1.000.000 đ - 2.000.000 đ
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="p4" name="price" value="4"/>
                                        <label for="p4">
                                        <span class="button"></span>
                                        2.000.000 đ - 10.000.000 đ
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="p5" name="price" value="5"/>
                                        <label for="p5">
                                        <span class="button"></span>
                                        10.000.000 đ Trở lên
                                        </label>   
                                    </li>
                                </ul>
                            </div>
                            <!-- ./filter price -->
                            
                            
                            
                            
                    
                        </div>
                        <!-- ./layered -->

                    </div>
                </div>
                <!-- ./block filter  -->
                
                
                
                <!-- Testimonials -->
                <div class="block left-module">
                    <p class="title_block">Ý KIẾN KHÁCH HÀNG</p>
                    <div class="block_content">
                        <ul class="testimonials owl-carousel" data-loop="true" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplay="true" data-autoplayHoverPause = "true" data-items="1">
                            <li>
                                <div class="client-mane">Trịnh Hữu Huy</div>
                                <div class="client-avarta">
                                    <img src="assets/data/testimonial.jpg" alt="client-avarta">
                                </div>
                                <div class="testimonial">
                                    "Sản phẩm laptop Hp của công ty bạn rất tốt, tôi thấy rất hài lòng"
                                </div>
                            </li>
                           <li>
                                <div class="client-mane">Trịnh Hữu Huy</div>
                                <div class="client-avarta">
                                    <img src="assets/data/testimonial.jpg" alt="client-avarta">
                                </div>
                                <div class="testimonial">
                                    "Sản phẩm laptop Hp của công ty bạn rất tốt, tôi thấy rất hài lòng"
                                </div>
                            </li>
                            <li>
                                <div class="client-mane">Trịnh Hữu Huy</div>
                                <div class="client-avarta">
                                    <img src="assets/data/testimonial.jpg" alt="client-avarta">
                                </div>
                                <div class="testimonial">
                                    "Sản phẩm laptop Hp của công ty bạn rất tốt, tôi thấy rất hài lòng"
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ./Testimonials -->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- category-slider -->
                <div class="category-slider">
                    <ul class="owl-carousel owl-style2" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1">
                        <li>
                            <img src="{{asset('public/assets/data/category-slide.jpg')}}" alt="category-slider">
                        </li>
                        <li>
                            <img src="{{asset('public/assets/data/slide-cart2.jpg')}}" alt="category-slider">
                        </li>
                    </ul>
                </div>
                <!-- ./category-slider -->
                
                <!-- view-product-list-->
                <div id="view-product-list" class="view-product-list">
                    <h2 class="page-heading">
                        <span class="page-heading-title">{{$name_cate->name}}</span>
                    </h2>
                    <ul class="display-product-option">
                        <li class="view-as-grid selected">
                            <span>grid</span>
                        </li>
                        <li class="view-as-list">
                            <span>list</span>
                        </li>
                    </ul>
                    <!-- PRODUCT LIST -->
                    <ul class="row product-list grid">
                        @foreach($product_cates as $data => $val)
                        <li class="col-sx-12 col-sm-4">
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
                                    <h5 class="product-name"><a href="{{asset('/chi-tiet-san-pham/'.$val->alias)}}">{{$val->name}}</a></h5>
                                   
                                    <div class="content_price">
                                        <span class="price product-price">{{number_format($val->new_price,0,",",".")}} đ</span>
                                        <span class="price old-price">{{number_format($val->old_price,0,",",".")}} đ</span>
                                    </div>
                                    <div class="info-orther">
                                        <p></p>
                                        <p class="availability">Tình trạng: <span>Còn hàng</span></p>
                                        <div class="product-desc">
                                           {{$val->short_description}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        
                    </ul>
                    <!-- ./PRODUCT LIST -->
                </div>
                <!-- ./view-product-list-->
                <div class="sortPagiBar">
                    <div class="bottom-pagination">
                        <nav>
                          <ul class="pagination">
                            {!!  $product_cates->setPath('')->appends(Input::query())->render() !!}
                          </ul>
                        </nav>
                    </div>
                   
                   
                </div>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
@endsection
@section('script')
@endsection