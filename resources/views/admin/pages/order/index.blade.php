@extends('admin.layout.master')
@section('css')
<style type="text/css">
  #example3.display {
  margin: 0 auto;
  width: 100%;
  clear: both;
  border-collapse: collapse;
  table-layout: fixed;         
  word-wrap:break-word;       
}
#example3 .btn{
padding: 5px !important;
font-size: 13px !important;
}
#example3_filter{
  clear: both !important;
  padding: 0px !important;
}
.dataTables_length, .dataTables_filter{
  padding: 0px !important;
}
</style>
<link rel="stylesheet" type="text/css" href="https://datatables.net/release-datatables/extensions/TableTools/css/dataTables.tableTools.css">
@endsection


 


@section('content')
    <section id="main-content">
          <section class="wrapper">
          <h1>Danh sách đặt hàng</h1>
   <div class="col-lg-12">
          @if (Session::has('flash_message'))
            <div class="alert alert-success">
                {!! Session::get('flash_message') !!}
            </div> 
          @endif         
    </div>
  <table id="example3" class="display" cellspacing="0" width="100%">
  <thead>
    <tr width="100%" class="bg-info">
      
      <th>Tên KH</th>
      <th >Email KH</th>
      <th>Số điện thoại</th>
      <th>Địa Chỉ</th>
      <th>Tổng Tiền</th>
      <th>Ghi Chú</th>
      <th>Ngày Đặt</th>
      <th>Ngày Ship</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  

  @foreach($orders as $key => $order)
    <tr>
      
      <td>{{$order->tenkh}}</td>
      <td>{{$order->emailkh}}</td>
      <td>{{$order->sdtkh}}</td>
      <td>{{$order->diachikh}}</td>
      <td>{{number_format($order->tongtien,0,",",".")}}</td>
      <td>{{$order->ghichukh}}</td>
      <td>{{$order->ngaydatkh}}</td>
      <td>{{$order->ngaynhankh}}</td>
      <td>
      @if($order->trangthai==1)
      <span style="cursor: pointer;" class="label label-info">Đang ship</span>
       @endif
      @if($order->trangthai==0)
      <span  style="cursor: pointer;" class="label label-danger">Chưa Ship</span>
       @endif
      @if($order->trangthai==2)
        <span style="cursor: pointer;" class="label label-success">Đã Ship</span>
      @endif



      </td>
      <td>
      <a href="{{ asset('admin/order/'.$order->id.'/show') }}" class="btn btn-primary">Chi tiết</a>
      <a href="{{ asset('admin/order/'.$order->id.'/edit') }}" class="btn btn-warning">Sửa</a>
      <a onclick="return xacnhanxoa ('Bạn có chắc muốn xóa không!!')" href="{{ asset('admin/order/'.$order->id.'/delete')}}" class="btn btn-danger">Xóa</a>
      </td>
  
    </tr>
  @endforeach

  </tbody>

  </table>
      </section>
    </section>
@endsection
@section('js')
<script src="https://datatables.net/release-datatables/extensions/TableTools/js/dataTables.tableTools.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  
    $('#example3').dataTable({
      
      
      "aLengthMenu": [[5, 10, 30, 50 , -1], [5, 10, 30, 50, "All"]],
                "iDisplayLength" : 10,
                "bAutoWidth": false,
           "aoColumns": [
      { "sWidth": "8%" }, 
      { "sWidth": "10%" }, 
      { "sWidth": "9%" },
       { "sWidth": "15%" }, 
       { "sWidth": "8%" }, 
       { "sWidth": "10%" }, 
        { "sWidth": "9%" }, 
        { "sWidth": "10%" }, 
       { "sWidth": "7%" }, 
        { "sWidth": "14%" }, 
      ],

      "dom": 'T<"clear">lfrtip',
        "tableTools": {
            "sSwfPath": "http://cdn.datatables.net/tabletools/2.2.2/swf/copy_csv_xls_pdf.swf"
        }
       

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