<!DOCTYPE html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<title>EXPERIENCE</title> 
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
					<label for="Start_Date">Start_Date:</label> 
					<input type="text" class="form-control" name="Start_Date"> 
				</div> 
			</div> 
			<div class="row"> 
				<div class="col-md-4">
				</div> 
				<div class="form-group col-md-4"> 
					<label for="End_Date">End_Date:</label> 
					<input type="text" class="form-control" name="End_Date"> 
				</div> 
			</div> 
		</div> 
		<div class="row"> 
				<div class="col-md-4">
				</div> 
				<div class="form-group col-md-4"> 
					<label for="Company_Name">Company_Name:</label> 
					<input type="text" class="form-control" name="Company_Name"> 
				</div> 
			</div> 
		</div> 
		<div class="row"> 
				<div class="col-md-4">
				</div> 
				<div class="form-group col-md-4"> 
					<label for="Designation">Designation:</label> 
					<input type="text" class="form-control" name="Designation"> 
				</div> 
			</div> 
		</div> 
		<div class="row"> 
				<div class="col-md-4">
				</div> 
				<div class="form-group col-md-4"> 
					<label for="Job_Description">Job_Description:</label> 
					<input type="text" class="form-control" name="Job_Description"> 
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
