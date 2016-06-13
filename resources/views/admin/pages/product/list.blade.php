@extends('admin.layout.master')
@section('content')
<section id="main-content">
	<section class="wrapper">
		<h1>Danh sách sản phẩm</h1>
		@include('admin.includes.alert')
		<table id="example2" class="display" cellspacing="0" width="100%">
			<thead>
				<tr class="bg-info">
					<th>STT</th>
					<th>Ảnh</th>
					<th>Tên</th>
					<td>Giá hiện tại</td>
					<td>Giá mới</td>
					<th>Action</th>

				</tr>
			</thead>
			<tbody>
				<?php $stt=1; ?>
				@foreach($products as $key =>$product)
				<tr>
					<td>{{$stt}}</td>
					<td><img src="{{$product->image}}" width="50px" height="50px" /></td>
					<td> {{ $product->name}}</td>
					<td>{{number_format($product->old_price)}} đ</td>
					<td>@if($product->new_price==$product->old_price)
						Chưa có
						@else
						{{number_format($product->new_price)}} đ
						@endif
					</td>
					<td>
					<a href="{{ asset('admin/product/'.$product->id.'/show') }}" title="xem chi tiết"><span class="glyphicon glyphicon-eye-open" style="color:#15964A"></a>
					<a href="{{ asset('admin/product/'.$product->id.'/edit') }}" title="Sửa sản phẩm"><span class="glyphicon glyphicon-edit" style="color:blue"></span></a>
						<a onclick="return xacnhanxoa ('Bạn có chắc muốn xóa không!!')" href="{{ asset('admin/product/'.$product->id.'/delete')}}" title="Xóa sản phẩm"><span class="glyphicon glyphicon-trash" style="color:red"></span></a>
						</td>
						<?php $stt++; ?>
					</tr>
					@endforeach

				</tbody>

			</table>
		</section>
	</section>
	@endsection
	@section('js')
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example2').dataTable({
				"sPaginationType": "full_numbers",
				"aLengthMenu": [[5, 10, 30, 50 , -1], [5, 10, 30, 50, "All"]],
				"iDisplayLength" : 10,
			});
		} );
	</script>
	<script type="text/javascript">
		$("div.alert").delay(3000).slideUp();
		function xacnhanxoa (msg)
		{
			if (window.confirm(msg)){
				return true;
			}
			return false;
		} 
	</script>
	@endsection