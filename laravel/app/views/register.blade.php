<!doctype html>
<html>
<head>
<title>Registration</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
	<style>
		body 		{ padding-top:30px; }
		form 		{ padding-bottom:20px; }
	</style>
</head>
<body>

{{ Form::open(array('url' => 'register')) }}
<h2>Register to Use Our App Here</h2>

<p>
	@foreach($errors->all() as $error)
		<li>{{$error}}</li>
	@endforeach
</p>

<p>
	{{ Form::label('firstname', 'First Name') }}
	{{ Form::text('firstname', null, array('class' => 'form-control input-sm', 'placeholder' => 'John')) }}
</p>

<p>
	{{ Form::label('lastname', 'Last Name') }}
	{{ Form::text('lastname', null, array('class' => 'form-control input-sm', 'placeholder' => 'Doe')) }}
</p>

<p>
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email', Input::old('email'), array('class' =>'form-control input-sm', 'placeholder' => 'awesome@awesome.com')) }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', array('class' =>'form-control input-sm')) }}
</p>

<p>
	{{ Form::label('password_confirmation', 'Confirm Password') }}
	{{ Form::password('password_confirmation', array('class' =>'form-control input-sm', 'placeholder' => 'Confirm Password')) }}
</p>

<p>{{ Form::submit('Submit!', array('class' => 'btn btn-primary btn-lg')) }}</p>
{{ Form::close() }}
</body>
</html>