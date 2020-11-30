<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Murals By Roberta</title>
</head>

<body>
<div id="page-wrap">
	<div id="header"></div>
	@yield('banner')
	<div id="sidebar">
	@include('includes.menu')
		
</div><!-- end sidebar -->
		<div id="content">
		@yield ('content')
	</div><!-- end content-->
</div><!-- end page-wrap-->
</body>
</html>