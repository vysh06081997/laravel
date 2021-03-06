<!DOCTYPE html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<title>PROJECT TO DISCUSS</title> 
	<link rel="stylesheet" href="{{asset('css/app.css')}}"> 
</head> 
<body> 
	<div class="container"> 
		<h2>Project to discuss</h2><br />
		@if ($errors->any()) 
		<div class="alert alert-danger"> 
			<ul> 
				@foreach ($errors->all() as $error) 
				<li>{{ $error }}</li> 
			@endforeach 
		</ul> 
	</div><br /> 
	@endif 
	@if (\Session::has('success')) 
	<div class="alert alert-success"> 
		<p>{{ \Session::get('success') }}</p> 
	</div><br /> 
	@endif 
		<form method="post" action="{{url('forms')}}">
			{{csrf_field()}}
			<div class="row"> 
				<div class="col-md-4"></div> 
				<div class="form-group col-md-4"> 
					<label for="name">name:</label> 
					<input type="text" class="form-control" name="name"> 
				</div> 
			</div> 
			<div class="row"> 
				<div class="col-md-4">
				</div> 
				<div class="form-group col-md-4"> 
					<label for="email">email:</label> 
					<input type="text" class="form-control" name="email"> 
				</div> 
			</div> 
		</div> 
		<div class="row"> 
				<div class="col-md-4">
				</div> 
				<div class="form-group col-md-4"> 
					<label for="message">message:</label> 
					<input type="text" class="form-control" name="message"> 
				</div> 
			</div> 
		</div> 
		<div class="row"> 
			<div class="col-md-4">
			</div> 
			<div class="form-group col-md-4"> 
				<button type="submit" class="btn btn-success" style="margin-left:38px"> <a href="mailto:vysali.pughazhendi@gmail.com?Subject=Hello%20again" >Submit</button> 
			</div> 
		</div> 
	</form> 
</div> 
</body> 
</html>
