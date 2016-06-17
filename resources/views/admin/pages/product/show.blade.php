@extends('admin.layout.master')
@section('css')
<style>
	.table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {
    border: 1px solid #333 !important;
	}

</style>
@endsection
@section('content')


<section id="main-content">
	<section class="wrapper">
		<div class="page-title row" style="margin-bottom: 15px;">
		<div class="col-xs-4">Chi tiết sản phẩm</div>
			<div class="col-xs-8"><a href="{{ asset('admin/product/'.$product->id.'/edit') }}" class='pull-right btn btn-info'>Sửa </a></div>
		</div>
		
			<div class="col-md-12">

				@if ($errors->any())
				<div class="alert alert-danger"> 
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>	
				@endif

			<div class="col-xs-4">

			<img class="img_product_show" src="{{$product->image}}">
			<?php foreach ($imageDetail as $key => $value): ?>
				<img class="img_product_show col-md-4" src="{{$value->link}}">
			<?php endforeach ?>
			</div>		
			<div class="col-xs-8">
				
			<table  class="table table-bordered table-hover" border="1" cellspacing="0" width="100%">
				<tr>
					<td width="100px">Tên</td>
					<td >{{$product->name}}</td>
				</tr>
				<tr>
					<td>Giá hiện tại</td>
					<td >{{number_format($product->old_price)}}</td>
				</tr>
				<tr>
					<td>Giá mới</td>
					<td >{{number_format($product->new_price)}}</td>
				</tr>
				
				<tr>
					<td>Danh mục</td>
					<td>{{$category_name}}</td>
				</tr>
				<tr>
					<td>Mô tả ngắn</td>
					<td>{{$product->short_description}}</td>
				</tr>
				<tr>
					<td>Mô tả</td>
					<td><?php echo $product->description; ?></td>

				</tr>
				<tr>
					<td>Thông số kĩ thuật</td>
					<td><?php echo $product->info; ?></td>
				</tr>
			</table>



			</div>		




			</div>
		
	</section>
</section>
@endsection