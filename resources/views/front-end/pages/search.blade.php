@extends('front-end.layouts.master')
@section('content')
 <!-- breadcrumb -->
       <div class="breadcrumb clearfix">
            <a class="home" href="{{asset('/')}}" title="Return to Home">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Tìm kiếm</span>
        </div>
        
        <div class="row">
           
            <div class="column col-xs-12 col-sm-3" id="left_column">
               
            </div>
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
             <div class="row">
                    <div id="view-product-list" class="view-product-list">
                        <div class="page-title category-title">
                            <h1> Tìm kiếm với từ khóa:{{$key}}</h1>
                            <h1>
                                @if(count($products)==0 &&count($blogs)==0)
                                Không tìm thấy kết quả:vui lòng thử lại
                                @else

                                @endif

                            </h1>
                        </div>
                    <ul class="row product-list grid">
                    
                       @foreach($products as $key => $product)
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="{{asset('/chi-tiet-san-pham/'.$product->alias)}}">
                                        <img class="img-responsive" alt="product" src="{{$product->image}}" />
                                    </a>
                                  
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="{{asset('/chi-tiet-san-pham/'.$product->alias)}}">Chi tiết sản phẩm</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="{{asset('/chi-tiet-san-pham/'.$product->alias)}}">{{$product->name}}</a></h5>
                                   
                                    <div class="content_price">
                                        <span class="price product-price">{{number_format($product->new_price,0,",",".")}} đ</span>
                                        <span class="price old-price">{{number_format($product->old_price,0,",",".")}} đ</span>
                                    </div>
                                    <div class="info-orther">
                                        <p></p>
                                        <p class="availability">Tình trạng: <span>Còn hàng</span></p>
                                        <div class="product-desc">
                                           {{$product->short_description}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        {!!  $products->setPath('')->appends(Input::query())->render() !!}
                    </ul>
                    </div>
                </div><!-- /.em-main-container -->
            </div>
           
        </div>
        <!-- ./row-->
@endsection