<!--@extends('layout.app')-->

@section('content')
  <div class="container">
   	<div class="row">
   		<div ="col-md-12">
   			<h1>la liste de mes contact</h1>
   			<table class="table">
   				<tr>
   					<th>nom</th>
   					<th>email</th>
   					<th>action</th>
   					
   				</tr>
   				<body>
   					@foreach($list as $lists)
   					<tr>
   						<td>{{$lists-> name}}</td>
   						<td>{{$lists-> email}}</td>
   						<td>
   						<a href=""class="btn btn-primary">détails</a>
   						<a href=""class="btn btn-default">editer</a>
   						<a href=""class="btn btn-danger">supprimer</a>
   						</td>
   						
   					</tr>
   					@endforeach
   				</body>
   				
   			</table>

   		</div>

     </div>

  </div>

@endsection