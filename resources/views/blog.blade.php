@extends('layouts.master')
@section('title', 'About')

@section('content')

<!-- banner -->
		<div class="banner_w3lspvt-2">
			<div class="container">
				<div class="d-flex style-w3layouts">
					<h4 class="inner-style-w3pvts mr-auto text-wh text-uppercase">Blog</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
						<li class="breadcrumb-item" aria-current="page">Blog</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- blog -->
	<section class="wthree-row py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-4 blog-sldebar-right">
					<div class="single-gd">
						<img src="{!! asset('images/bb4.jpg') !!}" class="img-fluid" alt="">
						<h4>Sign up to our newsletter</h4>
						<form action="#" method="post">
							<input type="email" name="Email" placeholder="Email" required="">
							<button type="submit" class="btn">Subscribe</button>
						</form>
					</div>
					<div class="single-gd tech-btm">
						<h4>Top stories of the week </h4>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="single.html">
									<img src="{!! asset('images/bb5.jpg') !!}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-grid-right">
								<h5>
									<a href="single.html">Imagine, Create and develop</a>
								</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids mt-4">
							<div class="blog-grid-left">
								<a href="single.html">
									<img src="{!! asset('images/bb6.jpg') !!}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-grid-right">
								<h5>
									<a href="single.html">Imagine, Create and develop</a>
								</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids mt-4">
							<div class="blog-grid-left">
								<a href="single.html">
									<img src="{!! asset('images/bb7.jpeg') !!}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-grid-right">
								<h5>
									<a href="single.html">Imagine, Create and develop</a>
								</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="single-gd">
						<h4>List group</h4>
						<ul class="list-group">
							<li class="list-group-item active">Crochets</li>
							<li class="list-group-item">Stitches</li>
							<li class="list-group-item">Blankets</li>
							<li class="list-group-item">Sweaters</li>
							<li class="list-group-item">Videos</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8 blog-left-content mt-lg-0 mt-5">
					<div class="creatives-grid">
						<a href="single.html">
							<img src="{!! asset('images/bb2.jpg') !!}" alt=" " style="width:750px; height: 500px;" class="img-fluid" />
						</a>
						<div class="p-mask img-thumbnail">
							<h4><a href="single.html">Heading here</a></h4>
							<span class="let mt-3">Feb 20, 2019</span>
							<hr>
							<p>Imagine, Create and develop.</p>
							<a class="btn button-style-w3ls mt-4" href="{{ route('blog') }}">Read More</a>
						</div>
					</div>
					<div class="creatives-grid">
						<a href="single.html">
							<img src="{!! asset('images/bb1.jpg') !!}" alt=" " style="width:750px; height: 500px;" class="img-fluid" />
						</a>
						<div class="p-mask img-thumbnail">
							<h4><a href="single.html">Heading here</a></h4>
							<span class="let mt-3">Feb 20, 2019</span>
							<hr>
							<p>Imagine, Create and develop.</p>
							<a class="btn button-style-w3ls mt-4" href="{{ route('blog') }}">Read More</a>
						</div>
					</div>
					<div class="creatives-grid">
						<a href="single.html">
							<img src="{!! asset('images/bb3.jpeg') !!}" alt=" " style="width:750px; height: 500px;" class="img-fluid" />
						</a>
						<div class="p-mask img-thumbnail">
							<h4><a href="single.html">Heading here</a></h4>
							<span class="let mt-3">Feb 20, 2019</span>
							<hr>
							<p>Imagine, Create and develop.</p>
							<a class="btn button-style-w3ls mt-4" href="{{ route('blog') }}">Read More</a>
						</div>
					</div>
					<nav aria-label="Page navigation example">
						<ul class="pagination float-left mt-5">
							<li class="page-item">
								<a class="page-link" href="#">Previous</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="{{ route('blog') }}">1</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="{{ route('blog') }}">2</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="{{ route('blog') }}">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="{{ route('blog') }}">4</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="{{ route('blog') }}">Next</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- //blog -->

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