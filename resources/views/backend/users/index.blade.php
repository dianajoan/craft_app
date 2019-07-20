@extends('layouts.backendmaster')
@section('title', 'All Users')

@section('content')

<!--inner block start here-->
<div class="inner-block">

	<!--mainpage chit-chating-->
	<div class="chit-chat-layer1">
		<div class="col-md-6 chit-chat-layer1-left">
	               <div class="work-progres">
	               	<a class="btn btn-success" href="{{ url('admin/users/create') }}"> Create New User</a>
	                            <div class="chit-chat-heading">
	                                  Users Management
	                            </div>

	                            @if ($message = Session::get('success'))
									<div class="alert alert-success">
									  <p>{{ $message }}</p>
									</div>
								@endif

	                            <div class="table-responsive">
	                                <table class="table table-hover">
	                                  <thead>
	                                    <tr>
	                                      <th>ID</th>
	                                      <th>Name</th>
	                                      <th>Email</th>                                    
	                                      <th>Roles</th>
   										  <th width="280px">Action</th>
	                                  </tr>
	                              </thead>
	                              <tbody>
	                              	@foreach ($data as $key => $user)
		                                <tr>
		                                  <td>{{ $user->id }}</td>
		                                  <td>{!! $user->name !!}</td>
		                                  <td>{!! $user->email !!}</td>
		                                  <td>
										      @if(!empty($user->getRoleNames()))
										        @foreach($user->getRoleNames() as $v)
										           <label class="badge badge-success">{{ $v }}</label>
										        @endforeach
										      @endif
										  </td>                    
		                                  <td>
		                                  	<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
							                <!-- we will add this later since its a little more complicated than the other two buttons -->
							 
							                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
							                <a class="btn btn-small btn-success" href="{{ URL::to('user/' . $user->id) }}">Show</a>
							 
							                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
							                <a class="btn btn-small btn-info" href="{{ URL::to('user/' . $user->id . '/edit')}}">Edit</a>
		                                  </td>
		                              	</tr>
	                              	@endforeach
	                          </tbody>
	                      </table>
	                    {!! $data->render() !!}
	                </div>
	            </div>
	      	</div>
	    <div class="clearfix"> </div>
	</div>
	<!--main page chit chating end here-->
</div>
<!--inner block end here-->

@endsection