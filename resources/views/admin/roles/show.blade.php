@extends('layouts.backendmaster')
@section('title', 'Show Role')
@section('content')

<div class="inner-block">
    <div class="inbox">
    	<h2>Show Role</h2>   	 
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
				                {{ $role->name }}
				            </div>
				        </div>
				        <div class="col-xs-12 col-sm-12 col-md-12">
				            <div class="form-group">
				                <strong>Display Name:</strong>
				                {{ $role->display_name }}
				            </div>
				        </div>
				        <div class="col-xs-12 col-sm-12 col-md-12">
				            <div class="form-group">
				                <strong>Description:</strong>
				                {{ $role->description }}
				            </div>
				        </div>
				        <div class="pull-right">
			               <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
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





                      
						






                      
						
