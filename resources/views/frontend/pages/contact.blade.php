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

                        <div id="div_id" style="height:500px; width:100%"></div>



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

                    </div><!-- /.em-sidebar -->
                </div>
            </div><!-- /.em-main-container -->
        </div><!-- /.em-inner-main -->
    </div><!-- /.container -->
</div><!-- /.em-wrapper-main -->
@endsection
@section('js')
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&language=vi"></script>
    <script>
        function initialize() {
            var myLatlng = new google.maps.LatLng(21.037743,105.7792293);
            var mapOptions = {
                zoom: 16,
                center: myLatlng
            };
 
            var map = new google.maps.Map(document.getElementById('div_id'), mapOptions);
 
            var contentString = "<table><tr><th>MyEverything Shop</th></tr><tr><td>Địa chỉ: 144 Xuân Thủy - Cầu Giấy - Hà Nội</td></tr></table>";
 
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
 
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'MyEverything'
            });
            infowindow.open(map, marker);
        }
 
        google.maps.event.addDomListener(window, 'load', initialize);
 
 
    </script>
@endsection