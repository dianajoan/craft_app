@extends('layouts.backendmaster')
@section('title', 'Create A New User')
@section('content')

<div class="inner-block">
    <div class="inbox">
    	<div class="col-md-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}"> Administrator </a></li>
                <li class="breadcrumb-item"><a href="{{ route('users.index') }}"> System Users </a></li>
                <li class="breadcrumb-item active"> Add User </li>
            </ol>
        </div>
    	<h2><small><i class="fa fa-plus"></i> New User Profile</small></h2>
    	@include('layouts.shared.notifications') 
	 	<div class="col-md-8 compose-right">
			<div class="inbox-details-default">
				<div class="alert alert-info inbox-details-heading">
					Fill in the details
				</div>
				<div class="inbox-details-body">
					<form class="com-mail" method="post" action="{{ route('users.store') }}" accept-charset="UTF-8">
						
						@csrf

                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

					<input type="hidden" name="_token" value="{!! csrf_token() !!}">

						<div class="form-group">    
			              <label for="name">Full Name</label>
			              <input type="text" class="form-control" name="name" id="Names" autofocus required/>
			          	</div>

				        <div class="form-group">
				            <label for="email">Email Address</label>
				            <input type="text" class="form-control" name="email" id="emailAddress1" required/>
				        </div>

				        <div class="form-group">
				            <label for="phoneNumber1">Phone number</label>
				            <input type="tel" class="form-control" name="telephone" id="phoneNumber1" required/>
				        </div>

				        <input type="hidden" name="password" value="{{ bcrypt('dollar') }}">

				        <div class="form-group">
							<label for="gender1">Gender</label>
								<select class="form-control" id="gender1" name="gender">
									<option value="Male">Male</option>
                                    <option value="Female">Female</option>
								</select>
						</div>

						<div class="form-group">
				            <label for="date1">Date of Birth</label>
				            <input type="date" class="form-control" name="date_of_birth" id="date1"/>
				        </div>

				        <div class="form-group">
				            <label for="jobTitle1">Occupation</label>
				            <input type="text" class="form-control" name="occupation" id="jobTitle1"/>
				        </div>

				        <div class="form-group">
				            <label for="location1">Location</label>
				            <input type="text" class="form-control" name="location" class="form-control" id="location1"/>
				        </div>

				        <div class="form-group">
				            <label for="nationality1">Nationality</label>
				            <input type="text" class="form-control" name="nationality" id="nationality1"/>
				        </div>

				        <div class="form-group">
							<label for="role1">Role</label>
								<select class="form-control" id="role1" name="role" required>
									@foreach($roles as $role)
                                        <option value="{{ $role->name }}" title="{{ $role->description }}">{{ $role->display_name }}
                                        </option>
                                    @endforeach
								</select>
						</div>

						<input type="hidden" name="level" value="1">

				        <div class="form-group">
                            <label>Account Status :</label>
                            <div class="c-inputs-stacked">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio1" name="status" value="Active" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Active </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio2" name="status" value="Busy" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Busy</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio4" name="status" value="Blocked" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio4">Blocked</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio5" name="status" value="Away" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio5">Away</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio6" name="status" value="Pending" class="custom-control-input" checked="checked">
                                    <label class="custom-control-label" for="customRadio6">Pending</label>
                                </div>
                            </div>
                        </div>
				        <button type="submit" class="btn btn-rounded btn-success">Add</button>
				        <button type="reset" class="btn btn-primary-outline">Cancel</button>
				      </form>
					</div>
				</div>
			</div>
        <div class="col-md-4 compose-right text-center">
            <div class="inbox-details-default">
                <div class="alert alert-info inbox-details-heading">
                    Operations
                </div>
                <div class="inbox-details-body">
	                <div class="row text-center">
	                    <div class="col-12">
	                    	<div class="row">
	                    		<div class="col-md-6">
	                    			<a href="{{ route('users.index') }}" class="btn btn-round btn block btn-primary">All Users</a>
	                    		</div>
	                    		<div class="col-md-6">
	                    			
	                    		</div>
	                    	</div>
	                    </div>
	                </div>
	            </div>
            </div>
        </div>    
   	</div>
   	<div class="clearfix"> </div>
</div>
<!--inner block end here-->
@endsection





                      
						
