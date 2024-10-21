@extends('layouts.master')
@section('title')
    {{ 'Home' }}
@endsection
@section('main-container')
    <!-----START CAROUSEL SLIDER SECTION------->
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="3000">
                <img src="{{ url('assets/images/carousel-slide/slider1.jpg') }}" class="d-block w-100" alt="Slider1">
                <div class="container carousel-caption">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-content">
                                <div class="wow fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
                                    <p class="paytext1">Simple & Secure Payment Process </p>
                                </div>
                                <div class="wow fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
                                    <h2 class="textcorlhead1">Connecting Your Loan Needs </h2>
                                </div>
                                <div class="carousel-btn-area d-flex mt-25">
                                    <div class="btn-common btn-carousel-slider">
                                        <a href="{{ url('/apply-from') }}">Apply Loan <i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="video carousel-video">
                                        <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
                                            data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i
                                                class="fas fa-play-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-interval="3000">
                <img src="{{ url('assets/images/carousel-slide/slider2.jpg') }}" class="d-block w-100" alt="Slider2">
                <div class="container carousel-caption">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-content">
                                <div class="wow fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
                                    <p class="paytext1">Simple & Secure Payment Process </p>
                                </div>
                                <div class="wow fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
                                    <h2 class="textcorlhead2">Seeding Growth, Nurturing Futures </h2>
                                </div>
                                <div class="carousel-btn-area d-flex mt-25">
                                    <div class="btn-common btn-carousel-slider">
                                        <a href="{{ url('/gold-from') }}">Apply Loan <i class="fa fa-angle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-interval="3000">
                <img src="{{ url('assets/images/carousel-slide/slider3.jpg') }}" class="d-block w-100" alt="Slider2">
                <div class="container carousel-caption">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-content">
                                <div class="wow fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
                                    <p class="paytext1">Simple & Secure Payment Process </p>
                                </div>
                                <div class="wow fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
                                    <h2 class="textcorlhead2">Seeding Growth, Nurturing Futures </h2>
                                </div>
                                <div class="carousel-btn-area d-flex mt-25">
                                    <div class="btn-common btn-carousel-slider">
                                        <a href="{{ url('/busines-form') }}">Apply Loan <i class="fa fa-angle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-interval="3000">
                <img src="{{ url('assets/images/carousel-slide/slider4.jpg') }}" class="d-block w-100" alt="Slider3">
                <div class="container carousel-caption">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-content">
                                <div class="wow fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
                                    <p class="paytext1">Simple & Secure Payment Process </p>
                                </div>
                                <div class="wow fadeInDown " data-wow-duration="2s" data-wow-delay="0s">
                                    <h2 class="textcorlhead3">Away From Receiving Financial. </h2>
                                </div>
                                <div class="carousel-btn-area d-flex mt-25">
                                    <div class="btn-common btn-carousel-slider">
                                        <a href="{{ url('/product-form') }}">Apply Loan <i class="fa fa-angle-right"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <!-----START FEATURE SECTION----->
    <div class="feature-section">
        <div class="container">
            <div class="feature-content-container">
                <div class="row feature-translate">
                    <div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
                        <div class="feature-content d-flex">
                            <div class="feature-icon">
                                <i class="flaticon-developer"></i>
                            </div>
                            <div class="feature-content-txt">
                                <h2>No Prepayment Fees</h2>
                                <p>Quick Payment Process</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
                        <div class="feature-content style-2 d-flex">
                            <div class="feature-icon">
                                <i class="flaticon-clock"></i>
                            </div>
                            <div class="feature-content-txt">
                                <h2>24/7 Support</h2>
                                <p>+91 3665357493 / +91 7086788028</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 pl-0 pr-0">
                        <div class="feature-content d-flex">
                            <div class="feature-icon">
                                <i class="flaticon-left-quote"></i>
                            </div>
                            <div class="feature-content-txt">
                                <h2>Certified Company</h2>
                                <p>Government Approved Finance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----START ABOUT SECTION----->
    <div class="about-section pt-70 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="about-thumb-section">
                        <div class="about-thumb">
                            <img src="{{ url('assets/images/about/ab1.png') }}" alt="thumb">
                        </div>
                        <div class="about-circle-bg alltuchtopdown">
                            <img src="{{ url('assets/images/about/ab-circle.png') }}" alt="circle-thumb">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="about-content-container">
                        <div class="section-head pb-60">
                            <h5>Company Introductions</h5>
                            <h2>Our Loans will Fill Your</h2>
                            <h2>Dreams <span> Come True</span> </h2>
                            <div class="animated-bar"><span></span></div>
                        </div>
                        <div class="about-content">
                            <div class="about-content-txt">
                                <p>At Nofino Rural Finance Private Limited, we are committed to helping our
                                    customers realize their dreams. Our low-interest loans are designed to make
                                    financing accessible and affordable, allowing you to pursue your goals with
                                    confidence. Whether you're looking to expand your business, invest in agriculture,
                                    or improve your home, our loan products can provide the support you need to turn
                                    your aspirations into reality.</p>
                            </div>
                            <div class="row">
                                <div class=" col-sm-12 col-md-12 col-lg-6 pl-0 pr-0">
                                    <div class="about-feature d-flex">
                                        <div class="about-feature-icon">
                                            <i class="flaticon-left-quote"></i>
                                        </div>
                                        <div class="about-feature-content">
                                            <div class="about-feature-content-title">
                                                <h4>ISO Certification</h4>
                                            </div>
                                            <div class="about-feature-content-text">
                                                <p>ISO- 9001-2015</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-12 col-md-12 col-lg-6 pl-0 pr-0">
                                    <div class="about-feature d-flex">
                                        <div class="about-feature-icon">
                                            <i class="flaticon-developer"></i>
                                        </div>
                                        <div class="about-feature-content">
                                            <div class="about-feature-content-title">
                                                <h4>Certified Company</h4>
                                            </div>
                                            <div class="about-feature-content-text">
                                                <p>Government Approved Finance company to provide loans.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="pt-20">With Nofino, achieving your dreams is within reach. Let us be your partner on
                                the journey to success.</p>
                            <div class="btn-common btn-about">
                                <a href="{{ url('/about') }}">More About Us <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----START CHOOSE-US SECTION----->
    <div class="choose-us-section pt-50 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head style-2 white pb-70">
                        <h5 class="text-white">Trusted Company</h5>
                        <h2>Most of the People Trust on </h2>
                        <h2> Us For Fast Services</h2>
                        <div class="animated-bar"> <span></span></div>
                        <p class="mt-3 mb-0">At Nofino Rural Finance, our commitment to fast service is unwavering.
                            We understand the urgency of financial needs and prioritize swift processing
                            to ensure our clients receive timely assistance. Trusted by many,
                            our dedication to efficiency reflects our promise to provide reliable
                            support when it's needed most.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="choose-us-single-feature">
                        <div class="choose-us-feature-wrapper white">
                            <div class="choose-us-content">
                                <div class="choose-us-feature-txt">
                                    <p>Easy loan small business and essential product.</p>
                                </div>
                                <div class="choose-us-icon"><i class="flaticon-process"></i></div>
                                <div class="choose-us-btn"><a href="#">Read More <i
                                            class="fa fa-angle-right"></i></a></div>
                                <div class="choose-us-number">
                                    <h2>01</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="choose-us-single-feature">
                        <div class="choose-us-feature-wrapper white">
                            <div class="choose-us-content">
                                <div class="choose-us-feature-txt">
                                    <p>Submit Required Document and Details for loan approval</p>
                                </div>
                                <div class="choose-us-icon"><i class="flaticon-system"></i></div>
                                <div class="choose-us-btn"><a href="#">Read More <i
                                            class="fa fa-angle-right"></i></a></div>
                                <div class="choose-us-number">
                                    <h2>02</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="choose-us-single-feature">
                        <div class="choose-us-feature-wrapper white">
                            <div class="choose-us-content">
                                <div class="choose-us-feature-txt">
                                    <p>Get your loan within 6 hours of Application approval.</p>
                                </div>
                                <div class="choose-us-icon"><i class="flaticon-data"></i></div>
                                <div class="choose-us-btn"><a href="#">Read More <i
                                            class="fa fa-angle-right"></i></a></div>
                                <div class="choose-us-number">
                                    <h2>03</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="choose-us-single-feature">
                        <div class="choose-us-feature-wrapper white">
                            <div class="choose-us-content">
                            </div>
                            <div class="choose-us-feature-txt">
                                <p>Easy EMI method for repayment without Burden.</p>
                            </div>
                            <div class="choose-us-icon"><i class="flaticon-space"></i></div>
                            <div class="choose-us-btn"><a href="#">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="choose-us-number">
                                <h2>04</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-----START COUNTER SECTION----->
    <div class="counter-section">
        <div class="container">
            <div class="row counter-content-container white">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="single-counter br">
                        <div class="counter-content">
                            <div class="counter-content-inner">
                                <div class="count-up-txt">
                                    <h1><span class="counter">25</span></h1>
                                </div>
                                <div class="counter-txt">
                                    <h3>K</h3>
                                </div>
                            </div>
                        </div>
                        <div class="counter-title">
                            <h4>Happy Clients</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="single-counter br">
                        <div class="counter-content">
                            <div class="counter-content-inner">
                                <div class="count-up-txt">
                                    <h1><span class="counter">500</span></h1>
                                </div>
                                <div class="counter-txt">
                                    <h3>+</h3>
                                </div>
                            </div>
                        </div>
                        <div class="counter-title">
                            <h4>Account Number </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="single-counter br">
                        <div class="counter-content">
                            <div class="counter-content-inner">
                                <div class="count-up-txt">
                                    <h1><span class="counter">10</span></h1>
                                </div>
                                <div class="counter-txt">
                                    <h3>K</h3>
                                </div>
                            </div>
                        </div>
                        <div class="counter-title">
                            <h4>Finished Project</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="single-counter">
                        <div class="counter-content">
                            <div class="counter-content-inner">
                                <div class="count-up-txt">
                                    <h1><span class="counter">800</span></h1>
                                </div>
                                <div class="counter-txt">
                                    <h3>+</h3>
                                </div>
                            </div>
                        </div>
                        <div class="counter-title">
                            <h4>Win Awards</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----START SERVICE SECTION----->
    <div class="service-section pb-50 pt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head style-2 pb-70">
                        <h5>What We’re Offering</h5>
                        <h2>All Loans Services </h2>
                        <div class="animated-bar"> <span></span></div>
                    </div>
                </div>
            </div>
            <div class="service-feature-container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="servise-single-feature">
                            <div class="service-feature-content d-flex">
                                <div class="service-feature-icon">
                                    <div class="service-number-shape">
                                        <span>01</span>
                                    </div>
                                    <i class="flaticon-chart"></i>
                                </div>
                                <div class="service-content-inner">
                                    <div class="service-content-title">
                                        <h3>Personal Loan</h3>
                                    </div>
                                    <div class="service-content-txt">
                                        <p>Our vision is to provide accessible, flexible, and reliable personal loans,
                                            empowering individuals to achieve their financial goals with transparency
                                            and exceptional customer service.</p>
                                    </div>
                                    <div class="service-btm-btn"><a href="{{ url('/personal') }}">Read More <i
                                                class="fa fa-angle-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="servise-single-feature">
                            <div class="service-feature-content d-flex">
                                <div class="service-feature-icon">
                                    <div class="service-number-shape">
                                        <span>02</span>
                                    </div>
                                    <i class="flaticon-data"></i>
                                </div>
                                <div class="service-content-inner">
                                    <div class="service-content-title">
                                        <h3>Product Loan</h3>
                                    </div>
                                    <div class="service-content-txt">
                                        <p>Empowering dreams with accessible loans for mobile phones,
                                            fridges, and more, our company supports your essential purchases,
                                            enhancing everyday life with ease and affordability.</p>
                                    </div>
                                    <div class="service-btm-btn"><a href="{{ url('/product') }}">Read More <i
                                                class="fa fa-angle-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="servise-single-feature">
                            <div class="service-feature-content d-flex">
                                <div class="service-feature-icon">
                                    <div class="service-number-shape">
                                        <span>03</span>
                                    </div>
                                    <i class="flaticon-time"></i>
                                </div>
                                <div class="service-content-inner">
                                    <div class="service-content-title">
                                        <h3>Gold Loan</h3>
                                    </div>
                                    <div class="service-content-txt">
                                        <p>Empower financial growth with accessible gold loans, offering flexible terms,
                                            competitive rates, and personalized service, ensuring prosperity for our
                                            clients and communities.</p>
                                    </div>
                                    <div class="service-btm-btn"><a href="{{ url('/gold') }}">Read More <i
                                                class="fa fa-angle-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="servise-single-feature">
                            <div class="service-feature-content d-flex">
                                <div class="service-feature-icon">
                                    <div class="service-number-shape">
                                        <span>04</span>
                                    </div>
                                    <i class="flaticon-interaction"></i>
                                </div>
                                <div class="service-content-inner">
                                    <div class="service-content-title">
                                        <h3>Loan against Vehicle</h3>
                                    </div>
                                    <div class="service-content-txt">
                                        <p>Loan Against Vehicle service allows you to unlock the value of your vehicle to
                                            secure
                                            a low-interest loan. This flexible financing option provides quick
                                            access to you continue using your vehicle.</p>
                                    </div>
                                    <div class="service-btm-btn"><a href="{{ url('/vehicle') }}">Read More <i
                                                class="fa fa-angle-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="servise-single-feature">
                            <div class="service-feature-content d-flex">
                                <div class="service-feature-icon">
                                    <div class="service-number-shape">
                                        <span>05</span>
                                    </div>
                                    <i class="flaticon-business-and-finance"></i>
                                </div>
                                <div class="service-content-inner">
                                    <div class="service-content-title">
                                        <h3>Business Loan</h3>
                                    </div>
                                    <div class="service-content-txt">
                                        <p>Secure your business's growth with Nofino Rural Finance Private Limited's
                                            flexible and competitive business loans. From startups to established
                                            enterprises,
                                            we offer tailored financing solutions to fuel your success. </p>
                                    </div>
                                    <div class="service-btm-btn"><a href="{{ url('/business') }}">Read More <i
                                                class="fa fa-angle-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="servise-single-feature">
                            <div class="service-feature-content d-flex">
                                <div class="service-feature-icon">
                                    <div class="service-number-shape">
                                        <span>06</span>
                                    </div>
                                    <i class="flaticon-left-quote"></i>
                                </div>
                                <div class="service-content-inner">
                                    <div class="service-content-title">
                                        <h3>Group Loan</h3>
                                    </div>
                                    <div class="service-content-txt">
                                        <p>Nofino Rural Finance Private Limited enables members of
                                            a community to access low-interest financing collectively, fostering mutual
                                            support and shared responsibility. and promotes
                                            sustainable economic growth in North East India.</p>
                                    </div>
                                    <div class="service-btm-btn"><a href="{{ url('/group') }}">Read More <i
                                                class="fa fa-angle-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-----START CALL-DO-ACTION SECTION----->
    <div class="call-do-action pb-80 pt-20">
        <div class="container">
            <div class="row call-do-action-content align-items-center">
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <div class="call-do-action-title">
                        <h2>Loan Application Form</h2>
                    </div>
                    <p>We are very experienced person. You can choose us for your apply for Loan</p>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="call-do-btn pt-30">
                        <a href="{{ url('/apply-from') }}">Apply For Loan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----START TESTIMONIAL SECTION----->
    <div class="testimonial-section background-three pt-80 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head style-2 pb-60">
                        <h5>Testimonial</h5>
                        <h2>What Say Our Client's</h2>
                        <div class="animated-bar"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-carousel owl-carousel">
                    <div class="testimonial-single-item">
                        <div class="testimonial-thumb">
                            <img src="{{ url('assets/images/testimonial/tstm1.jpg') }}" alt="testimonial Img">
                            <div class="testimonial-icon">
                                <span><i class="fas fa-quote-left"></i></span>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <p class="testimonial-content-text">Sorem ipsum dolor sit amet there any consectetur
                                adipisicing eliter sed do the eiusmod tempor asem incididunt ut labore dolore magna aliqua.
                                Ut enim.</p>
                            <h4>John Abraham</h4>
                            <p class="testimonial-designation">Web developer</p>
                        </div>
                    </div>
                    <div class="testimonial-single-item">
                        <div class="testimonial-thumb">
                            <img src="{{ url('assets/images/testimonial/tstm2.jpg') }}" alt="testimonial Img">
                            <div class="testimonial-icon">
                                <span><i class="fas fa-quote-left"></i></span>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <p class="testimonial-content-text">Sorem ipsum dolor sit amet there any consectetur
                                adipisicing eliter sed do the eiusmod tempor asem incididunt ut labore dolore magna aliqua.
                                Ut enim.</p>
                            <h4>Ellen Erye </h4>
                            <p class="testimonial-designation">Project Manager</p>
                        </div>
                    </div>
                    <div class="testimonial-single-item">
                        <div class="testimonial-thumb">
                            <img src="{{ url('assets/images/testimonial/tstm3.jpg') }}" alt="testimonial Img">
                            <div class="testimonial-icon">
                                <span><i class="fas fa-quote-left"></i></span>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <p class="testimonial-content-text">Sorem ipsum dolor sit amet there any consectetur
                                adipisicing eliter sed do the eiusmod tempor asem incididunt ut labore dolore magna aliqua.
                                Ut enim.</p>
                            <h4>Shene Watsan </h4>
                            <p class="testimonial-designation">Founder</p>
                        </div>
                    </div>
                    <div class="testimonial-single-item">
                        <div class="testimonial-thumb">
                            <img src="{{ url('assets/images/testimonial/tstm2.jpg') }}" alt="testimonial Img">
                            <div class="testimonial-icon">
                                <span><i class="fas fa-quote-left"></i></span>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <p class="testimonial-content-text">Sorem ipsum dolor sit amet there any consectetur
                                adipisicing eliter sed do the eiusmod tempor asem incididunt ut labore dolore magna aliqua.
                                Ut enim.</p>
                            <h4>Monalysha</h4>
                            <p class="testimonial-designation">CEO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-----START COUNTER SECTION----->
    <div class="counter-section style-eight">
        <div class="container">
            <div class="row counter-content-container white">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="single-counter">
                        <div class="counter-icon"><i class="flaticon-developer"></i></div>
                        <div class="counter-title">
                            <h4>Very Low Interest Rates on All Loans</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="single-counter">
                        <div class="counter-icon"><i class="flaticon-server"></i></div>
                        <div class="counter-title">
                            <h4>Maximum Success Rate Guarantee</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="single-counter">
                        <div class="counter-icon"><i class="flaticon-business-and-finance"></i></div>
                        <div class="counter-title">
                            <h4>Flexible Repayment System</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-----START ABOUT SECTION----->
    <div class="about-section style-five pb-50">
        <div class="container">
            <div class="row align-items-center change-position">
                <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                    <div class="about-thumb-section">
                        <div class="about-thumb">
                            <img src="{{ url('assets/images/experience/skill_bg.jpg') }}" alt="thumb">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                    <div class="about-content-container container-padding">
                        <div class="section-head pb-65">
                            <h5>Our Benfits</h5>
                            <h2>Why Choose Us?</h2>
                            <div class="animated-bar"><span></span></div>
                        </div>
                        <div class="about-content">
                            <div class="about-content-txt">
                                <p>Choose Nofino Rural Finance for our unwavering dedication to uplifting marginalized
                                    communities in North East India. With accessible financial services tailored to
                                    individual
                                    needs, we bridge gaps in traditional banking, fostering economic growth and
                                    self-reliance.
                                    Our commitment to making a meaningful difference ensures brighter futures for our
                                    clients.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-sm-12 col-lg-6 pl-0 pr-0">
                                <div class="about-feature d-flex">
                                    <div class="about-feature-icon">
                                        <i class="flaticon-left-quote"></i>
                                    </div>
                                    <div class="about-feature-content">
                                        <div class="about-feature-content-title">
                                            <h4>Professional Team</h4>
                                        </div>
                                        <div class="about-feature-content-text">
                                            <p>Trust our expert team for personalized loan solutions tailored to
                                                your needs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-sm-12 col-md-12 col-lg-6 pl-0 pr-0">
                                <div class="about-feature d-flex">
                                    <div class="about-feature-icon">
                                        <i class="flaticon-process"></i>
                                    </div>
                                    <div class="about-feature-content">
                                        <div class="about-feature-content-title">
                                            <h4>Quick Payments</h4>
                                        </div>
                                        <div class="about-feature-content-text">
                                            <p>Secure payment methods for seamless
                                                transactions on our website / UPI & Branches. worry-free!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-skills">
                            <div class="skill-item">
                                <div class="skill-header">
                                    <h6 class="skill-title">Loan Process</h6>
                                    <div class="skill-percentage clearfix">
                                        <div class="count-box">
                                            <span class="counter">90</span>
                                        </div>
                                        %
                                    </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="90"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-header">
                                    <h6 class="skill-title">Payment Benefits</h6>
                                    <div class="skill-percentage clearfix">
                                        <div class="count-box">
                                            <span class="counter">75</span>
                                        </div>
                                        %
                                    </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="75"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------=====================================--------------->
@endsection
