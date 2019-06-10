@extends('layouts.master')
@section('title', 'Contact')

@section('content')

    <!-- banner -->
        <div class="banner_w3lspvt-2">
            <div class="container">
                <div class="d-flex style-w3layouts">
                    <h4 class="inner-style-w3pvts mr-auto text-wh text-uppercase">Contact Us</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Contact Page</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- //banner -->
    </div>
    <!-- //main banner -->

    <!-- contact -->
    <section class="contact py-5" id="contact">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center mb-5">Contact Us</h3>
            <div class="row mail-w3l-w3pvt-web pt-xl-4">
                <div class="col-lg-5 contact-left-w3ls">
                    <h3>Contact Info</h3>
                    <div class="row mb-4 pb-2">
                        <div class="col-md-3 col-sm-2 col-3">
                            <div class="contact-icon-wthree">
                                <span class="fa fa-map-marker"></span>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-10 col-9 contact-text-w3pvt-webinf0">
                            <h4>Visit us</h4>
                            <p>Parma Via Modena,BO, Italy</p>
                            <p>Lorem ipsum dolor.</p>
                        </div>
                    </div>
                    <div class="row mb-4 pb-3">
                        <div class="col-md-3 col-sm-2 col-3">
                            <div class="contact-icon-wthree">
                                <span class="fa fa-pencil"></span>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-10 col-9 contact-text-w3pvt-webinf0">
                            <h4>Mail us</h4>
                            <p><a href="mailto:info@example.com">info@example.com</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-2 col-3">
                            <div class="contact-icon-wthree">
                                <span class="fa fa-phone"></span>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-10 col-9 contact-text-w3pvt-webinf0">
                            <h4>Call us</h4>
                            <p>+18044261149</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="w3pvt-webinfo_mail_grid_right">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" name="Name" class="form-control" placeholder="Name" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="Email" class="form-control" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <textarea name="Message" placeholder="Message......." required=""></textarea>
                            </div>
                            <button type="submit" class="btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
    <!-- map -->
    <div class="map p-4">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
            class="map" style="border:0" allowfullscreen=""></iframe>
    </div>
    <!-- //map -->
@endsection

