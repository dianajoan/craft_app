<!-- Sidebar -->

	<div class="sidebar">
		
		<!-- Info -->
		<div class="info">
			<div class="info_content d-flex flex-row align-items-center justify-content-start">
				
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

			</div>
		</div>

		<!-- Logo -->
		<div class="sidebar_logo">
			<a href="#"><div><span>{{ config('app.name') }}</span></div></a>
		</div>

		<!-- Sidebar Navigation -->
		<nav class="sidebar_nav">
			<ul>
				<li><a href="{{ route('home') }}">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="{{ route('all-products') }}">products<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">categories<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

				@if(Auth::check())

				<li><a href="#">{{ Auth::user()->name }}</a></li>
				<li><a href="{{route('user.profile')}}">profile<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="{{ route('logout') }}">logout<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

				@else

				<li><a href="{{ route('login') }}">login<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="{{ route('register') }}">register<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

				@endif

			</ul>
		</nav>

		<!-- Search -->
		<div class="search">
			<form action="#" class="search_form" id="sidebar_search_form">
				<input type="text" class="search_input" placeholder="Search" required="required">
				<button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
		</div>

		<!-- Cart -->
		<div class="cart d-flex flex-row align-items-center justify-content-start">
			<div class="cart_icon">
				<a href="{{route('product.cart')}}">
					<img src="{{ asset('frontend/images/bag.png') }}" alt="">
					<div class="cart_num">
					[<b style="color: red;">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}} </b> ]
					</div>
				</a>
			</div>
			<div class="cart_text">bag</div>
			<div class="cart_price">$39.99 (1)</div>
		</div>
	</div>