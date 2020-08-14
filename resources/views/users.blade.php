@extends('layouts.inc')

@section('left-side')
<div>
	<div class="card bg-light mb-3" style="max-width: 18rem;">
		<div class="card-header">Notification</div>
		<div class="card-body">
			<h5 class="card-title">You have <a href="#">0</a> new notification</h5>
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		</div>
		<li class="prof-name" style="margin-top: 15px;"><a href="<?php echo url('/logout'); ?>">Logout</a></li>
	</div>
</div>
@endsection

@section('footer')

@endsection

@section('content')

<div id="user-card">
	<div class="frame-profile">
		<img src="{{ url('/') }}/picture/background-image2.jpg">
		<div class="profile-options">
			<ul>
				<li><a href="">Upload Image</a></li>
				<li><a href="">Remove Image</a></li>
				<li><a target="_blank" href="{{ url('/') }}/picture/profile-pic.jpg">Preview Image</a></li>
			</ul>
		</div>
		<div class="full-profile-img">
			<a id="profile-options" href="{{ url('/') }}/picture/profile-pic.jpg">
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
			<span><a href="{{ Request::url() }}?list_all_followers">Followers 15</a></span>
			<span><a href="{{ Request::url() }}?list_all_following">Following 5</a></span>
		</div>
	</div>
	<div class="extra-button">
		<ul>
			<li><a href="?feeds">Feeds</a></li>
			<li><a href="?photos" target="_parent">Photos</a></li>
			<li><a href="?activity" id="about">Activity</a></li>
			<li><a href="?cv">CV</a></li>
		</ul>
	</div>
	<!-- automaticlly load feeds page  -->
	<div>
		<div style="padding: 25px;">
			<!-------------------- 1st load feeds ------------------------>
			<?php if(isset($_GET['feeds'])): ?>

			<?php for ($i=0; $i < 10; $i++) :?>
				<div class="feeds newer-feeds">
					<div class="frame-feeds">
						<div class="head-feeds-name">
							<img src="/picture/profile-pic.jpg">
							<li><a href="">Aleksandar Spasovski</a></li>
							<small>{{date('Y/m/d H:ia')}}</small>
							<button>...</button>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven</p>
						<img style="max-width: 100%;" src="https://optimizacijasajta-internetmarketing.com/wp-content/uploads/2018/11/Integrisani-marketing-pojmovi.jpg">
						<div>
							<ul style="display: flex; margin: 0; padding: 0px;">
								<li style="float: left; list-style: none; margin-left: 10px;"><a href="">Like</a></li>
								<li style="float: left; list-style: none; margin-left: 10px;"><a href="">Comment</a></li>
								<li style="float: left; list-style: none; margin-left: 10px;"><a href="">Share</a></li>
							</ul>
						</div>
					</div>
				</div>
				<hr>
			<?php endfor; ?>

			<?php endif; ?>
			<!-------------------- 1st load feeds ------------------------>

			<?php
			if (isset($_GET['photos'])) {
				?>
				<div class="show-albums">
					<ul>
						<li><a href="#profile_pictures">Profile pictures</a></li>
						<li><a href="#recent_added">Recent uploaded</a></li>
						<li><a href="#all_pictures">All Pictures</a></li>
					</ul>
				</div>
				<?php
				$directory = 'userimg/';
				$images = glob($directory. "*");
					// var_dump($images);die;
				foreach($images as $image)
				{
					echo '<a href="/'.$image.'" target="_blank"><img src="/'.$image.'" class="listed-images" title="'.$image.'"></a>';
				}	
			}

			?>
		</div>
		<!-- posts of user!!! -->
		<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->
		<div class="cv-card-box">
			<?php if (isset($_GET['cv'])): ?>
				<h2 class="cv-card-name"><?php echo $req[0]->first_name, ' ', $req[0]->last_name, '\'s'; ?> CV</h2>
				<hr class="cv-card-hr">
				<form>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4">Email</label>
							<input type="email" class="form-control" id="inputEmail4" placeholder="johndoe@gmail.com">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Password</label>
							<input type="password" class="form-control" id="inputPassword4">
						</div>
					</div>
					<div class="form-group">
						<label for="inputAddress">Address</label>
						<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
					</div>
					<div class="form-group">
						<label for="inputAddress2">Address 2</label>
						<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputCity">City</label>
							<input type="text" class="form-control" id="inputCity" placeholder="Bangladesh">
						</div>
						<div class="form-group col-md-4">
							<label for="inputState">State</label>
							<select id="inputState" class="form-control">
								<option selected>Choose...</option>
								<option>Angora</option>
								<option>Bulgaria</option>
								<option>Serbia</option>
								<option>Bosnia and Herzegovina</option>
								<option>Croatia</option>
								<option>Slovenia</option>
								<option>Macedonia</option>
								<option>Montenegro</option>
							</select>
						</div>
						<div class="form-group col-md-2">
							<label for="inputZip">Zip</label>
							<input type="text" class="form-control" id="inputZip">
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck">
							<label class="form-check-label" for="gridCheck">
								Check me out
							</label>
						</div>
					</div>
					<div class="input-group mb-3">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
							<label class="custom-file-label" for="inputGroupFile01">Upload file</label>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</form>
			<?php endif ?>
		</div>
	</div>
</div>
<div class="user">
	<h1 style="text-align: center;">Show user additional info</h1>
</div>
@endsection

@section('sidebar')
<!-- extends parent class, just in case for mentioning -->

<div class="sidebar-friends-box">
	<div class="top-friends-box">
		<h1>Last added</h1>
			
		<?php foreach ($req1 as $usr) :?>
			<div class="top-friends-list">
				<img src="/picture/profile-pic.jpg">
				<li><a href="/users/dpro/{{ $usr->first_name }}{{ $usr->last_name }}-{{ $usr->id }}">{{ $usr->first_name }} {{ $usr->last_name }}</a></li>
				<span>{{$usr->quote}}</span>
			</div>
		<?php endforeach; ?>

	</div>
</div>

@endsection
