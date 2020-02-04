@extends('layouts.inc')

@section('title', 'Messages Page')
<!-- Display all messages form db -->
@section('content')
	<h2>Messages Page</h2>
	@if(count($messages) > 0)
		@foreach($messages as $message)
			<ul class="list-group">
				<li class="list-group-item"><span style="color: #6c7477;font-style: italic;font-weight: 500;text-decoration: underline;">Nickname</span> : {{$message->name}} </li>
				<li class="list-group-item"><span style="color: #6c7477;font-style: italic;font-weight: 500;text-decoration: underline;">Posted on</span> : {{$message->created_at}} </li>
				<li class="list-group-item"><span style="color: #6c7477;font-style: italic;font-weight: 500;text-decoration: underline;">Comment</span> : {{$message->message}} </li>
			</ul>
		@endforeach
	@endif
@endsection

@section('sidebar')
@parent
<div class="m-sidebar">
	<div class="sidebar-ab">
		<p>dasdasd adsasdasdasd </p>
		<p>dasdasd adsasdasdasd </p>
		<p>dasdasd adsasdasdasd </p>
	</div>
</div>
@endsection