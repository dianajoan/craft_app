@extends('layouts.master')
@section('title', 'About')

@section('content')
        <!-- banner -->
        <div class="banner_w3lspvt-2">
            <div class="container">
                <div class="d-flex style-w3layouts">
                    <h4 class="inner-style-w3pvts mr-auto text-wh text-uppercase">About Us</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">About Page</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- //banner -->
    </div>
    <!-- //main banner -->

    <!-- about-->
    <section class="wthree-about py-5" id="about">
        <div class="container py-xl-5 py-lg-3">
            <div class="row about-main py-3">
                <div class="col-lg-5 about-text-grid pr-xl-5">
                    <h3 class="main-title-w3pvt text-uppercase">First we imagine, then we do everything else.</h3>
                    <hr>
                    <p class="mt-4">Nam venenatis neque tellus, vel sagittis lacus placerat sit amet. Morbi tristique
                        consequat mi,
                        vitae interdum sapien posuere ut.</p>
                    <p class="mt-3">Mauris lectus ex, rutrum sed gravida eu, Nam augue tortor, pellentesque ut viverra
                        id.</p>
                    <a href="{{ route('about') }}" class="button-style-w3ls btn mt-sm-5 mt-4">View More</a>
                </div>
                <div class="col-lg-3 col-sm-5 about-right mt-lg-0 mt-5">
                    <img src="{!! asset('images/a2.jpg') !!}" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-4 col-sm-7 mt-lg-0 mt-5 about-right">
                    <img src="{!! asset('images/a1.jpg') !!}" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- //about -->

    <!-- services -->
    <div class="serives-w3pvt-web py-5" id="services">
        <div class="container py-xl-5 py-lg-3">
            <div class="row support-bottom text-center py-5">
                <div class="col-lg-4">
                    <div class="services-w3ls-grid">
                        <div class="serv-icon mx-auto">
                            <span class="fa fa-cutlery"></span>
                        </div>
                        <h4 class="text-wh mt-md-4 mt-3 mb-3">Service 1</h4>
                        <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-lg-0 mt-4">
                    <div class="services-w3ls-grid">
                        <div class="serv-icon clr-2 mx-auto">
                            <span class="fa fa-apple"></span>
                        </div>
                        <h4 class="text-wh mt-md-4 mt-3 mb-3">Service 2</h4>
                        <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-lg-0 mt-4">
                    <div class="services-w3ls-grid">
                        <div class="serv-icon clr-3 mx-auto">
                            <span class="fa fa-beer"></span>
                        </div>
                        <h4 class="text-wh mt-md-4 mt-3 mb-3">Service 3</h4>
                        <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services -->

    <!-- team -->
    <div class="team text-center py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center mb-sm-5 mb-4">Our Team</h3>
            <div class="row team-bottom pt-4">
                <div class="col-lg-3 col-sm-6 team-grid">
                    <img src="{!! asset('images/t1.jpeg') !!}" class="img-fluid" alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Mack Joe</h4>
                        </div>
                        <ul>
                            <li class="f1">
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </li>
                            <li class="f2">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li class="f3">
                                <a href="#">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-grid mt-sm-0 mt-5">
                    <img src="{!! asset('images/t3.jpeg') !!}" class="img-fluid" alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Cruz Deo</h4>
                        </div>
                        <ul>
                            <li class="f1">
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </li>
                            <li class="f2">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li class="f3">
                                <a href="#">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-grid mt-lg-0 mt-5">
                    <img src="{!! asset('images/t2.jpg') !!}" class="img-fluid" alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Rochy Jae</h4>
                        </div>
                        <ul>
                            <li class="f1">
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </li>
                            <li class="f2">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li class="f3">
                                <a href="#">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-grid  mt-lg-0 mt-5">
                    <img src="{!! asset('images/t4.jpg') !!}" class="img-fluid" alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Rojo Poy</h4>
                        </div>
                        <ul>
                            <li class="f1">
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </li>
                            <li class="f2">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li class="f3">
                                <a href="#">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //team -->

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
                                <img class="img-fluid" src="{!! asset('images/blog1.jpg') !!}" alt="image">
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
                                <img class="img-fluid" src="{!! asset('images/blog2.jpg') !!}" alt="image">
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
                                <img class="img-fluid" src="{!! asset('images/blog3.jpg') !!}" alt="image">
                            </a>
                        </div>
                        <div class="blog-body bg-wh p-4">
                            <span>March 16, 2019 - More</span>
                            <a href="blog4.html" class="blog-title">Imagine, Create and develop/a>
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

