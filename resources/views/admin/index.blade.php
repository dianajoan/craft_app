@extends('layouts.backendmaster')
@section('title', 'Dashboard')
@section('content')

<div class="inner-block">
	<div class="row banner">
		<div class="col-md-13 compose-right">
			<div class="inbox-details-default">
				<div class="list-group-item">
					<div class="row-action-primary">
						<i class="mdi-social-person"></i>
					</div>
					<div class="row-content">
						<div class="action-secondary"><i class="mdi-social-info"></i></div>
						<h4 class="list-group-item-heading">Manage User</h4>
						<a href="{{ route('users.index') }}" class="btn btn-default btn-raised">All Users</a>
						<a href="{{ route('users.create') }}" class="btn btn-primary btn-raised">Create A User</a>
					</div>
				</div>
				<div class="list-group-separator"></div>
				<div class="list-group-item">
					<div class="row-action-primary">
						<i class="mdi-social-group"></i>
					</div>
					<div class="row-content">
						<div class="action-secondary"><i class="mdi-material-info"></i></div>
						<h4 class="list-group-item-heading">Manage Roles</h4>
						<a href="{{ route('roles.index') }}" class="btn btn-default btn-raised">All Roles</a>
						<a href="{{ route('roles.create') }}" class="btn btn-primary btn-raised">Create A Role</a>
					</div>
				</div>
				<div class="list-group-separator"></div>
				<div class="list-group-item">
					<div class="row-action-primary">
						<i class="mdi-editor-border-color"></i>
					</div>
					<div class="row-content">
						<div class="action-secondary"><i class="mdi-material-info"></i></div>
						<h4 class="list-group-item-heading">Manage Products</h4>
						<a href="/admin/products" class="btn btn-default btn-raised">All Products</a>
						<a href="/admin/products/create" class="btn btn-primary btn-raised">Create A Product</a>
					</div>
				</div>
				<div class="list-group-separator"></div>
			</div>
		</div>
	</div>
</div>
@endsection