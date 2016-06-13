@extends('admin.layout.master')
@section('content')
  	<section id="main-content">
          <section class="wrapper">
          <h1>Danh sách tài khoản</h1><a href="{{asset('admin/user/create')}}" class="btn btn-success">Tạo tài khoản</a>
	 <div class="col-lg-12">
          @if (Session::has('flash_message'))
            <div class="alert alert-success">
                {!! Session::get('flash_message') !!}
            </div> 
          @endif         
    </div>
	<hr>
	<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr class="bg-info">
			<th>User_Name</th>
			<th>FullName</th>
			<th>Email</th>
			<th>Created_at</th>
			<th>Action</th>
			
		</tr>
	</thead>
	<tbody>
	@foreach($users as $key =>$user)
		<tr>
			<td> {{ $user->username}}</td>
			<td> {{ $user->name}}</td>
			<td> {{ $user->email}}</td>
			<td> {{ $user->created_at}}</td>
			<td>


	
			<a href="{{ asset('admin/user/'.$user->id.'/edit') }}" title="Sửa "><span class="glyphicon glyphicon-edit" style="color:blue"></span></a>

	<a onclick="return xacnhanxoa ('Bạn có chắc muốn xóa không!!')" href="{{ asset('admin/user/'.$user->id.'/delete')}}" title="Xóa "><span class="glyphicon glyphicon-trash" style="color:red"></span></a>

			</td>
		
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
    $('#example').dataTable({
    	"sPaginationType": "full_numbers",
    	"aLengthMenu": [[3, 5, 7, 9 , -1], [3, 5, 7, 9, "All"]],
                "iDisplayLength" : 3,
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