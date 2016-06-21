<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
               <a class="first-item" href="">Laptop Phong Linh</a>
               <a href="#"><i class="fa fa-phone"></i>  (+84) 0961996998</a>
           </div>
           <div class="top-bar-social">
            <a href="https://www.facebook.com/laptopphonglinh/"><i class="fa fa-facebook"></i></a>
        </div>
    </div>
</div>
<!--/.top-header -->
<!-- MAIN HEADER -->
<div class="container main-header">
    <div class="row">
        <div class="col-xs-12 col-sm-3 logo">
        <?php $logo = get_logo();?>
            <a href="{{asset('/')}}"><img alt="Kute Shop" src="<?php echo $logo->link; ?>" /></a>
        </div>
        <div class="col-xs-7 col-sm-7 header-search-box">
            <form class="form-inline" method="get" action="{{asset('tim-kiem')}}">

              <div class="form-group input-serach">
                <input type="text"  name= "search" placeholder="Từ khóa tìm kiếm..." style="line-height: 40px;">
            </div>
            <button type="submit" class="pull-right btn-search"></button>
        </form>
    </div>

</div>
</div>
<!-- END MANIN HEADER -->
<div id="nav-top-menu" class="nav-top-menu">
    <div class="container">
        <div class="row">
            <div class="col-sm-3" id="box-vertical-megamenus">
                <div class="box-vertical-megamenus">
                    <h4 class="title">
                        <span class="title-menu">Danh Mục</span>
                        <span class="btn-open-mobile pull-right"><i class="fa fa-bars"></i></span>
                    </h4>
                    <div class="vertical-menu-content is-home">

                        <ul class="vertical-menu-list">
                        <?php $allCategories = category_childs();
                       
                        ?>
                            @foreach($allCategories as $data => $category)
                             <li><a href="{{asset('/loai-san-pham/'.$category->alias)}}"><img class="icon-menu" alt="Funky roots" src="{{asset('public/assets/data/3.png')}}">{{$category->name}}</a></li>
                        @endforeach
                       </ul>
                       <div class="all-category"><span class="open-cate">Tất cả danh mục</span></div>
                   </div>
               </div>
           </div>
           <div id="main-menu" class="col-sm-9 main-menu">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#">MENU</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{asset('/')}}">Trang chủ</a></li>
                            <?php $Categories = category_parent();?>
                            @foreach($Categories as $data => $parent_category)
                            <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$parent_category->name}}</a>
                                        <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 830px;">
                                         @if ($category_childs = DB::table('categories')->where('parent_id','=',$parent_category->id)->get())

                                            @for ($i = 0; $i < count($category_childs); $i++)
                                            @if($i%3==0)
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                 @for ($j = $i; $j < $i+3; $j++)
                                                  @if($j<count($category_childs))   
                                                    <li class="link_container"><a href="{{asset('/loai-san-pham/'.$category_childs[$j]->alias)}}">{{$category_childs[$j]->name}}</a></li> 
                                                @endif
                                                @endfor   
                                                </ul>
                                            </li>
                                            @endif
                                            @endfor
                                        @endif 
                                        </ul>
                            </li>
                            @endforeach

                            <li><a href="{{asset('/lien-he')}}">Liên hệ</a></li>
                           <li><a href="{{asset('/khuyen-mai')}}">Khuyến mãi</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </div>
    </div>
    <!-- userinfo on top-->
    <div id="form-search-opntop">
    </div>
    <!-- userinfo on top-->
    <div id="user-info-opntop">
    </div>
    <!-- CART ICON ON MMENU -->
    <div id="shopping-cart-box-ontop">
        <i class="fa fa-shopping-cart"></i>
        <div class="shopping-cart-box-ontop-content"></div>
    </div>
</div>
</div>
</div>