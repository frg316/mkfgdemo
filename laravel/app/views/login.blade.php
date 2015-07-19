<!doctype html>
<html>
<head>
<title>User Login</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
	<style>
		body 		{ padding-top:30px; }
		form 		{ padding-bottom:20px; }
	</style>
</head>
<body>

{{ Form::open(array('url' => 'login')) }}
<h1>Welcome to Our Social Web App Demo</h1>

<!-- if there are login errors, show them here -->
@if (Session::get('loginError'))
<div class ="alert alert-danger">{{Session::get('loginError')}}</div>
@endif
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email', Input::old('email'), array('class' =>'form-control input-sm', 'placeholder' => 'awesome@awesome.com')) }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', array('class' =>'form-control input-sm')) }}
</p>

<p>{{ Form::submit('Submit!', array('class' => 'btn btn-primary btn-lg')) }}</p>
{{ Form::close() }}
</body>
</html>