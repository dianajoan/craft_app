@extends('layouts.master')
@section('title') Checkout @endsection

@section('content')

<!-- Checkout -->

	<div class="checkout">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="checkout_container d-flex flex-xxl-row flex-column align-items-start justify-content-start">
							
							<!-- Billing -->
							<div class="billing checkout_box">
								<div class="checkout_title">Billing Address</div>
								<div class="checkout_form_container">
									<form action="{{ route('checkout') }}" id="checkout_form" class="checkout_form">

										@csrf

						                @foreach ($errors->all() as $error)
						                <p class="alert alert-danger">{{ $error }}</p>
						                @endforeach

						                @if (session('success'))
						                    <div class="alert alert-success">
						                        {{ session('success') }}
						                    </div>
						                @endif

										<div class="row">
											<div class="col-lg-6">
												<!-- Name -->
												<label for="checkout_name">Name*</label>
												<input type="text" id="checkout_name" name="name" class="checkout_input" required="required">
											</div>
										</div>
										<div>
											<!-- Company -->
											<label for="checkout_company">Company</label>
											<input type="text" id="checkout_company" class="checkout_input">
										</div>
										<div>
											<!-- Country -->
											<label for="checkout_country">Country*</label>
											<input type="text" id="checkout_country" class="checkout_input" required="required">
										</div>
										<div>
											<!-- Address -->
											<label for="checkout_address">Address*</label>
											<input type="text" id="checkout_address" name="address" class="checkout_input" required="required">
										</div>
										<div>
											<!-- Zipcode -->
											<label for="checkout_zipcode">Zipcode*</label>
											<input type="text" id="checkout_zipcode" class="checkout_input" required="required">
										</div>
										<div>
											<!-- City / Town -->
											<label for="checkout_city">City/Town*</label>
											<input type="text" id="checkout_city" class="checkout_input" required="required">
										</div>
										<div>
											<!-- Phone no -->
											<label for="checkout_phone">Phone no*</label>
											<input type="phone" id="checkout_phone" class="checkout_input" required="required">
										</div>
										<div>
											<!-- Email -->
											<label for="checkout_email">Email Address*</label>
											<input type="phone" id="checkout_email" value="{{ auth()->user()->email }}" class="checkout_input" required="required">
										</div>
										<div class="checkout_extra">
											<ul>
												<li class="billing_info d-flex flex-row align-items-center justify-content-start">
													<label class="checkbox_container">
														<input type="checkbox" id="cb_1" name="billing_checkbox" class="billing_checkbox">
														<span class="checkbox_mark"></span>
														<span class="checkbox_text">Terms and conditions</span>
													</label>
												</li>
												<li class="billing_info d-flex flex-row align-items-center justify-content-start">
													<label class="checkbox_container">
														<input type="checkbox" id="cb_2" name="billing_checkbox" class="billing_checkbox">
														<span class="checkbox_mark"></span>
														<span class="checkbox_text">Create an account</span>
													</label>
												</li>
												<li class="billing_info d-flex flex-row align-items-center justify-content-start">
													<label class="checkbox_container">
														<input type="checkbox" id="cb_3" name="billing_checkbox" class="billing_checkbox">
														<span class="checkbox_mark"></span>
														<span class="checkbox_text">Subscribe to our newsletter</span>
													</label>
												</li>
											</ul>
										</div>

										<!-- Cart Total -->
										<div class="cart_total">
											<div class="cart_total_inner checkout_box">
												<div class="checkout_title">Cart total</div>
												<ul class="cart_extra_total_list">
													<li class="d-flex flex-row align-items-center justify-content-start">
														<div class="cart_extra_total_title">Total</div>
														<div class="cart_extra_total_value ml-auto">${{$total}}</div>
													</li>
												</ul>

												<!-- Payment Options -->
												<div class="payment">
													<div class="payment_options">
														<label class="payment_option clearfix">Paypal
															<input type="radio" name="radio">
															<span class="checkmark"></span>
														</label>
														<label class="payment_option clearfix">Cach on delivery
															<input type="radio" name="radio">
															<span class="checkmark"></span>
														</label>
														<label class="payment_option clearfix">Credit card
															<input type="radio" name="radio">
															<span class="checkmark"></span>
														</label>
														<label class="payment_option clearfix">Direct bank transfer
															<input type="radio" checked="checked" name="radio">
															<span class="checkmark"></span>
														</label>
													</div>
												</div>

												<!-- Order Text -->
												<div class="order_text">Thanks for supporting us, enjoy the product(s)</div>

												<div class="checkout_button trans_200">
													<a href="{{ route('checkout') }}">place order</a>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection