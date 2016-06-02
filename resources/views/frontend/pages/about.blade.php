@extends('frontend.layout.master')
@section('css')
<link rel='stylesheet' type='text/css' media='all' href="{{asset('public/frontend/css/mediaelementplayer.css')}}" />
@endsection
@section('content')

<div class="em-wrapper-main">
    <div class="container container-main">
        <div class="em-inner-main">

            <div class="em-main-container em-col2-left-layout">
                <div class="row">
                    <div class="col-sm-18 col-sm-push-6 em-col-main">

                        <ul>
                            <li>
                                <h2><b>Cung cấp giá tốt nhất</b></h2>
                                <p style="font-size:18px;">Rất nhiều website khẳng định cung cấp với giá thấp nhất, nhưng chỉ có muathuoc.vn thực sự cung cấp giá thấp trên hàng ngàn các loại vitamins, dinh dưỡng bổ sung và toàn các sản phẩm. Hầu hết các sản phẩm của chúng tôi công bố được bán với giá bán buôn và thường thấp hơn từ 30% đến 70% ở cấp độ bán lẻ.</p>

                            </li>
                            <li>
                                <h2><b>Các sản phẩm của chúng tôi</b></h2>
                                <p style="font-size:18px;">Website cung cấp sản phẩm đa dạng từ những thương hiệu hàng đầu trên thế giới và Việt nam. Bao gồm cả số dòng các chất bổ sung dưỡng mang thương hiệu muathuoc.</p>

                            </li>
                            <li>
                                <h2><b>Chính sách vận chuyển</b></h2>
                                <p style="font-size:18px;">Chúng tôi sẽ giao tất cả các đơn hàng qua phương thức chuyển phát nhanh EMS. Trong trường hợp bạn muốn giao hàng qua đêm hoặc muốn thay đổi phương thức giao hàng chịu thêm phí xin vui lòng gọi 0123456789 Đơn hàng sẽ nhận vào 4 giờ chiều và hàng sẽ được giao cùng ngày từ thứ 2 đến thứ 6 nếu hàng sẵn sàng trong trong. 
                                Chi phí giao hàng quý khách xem tại mục cước vận chuyển và miễn phí giao hàng cho các đơn hàng có giá trị từ 2.000.000 đồng trở lên. Bạn có thể đặt đơn hàng online hoặc gọi điện đến 0984203569.</p>

                                </li>
                            <li>
                                <h2><b>An toàn bảo mật riêng tư</b></h2>
                                <p style="font-size:18px;">An ninh, an toàn và sự riêng tư được bảo vệ hoàn toàn khi bạn mua sắm với sử dụng dịch vụ của chúng tôi. Muathuoc đã ký thỏa thuận với Smartlink và Vietcombank giao dịch đảm bảo. </p>

                                </li>

                            <li>
                                <h2><b>Khách hàng đã nhận xét:</b></h2>
                                <p style="font-size:18px;">“Tôi đã là một khách hàng với bạn trong một thời gian khá lâu bây giờ giờ. Tôi chỉ muốn cho bạn biết điều gì gì là một niềm vui đó là đặt hàng từ trang web của bạn. mở rộng đã kiểm tra trực tuyến cho các kho khác cung cấp một số sản phẩm rẻ hơn so với của bạn, và tôi đã không tìm thấy một nào được nêu ra. Bạn có một lựa chọn tuyệt vời và thực sự là mức giá thấp nhất tôi đã tìm thấy cho đến nay. Giữ trên sản phẩm tuyệt vời. Nó là tốt đẹp để biết bạn có xung quanh ".
                            </p>

                                </li>
                            </ul>




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


                            

                        </div><!-- /.em-inner-main -->
                    </div><!-- /.container -->
                </div><!-- /.em-wrapper-main -->
                @endsection
              