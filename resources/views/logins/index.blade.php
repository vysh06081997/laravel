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
	 			<th>roleid</th>
	 			<th>emailid</th> 
	 			<th>firstname</th> 
	 			<th>lastname</th> 
	 			<th>username</th>
	 			<th>password</th>
	 			<th colspan="2">Action</th> 
	 		</tr> 
	 	</thead> 
	 	<tbody> 
	 		@foreach($logins as $login) 
	 		<tr> 
	 			<td>{{$login['id']}}</td> 
	 			<td>{{$login['roleid']}}</td> 
	 			<td>{{$login['emailid']}}</td> 
	 			<td>{{$login['firstname']}}</td>
	 			<td>{{$login['lastname']}}</td>
	 			<td>{{$login['username']}}</td> 
	 			<td>{{$login['password']}}</td>
	 			<td><a href="{{action('LoginController@edit', $login['id'])}}" class="btn btn-warning">Edit</a></td> 
	 			<td> 
	 				<form action="{{action('LoginController@destroy', $login['id'])}}" method="post"> 
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
	 			<form action="{{action('LoginController@create')}}" method="get" onclick="re turn redirect()->back();"> 
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