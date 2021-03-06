@extends('layouts.admin-master')
@section('title', 'System Users')

@section('content')
<!--inner block start here-->
<div class="inner-block">
	<div class="col-md-8 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}"> Administrator </a></li>
            <li class="breadcrumb-item active">System Users</li>
        </ol>
    </div>
    <h2><small class="text-info"><i class="fa fa-users"></i>System Users</small></h2>
    @include('layouts.shared.notifications')
	<!--mainpage chit-chating-->
	<div class="chit-chat-layer1">
		<div class="col-md-13 chit-chat-layer1-left">
	        <div class="work-progres">
	            <div class="chit-chat-heading"> Users Management | <a href="{{ route('users.create') }}" style="text-transform: capitalize;">New User</a></div>
	            <div class="table-responsive">
                    <table class="table table-hover">
	                    <thead>
	                        <tr>
	                          	<th>#</th>
                                    <th>Full Names</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>System Role</th>
                                    <th>Status</th>
									<th class="text-center">Action</th>
	                      	</tr>
	                  	</thead>
	                  	<!-- <?php $i=0; ?> -->
                  		<tbody>
                            @if($users)
    		                  	@foreach($users as $user)
    			                    <tr>
    		                        	<td>{{ ++$i }}</td>
    			                        <td style="min-width: 150px;"> 
    			                        	<img src="{{ asset('files/profile/images/'. $user->profile_image) }}" style="max-width: 25px; border-radius: 40%;">  {{ $user->name }}
    			                        </td>
    		                          	<td>{{ $user->email }}</td>
                                        <td>{{ $user->gender }}</td>
                                        <td>{{ (App\Models\Role::where('name',$user->role)->get()->first())->display_name }}</td>
                                        <td>
                                            @if($user->status == 'Active')
                                                <span class="btn-xs btn-rounded label label-success">{{ $user->status }}</span>
                                            @elseif($user->status == 'Away')
                                                <span class="btn-xs btn-rounded label label-primary">{{ $user->status }}</span>
                                            @elseif($user->status == 'Busy')
                                                <span class="btn-xs btn-rounded label label-danger">{{ $user->status }}</span>
                                            @elseif($user->status == 'Blocked')
                                                <span class="btn-xs btn-rounded label label-danger">{{ $user->status }}</span>
                                            @elseif($user->status == 'Inactive')
                                                <span class="btn-xs btn-rounded label label-info">{{ $user->status }}</span>
                                            @else
                                                <span class="btn-xs btn-rounded label label-warning">{{ $user->status }}</span>
                                            @endif
                                        </td>
                                        <td style="min-width: 100px; text-align: center;">
                                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-xs text-info" title="User Details"><i class="fa fa-info-circle"></i></a>
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-xs text-primary"><i class="fa fa-edit" title="Edit User Profile"></i></a>
                                        </td>
    				                    </td>         
    		                      	</tr>
    		                  	@endforeach
		                    @else
		                        <p class="text-center text-danger">No Users created Yet!</p>
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