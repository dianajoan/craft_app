<!-- Newsletter -->

  <div class="newsletter">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('frontend/images/newsletter.jpg') }}" data-speed="0.8"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="newsletter_content text-center">
            <div class="newsletter_title_container">
              <div class="newsletter_title">subscribe to our newsletter</div>
              <div class="newsletter_subtitle">we won't spam, we promise!</div>
            </div>
            <div class="newsletter_form_container">
              <form action="#" id="newsletter_form" class="newsletter_form">
                <input type="email" class="newsletter_input" placeholder="your e-mail here" required="required">
                <button class="newsletter_button">submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Footer -->

  <footer class="footer">
    <div class="footer_content">
      <div class="section_container">
        <div class="container">
          <div class="row">
            
            <!-- About -->
            <div class="col-xxl-3 col-md-6 footer_col">
              <div class="footer_about">
                <!-- Logo -->
                <div class="sidebar_logo">
                  <a href="#"><div>E-Craft</span></div></a>
                </div>
                <div class="footer_about_text">
                  <p>This is an online shopping craft where customers make orders, make payments and deliveries are processed. Join Us today and change your life.</p>
                </div>
                <div class="cards">
                  <ul class="d-flex flex-row align-items-center justify-content-start">
                    <li><a href="#"><img src="{{ asset('frontend/images/card_1.jpg') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/images/card_2.jpg') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/images/card_3.jpg') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/images/card_4.jpg') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/images/card_5.jpg') }}" alt=""></a></li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Questions -->
            <div class="col-xxl-3 col-md-6 footer_col">
              <div class="footer_questions">
                <div class="footer_title">questions</div>
                <div class="footer_list">
                  <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Track Orders</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">Bloggers</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Press</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Blog -->
            <div class="col-xxl-3 col-md-6 footer_col">
              <div class="footer_blog">
                <div class="footer_title">blog</div>
                <div class="footer_blog_container">

                  <!-- Blog Item -->
                  <div class="footer_blog_item d-flex flex-row align-items-start justify-content-start">
                    <div class="footer_blog_image"><a href="blog.html"><img src="{{ asset('frontend/images/footer_blog_1.jpg') }}" alt=""></a></div>
                    <div class="footer_blog_content">
                      <div class="footer_blog_title"><a href="blog.html">what shoes to wear</a></div>
                      <div class="footer_blog_date">june 06, 2018</div>
                      <div class="footer_blog_link"><a href="blog.html">Read More</a></div>
                    </div>
                  </div>

                  <!-- Blog Item -->
                  <div class="footer_blog_item d-flex flex-row align-items-start justify-content-start">
                    <div class="footer_blog_image"><a href="blog.html"><img src="{{ asset('frontend/images/footer_blog_2.jpg') }}" alt=""></a></div>
                    <div class="footer_blog_content">
                      <div class="footer_blog_title"><a href="blog.html">trends this year</a></div>
                      <div class="footer_blog_date">june 06, 2018</div>
                      <div class="footer_blog_link"><a href="blog.html">Read More</a></div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <!-- Contact -->
            <div class="col-xxl-3 col-md-6 footer_col">
              <div class="footer_contact">
                <div class="footer_title">contact</div>
                <div class="footer_contact_list">
                  <ul>
                    <li class="d-flex flex-row align-items-start justify-content-start"><span>C.</span><div>{{ config('app.name') }}</div></li>
                    <li class="d-flex flex-row align-items-start justify-content-start"><span>A.</span><div>Kampala, Uganda</div></li>
                    <li class="d-flex flex-row align-items-start justify-content-start"><span>T.</span><div>+256771991162</div></li>
                    <li class="d-flex flex-row align-items-start justify-content-start"><span>E.</span><div>e-craft@gmail.com</div></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Social -->
    <div class="footer_social">
      <div class="section_container">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="footer_social_container d-flex flex-row align-items-center justify-content-between">
                <!-- Instagram -->
                <a href="#">
                  <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                    <div class="footer_social_icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    <div class="footer_social_title">instagram</div>
                  </div>
                </a>
                <!-- Google + -->
                <a href="#">
                  <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                    <div class="footer_social_icon"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                    <div class="footer_social_title">google +</div>
                  </div>
                </a>
                <!-- Pinterest -->
                <a href="#">
                  <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                    <div class="footer_social_icon"><i class="fa fa-pinterest" aria-hidden="true"></i></div>
                    <div class="footer_social_title">pinterest</div>
                  </div>
                </a>
                <!-- Facebook -->
                <a href="#">
                  <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                    <div class="footer_social_icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                    <div class="footer_social_title">facebook</div>
                  </div>
                </a>
                <!-- Twitter -->
                <a href="#">
                  <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                    <div class="footer_social_icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                    <div class="footer_social_title">twitter</div>
                  </div>
                </a>
                <!-- YouTube -->
                <a href="#">
                  <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                    <div class="footer_social_icon"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                    <div class="footer_social_title">youtube</div>
                  </div>
                </a>
                <!-- Tumblr -->
                <a href="#">
                  <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                    <div class="footer_social_icon"><i class="fa fa-tumblr-square" aria-hidden="true"></i></div>
                    <div class="footer_social_title">tumblr</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>        
    </div>

    <!-- Credits -->
    <div class="credits">
      <div class="section_container">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="credits_content d-flex flex-row align-items-center justify-content-end">
                <div class="credits_text">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="mailto:dianajoanita900@gmail.com" target="_blank">Diana Joanita</a>
</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>