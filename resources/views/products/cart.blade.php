@extends('layouts.master')
@section('title') Cart @endsection

@section('content')

<!-- Cart -->

 @if(Session::has('cart'))

	<div class="cart_section">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="cart_container">
							
							<!-- Cart Bar -->
							<div class="cart_bar">
								<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-start">
									<li>#</li>
									<li>Product</li>
									<li>Price</li>
									<li>Quantity</li>
									<li>Total</li>
								</ul>
							</div>

							<?php $i=0; ?>
                             @foreach($products as $product)

							<!-- Cart Items -->
							<div class="cart_items">
								<ul class="cart_items_list">

									<!-- Cart Item -->
									<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

										<div class="product_color text-lg-center product_text">
											{{ ++$i }}
										</div>
										<div class="product_color text-lg-center product_text">
											{{$product['item']['name']}}
										</div>
										<div class="product_color text-lg-center product_text">
											${{$product['item']['current_price']}}
										</div>
										<div class="product_color text-lg-center product_text">
											{{$product['qty']}}
										</div>
									</li>
								</ul>
							</div>

							@endforeach

							<!-- Cart Buttons -->
							<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
								<div class="cart_buttons_inner ml-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="button button_continue trans_200">
										<a href="{{ route('all-products') }}">continue shopping</a>
									</div>
									<div class="button button_clear trans_200">
										<a href="{{route('product.remove', ['id' => $product['item']['id']])}}">clear cart</a>
									</div>
									<div class="button button_update trans_200"><a href="#">update cart</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section_container cart_extra_container">
			<div class="container">
				<div class="row">

					<!-- Cart Total -->
					<div class="col-xxl-6">
						<div class="cart_extra cart_extra_2">
							<div class="cart_extra_content cart_extra_total">
								<div class="cart_extra_title">Cart Total</div>
								<ul class="cart_extra_total_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value ml-auto">${{$totalPrice}}</div>
									</li>
								</ul>
								<div class="checkout_button trans_200"><a href="{{ route('checkout') }}">proceed to checkout</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@else

        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 col-sm-3">
                <p class="alert alert-warning">Your shopping cart is empty.</p>
            </div>
        </div>
        
    @endif


@endsection