@extends('admin.layout.master')
@section('css')
<script src="{{asset('public/admin/ckeditor/ckeditor.js')}}"></script>
@endsection
@section('content')
<section id="main-content">
	<section class="wrapper">
		<h3 class="page-title">Sửa </h3>
		<form class="form-horizontal" method="post" enctype="multipart/form-data">
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
						<input class="form-control" tabindex="1" value='{{$product->ten}}' type="text" name="ten" id="ten">
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Mã sản phẩm</label>
					<div class="col-md-6">
						<input class="form-control" tabindex="1" value='{{$product->masp}}' type="text" name="masp" id="masp">
					</div>
				</div>

				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Giá</label>
					<div class="col-md-6">
						<input class="form-control" tabindex="1" value='{{$product->gia}}' type="number" name="gia" id="gia">
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Công dụng</label>
					<div class="col-md-6">
						<textarea class="form-control" tabindex="1" type="text" name="congdung" id="congdung">{{$product->congdung}}</textarea>
						<script>    CKEDITOR.replace('congdung')</script>
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Cách dùng</label>
					<div class="col-md-6">
						<textarea class="form-control" tabindex="1"   type="text" name="cachdung" id="cachdung">
						{{$product->cachdung}}</textarea>
							<script> CKEDITOR.replace('cachdung')</script>
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label" for="name_category">Đóng gói</label>
					<div class="col-md-6">
						<input class="form-control" value='{{$product->donggoi}}' name="donggoi" id="donggoi">
					</div>
				</div>
					<div class="form-group">
						    	<label class="col-md-2 control-label" for="name_category">Chọn danh mục</label>
						    <div class="col-md-6">
						    	<select class="form-control" name='category_id'>
						    	 <?php foreach ($categories as $key => $category): ?>
                                          @if(isset($category['sub']))
                                            <optgroup label="{{ $category['ten']}} ">
                                              @if(isset($category['sub']))

                                              @include('admin.includes.indexeditproduct', array('items' => $category['sub'],'id'=>$product->category_id,'count'=>'- -'))

                                              @endif
                                            </optgroup>
                                          @else
                                            <option <?php if($product->category_id==$category['id']) echo 'selected'; ?> value="{{$category['id']}}">{{$category['ten'] }}</option>

                                          @endif


                                     <?php endforeach ?>
			                           
			                       
						    	</select>
						    </div>
				    	</div>


				    	<div class="form-group">
						    	<label class="col-md-2 control-label" for="name_category">Chọn ảnh đại diện

						    	<img src="{{asset($product->anhdaidien)}}" width="75px" height="75px">


						    	</label>
						    <div class="col-md-6">
						    	   <input id="image" class="form-control"  name="anhdaidien" type="file">
						    </div>
				    	</div>


				<div class="form-group">
					<input type="submit" value="Sửa sản phẩm" class="btn btn-success" />
					<a type="button"  class="btn btn-info" href="{{asset('admin/product/list')}}">Back</a>
				</div>
			</div>
		</form>
	</section>
</section>
@endsection