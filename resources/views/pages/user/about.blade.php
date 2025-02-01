@extends('layouts.user2')

@section('content')
    @include('components.userHeader2')

    <!-- Content Wrapper -->
    <article class="about-page">
        <!-- Breadcrumb -->
        <section class="theme-breadcrumb pad-50">
            <div class="theme-container container ">
                <div class="row">
                    <div class="col-sm-8 pull-left">
                        <div class="title-wrap">
                            <h2 class="section-title no-margin">Discover Our Story</h2>
                            <p class="fs-16 no-margin">Learn what makes us unique</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb-menubar list-inline">
                            <li><a href="#" class="gray-clr">Home</a></li>
                            <li class="active">Our Story</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Breadcrumb -->

        <!-- About Us -->
        <section class="pad-50 about-wrap">
            <span class="bg-text"> About </span>
            <div class="theme-container container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-us pt-10">
                            <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">
                                Founded in 2015, SwiftLogistics has revolutionized the delivery industry through innovative 
                                technology and customer-centric solutions. With a network spanning 50+ countries, we 
                                specialize in time-sensitive shipments, secure handling, and real-time tracking to ensure 
                                your goods arrive safely and on schedule.
                            </p>
                            <ul class="feature">
                                <li>
                                    <img alt="Fast delivery icon" src="assets/img/icons/icon-2.png" class="wow fadeInUp"
                                        data-wow-offset="50" data-wow-delay=".20s" />
                                    <div class="feature-content wow rotateInDownRight" data-wow-offset="50"
                                        data-wow-delay=".30s">
                                        <h2 class="title-1">Express Shipping</h2>
                                        <p>Guaranteed next-day delivery for domestic shipments</p>
                                    </div>
                                </li>
                                <li>
                                    <img alt="Security shield icon" src="assets/img/icons/icon-3.png" class="wow fadeInUp"
                                        data-wow-offset="50" data-wow-delay=".20s" />
                                    <div class="feature-content wow rotateInDownRight" data-wow-offset="50"
                                        data-wow-delay=".30s">
                                        <h2 class="title-1">Secured Services</h2>
                                        <p>Military-grade encryption for all sensitive shipments</p>
                                    </div>
                                </li>
                                <li>
                                    <img alt="Global network icon" src="assets/img/icons/icon-4.png" class="wow fadeInUp"
                                        data-wow-offset="50" data-wow-delay=".20s" />
                                    <div class="feature-content wow rotateInDownRight" data-wow-offset="50"
                                        data-wow-delay=".30s">
                                        <h2 class="title-1">Global Reach</h2>
                                        <p>Customs-cleared international shipping to 150+ destinations</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <img alt="Our logistics network" src="assets/img/block/about-img.png" class="effect animated fadeInRight" />
                    </div>
                </div>
            </div>
        </section>
        <!-- /.About Us -->

        <!-- More About Us -->
        <section class="pad-30 more-about-wrap">
            <div class="theme-container container pb-100">
                <div class="row">
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                        <div class="more-about clrbg-before">
                            <h2 class="title-1">What We Do</h2>
                            <div class="pad-10"></div>
                            <p>We provide end-to-end logistics solutions including air/ocean freight, warehousing, last-mile delivery, and customs clearance. Our team of certified logistics experts ensures seamless coordination between suppliers, carriers, and recipients using real-time data analytics and IoT-enabled tracking systems.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                        <div class="more-about clrbg-before">
                            <h2 class="title-1">Our History</h2>
                            <div class="pad-10"></div>
                            <p>Founded in 2015 with just 3 delivery vans, we've grown into a global logistics leader through strategic partnerships and technological innovation. Key milestones include our 2018 AI routing system launch, 2020 ISO 9001 certification, and 2023 expansion into Asian markets serving over 10,000 daily shipments.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                        <div class="more-about clrbg-before">
                            <h2 class="title-1">Our Mission</h2>
                            <div class="pad-10"></div>
                            <p>To redefine global logistics through sustainable innovation while maintaining 99.9% delivery accuracy. We commit to carbon-neutral operations by 2025, invest 5% of profits in green logistics R&D, and maintain transparent client partnerships through our proprietary shipment monitoring platform.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.More About Us -->
    </article>
    <!-- /.Content Wrapper -->
    <!-- Footer -->
    @include('components.footer')
@endsection
