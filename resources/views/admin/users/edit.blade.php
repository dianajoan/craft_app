@extends('layouts.backendmaster')
@section('title', 'Edit User')
@section('content')

<div class="inner-block">
    <div class="inbox">
    	<h2>Users Details</h2>   	 
	 	<div class="col-md-13 compose-right">
			<div class="inbox-details-default">
				<div class="alert alert-info inbox-details-heading">
					Editing 
				</div>
				<div class="inbox-details-body">

					<!-- will be used to show any messages -->
					@if(Session::has('success'))
	                    <div class="row">
	                        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
	                            <div id="message" class="alert alert-success">
	                                {{ Session::get('success') }}
	                            </div>
	                        </div>
	                    </div>
	                @endif
					
					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif

					<form class="com-mail" method="post" action="{{ route('users.update', $user->id) }}" accept-charset="UTF-8">
						
						@csrf

						<div class="form-group">    
			              <label for="name">Name</label>
			              <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" placeholder="Name"/>
			          	</div>

				        <div class="form-group">
				            <label for="email">Email</label>
				            <input type="text" class="form-control" name="display_name" value="{{ $user->email }}" />
				        </div>

				        <div class="form-group">
							<label for="select">Role</label>
							<div class="col-lg-10">
								<select class="form-control" id="role" name="role[]" multiple>
									@foreach($roles as $role)
										<option value="{!! $role->id !!}" @if(in_array($role->id, $selectedRoles)) selected="selected" @endif >
											{!! $role->display_name !!}
										</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<div class="col-lg-10">
								<input type="password" class="form-control" name="password">
							</div>
						</div>
						<div class="form-group">
							<label for="password">Confirm password</label>
							<div class="col-lg-10">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

				        <a href="{{ route('users.index') }}" class="btn btn-primary-outline">Cancel</a>
				        <button type="submit" class="btn btn-primary-outline">Update</button>
				      </form>
					</div>
				</div>
			</div>
        <div class="clearfix"> </div>     
   	</div>
</div>
<!--inner block end here-->
@endsection





                      
						
