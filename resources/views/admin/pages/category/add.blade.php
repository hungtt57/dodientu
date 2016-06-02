@extends('admin.layout.master')
@section('content')
  	<section id="main-content">
          <section class="wrapper">
              <h3 class="page-title">Danh Mục</h3>
				<form class="form-horizontal" method="post" action="{{asset('/admin/category/create')}}">
				 <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="col-md-12">
					    
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
						    	<label class="col-md-2 control-label" for="name_category">Tên danh mục</label>
						    <div class="col-md-4">
						    	<input class="form-control" tabindex="1" placeholder="Tên danh mục..." type="text" name="ten" id="ten">
						    </div>
				    	</div>
				    	<div class="form-group">
						    	<label class="col-md-2 control-label" for="name_category">Danh mục cha</label>
						    <div class="col-md-4">
						    	<select class="form-control" name='parent_id'>
						    		
			                            <option value="0">Chọn danh mục</option>
			                            <?php cate_parent($allCategories);?>
			                       
						    	</select>
						    </div>
				    	</div>
				    	<div class="form-group">
				    		<input type="submit" value="Tạo" class="btn btn-success" />
				    		<a type="button"  class="btn btn-info" href="{{asset('admin/category/list')}}">Quay lại</a>
				    	</div>
			   		</div>
			</form>
    	</section>
    </section>
@endsection