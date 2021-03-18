@extends('layouts.master')
@section('title') {{$product->name}} in Details @endsection

@section('content')

<div class="home">
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('frontend/images/product_background.jpg') }}" data-speed="0.8"></div>
	<div class="home_container">
		<div class="home_content">
			<div class="home_title">Product Details</div>
			<div class="breadcrumbs">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{route('product.cart')}}">Your Cart</a></li>
					<li>{{$product->name}}</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- Products -->

	<div class="product">

		<!-- Sorting & Filtering -->
		<div class="products_bar">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="products_bar_content d-flex flex-row align-items-center justify-content-start">
								<div class="product_categories">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li class="active"><a href="{{ route('all-products') }}">All</a></li>
										<li><a href="#">Hot Products</a></li>
										<li><a href="#">New Products</a></li>
										<li><a href="#">Sale Products</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Product Content -->
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="product_content_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
							<div class="product_content order-lg-1 order-2">
								<div class="product_content_inner">
									<div class="product_image_row d-flex flex-md-row flex-column align-items-md-end align-items-start justify-content-start">
										<div class="product_image_1 product_image">
											<img src="{{ asset('frontend/images/product_single_1.jpg') }}" alt="">
										</div>
										<div class="product_image_2 product_image"><img src="{{ asset('frontend/images/product_single_2.jpg') }}" alt=""></div>
									</div>
									<div class="product_image_row">
										<div class="product_image_3 product_image"><img src="{{ asset('frontend/images/product_single_3.jpg') }}" alt=""></div>
									</div>
									<div class="product_image_row d-flex flex-md-row flex-column align-items-start justify-content-start">
										<div class="product_image_4 product_image"><img src="{{ asset('frontend/images/product_single_4.jpg') }}" alt=""></div>
										<div class="product_image_5 product_image"><img src="{{ asset('frontend/images/product_single_5.jpg') }}" alt=""></div>
									</div>
								</div>
							</div>
							
							<div class="product_sidebar order-lg-2 order-1">

								<form action="{{route('product.addToCart', ['id' => $product->id])}}" id="product_form" class="product_form">

									@csrf

						                @foreach ($errors->all() as $error)
						                <p class="alert alert-danger">{{ $error }}</p>
						                @endforeach

						                @if (session('success'))
						                    <div class="alert alert-success">
						                        {{ session('success') }}
						                    </div>
						                @endif

						            <div class="product_image_1 product_image">
										<img src="{{$product->imagePath}}" alt="">
									</div>
									<div class="product_name">{{$product->name}}</div>
									<div class="product_price">${{$product->current_price}}</div>
									<div class="product_color">Description: <span>{{$product->description}}</span></div>
									<div class="product_size">
										<div class="product_size_title">Select Size</div>
										<div class="product_size_list">
											<ul>
												<li class="size_available">
													<input type="radio" id="radio_1" name="product_radio" class="regular_radio radio_1">
													<label for="radio_1">{{$product->quantity}}</label>
												</li>
											</ul>
										</div>
									</div>
									<button class="cart_button trans_200">add to cart</button>
									<div class="similar_products_button trans_200"><a href="{{ route('all-products') }}">see similar products</a></div>
								</form>
								<div class="product_links">
									<ul class="text-center">
										<li><a href="#">See guide</a></li>
										<li><a href="#">Shipping</a></li>
										<li><a href="#">Returns</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection