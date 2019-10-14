@extends('layouts.backendmaster')
@section('title', 'Manage Roles')

@section('content') 

<!--inner block start here-->
<div class="inner-block">
	<!--mainpage chit-chating-->
	@include('layouts.shared.notifications')
	<div class="chit-chat-layer1">
		<div class="col-md-13 chit-chat-layer1-left">
	        <div class="work-progres">
                <div class="chit-chat-heading">
                      Roles Management
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
			           <a class="btn btn-success" href="{{ route('roles.create') }}"> Create Role</a>
			        </div>
	                <table class="table table-hover">
		                <thead>
	                        <tr>
	                        	<th>ID</th>
		                        <th>Name</th>
		                        <th>Display Name</th>                           
		                        <th>Description</th>
		                        <th class="text-center">Action</th>
		                  	</tr>
		                </thead>
	                  	<tbody>
	                  		@if($roles)
		                  		<?php $i=0; ?>
			                  	@foreach($roles as $role)
				                    <tr>
			                        	<td>{{ ++$i }}</td>
				                        <td>{{ $role->name }}</td>
			                          	<td>{{ $role->display_name }}</td>
			                          	<td>{{ $role->description }}</td> 
					                	<td style="min-width: 100px;" >
					                		<div class="row">
					                			<div class="col-md-4">
					                        		<a href="{{ route('roles.show', $role->id) }}" class="btn btn-block btn-success btn-xs" >View</a>
					                        	</div>
					                        	<div class="col-md-4">
					                        		<a href="{{ route('roles.edit', $role->id) }}" class="btn btn-block btn-info btn-xs">Edit</a>
					                        	</div>
					                        	<div class="col-md-4">
							                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
							                             {{ csrf_field() }}
							                             {{ method_field('DELETE') }}
							                           <input type="submit" class="btn btn-block btn-danger btn-xs" value="Delete" onclick="return confirm('You are deleting this row.\nAre you sure?')" @role(['super-admin']) @else disabled @endrole />
							                        </form>
							                    </div>
							                </div>
					                    </td>         
			                      	</tr>
			                  	@endforeach
		                    @else
		                        <p class="text-center text-primary">No Roles created Yet!</p>
		                    @endif
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