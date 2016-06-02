@extends('admin.layout.master')

@section('content')
<section id="main-content">
	<section class="wrapper">
		<h3 class="page-title">Chi tiết đơn hàng </h3>
		<div class="col-md-6">
		<h4>Thông tin khách hàng</h4>
		

				@if ($errors->any())
				<div class="alert alert-danger"> 
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>	
				@endif

					<table  class="table table-bordered table-striped table-condensed">
					<tr>
						<td>Tên khách hàng</td>
						<td>{{$order->tenkh}}</td>
					</tr>
					<tr>
						<td>Địa chỉ</td>
						<td>{{$order->diachikh}}</td>
					</tr>
					<tr>
						<td>Số điện thoại</td>
						<td>{{$order->sdtkh}}</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>{{$order->emailkh}}</td>
					</tr>
					<tr>
						<td>Ghi chú</td>
						<td>{{$order->ghichukh}}</td>
					</tr>
					<tr>
						<td>Ngày giao hàng</td>
						<td>{{$order->ngaynhankh}}</td>
					</tr>
					<tr>
						<td>Trạng Thái</td>
						<td> @if($order->trangthai==1)
      <span style="cursor: pointer;" class="label label-info">Đang ship</span>
       @endif
      @if($order->trangthai==0)
      <span  style="cursor: pointer;" class="label label-danger">Chưa Ship</span>
       @endif
      @if($order->trangthai==2)
        <span style="cursor: pointer;" class="label label-success">Đã Ship</span>
      @endif
</td>
					</tr>
					</table>
						<a type="button"  class="btn btn-info" href="{{asset('admin/order/')}}">Back</a>
				
		
		
			</div> <!-- end col md 6 -->
			<div class="col-md-6">
			<h4>Thông tin sản phẩm</h4>
				
				<table id="table_edit" class="table table-bordered table-striped table-condensed">
					<thead>
						<tr>
							
							<td>Ảnh</td>
							<td>Tên</td>
							<td>Giá</td>
							<td>Số lượng</td>
							<td>Thành tiền</td>
							
						</tr>
					</thead>

					<tbody>
				
						@foreach($order_details as $key =>$order_detail)
							<tr value="{{$order_detail->id}}">
								
								<td><img src="{{asset($order_detail->anh)}}" width="50px" height="50px" /></td>
								<td>{{ $order_detail->tensp}}</td>
								<td class="giasp">{{number_format($order_detail->giasp,0,",",".")}}</td>
								<td><input type='number' min="1" class="qty_order_detail" value='{{$order_detail->soluong}}' style="width: 50px;"></input></td>
								<td class="tongtiensp">{{number_format($order_detail->tongtien,0,",",".")}}</td>
								
							</tr> 
						@endforeach

					</tbody>

					<tfoot>
						<tr class="footer_table">
							<td colspan="7" >
							Tổng tiền :<b style="color:red">{{number_format($order->tongtien,0,",",".")}}</b>
							</td>
						</tr>
					</tfoot>
				</table>
			</div> <!-- end col md 4 -->
	</section>
</section>
@endsection

