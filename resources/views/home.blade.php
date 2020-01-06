@extends('layouts.master')
@section('title') Home @endsection

@section('content')

<!-- Home -->

  <div class="home">
    
    <!-- Home Slider -->
    <div class="home_slider_container">
      <div class="owl-carousel owl-theme home_slider">
        
        <!-- Slide -->
        <div class="owl-item">
          <div class="background_image" style="background-image:url({{ asset('frontend/images/home_slider_1.jpg') }} )"></div>
          <div class="home_content_container">
            <div class="home_content">
              <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                <div class="home_discount_num">20</div>
                <div class="home_discount_text">Discount on the</div>
              </div>
              <div class="home_title">New Collection</div>
              <div class="button button_1 home_button trans_200"><a href="{{ route('all-products') }}">Shop NOW!</a></div>
            </div>
          </div>
        </div>

        <!-- Slide -->
        <div class="owl-item">
          <div class="background_image" style="background-image:url({{ asset('frontend/images/home_slider_1.jpg') }} )"></div>
          <div class="home_content_container">
            <div class="home_content">
              <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                <div class="home_discount_num">20</div>
                <div class="home_discount_text">Discount on the</div>
              </div>
              <div class="home_title">New Collection</div>
              <div class="button button_1 home_button trans_200"><a href="{{ route('all-products') }}">Shop NOW!</a></div>
            </div>
          </div>
        </div>

        <!-- Slide -->
        <div class="owl-item">
          <div class="background_image" style="background-image:url({{ asset('frontend/images/home_slider_1.jpg') }} )"></div>
          <div class="home_content_container">
            <div class="home_content">
              <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                <div class="home_discount_num">20</div>
                <div class="home_discount_text">Discount on the</div>
              </div>
              <div class="home_title">New Collection</div>
              <div class="button button_1 home_button trans_200"><a href="{{ route('all-products') }}">Shop NOW!</a></div>
            </div>
          </div>
        </div>

      </div>
        
      <!-- Home Slider Navigation -->
      <div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('frontend/images/prev.png') }}" alt=""></div></div>
      <div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('frontend/images/next.png') }}" alt=""></div></div>

    </div>
  </div>

  <!-- Boxes -->
  
  <div class="boxes">
    <div class="section_container">
      <div class="container">
        <div class="row">
          
          <!-- Box -->
          <div class="col-lg-4 box_col">
            <div class="box">
              <div class="box_image"><img src="{{ asset('frontend/images/box_1.jpg') }}" alt=""></div>
              <div class="box_title trans_200"><a href="{{ route('all-products') }}">summer collection</a></div>
            </div>
          </div>

          <!-- Box -->
          <div class="col-lg-4 box_col">
            <div class="box">
              <div class="box_image"><img src="{{ asset('frontend/images/box_2.jpg') }}" alt=""></div>
              <div class="box_title trans_200"><a href="{{ route('all-products') }}">eyewear collection</a></div>
            </div>
          </div>

          <!-- Box -->
          <div class="col-lg-4 box_col">
            <div class="box">
              <div class="box_image"><img src="{{ asset('frontend/images/box_3.jpg') }}" alt=""></div>
              <div class="box_title trans_200"><a href="{{ route('all-products') }}">basic pieces</a></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Categories -->

  <div class="categories">
    <div class="section_container">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <div class="categories_list_container">
              <ul class="categories_list d-flex flex-row align-items-center justify-content-start">
                <li><a href="{{ route('all-products') }}">new arrivals</a></li>
                <li><a href="{{ route('all-products') }}">recommended</a></li>
                <li><a href="{{ route('all-products') }}">best sellers</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Products -->

  <div class="products">
    <div class="section_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="products_container grid">
              
              <!-- Product -->
              <div class="product grid-item hot">
                <div class="product_inner">
                  <div class="product_image">
                    <img src="{{ asset('frontend/images/product_1.jpg') }}" alt="">
                    <div class="product_tag">hot</div>
                  </div>
                  <div class="product_content text-center">
                    <div class="product_title"><a href="product.html">long red shirt</a></div>
                    <div class="product_price">$39.90</div>
                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                  </div>
                </div>  
              </div>

              <!-- Product -->
              <div class="product grid-item">
                <div class="product_inner">
                  <div class="product_image"><img src="{{ asset('frontend/images/product_2.jpg') }}" alt=""></div>
                  <div class="product_content text-center">
                    <div class="product_title"><a href="product.html">hype grey shirt</a></div>
                    <div class="product_price">$19.50</div>
                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                  </div>
                </div>  
              </div>

              <!-- Product -->
              <div class="product grid-item sale">
                <div class="product_inner">
                  <div class="product_image">
                    <img src="{{ asset('frontend/images/product_3.jpg') }}" alt="">
                    <div class="product_tag">sale</div>
                  </div>
                  <div class="product_content text-center">
                    <div class="product_title"><a href="product.html">long sleeve jacket</a></div>
                    <div class="product_price">$32.20<span>RRP 64.40</span></div>
                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                  </div>
                </div>  
              </div>

              <!-- Product -->
              <div class="product grid-item">
                <div class="product_inner">
                  <div class="product_image">
                    <img src="{{ asset('frontend/images/product_4.jpg') }}" alt="">
                  </div>
                  <div class="product_content text-center">
                    <div class="product_title"><a href="product.html">denim men shirt</a></div>
                    <div class="product_price">$59.90</div>
                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                  </div>
                </div>  
              </div>

              <!-- Product -->
              <div class="product grid-item">
                <div class="product_inner">
                  <div class="product_image">
                    <img src="{{ asset('frontend/images/product_5.jpg') }}" alt="">
                  </div>
                  <div class="product_content text-center">
                    <div class="product_title"><a href="product.html">long red shirt</a></div>
                    <div class="product_price">$79.90</div>
                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                  </div>
                </div>  
              </div>

              <!-- Product -->
              <div class="product grid-item new">
                <div class="product_inner">
                  <div class="product_image">
                    <img src="{{ asset('frontend/images/product_6.jpg') }}" alt="">
                    <div class="product_tag">new</div>
                  </div>
                  <div class="product_content text-center">
                    <div class="product_title"><a href="product.html">hype grey shirt</a></div>
                    <div class="product_price">$59.90</div>
                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                  </div>
                </div>  
              </div>

              <!-- Product -->
              <div class="product grid-item">
                <div class="product_inner">
                  <div class="product_image">
                    <img src="{{ asset('frontend/images/product_7.jpg') }}" alt="">
                  </div>
                  <div class="product_content text-center">
                    <div class="product_title"><a href="product.html">long sleeve jacket</a></div>
                    <div class="product_price">$15.90</div>
                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                  </div>
                </div>  
              </div>

              <!-- Product -->
              <div class="product grid-item sale">
                <div class="product_inner">
                  <div class="product_image">
                    <img src="{{ asset('frontend/images/product_8.jpg') }}" alt="">
                    <div class="product_tag">sale</div>
                  </div>
                  <div class="product_content text-center">
                    <div class="product_title"><a href="product.html">denim men shirt</a></div>
                    <div class="product_price">$43.99<span>RRP 64.40</span></div>
                    <div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
                  </div>
                </div>  
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

