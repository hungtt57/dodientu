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
        
        
        <div id="user-info-top" class="user-info pull-right">
            <div class="dropdown">
                <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span></a>
                <ul class="dropdown-menu mega_dropdown" role="menu">
                    <li><a href="login.html">Đăng xuất</a></li>
                    <li><a href="#">Hồ sơ cá nhân</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/.top-header -->
<!-- MAIN HEADER -->
<div class="container main-header">
    <div class="row">
        <div class="col-xs-12 col-sm-3 logo">
            <a href="#"><img alt="Kute Shop" src="assets/images/logo.png" /></a>
        </div>
        <div class="col-xs-7 col-sm-7 header-search-box">
            <form class="form-inline">
                
              <div class="form-group input-serach">
                <input type="text"  placeholder="Từ khóa tìm kiếm..." style="line-height: 40px;">
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
                           <?php $allCategories = category_childs(); ?>
                           @foreach($allCategories as $data => $category)
                           <li><a href="{{asset('/loai-san-pham/'.$category->alias)}}"><img class="icon-menu" alt="Funky roots" src="public/assets/data/3.png">{{$category->name}}</a></li>
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
                            <li class="active"><a href="#">Trang chủ</a></li>
                            <li class="dropdown">
                                <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Laptop</a>
                                <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 830px;">
                                    <li class="block-container col-sm-3">
                                        <ul class="block">
                                            <li class="img_container">
                                                <a href="#">
                                                    <img class="img-responsive" src="assets/data/men.png" alt="sport">
                                                </a>
                                            </li>
                                            <li class="link_container group_header">
                                                <a href="#">MEN'S</a>
                                            </li>
                                            <li class="link_container"><a href="#">Skirts</a></li>
                                            <li class="link_container"><a href="#">Jackets</a></li>
                                            <li class="link_container"><a href="#">Tops</a></li>
                                            <li class="link_container"><a href="#">Scarves</a></li>
                                            <li class="link_container"><a href="#">Pants</a></li>
                                        </ul>
                                    </li>
                                    <li class="block-container col-sm-3">
                                        <ul class="block">
                                            <li class="img_container">
                                                <a href="#">
                                                    <img class="img-responsive" src="assets/data/women.png" alt="sport">
                                                </a>
                                            </li>
                                            <li class="link_container group_header">
                                                <a href="#">WOMEN'S</a>
                                            </li>
                                            <li class="link_container"><a href="#">Skirts</a></li>
                                            <li class="link_container"><a href="#">Jackets</a></li>
                                            <li class="link_container"><a href="#">Tops</a></li>
                                            <li class="link_container"><a href="#">Scarves</a></li>
                                            <li class="link_container"><a href="#">Pants</a></li>
                                        </ul>
                                    </li>
                                    <li class="block-container col-sm-3">
                                        <ul class="block">
                                            <li class="img_container">
                                                <a href="#">
                                                    <img class="img-responsive" src="assets/data/kid.png" alt="sport">
                                                </a>
                                            </li>
                                            <li class="link_container group_header">
                                                <a href="#">Kids</a>
                                            </li>
                                            <li class="link_container"><a href="#">Shoes</a></li>
                                            <li class="link_container"><a href="#">Clothing</a></li>
                                            <li class="link_container"><a href="#">Tops</a></li>
                                            <li class="link_container"><a href="#">Scarves</a></li>
                                            <li class="link_container"><a href="#">Accessories</a></li>
                                        </ul>
                                    </li>
                                    <li class="block-container col-sm-3">
                                        <ul class="block">
                                            <li class="img_container">
                                                <a href="#">
                                                    <img class="img-responsive" src="assets/data/trending.png" alt="sport">
                                                </a>
                                            </li>
                                            <li class="link_container group_header">
                                                <a href="#">TRENDING</a>
                                            </li>
                                            <li class="link_container"><a href="#">Men's Clothing</a></li>
                                            <li class="link_container"><a href="#">Kid's Clothing</a></li>
                                            <li class="link_container"><a href="#">Women's Clothing</a></li>
                                            <li class="link_container"><a href="#">Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Phụ kiện</a>
                                <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 830px;">
                                    <li class="block-container col-sm-3">
                                        <ul class="block">
                                            <li class="img_container">
                                                <a href="#">
                                                    <img class="img-responsive" src="assets/data/men.png" alt="sport">
                                                </a>
                                            </li>
                                            <li class="link_container group_header">
                                                <a href="#">MEN'S</a>
                                            </li>
                                            <li class="link_container"><a href="#">Skirts</a></li>
                                            <li class="link_container"><a href="#">Jackets</a></li>
                                            <li class="link_container"><a href="#">Tops</a></li>
                                            <li class="link_container"><a href="#">Scarves</a></li>
                                            <li class="link_container"><a href="#">Pants</a></li>
                                        </ul>
                                    </li>
                                    <li class="block-container col-sm-3">
                                        <ul class="block">
                                            <li class="img_container">
                                                <a href="#">
                                                    <img class="img-responsive" src="assets/data/women.png" alt="sport">
                                                </a>
                                            </li>
                                            <li class="link_container group_header">
                                                <a href="#">WOMEN'S</a>
                                            </li>
                                            <li class="link_container"><a href="#">Skirts</a></li>
                                            <li class="link_container"><a href="#">Jackets</a></li>
                                            <li class="link_container"><a href="#">Tops</a></li>
                                            <li class="link_container"><a href="#">Scarves</a></li>
                                            <li class="link_container"><a href="#">Pants</a></li>
                                        </ul>
                                    </li>
                                    <li class="block-container col-sm-3">
                                        <ul class="block">
                                            <li class="img_container">
                                                <a href="#">
                                                    <img class="img-responsive" src="assets/data/kid.png" alt="sport">
                                                </a>
                                            </li>
                                            <li class="link_container group_header">
                                                <a href="#">Kids</a>
                                            </li>
                                            <li class="link_container"><a href="#">Shoes</a></li>
                                            <li class="link_container"><a href="#">Clothing</a></li>
                                            <li class="link_container"><a href="#">Tops</a></li>
                                            <li class="link_container"><a href="#">Scarves</a></li>
                                            <li class="link_container"><a href="#">Accessories</a></li>
                                        </ul>
                                    </li>
                                    <li class="block-container col-sm-3">
                                        <ul class="block">
                                            <li class="img_container">
                                                <a href="#">
                                                    <img class="img-responsive" src="assets/data/trending.png" alt="sport">
                                                </a>
                                            </li>
                                            <li class="link_container group_header">
                                                <a href="#">TRENDING</a>
                                            </li>
                                            <li class="link_container"><a href="#">Men's Clothing</a></li>
                                            <li class="link_container"><a href="#">Kid's Clothing</a></li>
                                            <li class="link_container"><a href="#">Women's Clothing</a></li>
                                            <li class="link_container"><a href="#">Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="category.html">Dịch vụ</a></li>
                            <li><a href="category.html">Tin tức</a></li>
                            <li><a href="category.html">Khuyến mãi</a></li>
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