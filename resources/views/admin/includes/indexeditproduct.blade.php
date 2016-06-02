
@foreach ($items as $item)
	@if(isset($item['sub']))
		<optgroup  label="{{$count}}{{ $item['ten']}} ">
			@if(isset($item['sub']))

			@include('admin.includes.indexeditproduct', array('items' => $item['sub'],'id'=>$id,'count'=>$count.' -'))

			@endif
		</optgroup>
	@else
		<option <?php if($id==$item['id']) echo 'selected=selected'; ?> value="{{$item['id']}}">{{$count}}{{$item['ten'] }}</option>

	@endif


@endforeach