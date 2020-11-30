<div id="imagearea" class="artwork">
	<h2>{{$item->title}}</h2>

	@if ($image->prev_image) 
		<a href="javascript:GetImage({{$item->id}}, {{$image->prev_image}})" title="Previous Image" id="prev" alt="Previous Image">Prev</a>
	@endif

	<img src="{{$filename}}" height="{{$image->height}}" width="{{$image->width}}" alt="{{$item->title}}">
	
	@if ($image->next_image)
		<a href="javascript:GetImage({{$item->id}},{{$image->next_image}})" title="Next Image" id="next" alt="Next Image">Next</a>
	@endif
	
	<div class="description">
		{!!$item->description!!}
	</div> <!-- end description -->
			
	</div> <!-- end imagearea -->
