@extends('layouts.main')
@section ('content')
<h3>Contact Me</h3>
<p>Please use the form below to send me an e-mail, or you can call me at (480) 363-2961</p>

{!! Form::open(array('url' => '/contact')) !!}
	{!! Form::label('name', 'Name:') !!}
	{!! Form::text('name', '', array('size'=>'43'))!!}

	{!! Form::label('email', 'e-mail:') !!}
	{!! Form::email('email', '', array('size'=>'43'))!!}

	{!! Form::label('subject', 'Subject:') !!}
	{!! Form::text('subject', '', array('size'=>'43'))!!}

	{!! Form::label('message', 'Message:') !!}
	{!! Form::textarea('message', null, array('rows'=> '4', 'cols'=>'40'))!!}

		<br>
	{!! Form::submit('Send Mail', array('class'=>'btn'))!!}

{{ Form::close()}}

@endsection
