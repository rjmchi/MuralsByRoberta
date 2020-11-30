@extends('layouts.auth')

@section('content')
	{!! Form::open(['route'=>'login'])!!}
		{!! Form::label('username', 'User Name')!!}
		{!! Form::text('username','',['placeholder'=>'User Name']) !!}

		{!! Form::label('password', 'Password')!!}
		{!! Form::text('password','',['placeholder'=>'Password']) !!}

		{!! Form::submit('Login', ['class'=>'btn btn-success']) !!}

		{!! Form::Label('remember', 'Remember Me') !!}
		{!! Form::checkbox('remember','', True)!!}

	{!! Form::close() !!}

	<a class="btn btn-link" href="{{ route('password.request') }}"> Forgot Your Password?</a>

@endsection
