@extends('layouts.user')

@section('content')
    @include('components.userHeader')


    <!-- Content Wrapper -->
    <article>
        <!-- Banner -->
        <section class="banner banner-style2 mask-overlay pt-120 white-clr">
            <div class="pad-50 hidden-xs"></div>
            <div class="container theme-container rel-div">
                <img class="pt-10 effect animated fadeInLeft" alt="" src="assets/img/icons/icon-1.png" />
                <ul class="list-items fw-600 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                    <li><a href="#">fast</a></li>
                    <li><a href="#">secured</a></li>
                    <li><a href="#">worldwide</a></li>
                </ul>
                <h2 class="section-title fs-48 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                    awesome template for <br> <span class="theme-clr"> courier </span> & <span class="theme-clr"> delivery
                    </span> services </h2>
                <div class="pad-30"></div>
                <div class="col-md-8 col-md-offset-2 tracking-form text-left effect animated fadeInUp">
                    @include('components.forms.tracking')
                </div>
                

            </div>
        </section>
        <!-- /.Banner -->

        <!-- Feature-2 -->
        <section class="pad-50 feature feature-2 clrbg-before">
            <div class="theme-container container">
                <div class="row">
                    <div class="col-sm-4">
                        <img alt="" src="assets/img/icons/icon-2.png" class="wow fadeInUp" data-wow-offset="50"
                            data-wow-delay=".20s" />
                        <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                            <h2 class="title-1">Fast delivery</h2>
                            <p>24-48 hour express shipping available</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <img alt="" src="assets/img/icons/icon-3.png" class="wow fadeInUp" data-wow-offset="50"
                            data-wow-delay=".20s" />
                        <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                            <h2 class="title-1">secured service</h2>
                            <p>Tamper-proof packaging & GPS tracking</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <img alt="" src="assets/img/icons/icon-4.png" class="wow fadeInUp" data-wow-offset="50"
                            data-wow-delay=".20s" />
                        <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                            <h2 class="title-1">worldwide shipping</h2>
                            <p>Coverage to 200+ countries with customs support</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Feature-2 -->

        <!-- About Us -->
        <section class="pad-120 about-wrap about-2 clrbg-before">
            <span class="bg-text wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> About </span>
            <div class="theme-container container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pt-80 visible-lg"></div>
                        <div class="about-us">
                            <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> About
                                Us </h2>
                            <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">
                                At SwiftCourier, we revolutionize package delivery with real-time tracking and 24/7 support. 
                                With over 15 years in logistics, we guarantee secure handling and fast transit times. Our 
                                GPS-enabled fleet and certified professionals ensure your shipments arrive intact and on schedule.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <img alt="" src="assets/img/block/about-img.png" class="wow slideInRight"
                            data-wow-offset="50" data-wow-delay=".20s" />
                    </div>
                </div>
            </div>
        </section>
        <!-- /.About Us -->

        <!-- Steps -->
        <section class="steps-wrap mask-overlay pad-80">
            <div class="theme-container container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 1. </div>
                        <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">
                            <h2 class="title-3">Order</h2>
                            <p class="gray-clr">Create your shipment online with pickup details<br>Provide recipient info and package dimensions</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 2. </div>
                        <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">
                            <h2 class="title-3">Track</h2>
                            <p class="gray-clr">Real-time tracking updates via SMS/email<br>24/7 customer support during transit</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 3. </div>
                        <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">
                            <h2 class="title-3">Deliver</h2>
                            <p class="gray-clr">Instant delivery confirmation upon completion<br>Digital proof of delivery with recipient signature</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="step-img wow slideInRight" data-wow-offset="50" data-wow-delay=".20s"> <img
                    src="assets/img/block/step-img.png" alt="" /> </div>
        </section>
        <!-- /.Steps -->


        <!-- Get Quote -->
        <section class="calculate pt-100">
            <div class="theme-container container">
                <span class="bg-text right wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> quote </span>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img src="assets/img/block/Courier-Man.png" alt="" class="wow slideInLeft"
                            data-wow-offset="50" data-wow-delay=".20s" />
                    </div>
                    <div class="col-md-6">
                        <div class="pad-10"></div>
                        <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            Get a Free Quote </h2>
                        <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">
                            Receive instant shipping estimates tailored to your needs. Our smart calculator 
                            factors in real-time fuel prices, customs regulations, and service levels to 
                            provide the most accurate pricing available.
                        </p>
                        <div class="calculate-form">
                            <form class="row">
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="col-sm-3"> <label class="title-2" for="height">Height (cm):</label></div>
                                    <div class="col-sm-9"> <input type="text" id="height" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="col-sm-3"> <label class="title-2"> width (cm): </label></div>
                                    <div class="col-sm-9"> <input type="text" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="col-sm-3"> <label class="title-2"> depth (cm): </label></div>
                                    <div class="col-sm-9"> <input type="text" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="col-sm-3"> <label class="title-2"> weight (kg): </label></div>
                                    <div class="col-sm-9"> <input type="text" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="col-sm-3"> <label class="title-2"> location: </label></div>
                                    <div class="col-sm-9">
                                        <div class="col-sm-6 no-pad">
                                            <input type="text" placeholder="From" class="form-control from fw-600">
                                        </div>
                                        <div class="col-sm-6 no-pad">
                                            <input type="text" placeholder="To" class="form-control to fw-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="col-sm-3"> <label class="title-2"> Package: </label></div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <select class="selectpicker form-control" data-live-search="true"
                                                data-width="100%" data-toggle="tooltip" title="select your package">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="col-sm-9 col-xs-12 pull-right">
                                        <div class="btn-1"> <span> Total Cost: </span> <span class="btn-1 dark"> $150
                                            </span> </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="pt-80 hidden-lg"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Get Quote -->

        @include('components.testimonial-slider')


        <!-- Product Delivery -->
        <section class="prod-delivery pad-120">
            <div class="theme-container container">
                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        <div class="pt-120 rel-div">
                            <div class="pb-50 hidden-xs"></div>
                            <h2 class="section-title wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> Experience
                                <span class="theme-clr"> precision </span> logistics solutions </h2>
                            <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">Leverage our AI-powered logistics network for intelligent routing <br>
                                and predictive delivery scheduling. Our temperature-controlled <br>
                                containers and shock-monitored packaging ensure your goods <br>
                                arrive in perfect condition, anywhere in the world.</p>
                            <div class="pb-120 hidden-xs"></div>
                        </div>
                        <div class="delivery-img pt-10">
                            <img alt="" src="assets/img/block/delivery.png" class="wow slideInLeft"
                                data-wow-offset="50" data-wow-delay=".20s" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Product Delivery -->

        <!-- Pricing & Plans -->
        @include('components.pricing-plan')

        <!-- Contact us -->
        <section class="contact-wrap contact-2 pad-120">
            <span class="bg-text center wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> Contact </span>
            <div class="theme-container container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-3">
                        <div class="title-wrap text-center">
                            <h2 class="section-title wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s">contact
                                us</h2>
                            <p class="wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s">Get in touch with us
                                easiky</p>
                        </div>
                        <ul class="contact-detail title-2">
                            <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".20s"> <span>uk
                                    numbers:</span>
                                <p class="gray-clr"> +001-2463-957 <br> +001-4356-643 </p>
                            </li>
                            <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".25s"> <span>usa
                                    numbers:</span>
                                <p class="gray-clr"> +001-2463-957 <br> +001-4356-643 </p>
                            </li>
                            <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>Email
                                    address:</span>
                                <p class="gray-clr"> support@go.com <br> info@go.com </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Contact us -->
    </article>
    <!-- /.Content Wrapper -->

    <!-- Footer -->
    @include('components.footer')
@endsection
