@extends('layouts.inc')

@section('title', 'Contact Page')

@section('content')
	<h2>Contact page</h2>
	{!! Form::open(['url' => 'contact/submit']) !!}
	    <div class="form-group">
	    	{{Form::label('nickname', 'Nickname')}}
		    {{Form::text('nickname', 'unknown', ['class' => 'form-control', 'placeholder' => 'Enter name'] )}}
	    </div>
	    <div class="form-group">
	    	{{Form::label('message', 'Message')}}
		    {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter message'] )}}
	    </div>
	    <div>
	    	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	    </div>
	{!! Form::close() !!}
@endsection

@section('sidebar')
@parent
	<div class="m-sidebar">
		<div class="sidebar-ab">
			<p>ddadadsdasa adasd asd</p>
		</div>
		<div class="sidebar-ab">
			<p>ddadadsdasa adasd asd</p>
		</div>
		<div class="sidebar-ab">
			<p>ddadadsdasa adasd asd</p>
		</div>
		<div class="sidebar-ab">
			<p>ddadadsdasa adasd asd</p>
		</div>
	</div>
@endsection