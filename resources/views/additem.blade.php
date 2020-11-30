@extends ('layouts.admin')

@section('content')
	<div id="add_item_form">
		<h3>Add Item</h3>
		{!! Form::open(['route'=>'saveItem'])!!}

			{!! Form::label('name', 'Item Name')!!}
			{!! Form::text('name','',['placeholder'=>'Item Name']) !!}
			{!! Form::label('title', 'Item Title')!!}
			{!! Form::text('title','',['placeholder'=>'Item Title']) !!}
			{!! Form::label('description', 'Item Description')!!}
			{!! Form::textarea('description', '', ['placeholder'=>'Item Description']) !!}
			{!! Form::label('sort_order', 'Item Sort Order')!!}
			{!! Form::text('sort_order', $sort_order) !!}
			{!! Form::hidden('page_id', $currentPage->id)!!}
			{!! Form::hidden('page', $currentPage->page)!!}

			{!! Form::submit('Add Item', ['class'=>'btn btn-success']) !!}

		{!! Form::close() !!}
</div><!-- end add_item_form -->

<a href="{{route('listItems', $currentPage->page)}}">Home</a>
@endsection		