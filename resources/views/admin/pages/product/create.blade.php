@extends('admin.layout.master')
@section('css')
<script src="{{asset('public/admin/ckeditor/ckeditor.js')}}"></script>
@endsection
@section('content')
<section id="main-content">
	<section class="wrapper">
		<h3 class="page-title">Đăng sản phẩm</h3>
		<form class="form-horizontal" method="post" action="{{asset('/admin/product/create')}}" enctype="multipart/form-data">
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
				<label class="col-md-2 control-label" for="name_category">Tên sản phẩm</label>
					<div class="col-md-6">
						<input class="form-control" tabindex="1" placeholder="" type="text" name="ten" id="ten">
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Mã sản phẩm</label>
					<div class="col-md-6">
						<input class="form-control" tabindex="1" placeholder="" type="text" name="masp" id="masp">
					</div>
				</div>

				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Giá</label>
					<div class="col-md-6">
						<input class="form-control" tabindex="1" placeholder="" type="number" name="masp" id="masp">
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Công dụng</label>
					<div class="col-md-6">
						<textarea class="form-control" tabindex="1" type="text" name="congdung" id="congdung"></textarea>
						<script>    CKEDITOR.replace('congdung')</script>
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Cách dùng</label>
					<div class="col-md-6">
						<textarea class="form-control" tabindex="1"  type="text" name="cachdung" id="cachdung">
						</textarea>
							<script>    CKEDITOR.replace('cachdung')</script>
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Đóng gói</label>
					<div class="col-md-6">
						<input class="form-control"  name="donggoi" id="donggoi">
					</div>
				</div>
					<div class="form-group">
						    	<label class="col-md-2 control-label" for="name_category">Chọn danh mục</label>
						    <div class="col-md-6">
						    	<select class="form-control" name='category_id'>
						    
			                            <?php cate_parent($category);?>
			                       
						    	</select>
						    </div>
				    	</div>


				    	<div class="form-group">
						    	<label class="col-md-2 control-label" for="name_category">Chọn ảnh đại diện</label>
						    <div class="col-md-6">
						    	   <input id="image" class="form-control"  name="anhdaidien" type="file">
						    </div>
				    	</div>


				<div class="form-group">
					<input type="submit" value="Tạo sản phẩm" class="btn btn-success" />
					<a type="button"  class="btn btn-info" href="{{asset('admin/product/list')}}">Back</a>
				</div>
			</div>
		</form>
	</section>
</section>
@endsection