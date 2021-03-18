@extends('layouts.master')
@section('title') Products @endsection

@section('content')

<!-- Home -->

<div class="home">
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('frontend/images/categories.jpg') }}" data-speed="0.8"></div>
	<div class="home_container">
		<div class="home_content">
			<div class="home_title">Products</div>
			<div class="breadcrumbs">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>All Products</li>
				</ul>
			</div>
		</div>
	</div>
</div>

	<!-- Products -->

	<div class="products">

		<!-- Sorting & Filtering -->
		<div class="products_bar">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="products_bar_content d-flex flex-column flex-xxl-row align-items-start align-items-xxl-center justify-content-start">
								<div class="product_categories">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li class="active"><a href="#">All</a></li>
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
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="products_container grid">

							@foreach($products->chunk(3) as $productChunk)

                			@foreach($productChunk as $product)

							<!-- Product -->
							<div class="product grid-item hot">
								<div class="product_inner">
									<div class="product_image">
										<img src="{{$product->imagePath}}" alt="">
										<div class="product_tag">{{$product->status}}</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="{{route('product-details', $product->id)}}">{{$product->name}}</a></div>
										<div class="product_price">
											<strike style="font-size: 19px; ">${{$product->previous_price}}</strike>
											<span style="color: #9ACD32; font-size: 19px; ">${{$product->current_price}}</span>
										</div>
										<div class="product_button ml-auto mr-auto trans_200">
											<a href="{{route('product.addToCart', ['id' => $product->id])}}">add to cart</a>
										</div>
									</div>
								</div>	
							</div>

							@endforeach
                			@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection