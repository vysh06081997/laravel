<!DOCTYPE html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<title>SIGN UP</title> 
	<link rel="stylesheet" href="{{asset('css/app.css')}}"> 
</head> 
<body> 
	<div class="container"> 
		<h2>Create A Form</h2><br />
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
					<label for="roleid">roleid:</label> 
					<input type="text" class="form-control" name="roleid"> 
				</div> 
			</div> 
			<div class="row"> 
				<div class="col-md-4">
				</div> 
				<div class="form-group col-md-4"> 
					<label for="emailid">emailid:</label> 
					<input type="text" class="form-control" name="emailid"> 
				</div> 
			</div> 
		<div class="row"> 
				<div class="col-md-4">
				</div> 
				<div class="form-group col-md-4"> 
					<label for="firstname">firstname:</label> 
					<input type="text" class="form-control" name="firstname"> 
				</div> 
			</div> 
			<div class="row"> 
				<div class="col-md-4"></div> 
				<div class="form-group col-md-4"> 
					<label for="lastname">lastname:</label> 
					<input type="text" class="form-control" name="lastname"> 
				</div> 
			</div> 
			<div class="row"> 
				<div class="col-md-4"></div> 
				<div class="form-group col-md-4"> 
					<label for="username">username:</label> 
					<input type="text" class="form-control" name="username"> 
				</div> 
			</div> 
			<div class="row"> 
				<div class="col-md-4"></div> 
				<div class="form-group col-md-4"> 
					<label for="password">password:</label> 
					<input type="text" class="form-control" name="password"> 
				</div> 
			</div> 
		<div class="row"> 
			<div class="col-md-4">
			</div> 
			<div class="form-group col-md-4"> 
				<button type="submit" class="btn btn-success" style="margin-left:38px">Submit</button> 
			</div> 
		</div> 
	</form> 
</div> 
</body> 
</html>
