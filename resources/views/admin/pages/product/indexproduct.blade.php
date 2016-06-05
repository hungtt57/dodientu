
@foreach ($items as $item)
	@if(isset($item['sub']))
		<optgroup label="{{$count}}{{ $item['name']}} ">
			@if(isset($item['sub']))

			@include('admin.pages.product.indexproduct', array('items' => $item['sub'],'count'=>$count.' -'))

			@endif
		</optgroup>
	@else
		<option value="{{$item['id']}}">{{$count}}{{$item['name'] }}</option>

	@endif


@endforeach