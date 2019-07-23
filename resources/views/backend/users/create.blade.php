@extends('layouts.backendmaster')
@section('title', 'Create a New User')
@section('content')

<div class="inner-block">
    <div class="inbox">
    	  <h2>Users Details</h2>
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
							Create a New User 
						</div>
						<div class="inbox-details-body">
							<div class="alert alert-info">
								Please fill details 
							</div>
							<form class="com-mail" method="post">

								@if (count($errors) > 0)
								  <div class="alert alert-danger">
								    <strong>Whoops!</strong> There were some problems with your input.<br><br>
								    <ul>
								       @foreach ($errors->all() as $error)
								         <li>{{ $error }}</li>
								       @endforeach
								    </ul>
								  </div>
								@endif

								<input type="hidden" name="_token" value="{!! csrf_token() !!}">

								<input type="text"  name="name" id="name" value="Name">

								<input type="email"  name="email" id="email" value="Email">

								<input type="date"  name="date" id="date" value="Date Joined">

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





                      
						
