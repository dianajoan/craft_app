@extends('layouts.backendmaster')
@section('title', 'Manage Users')

@section('content')

<!--inner block start here-->
<div class="inner-block">
	<!--mainpage chit-chating-->
	<div class="chit-chat-layer1">
		<div class="col-md-13 chit-chat-layer1-left">
	        <div class="work-progres">
	            <div class="chit-chat-heading">
                      Users Management
             	</div>

             	@if(Session::has('success'))
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                            <div id="message" class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    </div>
                @endif
	            <div class="table-responsive">
	            	<div class="pull-right">
			           <a class="btn btn-success" href="{{ route('users.create') }}"> Create User</a>
			        </div>
                    <table class="table table-hover">
	                    <thead>
	                        <tr>
	                          	<th>ID</th>
	                          	<th>Name</th>
	                          	<th>Email</th>                                    
	                          	<th>Joined at</th>
								<th class="text-center">Action</th>
	                      	</tr>
	                  	</thead>
                  		<tbody>
                  			@if($users)
		                  	@foreach($users as $user)
			                    <tr>
		                        	<td>{{ (($users->currentPage() - 1 ) * $users->perPage() ) + $loop->iteration }}</td>
			                        <td>{{ $user->name }}</td>
		                          	<td>{{ $user->email }}</td>
		                          	<td>{{ $user->created_at }}</td> 
				                	<td style="min-width: 100px;" >
				                		<div class="row">
				                			<div class="col-md-4">
				                        		<a href="{{ route('users.show', $user->id) }}" class="btn btn-block btn-success btn-xs" >View</a>
				                        	</div>
				                        	<div class="col-md-4">
				                        		<a href="{{ route('users.edit', $user->id) }}" class="btn btn-block btn-info btn-xs">Edit</a>
				                        	</div>
				                        	<div class="col-md-4">
						                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
						                             {{ csrf_field() }}
						                             {{ method_field('DELETE') }}
						                           <input type="submit" class="btn btn-block btn-danger btn-xs" value="Delete" onclick="return confirm('You are deleting this row.\nAre you sure?')" />
						                        </form>
						                    </div>
						                </div>
				                    </td>         
		                      	</tr>
		                  	@endforeach
		                    @else
		                        <p class="text-center text-primary">No Users created Yet!</p>
		                    @endif
              			</tbody>
          			</table>
          			{!! $users->links() !!}
            	</div>
        	</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--main page chit chating end here-->
</div>
<!--inner block end here-->
@endsection