@extends('admin.layout.master')
@section('content')
  	<section id="main-content">
          <section class="wrapper">
          <h1>Danh sách danh mục</h1>
		@include('admin.includes.alert')
	<table id="example1" class="display"  class="table table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
		<tr class="bg-info">
			<th>STT</th>
			<th>Tên</th>
			<th>Tạo </th>
			<th>Action</th>
			
		</tr>
	</thead>
	<tbody>
	<?php $stt=1; ?>
	@foreach($allCategories as $key =>$category)
		<tr>
			<td>{{$stt}}</td>
			<td> {{ $category->name}}</td>
			<td> {{ $category->created_at}}</td>
			
			<td>
					<a href="{{ asset('admin/category/'.$category->id.'/edit') }}" title="Sửa "><span class="glyphicon glyphicon-edit" style="color:blue"></span></a>
						<a onclick="return xacnhanxoa ('Bạn có chắc muốn xóa không!!')" href="{{ asset('admin/category/'.$category->id.'/delete')}}" title="Xóa "><span class="glyphicon glyphicon-trash" style="color:red"></span></a>
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
    $('#example1').dataTable({
    	"sPaginationType": "full_numbers",
    	"aLengthMenu": [[5, 10, 30, 50 , -1], [5, 10, 30, 50, "All"]],
                "iDisplayLength" : 5,
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