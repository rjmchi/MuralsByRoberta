<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Murals By Roberta') }}</title>

    <!-- Styles -->

	<link rel="stylesheet" href="{{asset('css/style.css')}}">  
	@yield('styles')
</head>

<body id="{{$page->page}}">
<div id="page-wrap">
	<div id="header"></div>
	@yield('banner')
	
	@section ('sidebar')
	<div id="sidebar">
	@include('includes.menu')
		@show	
</div><!-- end sidebar -->

		<div class="content">
		@yield ('content')
	</div><!-- end content-->
</div><!-- end page-wrap-->
	@yield('scripts')
</body>
</html>