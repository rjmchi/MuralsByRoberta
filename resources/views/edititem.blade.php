@extends ('layouts.admin')

@section('content')
	<div id="edit_item_form">
		<h4>EditItem</h4>
		
		{!! Form::open(['route'=>'updateItem'])!!}
		
			{!! Form::label('name', 'Item Name') !!}
			{!! Form::text('name',$item->name) !!}		

			{!! Form::label('title', 'Item Title')!!}
			{!! Form::text('title',$item->title) !!}
		
			{!! Form::label('description', 'Item Description')!!}
			{!! Form::textarea('description', $item->description) !!}	
		
			{!! Form::label('sort_order', 'Item Sort Order')!!}
			{!! Form::text('sort_order', $item->sort_order) !!}
				
			{!! Form::hidden('page_id', $currentPage->id)!!}
			{!! Form::hidden('item_id', $item->id) !!}				

			{!! Form::submit('Update Item', ['class'=>'btn btn-success']) !!}
			
		{!! Form::close() !!}		
		
</div><!-- end add_item_form -->

<div id="edit_image_form">
	<table width="100%">
		<tr>
			<th></th>
			<th>ID</th>
			<th>Name</th>
			<th>width</th>
			<th>height</th>
			<th>Sort Order</th>
			<th>Make Thumbnail</th>
		</tr>
		<?php $next_sort = 0; ?>
		@foreach($item->images as $image)
			@if($image->sort_order > $next_sort)
				<?php $next_sort = $image->sort_order;?>
			@endif
			<tr>
				<td>
				<?php $src = $currentPage->page . '_' . $image->name . '.jpg';?>
					<img src="/artwork/{{$src}}" width="150">
			</td>
			<td>{{$image->id}}</td>
			<td>{{$image->name}}</td>
			<td>{{$image->width}}</td>
			<td>{{$image->height}}</td>
			<td>{{$image->sort_order}}</td>
			<td><a href="">Make Thumbnail</a></td>
		</tr>		
		
		@endforeach

</table>	
</div>

<div id="add_image_form">
	<fieldset>
		{!!Form::open(['route'=>'addImage', 'files' => true])!!}
			{!!Form::hidden('item_id', $image->item_id)!!}
			{!!Form::hidden('page_name', $currentPage->page)!!}
			{!!Form::label('image_name', 'Image Name:')!!}
			{!!Form::text('image_name')!!}
			{!!Form::label('image_sort_order', 'Image Sort Order:')!!}
			{!!Form::file('userfile')!!}
			{!!Form::submit('Upload', ['class'=>'btn btn-success']) !!}		
		{!!Form::close()!!}

	</fieldset>
</div>

<a href="{{route('listItems', $currentPage->page)}}">Home</a>
@endsection		