@extends('admin.layout.master')
@section('content')
  	<section id="main-content">
          <section class="wrapper">
         	<div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="icon-file-text"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">100</h1>
                              <p>Tin tức</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="icon-th-large"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">{{$count_category}}</h1>
                              <p>Danh Mục</p>
                          </div>
                      </section>
                  </div>
                  
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="icon-bar-chart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">{{$count_product}}</h1>
                              <p>Sản phẩm</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="icon-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">100</h1>
                              <p>Đơn Hàng</p>
                          </div>
                      </section>
                  </div>
              </div>
    	</section>
    </section>
@endsection