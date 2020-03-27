@extends('layouts.inc')

@section('title', 'Jobs Page')

@section('content')

@section('left-side')
	<div class="re">
		<div class="list-group">
		  <p href="#" class="disa">Some text here</p>
		  <a href="#" class="list-group-item list-group-item-action">Button 1</a>
		  <a href="#" class="list-group-item list-group-item-action">Button 2</a>
		  <a href="#" class="list-group-item list-group-item-action">Button 3</a>
		  <a href="#" class="list-group-item list-group-item-action">Button 4</a> 
		</div>
	</div>
@show

<?php 
	// $str = 'Job description or positions, frontend developer Job ';
	// var_dump(strlen($str));
 ?>	
	<div class="card-wrappers">
		<input type="hidden" value="<?php echo hash('sha1', session()->get('logged')); ?>">
		<div class="card-search">
			<div class="inner-card-search">
				<form>
					<input type="text" name="job" placeholder="Enter job position" autocomplete="on">
					<input type="text" name="location" placeholder="Enter job location">
					<button>Search</button>
				</form>
			</div>
		</div>
		<div class="inner-card-wrapper card-bck spinner">
			<div class="text-center">
			  <div class="spinner-border" role="status">
			    <span class="sr-only">Loading...</span>
			  </div>
			</div>
			@if(isset($_GET['job_err']))
				<?php echo 'There is no job'; ?>
			@endif
		</div>
	</div>

@endsection

@section('sidebar')

@stop
