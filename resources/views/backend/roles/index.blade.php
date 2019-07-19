@extends('layouts.backendmaster')
@section('title', 'All Roles')

@section('content')

<!--inner block start here-->
<div class="inner-block">

	<!--mainpage chit-chating-->
	<div class="chit-chat-layer1">
		<div class="col-md-6 chit-chat-layer1-left">
	               <div class="work-progres">
	                            <div class="chit-chat-heading">
	                                  All Roles
	                            </div>

	                            @if (session('status'))
									<div class="alert alert-success">
										{{ session('status') }}
									</div>
								@endif
								@if ($roles->isEmpty())
									<p> There is no role.</p>
								@else
	                            <div class="table-responsive">
	                                <table class="table table-hover">
	                                  <thead>
	                                    <tr>
	                                      <th>Name</th>
	                                      <th>Display Name</th>                           
	                                      <th>Description</th>
	                                  </tr>
	                              </thead>
	                              <tbody>
	                              	@foreach($roles as $role)
		                                <tr>
		                                  <td>{!! $role->name !!}</td>
		                                  <td>{!! $role->display_name !!}</td>
		                                  <td>{!! $role->description !!}</td>             
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