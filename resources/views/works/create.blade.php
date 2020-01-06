<!DOCTYPE html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<title>WORKS</title> 
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
					<label for="projecttype">projecttype:</label> 
					<input type="text" class="form-control" name="projecttype"> 
				</div> 
			</div> 
			<div class="row"> 
				<div class="col-md-4">
				</div> 
				<div class="form-group col-md-4"> 
					<label for="projectname">projectname:</label> 
					<input type="text" class="form-control" name="projectname"> 
				</div> 
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
