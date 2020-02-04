@extends('layouts.inc')

@section('title', 'Login Page')

@section('content')
<div class="login-cross">
	<div class="login">
	<h1>Login on DevProject</h1>
		{!! Form::open(['url' => '/login', 'method' => 'post']) !!}
		    <div class="form-group">
		    	{{Form::label('email', 'Email')}}
			    {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'john@gmail.com'] )}}
		    </div>
		    <div class="form-group">
		    	{{Form::label('password', 'Password')}}
			    {{Form::input('password', 'password', '', ['class' => 'form-control', 'placeholder' => 'Enter password'] )}}
		    </div>
		    <div>
		    	{{Form::submit('Login', ['class' => 'btn btn-primary btn-log'])}}
		    </div>
		{!! Form::close() !!}
		    <div>
		    	<button class="display-pswd"></button>
		    </div>
	</div>
	<div class="scnd-log-add">
		<p>Forgot password? - <a href="/account/recover_start">Recover account</a></p>
		<p>New here? Come and explore with us <a href="/register">Sign up</a></p>
	</div>
</div>
@endsection