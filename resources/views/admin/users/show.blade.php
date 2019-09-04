@extends('layouts.backendmaster')
@section('title', 'Show User')
@section('content')

<div class="inner-block">
    <div class="inbox">
    	<h2>Show User</h2>   	 
	 	<div class="col-md-13 compose-right">
			<div class="inbox-details-default">
				<div class="alert alert-info inbox-details-heading">
					Viewing 
				</div>
				<div class="inbox-details-body">
 
				    <div class="row">
				        <div class="col-xs-12 col-sm-12 col-md-12">
				            <div class="form-group">
				                <strong>Name:</strong>
				                {{ $user->name }}
				            </div>
				        </div>
				        <div class="col-xs-12 col-sm-12 col-md-12">
				            <div class="form-group">
				                <strong>Email:</strong>
				                {{ $user->email }}
				            </div>
				        </div>
				        <div class="pull-right">
			               <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
			            </div>
				    </div>
				</div>
				</div>
			</div>
        <div class="clearfix"> </div>     
   	</div>
</div>
<!--inner block end here-->
@endsection





                      
						






                      
						
