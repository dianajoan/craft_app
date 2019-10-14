@extends('layouts.backendmaster')
@section('title')My Profile - {{ Auth::user()->name }} @endsection
@section('content')

<div class="inner-block">
    <div class="inbox">
    	<div class="col-md-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="@role(['super-admin','admin']) {{ route('userhome') }} @else {{ route('home') }} @endrole"> <i class="fa fa-home"></i> Home</a></li>
	            @role(['super-admin','admin'])
	            <li class="breadcrumb-item"><a href="{{ route('admin') }}"> <i class="fa fa-user-plus"></i> Administrator </a></li>
	            <li class="breadcrumb-item"><a href="{{ route('users.index') }}"> <i class="fa fa-users"></i> System Users </a></li>
	            @endrole
	            <li class="breadcrumb-item active" aria-current="page"> <i class="fa fa-user"></i> User Profile Details </li>
            </ol>
        </div>
    	<h2><small>Show User</small></h2>
        @include('layouts.shared.notifications')	 
	 	<div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> <img src="{{ asset('files/profile/images/'. $user->profile_image) }}" style="max-width: 30px; border-radius: 50%;"> {{ $user->name }} - My Profile Settings | {{ config('app.name') }}</h4>
						<ul class="nav nav-tabs">
						    <li class="active"><a data-toggle="tab" href="#one">My Wall</a></li>
						    <li><a data-toggle="tab" href="#two">My Information</a></li>
						    <li><a data-toggle="tab" href="#three">Change Password</a></li>
						</ul>
						<div class="tab-content">
    						<div id="one" class="tab-pane fade in active">
								<div class="card">
									<div class="card-body">
										@foreach ($errors->all() as $error)
	                                        <p class="alert alert-danger">{{ $error }}</p>
	                                    @endforeach

	                                    @if (session('success'))
	                                        <div class="alert alert-success">
	                                            {{ session('success') }}
	                                        </div>
	                                    @endif
	                                </div>
								</div>
							</div>
							<div id="two" class="tab-pane fade">
								<div class="card">
									<div class="card-body">
										<form class="form-horizontal form-material" action="{{ route('users.update', $user->id) }}" method="POST">
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
	                                        <div class="form-group">
	                                            <label class="col-md-3">Full Name <span class="text-danger">*</span></label>
	                                            <div class="col-md-9">
	                                                <input type="text" placeholder="Full names" name="name" class="form-control form-control-line" value="{{ $user->name }}" required>
	                                            </div>
	                                        </div>
	                                        <input type="hidden" name="email" value="{{ $user->email }}">
	                                        <div class="form-group">
	                                            <label for="example-email" class="col-md-3">Email</label>
	                                            <div class="col-md-9">
	                                                <input type="email" placeholder="Working Email" class="form-control form-control-line" value="{{ $user->email }}" id="example-email" disabled title="Email can not be changed while logged in.">
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <label class="col-md-3">Username </label>
	                                            <div class="col-md-9">
	                                                <input type="text" placeholder="Your prefered username" name="username" class="form-control form-control-line" value="{{ $user->username }}">
	                                            </div>
	                                        </div>
	                                        <input type="hidden" name="router" value="profile">
	                                        <div class="form-group">
	                                            <label for="example-email" class="col-md-3">Gender</label>
	                                            <div class="col-9">
	                                                <input type="radio" value="Male" name="gender" @if ($user->gender == 'Male')
	                                                    checked="checked" 
	                                                @endif>   Male 
	                                                <input type="radio" value="Female" name="gender" @if ($user->gender == 'Female')
	                                                    checked="checked" 
	                                                @endif> Female
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <label class="col-md-3">Phone Number <span class="text-danger">*</span></label>
	                                            <div class="col-md-9">
	                                                <input type="text" name="telephone" placeholder="Working phone number" class="form-control form-control-line" value="{{ $user->telephone }}" required>
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <label class="col-md-3">Date Of Birth </label>
	                                            <div class="col-md-9">
	                                                <input type="date" placeholder="Your date of birth" name="date_of_birth" class="form-control form-control-line" value="{{ $user->date_of_birth }}">
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <label class="col-md-3">Location </label>
	                                            <div class="col-md-9">
	                                                <input type="text" placeholder="Where you stay Currently" name="location" class="form-control form-control-line" value="{{ $user->location }}">
	                                            </div>
	                                        </div>
	                                        <input type="hidden" name="role" value="{{ $user->role }}">
	                                        <div class="form-group">
	                                            <label class="col-md-3">Nationality </label>
	                                            <div class="col-md-9">
	                                                <input type="text" placeholder="The country where you're from" name="nationality" class="form-control form-control-line" value="{{ $user->nationality }}">
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <label class="col-md-3">Occupation </label>
	                                            <div class="col-md-9">
	                                                <input type="text" placeholder="What you do for a living" name="occupation" class="form-control form-control-line" value="{{ $user->occupation }}">
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <label class="col-md-3">Account Status </label>
	                                            <div class="col-md-9">
	                                                <input type="radio" name="status" value="Active" @if ($user->status == 'Active')
	                                                    checked="checked" 
	                                                @endif> Active
	                                                <input type="radio" name="status" value="Busy" @if ($user->status == 'Busy')
	                                                    checked="checked" 
	                                                @endif> Busy
	                                                <input type="radio" name="status" value="Inactive" @if ($user->status == 'Inactive')
	                                                    checked="checked" 
	                                                @endif> Inactive
	                                                <input type="radio" name="status" value="Blocked" @if ($user->status == 'Blocked')
	                                                    checked="checked" 
	                                                @endif> Blocked
	                                                <input type="radio" name="status" value="Away" @if ($user->status == 'Away')
	                                                    checked="checked" 
	                                                @endif> Away
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <div class="col-sm-12">
	                                                <button type="submit" class="btn btn-success">Update Profile</button>
	                                            </div>
	                                        </div>
	                                    </form>
	                                </div>
								</div>
							</div>
							<div id="three" class="tab-pane fade">
								<div class="card">
									<div class="card-body">
										<form class="form-horizontal form-material" action="{{ route('password.update') }}" method="POST">
	                                        @csrf
	                                        {{-- method_field('PATCH') --}}
	                                        @foreach ($errors->all() as $error)
	                                            <p class="alert alert-danger">{{ $error }}</p>
	                                        @endforeach

	                                        @if (session('success'))
	                                            <div class="alert alert-success">
	                                                {{ session('success') }}
	                                            </div>
	                                        @endif
	                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
	                                        <div class="form-group">
	                                            <label class="col-md-4">Previous Password <span class="text-danger">*</span></label>
	                                            <div class="col-md-8">
	                                                <input type="password" placeholder="Previously used password" name="previous_password" class="form-control form-control-line" required>
	                                            </div>
	                                        </div>
	                                        <hr>
	                                        <div class="form-group">
	                                            <label class="col-md-4">New Password <span class="text-danger">*</span></label>
	                                            <div class="col-md-8">
	                                                <input type="password" placeholder="Enter new password" name="password" class="form-control form-control-line" required>
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <label class="col-md-4">Confirm Password <span class="text-danger">*</span></label>
	                                            <div class="col-md-8">
	                                                <input type="password" placeholder="Confirm Password" name="confirm_password" class="form-control form-control-line" required>
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <div class="col-sm-12">
	                                                <button type="submit" class="btn btn-danger">Update Account Password</button>
	                                            </div>
	                                        </div>
	                                    </form>
	                                </div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> 
                            <img src="{{ asset('files/profile/images/'. $user->profile_image) }}" style="max-width: 30px; border-radius: 50%;"> User Profile Operations
                        </h4>
                        <hr>
                        <div class="row text-center">
                            <div class="col-12">
                                <img src="{{ asset('files/profile/images/'.$user->profile_image) }}" alt="user image" style="max-width: 98%; border-radius: 3px;">
                            </div>
                            @role(['super-admin','admin'])
                            <div class="col-12">
                            	<hr>
                                <div class="row">
                                    <div class="col-md-12">
                                    	<div class="text-center block">
					                    	<form enctype="multipart/form-data" action="{{ route('profile.update') }}" method="POST">
				                                @csrf
				                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
				                                <div class="row">
				                                	<div class="col-12">
				                                		<span>Update profile image..</span>
				                                	</div>
				                                    <div class="col-md-6">
				                                        <input type="file" class="block" name="profile_image" accept=".jpg, .png, .jpeg" class="pull-left">
				                                    </div>
				                                    <div class="col-md-6">
				                                        <button type="submit" class="btn btn-sm btn btn-success" > UPDATE IMAGE</button>
				                                    </div>
				                                </div>
				                            </form>
					                    </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{ route('userhome') }}" class="btn btn-primary btn-round btn-block"><i class="fa fa-home"></i> Home </a>
                                    </div>
                                    <div class="col-md-6">
                                        
                                    </div>
                                </div>
                            </div>
                            @endrole
                        </div>
                    </div>
                </div>
            </div>
        </div>    
   	</div>
</div>
<!--inner block end here-->
@endsection





                      
						






                      
						
