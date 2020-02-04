@extends('layouts.inc')

@section('title', 'Register page')

@section('content')
	<h1>Register page</h1>
	@if(session('err'))
		<div class="alert alert-danger">
			{{session('err')}}
		</div>
	@endif
	<div class="register">
		{!! Form::open(['url' => 'register/create', 'method' => 'post']) !!}
		    <div class="form-group">
		    	{{Form::label('first_name', 'First name')}}<span style="color: red;">*</span>
			    {{Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => 'Enter First name'] )}}
		    </div>
		    <div class="form-group">
		    	{{Form::label('last_name', 'Last name')}}
			    {{Form::text('last_name', '', ['class' => 'form-control', 'placeholder' => 'Enter Last name'] )}}
		    </div>
		    <div class="form-group">
		    	{{Form::label('nickname', 'Nickname')}}
			    {{Form::text('nickname', '', ['class' => 'form-control', 'placeholder' => 'Enter Nickname'] )}}
		    </div>
		    <div class="form-group">
		    	{{Form::label('email', 'Email')}}
			    {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email'] )}}
		    </div>
		    <div class="form-group">
		    	{{Form::label('password', 'Password')}}
			    {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter password'] )}}
		    </div>
		    <div class="form-group">
		    	{{Form::label('re_password', 'Re-Type Password')}}
			    {{Form::password('re_password', ['class' => 'form-control'] )}}
		    </div>
		    <div class="form-group">
		    	{{Form::label('birth', 'Date of birth')}}
			    {{Form::date('birth')}}
			    <small>Format (m/d/y)</small>
		    </div>
		    <div>
		    	{{Form::submit('Register', ['class' => 'btn btn-primary'])}}
		    </div>

		{!! Form::close() !!}
	</div>
@endsection

<!--side bar do not show on register page-->
@section('sidebar')
	<div class="m-sidebar">
		{{ Form::open(['url' => '/']) }}
			<div class="account">
				{{ Form::file('image') }}
			</div>
		{{ Form::close() }}
	</div>
@endsection
