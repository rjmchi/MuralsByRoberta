<ul id="menu">
	<li><a class="home" href="/">Home</a></li>
	@foreach ($pages as $page)
		<li><a class="{{$page->page}}" href="/gallery/{{$page->page}}">{{$page->name}}</a></li>
	@endforeach
	<li><a class="contactme" href="/contactme">Contact Me</a></li>
</ul>