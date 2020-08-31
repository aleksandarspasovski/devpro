<!-- TODO:
*
*Make Admin contoller and do all admin stuff
*
 -->
@extends('layouts.inc')

@section('title', 'Home Page')

@section('content')

@section('left-side')

	<div class="left-box">
		<div class="card">
			<span class="pin">pin</span>
		  <div class="card-body">
		    <blockquote class="blockquote mb-0">
		      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		      <footer class="blockquote-footer">Someone famous in <cite style="color: red;" title="Source Title">Source Title</cite></footer>
		    </blockquote>
		  </div>
		</div>
	</div>

	<div class="left-box-1">
		<a href="{{ url('/home') }}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRfcLRIjM3S0l05i-ArTMo0mg_-PzcF6SLQFkK6LRQ8E6cDFJdg&usqp=CAU"></a>
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
						<li><a href="/users/account/<?php echo $req[0]->id ?>?feeds"><?php echo $req[0]->first_name; ?> <?php echo $req[0]->last_name; ?></a></li>
					</div>
					{!! Form::open(['url' => '/home/posts/', 'method' => 'post', 'enctype="multipart/form-data"', 'id' => 'text-area', 'files' => true]) !!}
						<input type="file" name="file" id="file" class="file-icon" title="Add image">
						{{ Form::textarea('post', '', ['class' => 'form-textarea', 'name' => 'text', 'placeholder' => 'What\'s on your mind? '] ) }}
						<input type="hidden" name="time" value="<?php echo date('d/M/Y H:i a'); ?>">
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
			<button class="button-builder button-builder-job"><li class="write-post-frame">Create job</li></button>
		</div>
		<div class="create-frame">
			<button class="button-builder button-builder-job"><li class="write-post-frame">Create image</li></button>
		</div>
		<div class="create-frame">
			<button class="button-builder button-builder-job"><li class="write-post-frame">Create link</li></button>
		</div>

	</div>

	<div id="main">
		<div class="media media-extern">
			<div class="frame-media">
				<div class="media-body">
					<div>
						<img src="picture/default-avatar.png" class="mr-3" alt="...">
						<h5 class="mt-0"><a href="/users/account/<?php echo $req[0]->id ?>"><?php echo $req[0]->first_name; ?> <?php echo $req[0]->last_name; ?></a></h5>
						<small class="post_created"><?php echo date('d.m.Y. H:i A'); ?></small>
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
				<button id="button2">Comment</button>
					<!-- <li id="span2" value="0"></li>  -->
				</div>
			</div>
		</div>
		<hr>
		<div class="media media-extern">
			<div class="frame-media">
				<div class="media-body">
					<div>
						<img src="picture/default-avatar.png" class="mr-3" alt="...">
						<h5 class="mt-0"><a href="#">(Company name / user name)</a></h5>
						<small class="post_created"><?php echo date('d.m.Y. H:i A'); ?></small>
					</div>
					<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
				</div> 
				<div class="add-opt">
					<button class="more-opt">. . .</button>
				</div>
				<div class="pointimg">
					<!-- place img if isset, check from db , or if is not set img display it as a comments -->
					<!-- <img src="https://cw-cbs.rs/wp-content/uploads/2018/03/marketing.jpg" style="max-width: 100%;"> -->
				</div>
				<div class="likes">
					<button class="button1">Like</button>
					<li class="span1" value="0"></li>
				<button id="button2">Comment</button>
					<!-- <li id="span2" value="0"></li>  -->
				</div>
			</div>
		</div>
		<hr>
		<div class="media media-extern">
			<div class="frame-media">
				<div class="media-body">
					<div>
						<img src="picture/default-avatar.png" class="mr-3" alt="...">
						<h5 class="mt-0"><a href="#">(Company name / user name)</a></h5>
						<small class="post_created"><?php echo date('d.m.Y. H:i A'); ?></small>
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
				<button id="button2">Comment</button>
					<!-- <li id="span2" value="0"></li>  -->
				</div>
			</div>
		</div>
		<hr>
		<div class="media media-extern">
			<div class="frame-media">
				<div class="media-body">
					<div>
						<img src="picture/default-avatar.png" class="mr-3" alt="...">
						<h5 class="mt-0"><a href="#">(Company name / user name)</a></h5>
						<small class="post_created"><?php echo date('d.m.Y. H:i A'); ?></small>
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
				<button id="button2">Comment</button>
					<!-- <li id="span2" value="0"></li>  -->
				</div>
			</div>
		</div>
		<hr>
		<div class="media media-extern">
			<div class="frame-media">
				<div class="media-body">
					<div>
						<img src="picture/default-avatar.png" class="mr-3" alt="...">
						<h5 class="mt-0"><a href="#">(Company name / user name)</a></h5>
						<small class="post_created"><?php echo date('d.m.Y. H:i A'); ?></small>
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
				<button id="button2">Comment</button>
					<!-- <li id="span2" value="0"></li>  -->
				</div>
			</div>
		</div>
		<hr>
		<div class="media media-extern">
			<div class="frame-media">
				<div class="media-body">
					<div>
						<img src="picture/default-avatar.png" class="mr-3" alt="...">
						<h5 class="mt-0"><a href="#">(Company name / user name)</a></h5>
						<small class="post_created"><?php echo date('d.m.Y. H:i A'); ?></small>
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
				<button id="button2">Comment</button>
					<!-- <li id="span2" value="0"></li>  -->
				</div>
			</div>
		</div>
		<hr>
	</div>

@endsection

@section('sidebar')
@parent
	<!-- <div class="m-sidebar">

	</div> -->
@endsection
