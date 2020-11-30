@extends('layouts.main')
@section ('styles')
<link rel="stylesheet" href="{{asset('css/carousel.css')}}">  
@endsection
@section ('banner')
	<div class="infiniteCarousel">
		<div class="wrapper">
			<ul>
				@foreach ($items as $item)
					<li>
						<a href="javascript:GetImage({{$item->id}}, 0)" title="{{$item->title}}">
							<img src="/artwork/thumbs/{{$page->page}}_{{$item->name}}_thmb.jpg" height="100" width="100" alt="{{$item->title}}" id="{{$item->name}}" class="thumb">
						</a>
					</li>
				@endforeach
				</ul>        
			</div> <!--end wrapper -->
		</div> <!--end infiniteCarousel -->	
@endsection

@section ('content')
	<div id="gallery_content">
		<div id="imagearea" class="artwork">
		
	
		<div class="description">
		</div> <!-- end description -->
			
	</div> <!-- end imagearea -->



		</div> <!-- end gallery_content -->
@endsection

@section ('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script></script>

<script src="{{asset('js/carousel.js')}}"></script>

<script type="text/javascript">
	$(document).ready(function() {
		GetImage({{$items[0]->id}},0);
	});
	

function GetImage(id, image)
{
	$('#imagearea').remove();

	var event_data = {
		id: id,
		image: image,
		ajax: true,
		_token: "{{ csrf_token() }}",		
		};
		
	$.ajax({
		url: "{{url('/gallery/showImage')}}",		
		type: 'POST',
		data: event_data,
		success: function(msg) {
			$('#gallery_content').append( msg );
		},
 		error: function(XMLHttpRequest, textStatus, errorThrown) { 
			console.log(XMLHttpRequest);
        	alert("Status: " + textStatus); alert("Error: " + errorThrown); 
			$('#gallery_content').append( errorThrown );			
		},
	});
}
</script>
@endsection