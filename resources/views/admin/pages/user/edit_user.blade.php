@extends('admin.layout.master')
@section('content')
  	<section id="main-content">
          <section class="wrapper">
          	<h1>Edit User</h1>
	<form class="form-horizontal" method="post" action="{{asset('/admin/user/'.$user->id.'/edit')}}">
	  <input type="hidden" name="_token" value="{{ csrf_token() }}">
		    <div class="form-group">
			    	<label class="col-md-2 control-label" for="name">User Name: </label>
			    <div class="col-md-10">
			    	<input class="form-control" value="{{$user->user_name}}" type="text" name="user_name" id="user_name">
			    </div>
	    	</div>
	    	<div class="form-group">
			    	<label class="col-md-2 control-label" for="email">Email: </label>
			    <div class="col-md-10">
			    	<input class="form-control" tabindex="1" value="{{$user->email}}" type="text" name="email" id="email">
			    </div>
	    	</div>    	
	    	<div class="form-group">
	    		<input type="submit" value="Edit User" class="btn btn-success" />
	    		<a type="button"  class="btn btn-info" href="{{asset('admin/slider/list')}}">Back</a>
	    	</div>
</form>

    	</section>
    </section>
@endsection