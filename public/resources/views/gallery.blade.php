@extends('layouts.main')

@section ('banner')
	<div class="infiniteCarousel">
		<div class="wrapper">
			<ul>
				@foreach ($items as $item)
					<li>
	{{$item->name}} - {{ $item->title}}
						</li>
				@endforeach
				</ul>        
			</div> <!--end wrapper -->
		</div> <!--end infiniteCarousel -->	
@endsection

@section ('content')
<h1>Gallery {{$page->name}}</h1>
@endsection