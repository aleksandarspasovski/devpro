@extends('layouts.inc')

@section('title', 'Contact Page')

@section('content')
	<div id="notifications-box">
		<div class="header-notify">
			<h2>Display all notifications</h2>
		</div>
			@for($i=0; $i < 5; $i++)
				<div style="line-height: 3; padding: 0 10px;">
					<span><a href="#"><?php echo $req[0]->first_name; ?>  <?php echo $req[0]->last_name; ?></a> liked your photo <img style="max-width: 7%;" src="/picture/profile-pic.jpg"></span>
				</div>
			<hr style="margin: 0;">
			@endfor
		<div class="header-notifications">
			
		</div>
	</div>
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