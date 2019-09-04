@extends('layouts.backendmaster')
@section('title', 'Edit Role')
@section('content')

<div class="inner-block">
    <div class="inbox">
    	<h2>Roles Details</h2>   	 
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

					<form class="com-mail" method="post" action="{{ route('roles.update', $role->id) }}" accept-charset="UTF-8">
						
						@csrf

						<div class="form-group">    
			              <label for="name">Name</label>
			              <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}" placeholder="Name"/>
			          	</div>

				        <div class="form-group">
				            <label for="display_name">Display Name</label>
				            <input type="text" class="form-control" name="display_name" value="{{ $role->display_name }}" />
				        </div>

				        <div class="form-group">
				        	<label for="display_name">Description</label>
					        <textarea rows="6"  name="description" id="description">
					        	{{ $role->description }}
							</textarea>
						</div>

				        <a href="{{ route('roles.index') }}" class="btn btn-primary-outline">Cancel</a>
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





                      
						
