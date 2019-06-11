@extends('layouts.master')
@section('title', 'Home')

@section('content')

<!-- banner -->
        <div class="banner_w3lspvt-2">
            <div class="container">
                <div class="d-flex style-w3layouts">
                    <h4 class="inner-style-w3pvts mr-auto text-wh text-uppercase">Home</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Welcome to creativity</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- //banner -->
    </div>
    <!-- //main banner -->

    <!-- banner bottom -->
    <section class="bottom-w3pvt py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="top-cont px-lg-5">
                <p>These are a most of them which are used by many people to create a blanket, sweaters or scalfs as well.</p>
                    <p class="my-4">Just look for them in shops or stores and make your best outfit.</p>
                <p>Pursue the future.</p>
                <h3 class="my-4">
                    <a href="blog1.html" class="single-text text-bl">New threads 2019</a>
                </h3>
                <p>These are a most of them which are used by many people to create a blanket, sweaters or scalfs as well.</p>
                    <p class="my-3">Just look for them in shops or stores and make your best outfit.</p>
            </div>
            <!-- middle section 1 -->
            <section class="row middle-2 py-lg-5 py-4">
                <div class="col-lg-7 text-xl-right text-center">
                    <img class="img-fluid" src="{!! asset('images/m1.jpg') !!}" alt="">
                </div>
                <div class="col-lg-5 who-left-w3pvt mt-lg-0 mt-4">
                    <h3 class="w3ls-title font-weight-bold text-da mb-4">
                        Unique crochet threads.</h3>
                    <p>These are a most of them which are used by many people to create a blanket, sweaters or scalfs as well.</p>
                    <p class="mt-3">Just look for them in shops or stores and make your best outfit.</p>
                </div>
            </section>
            <!-- //middle section 1 -->
            <div class="top-cont px-lg-5">
                <p>These are a most of them which are used by many people to create a blanket, sweaters or scalfs as well.</p>
                    <p class="my-3">Just look for them in shops or stores and make your best outfit.</p>
                <p>Innovation, imagination and creativity.
                </p>
                <h3 class="my-4">
                    <a href="blog2.html" class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">Modern Pillows</a>
                </h3>
                <div class="row">
                    <div class="col-md-6">
                        <p>These are a most of them which are used by many people to create a blanket, sweaters or scalfs as well.</p>
                    </div>
                    <div class="col-md-6">
                        <p>These are a most of them which are used by many people to create a blanket, sweaters or scalfs as well.</p>
                    </div>
                </div>
                <p class="my-3">Just look for them in shops or stores and make your best outfit.</p>
            </div>
            <div class="quote">
                <p class="text-wh">
                    <span class="fa fa-quote-left"></span> You are more than what you think you are. Your brain is your power to create.
                    <span class="fa fa-quote-right"></span>
                </p>
            </div>
            <div class="top-cont px-lg-5">
                <h3 class="my-4">
                    <a href="blog3.html" class="single-text text-bl">New Pillow colors 2019</a>
                </h3>
                <p>These are a most of them which are used by many people to create a blanket, sweaters or scalfs as well.</p>
                <p class="mt-3">Just look for them in shops or stores and make your best outfit.</p>
                <img class="img-fluid mt-5" src="{!! asset('images/m2.jpg') !!}" alt="">
            </div>
        </div>
    </section>
    <!-- //banner bottom -->

    <!-- testimonials -->
    <div class="testimonials py-5 bg-li" id="testi">
        <div class="container pb-xl-5 pb-lg-3">
            <h3 class="tittle text-center mb-5">What Our People Say</h3>
            <div class="row pt-4">
                <div class="col-lg-4 testi-sections mb-4">
                    <div class="testimonials_grid">
                        <p class="sub-test">At first i thought its hard but it wasn't, simple you just have to be with passion and creative mind.
                        </p>
                        <div class="row mt-5">
                            <div class="col-3 testi-img-res text-lg-left text-right">
                                <img src="{!! asset('images/te1.jpg') !!}" alt="" class="img-fluid" />
                            </div>
                            <div class="col-7 testi_grid">
                                <h5>Petey Cruis</h5>
                                <p>Blogger</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 testi-sections mb-4">
                    <div class="testimonials_grid">
                        <p class="sub-test">At first i thought its hard but it wasn't, simple you just have to be with passion and creative mind.
                        </p>
                        <div class="row mt-5">
                            <div class="col-3 testi-img-res text-lg-left text-right">
                                <img src="{!! asset('images/te2.jpg') !!}" alt="" class="img-fluid" />
                            </div>
                            <div class="col-7 testi_grid">
                                <h5>Molive Joe</h5>
                                <p>Photographer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 testi-sections mb-4">
                    <div class="testimonials_grid">
                        <p class="sub-test">At first i thought its hard but it wasn't, simple you just have to be with passion and creative mind.
                        </p>
                        <div class="row mt-5">
                            <div class="col-3 testi-img-res text-lg-left text-right">
                                <img src="{!! asset('images/te3.jpg') !!}" alt="" class="img-fluid" />
                            </div>
                            <div class="col-7 testi_grid">
                                <h5>Paige Turner</h5>
                                <p>Poet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonials -->

    <!-- more -->
    <section class="blog_w3ls py-5" id="more">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle mb-sm-5 mb-4">You may also like</h3>
            <div class="row">
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="med-blog">
                        <div class="blog-header">
                            <a href="blog1.html">
                                <img class="img-fluid" src="{!! asset('images/blog1.jpg') !!}" style="width:400px; height: 300px;" alt="image">
                            </a>
                        </div>
                        <div class="blog-body bg-wh p-4">
                            <span>March 12, 2019 - Step by step</span>
                            <a href="blog1.html" class="blog-title">Imagine, Create and develop</a>
                            <p>We are doing this together using tutorials</p>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="med-blog">
                        <div class="blog-header">
                            <a href="blog2.html">
                                <img class="img-fluid" src="{!! asset('images/blog2.jpg') !!}" style="width:400px; height: 300px;" alt="image">
                            </a>
                        </div>
                        <div class="blog-body bg-wh p-4">
                            <span>March 14, 2019 - Beginners</span>
                            <a href="blog2.html" class="blog-title">Imagine, Create and develop</a>
                            <p>We are doing this together using tutorials.</p>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="med-blog">
                        <div class="blog-header">
                            <a href="blog4.html">
                                <img class="img-fluid" src="{!! asset('images/blog3.jpg') !!}" style="width:400px; height: 300px;" alt="image">
                            </a>
                        </div>
                        <div class="blog-body bg-wh p-4">
                            <span>March 16, 2019 - More</span>
                            <a href="blog4.html" class="blog-title">Imagine, Create and develop</a>
                            <p>We are doing this together using tutorials.</p>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
            </div>
        </div>
    </section>
    <!-- //more -->
@endsection

