@extends ('layouts.admin')


@section('content')
	<div class="item-list">
		<p class="instruct">Click on thumbnail to edit</p>
		@foreach ($items as $item) 
			<div class="item">
				<a href="{{route('editItem',['item' => $item->id])}}">				
					<img src="/artwork/thumbs/{{$currentPage->page}}_{{$item->name}}_thmb.jpg">	
				</a>
				<p>ID: {{$item->id}}</p>
				<p>Name: {{$item->name}}</p>
				<p>Title: {{$item->title}}</p>
				<p>Description: {!!$item->description!!}</p>
				<p>Sort Order: {{$item->sort_order}}</p>

				<ul>
					<li><a href="{{route('moveItemUp', ['id'=>$item->id])}}" class="btn btn-primary">Move Up</a></li>
					<li><a href="{{route('moveItemDown', ['id'=>$item->id])}}" class="btn btn-primary">Move Down</a></li>
					<li><a href=" {{route('deleteItem', ['id'=>$item->id])}}" class="btn btn-danger">Delete</a></li>
				</ul>				
			</div><!-- end item-->		
		@endforeach
	</div>

	
@endsection		