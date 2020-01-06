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
	 			<th>projecttype</th> 
	 			<th>projectname</th> 
	 			<th colspan="2">Action</th> 
	 		</tr> 
	 	</thead> 
	 	<tbody> 
	 		@foreach($works as $work) 
	 		<tr> 
	 			<td>{{$work['id']}}</td> 
	 			<td>{{$work['projecttype']}}</td> 
	 			<td>{{$work['projectname']}}</td>
	 			<td><a href="{{action('WorkController@edit', $work['id'])}}" class="btn btn-warning">Edit</a></td> 
	 			<td> 
	 				<form action="{{action('WorkController@destroy', $work['id'])}}" method="post"> 
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
	 			<form action="{{action('WorkController@create')}}" method="get" onclick="re turn redirect()->back();"> 
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