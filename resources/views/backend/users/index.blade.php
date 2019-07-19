@extends('layouts.backendmaster')
@section('title', 'All Users')

@section('content')

<!--inner block start here-->
<div class="inner-block">

	<!--mainpage chit-chating-->
	<div class="chit-chat-layer1">
		<div class="col-md-6 chit-chat-layer1-left">
	               <div class="work-progres">
	                            <div class="chit-chat-heading">
	                                  All Users
	                            </div>

	                            @if (session('status'))
									<div class="alert alert-success">
										{{ session('status') }}
									</div>
								@endif
								@if ($users->isEmpty())
									<p> There is no user.</p>
								@else
	                            <div class="table-responsive">
	                                <table class="table table-hover">
	                                  <thead>
	                                    <tr>
	                                      <th>ID</th>
	                                      <th>Name</th>
	                                      <th>Email</th>                                    
	                                      <th>Joined at</th>
	                                  </tr>
	                              </thead>
	                              <tbody>
	                              	@foreach($users as $user)
		                                <tr>
		                                  <td>{!! $user->id !!}</td>
		                                  <td>
		                                  	<a href="{!! action('Admin\UsersController@edit', $user->id) !!}">{!! $user->name !!} </a></td>
		                                  <td>{!! $user->email !!}</td>                    
		                                  <td>{!! $user->created_at !!}</td>
		                              	</tr>
	                              	@endforeach
	                          </tbody>
	                      </table>
	                    @endif
	                </div>
	            </div>
	      	</div>
	    <div class="clearfix"> </div>
	</div>
	<!--main page chit chating end here-->
</div>
<!--inner block end here-->

@endsection