@extends('layouts.backendmaster')
@section('title', 'Show User')
@section('content')

<div class="inner-block">
    <div class="inbox">
    	<div class="col-md-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}"> Administrator </a></li>
                <li class="breadcrumb-item"><a href="{{ route('users.index') }}"> System Users </a></li>
                <li class="breadcrumb-item active"> {{ $user->name }} Details </li>
            </ol>
        </div>
    	<h2><small>Show User</small></h2>
        @include('layouts.shared.notifications')	 
	 	<div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> <img src="{{ asset('files/profile/images/'. $user->profile_image) }}" style="max-width: 30px; border-radius: 50%;"> {{ $user->name }}'s Details | {{ config('app.name') }}</h4>
                        <div class="table-responsive">
                            <table class="table m-b-0">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">#</th>
                                        <th scope="col">Attribute</th>
                                        <th scope="col">Value</th>
                                        <th scope="col">Relevance</th>
                                    </tr>
                                </thead>
                                <?php $i=0; ?>
                                <tbody>
                                    @if($user->name)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>Full Names</td>
                                            <td>{{ $user->name }}</td>
                                            <td>Required for identity</td>
                                        </tr>
                                    @endif
                                    @if($user->email)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>Email</td>
                                            <td>{{ $user->email }}</td>
                                            <td>Required for identity</td>
                                        </tr>
                                    @endif
                                    @if($user->telephone)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>Telephone</td>
                                            <td>{{ $user->telephone }}</td>
                                            <td>Required for communication</td>
                                        </tr>
                                    @endif
                                    @if($user->date_of_birth)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>Date Of Birth</td>
                                            <td>{{ $user->date_of_birth }}</td>
                                            <td>Required for identity</td>
                                        </tr>
                                    @endif
                                    @if($user->location)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>Location</td>
                                            <td>{{ $user->location }}</td>
                                            <td>Required for planning</td>
                                        </tr>
                                    @endif
                                    @if($user->username)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td> Username </td>
                                            <td>{{ $user->username }}</td>
                                            <td>Not Much Accountability</td>
                                        </tr>
                                    @endif
                                    @if($user->nationality)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>Nationality</td>
                                            <td>{{ $user->nationality }}</td>
                                            <td>Required for identity</td>
                                        </tr>
                                    @endif
                                    @if($user->occupation)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>Occupation</td>
                                            <td>{{ $user->occupation }}</td>
                                            <td>Required for accountability</td>
                                        </tr>
                                    @endif
                                    @if($user->institution)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>Campus / Place of Work </td>
                                            <td>{{ $user->institution }}</td>
                                            <td>Required for accountability</td>
                                        </tr>
                                    @endif
                                    @if($user->gender)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>Gender</td>
                                            <td>{{ $user->gender }}</td>
                                            <td>Required for identity</td>
                                        </tr>
                                    @endif
                                    @if($user->level)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>System level</td>
                                            <td>{{ $user->level }}</td>
                                            <td>Required for identity</td>
                                        </tr>
                                    @endif
                                    @if($user->role)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>System Role</td>
                                            <td>{{ App\Models\Role::where('name',$user->role)->get()->first()->display_name }}</td>
                                            <td>Required for identity</td>
                                        </tr>
                                    @endif
                                    @if($user->status)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>Account Status</td>
                                            <td>
                                                @if($user->status == 'Active')
                                                    <span class="btn-xs btn-rounded label label-success">{{ $user->status }}</span>
                                                @elseif($user->status == 'Away')
                                                    <span class="btn-xs btn-rounded label label-primary">{{ $user->status }}</span>
                                                @elseif($user->status == 'Busy')
                                                    <span class="btn-xs btn-rounded label label-danger">{{ $user->status }}</span>
                                                @elseif($user->status == 'Blocked')
                                                    <span class="btn-xs btn-rounded label label-danger">{{ $user->status }}</span>
                                                @elseif($user->status == 'Inactive')
                                                    <span class="btn-xs btn-rounded label label-info">{{ $user->status }}</span>
                                                @else
                                                    <span class="btn-xs btn-rounded label label-warning">{{ $user->status }}</span>
                                                @endif
                                            </td>
                                            <td>Required for identity</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>

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
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{ route('users.index') }}" class="btn btn-primary btn-round btn-block"> Back </a>
                                    </div>
                                    <div class="col-md-6">
                                        <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-round btn-block"
                                                @if($user->id == Auth::user()->id) disabled @elseif($user->role == 'super-admin') disabled @endif 
                                                onclick="return confirm('You are about to delete this user profile!\nThis is not reversible!')" title="You can not delete your profile"> Delete 
                                            </button>
                                        </form>
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





                      
						






                      
						
