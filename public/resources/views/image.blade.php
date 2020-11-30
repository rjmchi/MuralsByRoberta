<div id="imagearea" class="artwork">
	<h2>{{$image->title}}</h2>
	@if ($image->prev_image) 
		<a href="javascript:GetImage({{$image->prev_image}}, '{{$page}}')" title="Previous Image" id="prev" alt="Previous Image">Prev</a>
	@endif
	
		<img src="{{$image->filename}}" height="{{$image->height}}" width="{{$image->width}}" alt="{{$image->title}}">
	
		@if ($image->next_image > 0)
			<a href="javascript:GetImage({{$image->next_image}}, '{{$page}}')" title="Next Image" id="next" alt="Next Image">Next</a>
		@endif

	
		<div class="description">
			{{$image->description}}
		</div> <!-- end description -->
			
	</div> <!-- end imagearea -->
