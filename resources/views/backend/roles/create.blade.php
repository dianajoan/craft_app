@extends('layouts.backendmaster')
@section('title', 'Create A New Role')
@section('content')

<div class="inner-block">
    <div class="inbox">
    	<h2>Roles Details</h2>
    	<div class="col-md-4 compose">   	 	
    	 	<div class="mail-profile">
    	 		<div class="mail-pic">
    	 			<a href="#"><img src="{!! asset('dash/images/b3.png') !!}" alt=""></a>
    	 		</div>
    	 		<div class="mailer-name"> 			
               		<a class="btn btn-success" href="{{ route('roles.index') }}"> Back</a>
    	 		</div>
    	 	    <div class="clearfix"> </div>
    	 	</div>
    	</div>   	 
	 	<div class="col-md-8 compose-right">
			<div class="inbox-details-default">
				<div class="inbox-details-heading">
					Create a Role 
				</div>
				<div class="inbox-details-body">
					<div class="alert alert-info">
						Please fill details 
					</div>

					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					              <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					    <br />
					@endif

					<form class="com-mail" method="post" action="{{ route('roles.store') }}">
						
						@csrf

						<div class="form-group">    
			              <label for="name">Name</label>
			              <input type="text" class="form-control" name="name"/>
			          	</div>

				        <div class="form-group">
				            <label for="display_name">Display Name</label>
				            <input type="text" class="form-control" name="display_name"/>
				        </div>

				        <div class="form-group">
				        	<label for="display_name">Description</label>
					        <textarea rows="6"  name="description" id="description">
							</textarea>
						</div>

				        <button type="submit" class="btn btn-primary-outline">Add Role</button>
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





                      
						
