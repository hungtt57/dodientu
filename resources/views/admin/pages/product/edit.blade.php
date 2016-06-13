@extends('admin.layout.master')
@section('css')
<script src="{{asset('public/admin/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('public/admin/ckfinder/ckfinder.js')}}"></script>

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
					<div class="col-md-10">
						<input class="form-control" tabindex="1" value='{{$product->name}}' type="text" name="name" id="name">
					</div>
				</div>


				<div class="form-group">
					<label class="col-md-2 control-label" for="name_category">Giá hiện tại</label>
					<div class="col-md-10">
						<input class="form-control" tabindex="1" value='{{$product->old_price}}' type="number" name="old_price" id="old_price">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label" for="name_category">Giá mới</label>
					<div class="col-md-10">
						<input class="form-control" tabindex="1" value='{{$product->new_price}}' type="number" name="new_price" id="new_price">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label" for="name_category">Mô tả ngắn</label>
					<div class="col-md-10">
						<input class="form-control" value='{{$product->short_description}}' name="short_description" id="short_description">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label" for="name_category">Mô tả</label>
					<div class="col-md-10">
						<textarea class="form-control" tabindex="1"   type="text" name="description" id="description">
							{{$product->description}}</textarea>
							<script> CKEDITOR.replace('description')</script>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label" for="name_category">Thông số kĩ thuật</label>
						<div class="col-md-10">
							<textarea class="form-control" tabindex="1" type="text" name=info" id="info">
								{{$product->info}}</textarea>
								<script> CKEDITOR.replace('info')</script>
							</div>
						</div>


						<div class="form-group">
							<label class="col-md-2 control-label" for="name_category">Chọn danh mục</label>
							<div class="col-md-10">
								<select class="form-control" name='category_id'>
									<?php foreach ($categories as $key => $category): ?>
										@if(isset($category['sub']))
										<optgroup label="{{ $category['name']}} ">
											@if(isset($category['sub']))

											@include('admin.includes.indexeditproduct', array('items' => $category['sub'],'id'=>$product->category_id,'count'=>'- -'))

											@endif
										</optgroup>
										@else
										<option <?php if($product->category_id==$category['id']) echo 'selected'; ?> value="{{$category['id']}}">{{$category['name'] }}</option>

										@endif


									<?php endforeach ?>


								</select>
							</div>
						</div>


						<div class="form-group">
							<label class="col-md-2 control-label" for="name_category">Chọn ảnh đại diện</label>
							<div class="col-md-10">

								<input type="text" style='display:none' value="{{$product->image}}" name="image" id="Image" />
								<div  value="Duyệt ảnh" class='button_chooseImage ' onclick="BrowseServer();">Chọn ảnh</div>
								<img src="{{$product->image}}" alt=""  width="150px" class='col-md-4' id='imageAvatar'>
							</div>
						</div>


						<div class="form-group">
							<label class="col-md-2 control-label" for="name_category">Chọn ảnh chi tiết</label>
							<div class="col-md-10">
								<div value="Duyệt ảnh chi tiết" class='button_chooseImage'  id='chooseImageDetail'>Chọn ảnh chi tiết</div>
								<div id="insert">
									<?php foreach ($imageDetail as $key => $value): ?>
										<div class="baongoai" >
										<input type="text" style='display:none' value="{{$value->link}}" class="col-md-6" name="imageDetail[]" id="imageDetail" />
										<i class="fa fa-times icon_delImage"></i>
										<img src="{{$value->link}}" alt="" width="200px" >
										</div>
									<?php endforeach ?>
								</div>
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
		@section('js')

		<script type="text/javascript">
			function BrowseServer() {
				var finder = new CKFinder();
            //finder.basePath = '../';

            finder.selectActionFunction = SetFileField;
            finder.popup();
        }
        function SetFileField(fileUrl) {
        	document.getElementById('Image').value = fileUrl;
        	document.getElementById('imageAvatar').style.display = 'block';
        	document.getElementById('imageAvatar').src = fileUrl;
        }


    </script>

    <script type="text/javascript">
    	$(document).ready(function() {

    		function SetFileField1(fileUrl) {

    			$("#insert").append(' <div class="baongoai" ><input type="text" style="display:none;" class="col-md-6" name="imageDetail[]" id="imageDetail'+fileUrl+'" /><i class="fa fa-times icon_delImage"></i><img src="'+ fileUrl+'" alt="" width="200px" ></div>');


    			document.getElementById('imageDetail'+fileUrl).value =  fileUrl ;
    		}

    		$('#chooseImageDetail').click(function(){
    			var finder1 = new CKFinder();
            //finder.basePath = '../';

            finder1.selectActionFunction = SetFileField1;
            finder1.popup();
        });


    	});

    </script>

    <script>
    	$(document).on('click', '.icon_delImage', function() {
    		var baongoai = $(this).parent();
  
    		baongoai.remove();
    	});
    </script>
    @endsection