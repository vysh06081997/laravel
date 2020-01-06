<!DOCTYPE html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<title>Index Page</title> 
	<link rel="stylesheet" href="{{asset('css/app.css')}}"> 
</head> 
<body> 
	<div class="container"> <br />
	 @if (\Session::has('success'))
	 <div class="alert alert-success"> 
	 	<p>{{ \Session::get('success') }}</p> 
	 </div><br /> 
	 @endif 
	 <table class="table table-striped"> 
	 	<thead> 
	 		<tr> 
	 			<th>id</th> 
	 			<th>Start_Date</th> 
	 			<th>End_Date</th> 
	 			<th>Company_Name</th> 
	 			<th>Designation</th>
	 			<th>Job_Description</th>
	 			<th colspan="2">Action</th> 
	 		</tr> 
	 	</thead> 
	 	<tbody> 
	 		@foreach($exps as $exp) 
	 		<tr> 
	 			<td>{{$exp['id']}}</td> 
	 			<td>{{$exp['Start_Date']}}</td> 
	 			<td>{{$exp['End_Date']}}</td>
	 			<td>{{$exp['Company_Name']}}</td>
	 			<td>{{$exp['Designation']}}</td> 
	 			<td>{{$exp['Job_Description']}}</td>
	 			<td><a href="{{action('ExpController@edit', $exp['id'])}}" class="btn btn-warning">Edit</a></td> 
	 			<td> 
	 				<form action="{{action('ExpController@destroy', $exp['id'])}}" method="post"> 
	 					{{csrf_field()}} 
	 					<input name="_method" type="hidden" value="DELETE"> 
	 					<button class="btn btn-danger" type="submit">Delete</button> 
	 				</form> 
	 			</td> 
	 		</tr> 
	 	@endforeach 
	 </tbody>
	 <tfoot> 
	 	<tr> 
	 		<td> 
	 			<form action="{{action('ExpController@create')}}" method="get" onclick="re turn redirect()->back();"> 
	 				{{csrf_field()}} 
	 				<input name="_methodback" type="hidden" value="BACK"> 
	 				<button class="btn btn-danger" type="submit">Back</button> 
	 			</form> 
	 		</td> 
	 	</tfoot>
	</table> 
</div>
</body> 
</html>