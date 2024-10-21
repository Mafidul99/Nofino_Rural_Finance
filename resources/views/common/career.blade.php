@extends('layouts.master')
@section('title')
    {{ 'Career' }}
@endsection
@section('main-container')
    <!-- ============================================================== -->
    <!-----START BREADCUMB SECTION----->
    <div class="breadcumb-section">
        <div class="container">
            <div class="row">
                <div class="breadcumb-content">
                    <h1>Career Page</h1>
                    <div class="breadcumb-inner">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><a href="{{url('/career')}}">Career</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----START BLOG SECTION----->
    <div class="blog-section blog-list pt-70 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head style-2 pb-70">
                        <h5>Join us</h5>
                        <h2>CURRENT <span> OPENINGS</span> </h2>
                        <div class="animated-bar"> <span></span></div>
                    </div>
                </div>
            </div>
            <div class="blog-grid-wrapper">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="blog-single-items">
                            <div class="blog-thumb">
                                <a href="#"><img src="{{url('assets/images/blog/blog-t1.jpg')}}" alt="thumb"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span>February 01, 2024</span>
                                </div>
                                <div class="blog-page-title">
                                    <h2><a href="{{url('/career-details-multiple')}}">Multitacking Jobs Vacancies In (head Office)</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="blog-single-items">
                            <div class="blog-thumb">
                                <a href="#"><img src="{{url('assets/images/blog/blog-t2.jpg')}}" alt="thumb"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span>February 01, 2024</span>
                                </div>
                                <div class="blog-page-title">
                                    <h2><a href="{{url('/career-details-receptionist')}}">Receptionist Vacancies In (head Office) only Female</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="blog-single-items">
                            <div class="blog-thumb">
                                <a href="#"><img src="{{url('assets/images/blog/blog-t3.jpg')}}" alt="thumb"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span>February 01, 2024</span>
                                </div>
                                <div class="blog-page-title">
                                    <h2><a href="{{url('/career-details-receptionist')}}">Collection Executive Vacancies In (head Office)</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="blog-single-items">
                            <div class="blog-thumb">
                                <a href="#"><img src="{{url('assets/images/blog/blog-t4.jpg')}}" alt="thumb"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span>February 01, 2024</span>
                                </div>
                                <div class="blog-page-title">
                                    <h2><a href="blog-details.html">Office Boy Job Vacancies In (head Office)</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="blog-single-items">
                            <div class="blog-thumb">
                                <a href="#"><img src="{{url('assets/images/blog/blog-t2.jpg')}}" alt="thumb"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span>February 01, 2023</span>
                                </div>
                                <div class="blog-page-title">
                                    <h2><a href="blog-details.html">Comming Soon</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="blog-single-items">
                            <div class="blog-thumb">
                                <a href="#"><img src="{{url('assets/images/blog/blog-t3.jpg')}}" alt="thumb"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span>February 01, 2023</span>
                                </div>
                                <div class="blog-page-title">
                                    <h2><a href="blog-details.html">Comming Soon </a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================= -->
    <div class="calls-do-actions">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head text-center">
                        <h5>Don’t See a Match?</h5>
                        <h2>We're always looking for talented people.</h2>
                    </div>
                    <div class="calls-do-button">
                        <a href="{{ url('/contact') }}">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------------------------------------------->
@endsection
