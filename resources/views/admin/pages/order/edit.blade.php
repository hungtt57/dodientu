@extends('admin.layout.master')

@section('content')
<section id="main-content">
	<section class="wrapper">
		<h3 class="page-title">Sửa </h3>
		<div class="col-md-6">
		<h4>Thông tin khách hàng</h4>
		<form class="form-horizontal" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			

				@if ($errors->any())
				<div class="alert alert-danger"> 
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>	
				@endif

				<div class="form-group">
				<label class="col-md-3 control-label" for="name_category">Tên khách hàng</label>
					<div class="col-md-9">
						<input class="form-control" tabindex="1" value='{{$order->tenkh}}' type="text" name="tenkh" id="tenkh">
					</div>
				</div>
				

				<div class="form-group">
				<label class="col-md-3 control-label" for="name_category">Email</label>
					<div class="col-md-9">
						<input class="form-control" tabindex="1" value='{{$order->emailkh}}' type="text" name="emailkh" id="emailkh">
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-3 control-label" for="name_category">Số điện thoại</label>
					<div class="col-md-9">
						<input class="form-control" type="number" value='{{$order->sdtkh}}' name="sdtkh" id="sdtkh">
					</div>
				</div>
		
				<div class="form-group">
				<label class="col-md-3 control-label" for="name_category">Địa Chỉ</label>
					<div class="col-md-9">
						<input class="form-control" value='{{$order->diachikh}}' name="diachikh" id="diachikh">
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-3 control-label" for="name_category">Ghi Chú</label>
					<div class="col-md-9">
						<input class="form-control" value='{{$order->ghichukh}}' name="ghichukh" id="ghichukh">
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-3 control-label" for="name_category">Ngày Ship</label>
					<div class="col-md-9">
						  <input type="date" class="form-control" min="{{date('Y-m-d')}}" name="ngaynhankh" id="ngaynhankh" value="{{$order->ngaynhankh}}" > 
					</div>
				</div>

				<div class="form-group">
				<label class="col-md-3 control-label" for="name_category">Trạng Thái</label>
					<div class="col-md-9">
						 <select  class="form-control" name='trangthai'>
						 	<option value='0' <?php if($order->trangthai==0) echo 'selected'; ?>> Chưa Ship</option>
						 		<option value='1' <?php if($order->trangthai==1) echo 'selected'; ?>> Đang Ship</option>
						 			<option value='2' <?php if($order->trangthai==2) echo 'selected'; ?>> Đã Giao</option>
						 </select>
					</div>
				</div>


				<div class="form-group">
			
				</div>

				<div class="form-group">
					<input type="submit" value="Sửa sản phẩm" class="btn btn-success" />
					<a type="button"  class="btn btn-info" href="{{asset('admin/order/')}}">Back</a>
				</div>
		
		</form>
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
							<td>Cập nhật</td>
							<td>Xóa</td>
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
								<td> <i style="width: 50px;height: 50px;display: block;text-align: center;font-size: 20px;"class='icon-retweet capnhat_button'></i></td>
								<td> <i style="width: 50px;height: 50px;display: block;text-align: center;font-size: 20px;"class='icon-remove remove_button'></i></td>
							</tr> 
						@endforeach

					</tbody>

					<tfoot>
						<tr class="footer_table">
							<td colspan="7" style="color:red"><em>*</em> Ấn cập nhật để sửa số lượng <br>

							</td>
						</tr>
					</tfoot>
				</table>
			</div> <!-- end col md 4 -->
	</section>
</section>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function() {

        $(".capnhat_button").click(function(){
            var tr = $(this).parent().parent();
            var id = tr.attr('value');
         	var qty = $(this).parent().parent().find('.qty_order_detail').val();
         	var tongtien = $(this).parent().parent().find('.tongtiensp');
        	if(qty!=0){ 	
	            $.ajax({
	                url: '/admin/order/capnhat_order_detail',
	                type:'get',
	                data:{"qty":qty,"id":id},
	                dataType:'text',
	                success:function(data){

	                    if(data!='loi'){
	                     tongtien.html(data);
	                     alert('Cập nhật thành công');
	                    }
	              }
	          }); 
       	 	}else{
       	 		alert('Số lượng bằng không!! Vui lòng xóa sản phẩm');
       	 	}
        }); //end capnhat_button


        $(".remove_button").click(function(){
        		
            	var tr = $(this).parent().parent();
           		 var id = tr.attr('value');
            	if(confirm("Bạn có chắc chắn xóa")){

            		 $.ajax({
		                url: '/admin/order/xoa_order_detail',
		                type:'get',
		                data:{"id":id},
		                dataType:'text',
		                success:function(data){

		                    if(data!='loi'){
		                    	tr.remove();
		                    	var count = $('#table_edit tr').length; // check tr neu del het sp :))
				        		if(count==2){
				        			var tbody = $('#table_edit tbody').html('<tr><td colspan="7">Hiện tại không có sản phẩm nào!!!</td></tr>');
				        		}
		                     alert('Xóa thành công');
		                    }
				        }
		          	}); 

            	 } //end if confirm          
        }); //end remove button
    });
</script>
@endsection