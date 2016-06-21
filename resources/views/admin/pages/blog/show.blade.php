@extends('admin.layout.master')
@section('content')
<section id="main-content">
	<section class="wrapper">
		<div class="page-title row" style="margin-bottom: 15px;">
		<div class="col-xs-4">Chi tiết sản phẩm</div>
			<div class="col-xs-8"><a href="{{ asset('admin/blog/'.$blog->id.'/edit') }}" class='pull-right btn btn-info'>Sửa </a></div>
		</div>
		
			<div class="col-md-12 row">

				@if ($errors->any())
				<div class="alert alert-danger"> 
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>	
				@endif

			<div class="col-xs-3">

				<img class="img_product_show" src="{{asset($blog->image)}} " width="100px" height="75px">

			</div>		
			<div class="col-xs-8">
					
				{{$blog->description}}


			</div>		

			</div>
			<div class="row col-md-12">
				<?php echo $blog->content; ?>
			</div>
		
	</section>
</section>
@endsection