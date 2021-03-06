@extends('layouts.admin-master')
@section('title', 'Create A New Role')
@section('content')

<div class="inner-block">
    <div class="inbox">
    	<h2><small>Roles Details</small></h2>
    	@include('layouts.shared.notifications')
	 	<div class="col-md-8 compose-right">
			<div class="inbox-details-default">
				<div class="alert alert-info inbox-details-heading">
					Creating
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

					<form class="com-mail" method="post" action="{{ route('roles.store') }}" accept-charset="UTF-8">
						
						@csrf

						<div class="form-group">    
			              <label for="name">Name</label>
			              <input type="text" class="form-control" id="name" name="name"/>
			          	</div>

				        <div class="form-group">
				            <label for="display_name">Display Name</label>
				            <input type="text" class="form-control" name="display_name"/>
				        </div>

				        <div class="form-group">
				        	<label for="display_name">Description</label>
					        <textarea rows="2"  name="description" id="description">
							</textarea>
						</div>
                        <div class="form-group">
                            <label for="display">Attach Permissions :</label>
                            <div class="row">
                                <div class="col-md-4"> </div>
                                <div class="col-md-8" style="max-height: 300px; overflow-y: auto;">
                                    @foreach($permissions as $permission)
                                        <input type="checkbox" name="permission[]" value="{{ $permission->id }}" id="permckbx"> <label for="permckbx">{{ $permission->display_name }} </label> <br>
                                    @endforeach
                                </div>
                            </div>
                        </div>

				        <button type="submit" class="btn btn-primary-outline">Add</button>
				        <a href="{{ route('roles.index') }}" onclick="confirm('You are deleting all changes\nIs this okay?')" class="btn btn-primary-outline">Cancel</a>
				      </form>
					</div>
				</div>
			</div>
        <div class="clearfix"> </div>     
   	</div>
</div>
<!--inner block end here-->
@endsection





                      
						
