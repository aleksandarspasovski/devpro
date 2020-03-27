@extends('layouts.inc')

@section('left-side')
	<div>
		<div class="card bg-light mb-3" style="max-width: 18rem;">
		  <div class="card-header">Header</div>
		  <div class="card-body">
		    <h5 class="card-title">Light card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  </div>
		    <li class="prof-name" style="margin-top: 15px;"><a href="<?php echo url('/logout'); ?>">Logout</a></li>
		</div>
	</div>
@endsection

@section('footer')
	<div>
		<div class="alert alert-success" role="alert">
		  <h4 class="alert-heading">Well done!</h4>
		  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
		  <hr>
		  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
		</div>
	</div>

@endsection

@section('content')
	<div id="user-card">
		<div class="frame-profile">
			<img src="{{ url('/') }}/picture/background-image2.jpg">
			<div class="full-profile-img">
				<a href="{{ url('/') }}/picture/profile-pic.jpg">
					<img src="{{ url('/') }}/picture/profile-pic.jpg">
				</a>
			</div>
		</div>
		<div class="desc-user-prof">
			<div class="header-desc-user">
				<h1><?php echo $req[0]->first_name; echo ' '; echo $req[0]->last_name; ?></h1>
			</div>
			<div class="show-stats">
				<p><?php echo $req[0]->quote; ?> <a style="font-size: 12px;" href="?edit=&user_id=">Edit</a></p>
				<p>Belgrade,Serbia</p>
				<?php if (isset($_GET['friends'])): ?>
				<a href="/users/account/?friends=true&id=1&name=aleksandar">Click for input box</a>
					<?php echo '<input type="text" name="friends" value="'.$req[0]->first_name.'" disabled>' ?>
				<?php endif ?>
			</div>
		</div>
		<div class="extra-button">
			<ul>
				<li><a href="#feeds">Feeds</a></li>
				<li><a href="#photos">Photos</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#cv">CV</a></li>
			</ul>
		</div>
		<!-- automaticlly load feeds page  -->
		<div>
			<div>
				<!-- posts of user!!! --> 
			</div>
		</div>
	</div>
	<div class="user">
		<h1 style="text-align: center;">Show user additional info</h1>
	</div>
@endsection

@section('sidebar')
<!-- extends parent class, just in case for mentioning -->
	<div class="sidebar-adds">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
@endsection
