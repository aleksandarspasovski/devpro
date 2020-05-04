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
<style type="text/css">

.text-white{
    color:#fff;    
}

.container-fluid,
.container-lg,
.container-md,
.container-sm,
.container-xs{
    padding: 8px;
    width: auto
}
.container-lg{
    max-width: 1200px
}
.container-md{
    max-width: 992px
}
.container-sm{
    max-width: 768px
}
.container-xs{
    max-width: 480px
}
.container-overlap {
    position: relative;
    padding: 32px 16px 64px
}
.container-overlap+.container-fluid,
.container-overlap+.container-lg,
.container-overlap+.container-md,
.container-overlap+.container-sm,
.container-overlap+.container-xs {
    padding-top: 0;
    margin-top: -32px
}
.container-overlap+.container-fluid .push-down,
.container-overlap+.container-lg .push-down,
.container-overlap+.container-md .push-down,
.container-overlap+.container-sm .push-down,
.container-overlap+.container-xs .push-down {
    display: block;
    height: 48px
}
.bg-indigo-500 {
    background-color: #3f51b5;
}
.container-overlap {
    position: relative;
    padding: 32px 16px 64px;
}
.fw {
    width: 100%!important;
}
.thumb64 {
    width: 64px!important;
    height: 64px!important;
}
.thumb48 {
    width: 48px!important;
    height: 48px!important;
}
.card{
    position: relative;
    border-radius: 3px;
    background-color: #fff;
    color: #4F5256;
    border: 1px solid rgba(0, 0, 0, .12);
    margin-bottom: 8px
}
.card .card-heading {
    padding: 15px;
    margin: 0
}
.card .card-heading>.card-title {
    margin: 0;
    font-size: 18px
}
.card .card-heading>.card-icon {
    float: right;
    color: rgba(255, 255, 255, .87);
    font-size: 20px
}
.card .card-heading>small {
    color: rgba(162, 162, 162, .92);
    letter-spacing: .01em
}
.card .card-body {
    position: relative;
    padding: 16px
}
.card .card-footer {
    padding: 16px;
    border-top: 1px solid rgba(162, 162, 162, .12)
}
.card .card-item {
    position: relative;
    display: block;
    min-height: 120px
}
.card .card-item>.card-item-text {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, .35);
    margin: 0;
    color: #fff;
    padding: 8px
}
.card .card-item>.card-item-text a {
    color: inherit
}
.card .card-item>.card-item-image {
    display: block;
    width: 100%;
    height: 190px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover
}
.card .card-item.card-media {
    min-height: 280px;
    background-repeat: repeat;
    background-position: 50% 50%;
    background-attachment: scroll;
    background-origin: padding-box
}
.card .card-item.card-media .card-media-quote {
    padding: 16px;
    font-size: 35px
}
.card .card-item.card-media .card-media-quote>a {
    color: inherit;
    text-decoration: none
}
.card .card-item.card-media .card-media-quote:before {
    content: '“';
    display: block;
    font-size: 2em;
    line-height: 1;
    margin-top: .25em
}
.btn-label:after,
.c-radio span:before,
.container-overlap:before,
.note-area.note-area-margin:after,
.switch span:after {
    content: ""
}
.card.card-transparent {
    background-color: transparent;
    border: 0;
    -webkit-box-shadow: 0 0 0 #000;
    box-shadow: 0 0 0 #000
}
.card .card-offset {
    position: relative;
    padding-bottom: 36px;
    z-index: 10
}
.card .card-offset>.card-offset-item {
    position: absolute;
    top: -24px;
    left: 15px;
    right: 15px
}
.card .card-toolbar {
    position: relative;
    width: 100%;
    min-height: 64px;
    font-size: 18px;
    line-height: 64px;
    padding-left: 22px;
    z-index: 2
}
.card .card-subheader {
    padding: 16px 0 16px 16px;
    line-height: .75em;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: .01em;
    color: rgba(0, 0, 0, .54)
}
.card .card-subheader+.mda-list>.mda-list-item:first-child>.mda-list-item-text,
.card>.btn {
    padding-top: 16px
}
.card .card-subheader+.mda-list>.mda-list-item:first-child>.mda-list-item-icon,
.card .card-subheader+.mda-list>.mda-list-item:first-child>.mda-list-item-img,
.card .card-subheader+.mda-list>.mda-list-item:first-child>.mda-list-item-initial {
    margin-top: 10px
}
.card .card-divider {
    display: block;
    margin-top: 10px;
    margin-bottom: 10px;
    border: 1px solid rgba(0, 0, 0, .12)
}
.card .card-divider+.card-offset {
    margin-top: -10px
}
.card>.ui-datepicker,
.card>.ui-datepicker-responsive>.ui-datepicker {
    width: 100%;
    -webkit-box-shadow: 0 0 0 #000;
    box-shadow: 0 0 0 #000;
    margin: 0
}
.card .editable-wrap,
.card>.ui-datepicker-responsive>.ui-datepicker>table,
.card>.ui-datepicker>table {
    width: 100%
}
.card>.list-group>.list-group-item {
    border-left: 0;
    border-right: 0
}
.card>.list-group>.list-group-item:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}
.card>.list-group>.list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    border-bottom: 0
}
.card>.table,
.card>.table-responsive>.table {
    margin-bottom: 0
}
.card>.table-responsive {
    border: 0
}
.card>.btn {
    border-radius: 0;
    width: 100%;
    padding-bottom: 16px;
    text-align: center
}
.card>.btn:last-child {
    border-bottom-right-radius: 2px;
    border-bottom-left-radius: 2px
}
.card.card-map {
    min-height: 280px
}
.modal.modal-left .modal-dialog>.modal-content,
.modal.modal-right .modal-dialog>.modal-content {
    min-height: 100%
}
.card.card-map .card-footer {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    border: 0;
    background-color: transparent
}
.mda-list {
    list-style-type: none;
    margin: 0;
    padding: 0
}
.mda-list>.mda-list-item {
    padding: 0 15px
}
.mda-list>.mda-list-item:after,
.mda-list>.mda-list-item:before {
    content: " ";
    display: table
}
.mda-list>.mda-list-item>.mda-list-item-icon,
.mda-list>.mda-list-item>.mda-list-item-img,
.mda-list>.mda-list-item>.mda-list-item-initial {
    float: left;
    width: 48px;
    height: 48px;
    margin-top: 20px;
    margin-bottom: 8px;
    margin-right: 20px;
    border-radius: 50%
}

.mda-list>.mda-list-item>.mda-list-item-icon {
    line-height: 42px;
    text-align: center
}

.mda-list>.mda-list-item>.mda-list-item-icon>em,
.mda-list>.mda-list-item>.mda-list-item-icon>i {
    line-height: inherit
}

.mda-list>.mda-list-item>.mda-list-item-initial {
    line-height: 50px;
    text-align: center;
    font-size: 22px;
    font-weight: 300
}

.mda-list>.mda-list-item>.mda-list-item-text {
    float: left;
    padding: 20px 0
}

.mda-list>.mda-list-item>.mda-list-item-text.mda-2-line {
    padding-top: 26px
}

.mda-list>.mda-list-item>.mda-list-item-text h3 {
    font-size: 16px;
    font-weight: 400;
    letter-spacing: .01em;
    margin: 0 0 6px;
    line-height: .75em
}

.mda-list>.mda-list-item>.mda-list-item-text h4 {
    font-size: 14px;
    letter-spacing: .01em;
    font-weight: 400;
    margin: 10px 0 5px;
    line-height: .75em
}

.mda-list>.mda-list-item>.mda-list-item-text p {
    font-size: 14px;
    font-weight: 500;
    margin: 0;
    line-height: 1.6em
}

.mda-list>.mda-list-item>.mda-list-item-img+.mda-list-item-text,
.mda-list>.mda-list-item>.mda-list-item-initial+.mda-list-item-text {
    width: calc(100% - 68px)
}

.mda-list.mda-list-bordered>.mda-list-item {
    border-bottom: 1px solid rgba(162, 162, 162, .16)
}

.card>.mda-list-bordered>.mda-list-item:last-child {
    border-bottom: 0
}

.media {
    margin-top: 15px
}

.media:first-child {
    margin-top: 0
}

.media,
.media-body {
    overflow: hidden;
    zoom: 1
}

.media-body {
    width: 10000px
}

.media-object.img-thumbnail {
    max-width: none
}
.container-overlap+.container-lg, .container-overlap+.container-md, .container-overlap+.container-sm, .container-overlap+.container-xs {
    padding-top: 0;
    margin-top: -32px;
}
.media-right,
.media>.pull-right {
    padding-left: 10px
}

.media-left,
.media>.pull-left {
    padding-right: 10px
}

.media-body,
.media-left,
.media-right {
    display: table-cell;
    vertical-align: top
}

.media-middle {
    vertical-align: middle
}

.media-bottom {
    vertical-align: bottom
}

.media-heading {
    margin-top: 0;
    margin-bottom: 5px
}

.media-list {
    padding-left: 0;
    list-style: none
}
</style>
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
				<li><a href="?feeds">Feeds</a></li>
				<li><a href="?photos" target="_parent">Photos</a></li>
				<li><a href="?about" id="about">About me</a></li>
				<li><a href="?cv">CV</a></li>
			</ul>
		</div>
		<!-- automaticlly load feeds page  -->
		<div>
			<div style="padding: 5px;">
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
						echo '<a href="/'.$image.'" target="_blank"><img src="/'.$image.'" class="listed-images" title="'.$title = substr($image, 8, -4).'"></a>';
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
      <div class="card card-transparent">
        <h5 class="card-heading">Top Friends</h5>
        <div class="mda-list">
          <div class="mda-list-item"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="List user" class="mda-list-item-img thumb48">
            <div class="mda-list-item-text mda-2-line">
              <h3><a href="#">Eric Graves</a></h3>
              <div class="text-muted text-ellipsis"><?php echo $req[0]->quote; ?></div>
            </div>
          </div>
          <div class="mda-list-item"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="List user" class="mda-list-item-img thumb48">
            <div class="mda-list-item-text mda-2-line">
              <h3><a href="#">Bruce Ramos</a></h3>
              <div class="text-muted text-ellipsis">Sed lacus nisl luctus</div>
            </div>
          </div>
          <div class="mda-list-item"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="List user" class="mda-list-item-img thumb48">
            <div class="mda-list-item-text mda-2-line">
              <h3><a href="#">Marie Hall</a></h3>
              <div class="text-muted text-ellipsis">Donec congue sagittis mi</div>
            </div>
          </div>
          <div class="mda-list-item"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="List user" class="mda-list-item-img thumb48">
            <div class="mda-list-item-text mda-2-line">
              <h3><a href="#">Russell Hart</a></h3>
              <div class="text-muted text-ellipsis">Donec convallis arcu sit</div>
            </div>
          </div>
          <div class="mda-list-item"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="List user" class="mda-list-item-img thumb48">
            <div class="mda-list-item-text mda-2-line">
              <h3><a href="#">Eric Graves</a></h3>
              <div class="text-muted text-ellipsis">Ut ac nisi id mauris</div>
            </div>
          </div>
          <div class="mda-list-item"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="List user" class="mda-list-item-img thumb48">
            <div class="mda-list-item-text mda-2-line">
              <h3><a href="#">Jessie Cox</a></h3>
              <div class="text-muted text-ellipsis">Sed lacus nisl luctus</div>
            </div>
          </div>
          <div class="mda-list-item"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="List user" class="mda-list-item-img thumb48">
            <div class="mda-list-item-text mda-2-line">
              <h3><a href="#">Jonathan Soto</a></h3>
              <div class="text-muted text-ellipsis">Donec congue sagittis mi</div>
            </div>
          </div>
          <div class="mda-list-item"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="List user" class="mda-list-item-img thumb48">
            <div class="mda-list-item-text mda-2-line">
              <h3><a href="#">Guy Carpenter</a></h3>
              <div class="text-muted text-ellipsis">Donec convallis arcu sit</div>
            </div>
          </div>
        </div>
	</div>
@endsection
