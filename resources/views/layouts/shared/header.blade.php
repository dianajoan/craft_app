<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			
			<!-- Hamburger -->
			<div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

			<!-- Logo -->
			<div class="header_logo">
				<a href="{{ url('/') }}"><div><span>{{ config('app.name') }}</span></div></a>
			</div>

			<!-- Navigation -->
			<nav class="header_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="{{ url('/') }}">home</a></li>
					<li><a href="{{ route('all-products') }}">products</a></li>

					@if(Auth::check())

					<li><a href="#">{{ Auth::user()->name }}</a></li>
					<li><a href="{{route('user.profile')}}">profile</a></li>
					<li>
						<a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
					</li>

					@else

					<li><a href="{{ route('login') }}">login</a></li>
					<li><a href="{{ route('register') }}">register</a></li>

					@endif
				</ul>
			</nav>

			<!-- Header Extra -->
			<div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

				<!-- Language -->
				<div class="info_languages has_children">
					<div class="language_flag"><img src="{{ asset('frontend/images/flag_1.svg') }}" alt="https://www.flaticon.com/authors/freepik"></div>
					<div class="dropdown_text">english</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
					
					<!-- Language Dropdown Menu -->
					 <ul>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="{{ asset('frontend/images/flag_2.svg') }}" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">french</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="{{ asset('frontend/images/flag_3.svg') }}" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">japanese</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="{{ asset('frontend/images/flag_4.svg') }}" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">russian</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="{{ asset('frontend/images/flag_5.svg') }}" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">spanish</div>
					 	</a></li>
					 </ul>

				</div>

				<!-- Currency -->
				<div class="info_currencies has_children">
					<div class="dropdown_text">usd</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

					<!-- Currencies Dropdown Menu -->
					 <ul>
					 	<li><a href="#"><div class="dropdown_text">EUR</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">YEN</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">GBP</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">CAD</div></a></li>
					 </ul>

				</div>

				<!-- Cart -->
				<div class="cart d-flex flex-row align-items-center justify-content-start">
					<a href="{{route('product.cart')}}">
						<img src="{{asset('frontend/images/bag.png') }}" alt="">
						<div class="cart_num">
						 <b style="color: red;">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}} </b> 
						</div>
					</a>
				</div>

			</div>

		</div>
	</header>