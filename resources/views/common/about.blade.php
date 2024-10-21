@extends('layouts.master')
@section('title')
    {{ 'About Us' }}
@endsection
@section('main-container')
    <!-----START BREADCUMB SECTION----->
    <div class="breadcumb-section">
        <div class="container">
            <div class="row">
                <div class="breadcumb-content">
                    <h1>About Us</h1>
                    <div class="breadcumb-inner">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><a href="{{url('/about')}}">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----START ABOUT SECTION----->
    <div class="about-section pt-100 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="about-thumb-section">
                        <div class="about-thumb margin-top">
                            <img src="assets/images/about/ab1.png" alt="thumb">
                        </div>
                        <div class="about-circle-bg alltuchtopdown">
                            <img src="assets/images/about/ab-circle.png" alt="circle-thumb">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="about-content-container">
                        <div class="section-head pb-65">
                            <h5>Get To Know About Us</h5>
                            <h2>Nofino Rural Finance <span>Private Limited</span> </h2>
                            <div class="animated-bar"><span></span></div>
                        </div>
                        <div class="about-content">
                            <div class="about-content-txt">
                                <p>Nofino Rural Finance Private Limited, headquartered in Mandia,
                                    Barpeta District, Assam, is dedicated to uplifting the needy, poor,
                                    and small businesses in North East India. Our mission is to provide accessible
                                     financial services to empower marginalized communities, fostering economic growth
                                     and self-reliance. We believe in creating opportunities and bridging financial
                                     gaps for those often overlooked by traditional banking systems. By offering tailored
                                      financial solutions, we strive to enhance livelihoods, promote sustainable
                                      development, and contribute to the region's overall prosperity. At Nofino Rural
                                      Finance, we are committed to making a meaningful difference in the lives of our
                                      clients.</p>
                            </div>
                            <div class="row">
                                <div class=" col-sm-12 col-md-12 col-lg-12 p-0">
                                    <div class="about-feature d-flex">
                                        <div class="about-feature-icon icon-two">
                                            <i class="flaticon-time"></i>
                                        </div>
                                        <div class="about-feature-content">
                                            <div class="about-feature-content-title">
                                                <h4>Our Vission</h4>
                                            </div>
                                            <div class="about-feature-content-text">
                                                <p>Nofino Rural Finance Private Limited envisions a future where every individual in North East India,
                                                     regardless of their socio-economic background, has access to financial resources that empower them
                                                      to achieve their dreams and improve their quality of life. We aim to be a catalyst for sustainable
                                                       development, fostering economic growth, and social progress by providing innovative financial
                                                       solutions tailored to the unique needs of the region. Our vision is to bridge the financial gap,
                                                        ensuring that the underserved communities can thrive, prosper, and contribute to the region's
                                                        overall prosperity. By focusing on inclusive growth, we aspire to create a resilient financial
                                                         ecosystem that supports small businesses, uplifts the poor, and nurtures the potential of
                                                         every individual in North East India.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-common btn-about ml-60">
                                <a href="{{ url('/contact') }}">More Contact Us <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----START FAQ SECTION----->
    <div class="faq-section pt-50">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 p-0">
                    <div class="faq-accordion-wrapper white">
                        <div class="section-head pb-65">
                            <h5>Trusted Company</h5>
                            <h2>Most of the People Trust on <span>Us For Fast Services</span> </h2>
                            <div class="animated-bar"><span></span></div>
                        </div>
                        <div class="faq-content">
                            <div class="faq-content-txt">
                                <p>At Nofino Rural Finance, our commitment to fast service is unwavering. We understand the
                                    urgency of financial needs and prioritize swift processing to ensure our clients receive
                                     timely assistance. Trusted by many, our dedication to efficiency reflects our
                                     promise to provide reliable support when it's needed most.</p>
                            </div>
                            <div id="faq-accordion">
                                <h3 class="acc-title"> <i class="far fa-check-circle"></i> &nbsp; Step One <span>
                                    <i class="fas fa-angle-down"></i></span></h3>
                                <div class="acc-content">
                                    <p>Easy loan solution for small business, shopkeepers, Personal desire, and essential product.</p>
                                </div>
                                <h3 class="acc-title"> <i class="far fa-check-circle"></i> &nbsp; Step Two <span>
                                    <i class="fas fa-angle-down"></i></span></h3>
                                <div class="acc-contcol-md-6 ent">
                                    <p>Submit Required Document and Details for loan approval</p>
                                </div>
                                <h3 class="acc-title"> <i class="far fa-check-circle"></i> &nbsp; Step Three <span>
                                    <i class="fas fa-angle-down"></i></span></h3>
                                <div class="acc-content">
                                    <p>Get your loan within 6 hours of Application approval.</p>
                                </div>
                                <h3 class="acc-title"> <i class="far fa-check-circle"></i> &nbsp; Step Four <span>
                                    <i class="fas fa-angle-down"></i></span></h3>
                                <div class="acc-content">
                                    <p>Easy EMI method for repayment without Burden.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="faq-section-thumb">
                        <img src="{{url('assets/images/feature/faq-1.jpg')}}" alt="thumb">
                        <div class="video faq-video">
                            <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
                                href="#"><i class="fas fa-play-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----START TEAM SECTION----->
    <div class="team-section style-two pt-80 pb-50">
        <div class="container">
            <div class="section-head pb-65">
                <h5>Team Member</h5>
                <h2>Our Awesome Creative <span>Team Member</span> </h2>
                <div class="animated-bar"><span></span></div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="single-team-member">
                        <div class="team-thumb">
                            <div class="team-thumb-inner">
                                <img src="{{url('assets/images/team/team-11.png')}}" alt="thumb">
                            </div>
                            <div class="team-social-icon-inner">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="team-content-inner">
                                <div class="team-content-title">
                                    <h4>Mafidul Islam</h4>
                                </div>
                                <div class="team-member-designation">Director & Co-Founder (CMD)</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="single-team-member">
                        <div class="team-thumb">
                            <div class="team-thumb-inner">
                                <img src="{{url('assets/images/team/team-1-2.png')}}" alt="thumb">
                            </div>
                            <div class="team-social-icon-inner">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="team-content-inner">
                                <div class="team-content-title">
                                    <h4>MOHIBUL HUSSAIN</h4>
                                </div>
                                <div class="team-member-designation">Director & Co-Founder (CEO)</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="single-team-member">
                        <div class="team-thumb">
                            <div class="team-thumb-inner">
                                <img src="{{url('assets/images/team/tm-10.jpg')}}" alt="thumb">
                            </div>
                            <div class="team-social-icon-inner">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="team-content-inner">
                                <div class="team-content-title">
                                    <h4>IMRAN HUSSAIN</h4>
                                </div>
                                <div class="team-member-designation"> Company Secretary (CS/CA)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----START TESTIMONIAL SECTION----->
    <div class="testimonial-section background-three pt-50 pb-100">
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
                            <img src="assets/images/testimonial/tstm1.jpg" alt="testimonial Img">
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
                            <img src="assets/images/testimonial/tstm2.jpg" alt="testimonial Img">
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
                            <img src="assets/images/testimonial/tstm3.jpg" alt="testimonial Img">
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
                            <img src="assets/images/testimonial/tstm2.jpg" alt="testimonial Img">
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
<!----End TESTIMONIAL SECTION----->

@endsection
