      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="{{asset('admin/dashboard')}}">
                          <i class="icon-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-list-ul"></i>
                          <span>Tài khoản</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{asset('/admin/user/create')}}">Tạo tài khoản</a></li>
                          <li><a  href="{{asset('/admin/user/list')}}">Danh sách tài khoản</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-list-ul"></i>
                          <span>Danh mục</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{asset('/admin/category/create')}}">Tạo danh mục</a></li>
                          <li><a  href="{{asset('/admin/category/list')}}">Danh sách danh mục</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-list-ul"></i>
                          <span>Sản phẩm</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{asset('admin/product/create')}}">Đăng sản phẩm</a></li>
                          <li><a  href="{{asset('admin/product/')}}">Danh sách sản phẩm</a></li>
                      </ul>
                  </li>

              

                    <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-list-ul"></i>
                          <span>Đơn Hàng</span>
                      </a>
                      <ul class="sub">
                       
                          <li><a  href="{{asset('admin/order/')}}">Danh sách đặt hàng</a></li>
                      </ul>
                  </li>

                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>