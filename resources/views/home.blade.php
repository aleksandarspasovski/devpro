@extends('layouts.inc')

@section('title', 'Home Page')

@section('content')

@section('left-side')

	<div class="left-box">
		<div>
			<h5>You have new notification <a href=""><span>4</span></a></h5>
			<!-- style property for span -->
			<!-- background-color: red;
    color: #fff;
    display: inline-block;
    width: 30px;
    text-align: center;
    border-radius: 30px; -->
		</div>
	</div>

	<div class="left-box-1">
		<a href="{{ url('/home') }}"><img src="https://www.themandarin.com.au/content/uploads/2018/06/application-3426397_1920.jpg"></a>
	</div>

	@section('footer')
	@parent
		
	@endsection

@endsection

<div class="sort-feeds">
	<small class="sort-ab" title="Sort feeds">&darr; Sort feeds</small>
	<ul class="u-sort">
		<li><a href="<?php echo url('/home/nfeeds'); ?>">Newer</a></li>
		<li><a href="<?php echo url('/home/ofeeds'); ?>">Older</a></li>
	</ul>
</div>
<div class="percent-cnt"></div>
<div class="percent-cntr"></div>
<!-- system to make post -->
	<div id="posts">
		<div class="create-post">
			<div class="frame-builder">
				<button class="button-builder"><li class="write-post">Create post</li></button>
				<hr>
				<div class="builder">
					<div class="post-frame">
						<img src="picture/default-avatar.png">
						<li><a href="/users/account/<?php echo $req[0]->id ?>"><?php echo $req[0]->first_name; ?> <?php echo $req[0]->last_name; ?></a></li>
					</div>
					{!! Form::open(['url' => '/home/posts/', 'method' => 'post', 'id' => 'text-area', 'files' => true]) !!}
						<input type="file" name="file" id="file" class="file-icon" title="Add image">
						{{ Form::textarea('post', '', ['class' => 'form-textarea', 'placeholder' => 'What\'s on your mind? '] ) }}
						@csrf
						<div class="post-frame-image">
							<img id="preview">
							<span id="cancel-button"> x </span>
						</div>
						<p class="add-p"></p>
						{{ Form::submit('Post',[ 'id' => 'submiter']) }}
					{!! Form::close() !!}
				</div>
			</div>
		</div>

		<div class="create-frame">
			<button class="button-builder button-builder-job"><li class="write-post write-post-frame">Create job</li></button>
		</div>

	</div>
	<!---------------- comment box -------------->
	<div>
		<!-- <form method="POST" action="/" enctype="multipart/form-data">
			<input type="file" name="file" id="file" class="file-icon">
			<img id="preview" style="width: 50%; height: 200px; margin: 5px;">
		</form> -->
	</div>

	<div id="main">
		<div class="media" style="height: inherit;">
			<div class="frame-media" style="padding: 15px; height: inherit;">
				<div class="media-body">
					<div>
						<img src="picture/default-avatar.png" class="mr-3" alt="...">
						<h5 class="mt-0"><a href="/users/account/<?php echo $req[0]->id ?>"><?php echo $req[0]->first_name; ?> <?php echo $req[0]->last_name; ?></a> <small class="post_created"><?php echo date('d.m.Y. H:i A'); ?></small></h5>
					</div>
					<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
				</div>
				<div class="add-opt">
					<button class="more-opt">. . .</button>
				</div>
				<div class="pointimg">
					<!-- place img if isset, check from db , or if is not set img display it as a comments -->
					<a href="#"><img src="https://optimizacijasajta-internetmarketing.com/wp-content/uploads/2018/11/Integrisani-marketing-pojmovi.jpg" style="max-width: 100%;"></a>
				</div>
				<div class="likes">
					<button class="button1">Like</button>
					<li class="span1" value="0"></li>
				<button id="button2">Dislike</button>
					<!-- <li id="span2" value="0"></li>  -->
				</div>
			</div>
		</div>
		<hr>
		<div class="media" style="height: inherit;">
			<div class="frame-media" style="padding: 15px; height: inherit;">
				<div class="media-body">
					<div>
						<img src="picture/default-avatar.png" class="mr-3" alt="...">
						<h5 class="mt-0"><a href="#">(Company name)</a> <small class="post_created"><?php echo date('d.m.Y. H:i A'); ?></small></h5>
					</div>
					<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
				</div>
				<div class="add-opt">
					<button class="more-opt">. . .</button>
				</div>
				<div class="pointimg">
					<!-- place img if isset, check from db , or if is not set img display it as a comments -->
					<img src="https://cw-cbs.rs/wp-content/uploads/2018/03/marketing.jpg" style="max-width: 100%;">
				</div>
				<div class="likes">
					<button class="button1">Like</button>
					<li class="span1" value="0"></li>
				<button id="button2">Dislike</button>
					<!-- <li id="span2" value="0"></li>  -->
				</div>
			</div>
		</div>
		<hr>
		<div class="media" style="height: inherit;">
			<div class="frame-media" style="padding: 15px; height: inherit;">
				<div class="media-body">
					<div>
						<img src="picture/default-avatar.png" class="mr-3" alt="...">
						<h5 class="mt-0"><a href="#">(Company name)</a> <small class="post_created"><?php echo date('d.m.Y. H:i A'); ?></small></h5>
					</div>
					<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
				</div>
				<div class="add-opt">
					<button class="more-opt">. . .</button>
				</div>
				<div class="pointimg">
					<!-- place img if isset, check from db , or if is not set img display it as a comments -->
					<img src="https://irevolucija.net/wp-content/uploads/2018/06/google-marketing-e1530176005110.jpg" style="max-width: 100%;">
				</div>
				<div class="likes">
					<button class="button1">Like</button>
					<li class="span1" value="0"></li>
				<button id="button2">Dislike</button>
					<!-- <li id="span2" value="0"></li>  -->
				</div>
			</div>
		</div>
		<hr>
		<div class="media" style="height: inherit;">
			<div class="frame-media" style="padding: 15px; height: inherit;">
				<div class="media-body">
					<div>
						<img src="picture/default-avatar.png" class="mr-3" alt="...">
						<h5 class="mt-0"><a href="#">(Company name)</a> <small class="post_created"><?php echo date('d.m.Y. H:i A'); ?></small></h5>
					</div>
					<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
				</div>
				<div class="add-opt">
					<button class="more-opt">. . .</button>
				</div>
				<div class="pointimg">
					<!-- place img if isset, check from db , or if is not set img display it as a comments -->
					<img src="https://creativeweb.rs/slikestranice/Internet-marketing.jpg" style="max-width: 100%;">
				</div>
				<div class="likes">
					<button class="button1">Like</button>
					<li class="span1" value="0"></li>
				<button id="button2">Dislike</button>
					<!-- <li id="span2" value="0"></li>  -->
				</div>
			</div>
		</div>
		<hr>
		<div class="media" style="height: inherit;">
			<div class="frame-media" style="padding: 15px; height: inherit;">
				<div class="media-body">
					<div>
						<img src="picture/default-avatar.png" class="mr-3" alt="...">
						<h5 class="mt-0"><a href="#">(Company name)</a> <small class="post_created"><?php echo date('d.m.Y. H:i A'); ?></small></h5>
					</div>
					<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
				</div>
				<div class="add-opt">
					<button class="more-opt">. . .</button>
				</div>
				<!-- <div>
					place img if isset, check from db , or if is not set img display it as a comments
					<img src="https://optimizacijasajta-internetmarketing.com/wp-content/uploads/2018/11/Integrisani-marketing-pojmovi.jpg" style="max-width: 100%;">
				</div> -->
				<div class="likes">
					<button class="button1">Like</button>
					<li class="span1" value="0"></li>
				<button id="button2">Dislike</button>
					<!-- <li id="span2" value="0"></li>  -->
				</div>
			</div>
		</div>
		<hr>
		<div class="media" style="height: inherit;">
			<div class="frame-media" style="padding: 15px; height: inherit;">
				<div class="media-body">
					<div>
						<img src="picture/default-avatar.png" class="mr-3" alt="...">
						<h5 class="mt-0"><a href="#">(Company name)</a> <small class="post_created"><?php echo date('d.m.Y. H:i A'); ?></small></h5>
					</div>
					<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
				</div>
				<div class="add-opt">
					<button class="more-opt">. . .</button>
				</div>
				<div>
					<!-- place img if isset, check from db , or if is not set img display it as a comments -->
					<img src="https://optimizacijasajta-internetmarketing.com/wp-content/uploads/2018/11/Integrisani-marketing-pojmovi.jpg" style="max-width: 100%;">
				</div>
				<div class="likes">
					<button class="button1">Like</button>
					<li class="span1" value="0"></li>
				<button id="button2">Dislike</button>
					<!-- <li id="span2" value="0"></li>  -->
				</div>
			</div>
		</div>
		<hr>
	</div>

@endsection

@section('sidebar')
@parent
	<div class="m-sidebar">

	</div>
@endsection
