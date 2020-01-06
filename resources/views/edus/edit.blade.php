
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
	<form method="post" action="{{action('eduController@update', $id)}}"> 
		{{csrf_field()}} 
		<input name="_method" type="hidden" value="PATCH"> 
		<div class="row"> 
			<div class="col-md-4">
			</div> 
			<div class="form-group col-md-4"> 
				<label for="startyear">startyear:</label> 
				<input type="text" class="form-control" name="startyear" value="{{$edu->startyear}}"> 
			</div> 
		</div>
		<div class="row"> 
			<div class="col-md-4">
			</div> 
			<div class="form-group col-md-4"> 
				<label for="endyear">endyear:</label> 
				<input type="text" class="form-control" name="endyear" value="{{$edu->endyear}}"> 
			</div> 
		</div>
		<div class="row"> 
			<div class="col-md-4">
			</div> 
			<div class="form-group col-md-4"> 
				<label for="universityname">universityname:</label> 
				<input type="text" class="form-control" name="universityname" value="{{$edu->universityname}}"> 
			</div> 
		</div>
		<div class="row"> 
			<div class="col-md-4">
			</div> 
			<div class="form-group col-md-4"> 
				<label for="course">course:</label> 
				<input type="text" class="form-control" name="course" value="{{$edu->course}}"> 
			</div> 
		</div>
		<div class="row"> 
			<div class="col-md-4">
			</div> 
			<div class="form-group col-md-4"> 
				<label for="degree">degree:</label> 
				<input type="text" class="form-control" name="degree" value="{{$edu->degree}}"> 
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