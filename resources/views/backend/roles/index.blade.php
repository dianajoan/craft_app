@extends('layouts.backendmaster')
@section('title', 'All Roles')

@section('content')

<!--inner block start here-->
<div class="inner-block">
	<!--mainpage chit-chating-->
	<div class="chit-chat-layer1">
		<div class="pull-right">
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
        </div>
		<div class="col-md-6 chit-chat-layer1-left">
	        <div class="work-progres">
                <div class="chit-chat-heading">
                      Roles Management
             	</div>
	            <div class="table-responsive">
	                <table class="table table-hover">
		                <thead>
	                        <tr>
	                        	<th>ID</th>
		                        <th>Name</th>
		                        <th>Display Name</th>                           
		                        <th>Description</th>
		                        <th colspan="2">Action</th>
		                  	</tr>
		                </thead>
	                  	<tbody><?php $i=0; ?>
		                  	@foreach($roles as $role)
			                    <tr>
		                        	<td>{{ ++$i }}</td>
			                        <td>{{ $role->name }}</td>
		                          	<td>{{ $role->display_name }}</td>
		                          	<td>{{ $role->description }}</td> 
				                	<td>
				                		<a href="{{ url('admin/roles/edit',$role->id)}}" class="btn btn-warning">Edit</a>
				                	</td>
							        <td>
								        <form action="{{ url('admin/roles/delete()',$role->id)}}" method="post">
								            @csrf
								            <input name="_method" type="hidden" value="DELETE">
								            <button class="btn btn-danger" type="submit">Delete</button>
								        </form>
								    </td>          
		                      	</tr>
		                  	@endforeach
              			</tbody>
          			</table>
            	</div>
        	</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--main page chit chating end here-->
</div>
<!--inner block end here-->
@endsection