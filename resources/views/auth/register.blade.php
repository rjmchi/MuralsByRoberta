@extends('layouts.auth')

@section('content')
	{!! Form::open(['route'=>'register'])!!}
		{!! Form::label('username', 'User Name')!!}
		{!! Form::text('username','',['placeholder'=>'User Name']) !!}

		{!! Form::label('firstname', 'First Name')!!}
		{!! Form::text('firstname','',['placeholder'=>'First Name']) !!}

		{!! Form::label('lastname', 'Last Name')!!}
		{!! Form::text('lastname','',['placeholder'=>'Last Name']) !!}

		{!! Form::label('email', 'e-mail Address')!!}
		{!! Form::text('email','',['placeholder'=>'e-mail Address']) !!}

		{!! Form::label('password', 'Password')!!}
		{!! Form::text('password','',['placeholder'=>'Password']) !!}

		{!! Form::label('password-confirm', 'Confirm Password')!!}
		{!! Form::text('password-confirm','',['placeholder'=>'Confirm Password']) !!}

		{!! Form::submit('Register', ['class'=>'btn btn-success']) !!}


	{!! Form::close() !!}

@endsection
