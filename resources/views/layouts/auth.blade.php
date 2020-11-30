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

	<link rel="stylesheet" href="{{asset('css/app.css')}}">  
	<link rel="stylesheet" href="{{asset('css/admin.css')}}">  	
	@yield('styles')
</head>

<body>
<div id="page-wrap">
	<div id="header">
		<h2>Murals by Roberta &mdash; Authorization</h2>

	</div><!-- end header-->
		
		<div class="content">
			@include ('includes.messages')
			@yield ('content')
	</div><!-- end content-->
</div><!-- end page-wrap-->
	@yield('scripts')
</body>
</html>