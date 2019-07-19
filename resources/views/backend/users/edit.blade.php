@extends('layouts.backendmaster')
@section('title', 'Edit a User')
@section('content')

<div class="inner-block">
    <div class="inbox">
    	  <h2>Edit Details</h2>
    	 <div class="col-md-4 compose">   	 	
    	 	<div class="mail-profile">
    	 		<div class="mail-pic">
    	 			<a href="#"><img src="{!! asset('dash/images/b3.png') !!}" alt=""></a>
    	 		</div>
    	 		<div class="mailer-name"> 			
    	 				<h5><a href="#">Malorum</a></h5>  	 				
    	 			     <h6><a href="mailto:info@example.com">malorum@gmail.com</a></h6>   
    	 		</div>
    	 	    <div class="clearfix"> </div>
    	 	</div>
    	 </div>   	 
    	 	<div class="col-md-8 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							Edit User 
						</div>
						<div class="inbox-details-body">
							<div class="alert alert-info">
								Please fill details 
							</div>
							<form class="com-mail" method="post">

								@foreach ($errors->all() as $error)
									<p class="alert alert-danger">{{ $error }}</p>
								@endforeach

								@if (session('status'))
									<div class="alert alert-success">
										{{ session('status') }}
									</div>
								@endif

								<input type="hidden" name="_token" value="{!! csrf_token() !!}">

								<input type="text"  name="name" id="name" value="{{ $user->name }}">

								<input type="email"  name="email" id="email" value="{{ $user->email }}">

								<div class="form-group">
								<label for="select" class="col-lg-2 control-label">Role
								</label>
									<div class="col-lg-10">
									<select class="form-control" id="role" name="role[]"multiple>
									@foreach($roles as $role)
									<option value="{!! $role->id !!}" @if(in_array($role->id, $selectedRoles))
									selected="selected" @endif >{!! $role->display_name !!}
									</option>
									@endforeach
									</select>
									</div>
								</div>
								<input type="password"  name="password" id="password">

								<input type="password"  name="password_confirmation" id="password">

								<input type="reset" value="Cancel">
								<input type="submit" value="Send">  
							</form>
						</div>
					</div>
				</div>
          <div class="clearfix"> </div>     
   </div>
</div>
<!--inner block end here-->
@endsection





                      
						
