@extends('layouts.backendmaster')
@section('title', 'Edit A New User')
@section('content')

<div class="inner-block">
    <div class="inbox">
    	<div class="col-md-5 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}"> Administrator </a></li>
                <li class="breadcrumb-item"><a href="{{ route('users.index') }}"> System Users </a></li>
                <li class="breadcrumb-item active"> Edit User </li>
            </ol>
        </div>
    	<h2>Edit User Profile</h2>   	 
	 	<div class="col-md-13 compose-right">
			<div class="inbox-details-default">
				<div class="alert alert-info inbox-details-heading">
					Fill in the details
				</div>
				<div class="inbox-details-body">
					<form class="com-mail" method="post" action="{{ route('users.update', $user->id) }}" accept-charset="UTF-8">
						
						@csrf
                        {{ method_field('PATCH') }}

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
			              <input type="text" class="form-control" value="{{ $user->name }}" name="name" id="Names" autofocus required/>
			          	</div>

				        <div class="form-group">
				            <label for="email">Email Address</label>
				            <input type="text" class="form-control" value="{{ $user->email }}" name="email" id="emailAddress1" required/>
				        </div>

				        <div class="form-group">
				            <label for="phoneNumber1">Phone number</label>
				            <input type="tel" class="form-control" value="{{ $user->telephone }}" name="telephone" id="phoneNumber1" required/>
				        </div>

				        <input type="hidden" name="password" value="{{ bcrypt('dollar') }}">

				        <div class="form-group">
							<label for="gender1">Gender</label>
								<select class="form-control" id="gender1" name="gender">
									<option value="{{ $user->gender }}">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
								</select>
						</div>

						<div class="form-group">
				            <label for="date1">Date of Birth</label>
				            <input type="date" class="form-control" value="{{ $user->date_of_birth }}" name="date_of_birth" id="date1"/>
				        </div>

				        <div class="form-group">
				            <label for="jobTitle1">Occupation</label>
				            <input type="text" class="form-control" value="{{ $user->occupation }}" name="occupation" id="jobTitle1"/>
				        </div>

				        <div class="form-group">
				            <label for="location1">Location</label>
				            <input type="text" class="form-control" value="{{ $user->location }}" name="location" class="form-control" id="location1"/>
				        </div>

				        <div class="form-group">
				            <label for="nationality1">Nationality</label>
				            <input type="text" class="form-control" value="{{ $user->nationality }}" name="nationality" id="nationality1"/>
				        </div>

				        <div class="form-group">
							<label for="role1">Role</label>
								<select class="form-control" id="role1" name="role" required>
									<option value="{{ $user->role }}">Chose to update user role</option>
									@foreach($roles as $role)
                                        <option value="{{ $role->name }}" title="{{ $role->description }}">{{ $role->display_name }}
                                        </option>
                                    @endforeach
								</select>
						</div>

				        <div class="form-group">
                            <label>Account Status :</label>
                            <div class="c-inputs-stacked">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio1" name="status" value="Active" class="custom-control-input" @if($user->status == 'Active') checked="checked" @endif>
                                    <label class="custom-control-label" for="customRadio1">Active </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio2" name="status" value="Busy" class="custom-control-input" @if($user->status == 'Busy') checked="checked" @endif>
                                    <label class="custom-control-label" for="customRadio2">Busy</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio4" name="status" value="Blocked" class="custom-control-input" @if($user->status == 'Blocked') checked="checked" @endif>
                                    <label class="custom-control-label" for="customRadio4">Blocked</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio5" name="status" value="Away" class="custom-control-input" @if($user->status == 'Away') checked="checked" @endif>
                                    <label class="custom-control-label" for="customRadio5">Away</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadio6" name="status" value="Pending" class="custom-control-input" @if($user->status == 'Pending') checked="checked" @endif>
                                    <label class="custom-control-label" for="customRadio6">Pending</label>
                                </div>
                            </div>
                        </div>
				        <button type="submit" class="btn btn-rounded btn-primary">Update</button>
				        <button type="reset" class="btn btn-primary-outline">Cancel</button>
				      </form>
					</div>
				</div>
			</div>
        <div class="clearfix"> </div>     
   	</div>
</div>
<!--inner block end here-->
@endsection





                      
						
