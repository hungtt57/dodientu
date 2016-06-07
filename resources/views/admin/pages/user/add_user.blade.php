@extends('admin.layout.master')
@section('content')
  	<section id="main-content">
          <section class="wrapper">
              <h3 class="page-title">Create User</h3>
					<form class="form-horizontal" method="post" action="{{asset('/admin/user/create')}}">
					 <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="col-md-12">
							<div class="form-group">
							    	<label class="col-md-2 control-label" for="user_name">User Name: </label>
							    <div class="col-md-10">
							    	<input class="form-control" tabindex="1" placeholder="user_name..." type="text" name="username" id="username">
							    </div>
					    	</div>
						    <div class="form-group">
							    	<label class="col-md-2 control-label" for="fullname">Full Name: </label>
							    <div class="col-md-10">
							    	<input class="form-control" tabindex="1" placeholder="fullname..." type="text" name="fullname" id="fullname">
							    </div>
					    	</div>
					    	<div class="form-group">
							    	<label class="col-md-2 control-label" for="email">Email: </label>
							    <div class="col-md-10">
							    	<input class="form-control" tabindex="1" placeholder="Email..." type="text" name="email" id="email">
							    </div>
					    	</div>
					    	<div class="form-group">
							    	<label class="col-md-2 control-label" for="password">Password: </label>
							    <div class="col-md-10">
							    	<input class="form-control" tabindex="1" placeholder="Password..." type="password" name="password" id="password">
							    </div>
					    	</div>
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
					    		<input type="submit" value="Create User" class="btn btn-success" />
					    		<a type="button"  class="btn btn-info" href="{{asset('admin/user/list')}}">Back</a>
					    	</div>
				   		</div>
				</form>
    	</section>
    </section>
@endsection