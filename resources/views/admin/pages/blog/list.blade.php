@extends('admin.layout.master')
@section('content')
  	<section id="main-content">
          <section class="wrapper">
          <h1>Danh sách danh mục</h1>
	 <div class="col-lg-12">
          @if (Session::has('flash_message'))
            <div class="alert alert-success">
                {!! Session::get('flash_message') !!}
            </div> 
          @endif         
    </div>
	<table id="example2" class="display" cellspacing="0" width="100%">
	<thead>
		<tr class="bg-info">
			<th>STT</th>
			<th>Ảnh</th>
			<th>Tên</th>
			<td>Mô tả ngắn</td>
			<th>Show</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
	<?php $stt=1; ?>
	@foreach($blogs as $key =>$blog)
		<tr>
			<td>{{$stt}}</td>
			<td><img src="{{asset($blog->image)}}" width="50px" height="50px" /></td>
			<td> {{ $blog->title}}</td>
			<td>{{$blog->description}}</td>
			<td><a href="{{ asset('admin/blog/'.$blog->id.'/show') }}" class="btn btn-primary">Chi tiết</a></td>
			<td><a href="{{ asset('admin/blog/'.$blog->id.'/edit') }}" class="btn btn-warning">Sửa</a></td>
			<td><a onclick="return xacnhanxoa ('Bạn có chắc muốn xóa không!!')" href="{{ asset('admin/blog/'.$blog->id.'/delete')}}" class="btn btn-danger">Xóa</a></td>
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