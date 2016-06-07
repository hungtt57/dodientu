@extends('admin.layout.master')
@section('content')
  	<section id="main-content">
          <section class="wrapper">
          <h1>List User</h1><a href="{{asset('admin/user/create')}}" class="btn btn-success">Create User</a>
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
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
	@foreach($users as $key =>$user)
		<tr>
			<td> {{ $user->username}}</td>
			<td> {{ $user->name}}</td>
			<td> {{ $user->email}}</td>
			<td> {{ $user->created_at}}</td>
			<td><a href="{{ asset('admin/user/'.$user->id.'/edit') }}" class="btn btn-warning">Edit</a></td>
			<td><a onclick="return xacnhanxoa ('Bạn có chắc muốn xóa không!!')" href="{{ asset('admin/user/'.$user->id.'/delete')}}" class="btn btn-danger">Delete</a></td>
		
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