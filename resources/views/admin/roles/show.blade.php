@extends('layouts.admin-master')
@section('title', 'Show Role')
@section('content')

<div class="inner-block">
    <div class="inbox">
    	<h2><small>Show Role</small></h2>
    	@include('layouts.shared.notifications')	 
	 	<div class="col-md-8 compose-right">
			<div class="inbox-details-default">
				<div class="alert alert-info inbox-details-heading">
					View User Role Detail 
				</div>
				<div class="inbox-details-body"> 
				    <div class="row">
				        <div class="col-xs-12 col-sm-12 col-md-12">
				            <div class="form-group">
				                <strong>Database Name:</strong>
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





                      
						






                      
						
