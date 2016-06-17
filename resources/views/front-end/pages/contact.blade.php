@extends('front-end.layouts.master')
@section('content')
<!-- breadcrumb -->
<div class="breadcrumb clearfix">
    <a class="home" href="{{asset('/')}}" title="Return to Home">Trang chủ</a>
    <span class="navigation-pipe">&nbsp;</span>
    <span class="navigation_page">Liên hệ</span>
</div>

<div class="row">

    <div class="column col-xs-12 col-sm-3" id="left_column">

    </div>
    <div class="center_column col-xs-12 col-sm-9" id="center_column">
       <div class="row">

       <iframe src="https://www.google.com/maps/d/embed?mid=1NXnpRddlu4dOEb2IBR1V_TKArhs" width="800" height="480"></iframe>
        <div id="view-product-list" class="view-product-list">
       <h4 class="title">Liên hệ với chúng tôi</h4>
       <ul class="row product-list grid">
            <li class="col-sx-12 col-sm-8">
                   <strong>Địa chỉ:</strong> Số 99 Ngõ Núi Trúc, Giang Văn Minh, Ba Đình, Hà Nội
            </li>
            <li class="col-sx-12 col-sm-8">
                   <strong>Điện thoại:</strong> 0911782459
            </li>
            <li class="col-sx-12 col-sm-8">
                   <strong>Fax: </strong> 0961996998
            </li>
            <li class="col-sx-12 col-sm-8">
                   <strong>Email: </strong> laptopphonglinh@gmail.com
            </li>

                       
                    </ul>
       </div>
       </div>
   </div><!-- /.em-main-container -->
</div>

</div>
<!-- ./row-->
@endsection