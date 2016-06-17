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
					<label class="col-md-2 control-label" for="name_category">Tên</label>
					<div class="col-md-10">
						<h4>{{$banner->name}}</h4>
					
					</div>
				</div>


				<div class="form-group">
					<label class="col-md-2 control-label" for="name_category">Mô tả </label>
					<div class="col-md-10">
							<h4>{{$banner->description}}</h4>
					</div>
				</div>

						<div class="form-group">
							<label class="col-md-2 control-label" for="name_category">Chọn ảnh chi tiết</label>
							<div class="col-md-10">
								<div value="Duyệt ảnh chi tiết" class='button_chooseImage'  id='chooseimagebanner'>Chọn ảnh chi tiết</div>
								<div id="insert">
									<?php foreach ($imagebanner as $key => $value): ?>
										<div class="baongoai" >
										<input type="text" style='display:none' value="{{$value->link}}" class="col-md-6" name="imagebanner[]" id="imagebanner" />
										<i class="fa fa-times icon_delImage"></i>
										<img src="{{$value->link}}" alt="" width="200px" >
										</div>
									<?php endforeach ?>
								</div>
							</div>
						</div>

						<div class="form-group">
							<input type="submit" value="Sửa sản phẩm" class="btn btn-success" />
							<a type="button"  class="btn btn-info" href="{{asset('admin/banner/list')}}">Back</a>
						</div>
					</div>
				</form>
			</section>
		</section>
		@endsection
		@section('js')



    <script type="text/javascript">
    	$(document).ready(function() {

    		function SetFileField1(fileUrl) {

    			$("#insert").append(' <div class="baongoai" ><input type="text" style="display:none;" class="col-md-6" name="imagebanner[]" id="imagebanner'+fileUrl+'" /><i class="fa fa-times icon_delImage"></i><img src="'+ fileUrl+'" alt="" width="200px" ></div>');


    			document.getElementById('imagebanner'+fileUrl).value =  fileUrl ;
    		}

    		$('#chooseimagebanner').click(function(){
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