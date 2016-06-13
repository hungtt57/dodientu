@extends('admin.layout.master')
@section('content')
  	<section id="main-content">
          <section class="wrapper">
          	<h1>Edit Category</h1>
				<form class="form-horizontal" method="post" action="{{asset('/admin/category/'.$category->id.'/edit')}}">
				 {!! csrf_field() !!}
					 
					    <div class="form-group">
						    	<label class="col-md-2 control-label" for="name">Tên danh mục: </label>
						    <div class="col-md-4">
						    	<input class="form-control" value="{{$category->name}}" type="text" name="name" id="name">
						    </div>
				    	</div>

				    	  <div class="form-group">

				    	  <label class="col-md-2 control-label" for="name">Danh mục cha: </label>
						    <div class="col-md-4">
						    	<select class="form-control" name='parent_id' >
                          <option value="0">Please chose Category</option>
                          <?php cate_parent($parent,0,"--",$category->parent_id,$category->id);?>
                      </select>
						    </div>
             
                    
                   
                 </div>
				    	
						<div class="form-group">
				    		<input type="submit" value="Sửa" class="btn btn-success" />
				    		<a type="button"  class="btn btn-info" href="{{asset('admin/category/list')}}">Back</a>
				    	</div>
			   	</form>
    	</section>
    </section>
@endsection
@section('js')
@endsection