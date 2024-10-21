@extends('layouts.master')
@section('title')
    {{ 'Gold Loan Details' }}
@endsection
@section('main-container')
<div class="breadcumb-section">
    <div class="container">
        <div class="row">
            <div class="breadcumb-content">
                <h1>Gold Loan Details</h1>
                <div class="breadcumb-inner">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li><a href="{{url('/gold')}}">Gold Loan Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-----START SERVICE DETAILS SECTION----->
<div class="service-deatils-section pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="call-do-action-feature white text-center">
                    <div class="feature-icon"><i class="flaticon-call"></i></div>
                    <div class="call-do-title">
                        <h5>Have any Questions? Call us Today!</h5>
                    </div>
                    <div class="call-do-phone">
                        <h4><a href="tel:+913665357493">+91 3665357493</a></h4>
                    </div>
                    <div class="call-do-mail">
                        <p><a href="mailto:support@nofinofinance.com" class="text-white">support@nofinofinance.com</a></p>
                    </div>
                </div>
                <div class="document-widget-post">
                    <h3 class="blog-sidebar__box-title">Download</h3>
                    <div class="pylon-links">
                        <a href="#" target="_blank">
                            <i class="far fa-file-alt"></i>GeneralForm.pdf &nbsp;(1.04 MB)
                        </a>
                    </div>
                    <div class="pylon-links">
                        <a href="#" target="_blank">
                            <i class="far fa-file-alt"></i>LoanForm .pdf &nbsp;(469.50 KB)
                        </a>
                    </div>
                </div>
                <div class="feature-about-us mb-30">
                    <div class="feature-title">
                        <h5>About Our Country</h5>
                    </div>
                    <p>We are here to help our customer any time. You can call on 24/7 To Answer Your Question.</p>
                    <div class="btn-common btn-download">
                        <a href="{{ url('/gold-from') }}">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-8">
                <div class="service-details-content">
                    <div class="content-title">
                        <h3>Gold Loan Overview</h3>
                    </div>
                    <div class="content-txt">
                        <p>Nofino Rural Finance Private Limited offers secure and low-interest gold loans, providing quick access to funds against your gold assets. Our flexible repayment options and competitive rates ensure you can achieve your financial goals without stress. Trust Nofino to help turn your gold into opportunities for growth and prosperity.</p>
                    </div>
                    <div class="content-thumb">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <img src="{{url('assets/images/loan/Gold Loan.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="content-title">
                        <h3>Required Documents:</h3>
                    </div>
                    <div class="details-feature">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-unstyled about-two__list service-details__list">
                                    <li>
                                        <i class="fa fa-check-circle"></i> PAN CARD.
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle"></i> AADHAR CARD.
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle"></i> STAMP PEPER. (Rs.100)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
