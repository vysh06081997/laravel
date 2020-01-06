
<!DOCTYPE html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<title>Edit </title> 
	<link rel="stylesheet" href="{{asset('css/app.css')}}"> 
</head> 
<body> 
	<div class="container"> 
		<h2>Edit A Form</h2><br /> 
		@if ($errors->any()) 
		<div class="alert alert-danger"> 
			<ul> 
				@foreach ($errors->all() as $error) 
				<li>{{ $error }}</li> 
			@endforeach 
		</ul> 
	</div><br /> 
	@endif 
	<form method="post" action="{{action('ExpController@update', $id)}}"> 
		{{csrf_field()}} 
		<input name="_method" type="hidden" value="PATCH"> 
		<div class="row"> 
			<div class="col-md-4">
			</div> 
			<div class="form-group col-md-4"> 
				<label for="Start_Date">Start_Date:</label> 
				<input type="text" class="form-control" name="Start_Date" value="{{$exp->Start_Date}}"> 
			</div> 
		</div>
		<div class="row"> 
			<div class="col-md-4">
			</div> 
			<div class="form-group col-md-4"> 
				<label for="End_Date">End_Date:</label> 
				<input type="text" class="form-control" name="End_Date" value="{{$exp->End_Date}}"> 
			</div> 
		</div>
		<div class="row"> 
			<div class="col-md-4">
			</div> 
			<div class="form-group col-md-4"> 
				<label for="Company_Name">Company_Name:</label> 
				<input type="text" class="form-control" name="Company_Name" value="{{$exp->Company_Name}}"> 
			</div> 
		</div>
		<div class="row"> 
			<div class="col-md-4">
			</div> 
			<div class="form-group col-md-4"> 
				<label for="Designation">Designation:</label> 
				<input type="text" class="form-control" name="Designation" value="{{$exp->Designation}}"> 
			</div> 
		</div>
		<div class="row"> 
			<div class="col-md-4">
			</div> 
			<div class="form-group col-md-4"> 
				<label for="Job_Description">Job_Description:</label> 
				<input type="text" class="form-control" name="Job_Description" value="{{$exp->Job_Description}}"> 
			</div> 
		</div>
		<div class="row"> 
			<div class="col-md-4">
			</div> 
			<div class="form-group col-md-4"> 
				<button type="submit" class="btn btn-success" style="margin-left:38px">Update</button> 
			</div> 
		</div> 
	</form> 
	<a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
</div> 
</body> 
</html>