@section('sidebar')
	<div class="m-sidebar">
		@if (Session::has('premium', 'logged'))
			<div class="premium-user">
				<h3 class="premium">premium</h3>
			</div>
		@endif

		@if (Session::has('logged'))
			<div class="account">
				<div class="back-img">
					<img src="picture/background-image2.jpg">
				</div>
				<div class="profile">
					<a href="picture/profile-pic.jpg" target="_blank"><img src="picture/profile-pic.jpg"></a>
				</div>
				<li class="prof-name">
				<!-- here is hashed id of user, delete thi 19 and 20 lines later!!!!! -->
					<?php $route_path = '$req[0]->id'; ?>
					<?php $rp = hash('md5', $route_path); ?>
					<a href="/users/account/<?php echo $rp; ?>"><?php echo $req[0]->first_name; ?> <?php echo $req[0]->last_name; ?></a>
					<!-- part for QUOTE -->
					<p><?php echo $req[0]->quote; ?></p>
				</li>
				<li class="prof-name">
					<a href="<?php echo url('/logout'); ?>">Logout</a>
				</li>
				<div class="extra-in">
				<!------ for now just leave like this, in future do this validation in js ----->
					@if (session()->has('empty'))
						<div>
							<p style="color: red;">{{ session('empty') }}</p>
							<a href="">Back</a>
						</div>
					@else
						@if (isset($req[0]->quote))
							<div class="update-form">
								{!! Form::open(['url' => 'saveQuote/'. $req[0]->id, 'method' => 'post']) !!}
									<div class="form-sb">
									    {{Form::text('message', '', ['class' => 'form-control', 'placeholder' => 'Leave a quote', 'maxlength' => 60] )}}
								    </div>
								    {{Form::submit('Post', ['class' => 'btn btn-primary btn-w'])}}
								{!! Form::close() !!}
							</div>
						@else
							{!! Form::open(['url' => 'saveQuote/'. $req[0]->id, 'method' => 'post']) !!}
								<div class="form-sb">
								    {{Form::text('message', '', ['class' => 'form-control', 'placeholder' => 'Leave a quote', 'maxlength' => 60] )}}
							    </div>
							    {{Form::submit('Post', ['class' => 'btn btn-primary btn-w'])}}
							{!! Form::close() !!}
						@endif
					@endif
				</div>
			</div>
		@endif
	</div>
	<div class="m-sidebar">
		<div class="sidebar-ab">
			<h4># Hashtags <span style="font-size: 10px">( Based on your profile )</span></h4>
			<div class="hashtags-link">
				<ul>
					<li><a href="#">nature</a></li>
					<li><a href="#">house</a></li>
					<li><a href="#">fashion</a></li>
					<li><a href="#">paris</a></li>
					<li><a href="#">sun</a></li>
					<li><a href="#">motivation</a></li>
					<li><a href="#">animals</a></li>
					<li><a href="#">dog</a></li>
					<li><a href="#">clouds</a></li>
					<li><a href="#">beach</a></li>
				</ul>
				<!-- find more hashtags -->
				<li class="find-more"><a href="#">Discover more hashtags</a></li>
			</div>
		</div>
	</div>
@show