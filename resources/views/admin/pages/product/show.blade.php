@extends('admin.layout.master')
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

				<img class="img_product_show" src="{{asset($product->anhdaidien)}}">

			</div>		
			<div class="col-xs-8">
				
			<table  class="table table-bordered table-hover" cellspacing="0" width="100%">
				<tr>
					<td>Tên</td>
					<td >{{$product->ten}}</td>
				</tr>
				<tr>
					<td>Giá</td>
					<td >{{$product->gia}}</td>
				</tr>
				<tr>
					<td>Mã sản phẩm</td>
					<td >{{$product->masp}}</td>
				</tr>
				<tr>
					<td>Danh mục</td>
					<td >{{get_category_name($product->category_id)}}</td>
				</tr>
				<tr>
					<td>Đóng gói</td>
					<td>{{$product->donggoi}}</td>
				</tr>
				<tr>
					<td>Công dụng</td>
					<td><?php echo $product->congdung; ?></td>

				</tr>
				<tr>
					<td>Cách dùng</td>
					<td><?php echo $product->cachdung; ?></td>
				</tr>
			</table>



			</div>		




			</div>
		
	</section>
</section>
@endsection