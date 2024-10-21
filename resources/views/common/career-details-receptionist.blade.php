@extends('layouts.master')
@section('title')
    {{ 'Career Details Receptionist' }}
@endsection
@section('main-container')
<!-----START BREADCUMB SECTION----->
<div class="breadcumb-section">
    <div class="container">
        <div class="row">
            <div class="breadcumb-content">
                <h1>Career Details </h1>
                <div class="breadcumb-inner">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li><a href="{{url('/career-details-receptionist')}}">Career Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- Start - career-details Section -->
<!-- ============================================================= -->
<div class="career-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-details-box">
                    <div class="details-title">
                        <h2>Receptionist Vacancies In (head Office) only Female</h2>
                        <h3>Job Descriptions</h3>
                        <p>managing multiple tasks at once, such as switching between high-focus tasks and organizing time and workload.</p>
                    </div>
                    <div class="details-text">
                        <h4>Experience :</h4>
                        <p>0-2 Years experience: for Junior.</p>
                        <p>2+ Years experience for Senior.</p>
                    </div>
                    <div class="details-text">
                        <h4>Keyskills:</h4>
                        <p>React Native, ReactJs, Redux, SDK Integration to achieve Native view controller, JS and Hybrid app development, Javascript, ES6, TypeScript, Knowledge of Android or IOS</p>
                    </div>
                    <div class="details-text">
                        <h3>Desired Candidate Profile</h3>
                        <h4>Roles & Responsibilities:</h4>
                        <p>Proven experience in React/React native design guidelines, SDK and excellent JavaScript skills.</p>
                        <p>Exposure to building React Native components in native iOS and Android.</p>
                        <p>Knowledge of React and the Javascript ecosystem.</p>
                        <p>Familiarity with RESTful APIs development.</p>
                        <p>Expertise with code testing best practices, including unit, and integration testing to ensure quality of code.</p>
                        <p>Familiarity with code versioning tools such as Git, SVN, Github.</p>
                        <p>Firm grasp of the JavaScript language and its nuances, including ES7 syntax.</p>
                        <p>Build pixel-perfect, smooth UIs across both mobile platforms</p>
                        <p>Knowledge of how to embed React-Native in a native (iOS/Android) component and vice versa.</p>
                    </div>
                    <div class="details-text">
                        <h4>Perks and Benefits :</h4>
                        <p>Work from home till pandemic abates.</p>
                        <p>5 days working</p>
                    </div>
                    <div class="details-text">
                        <h4>Salary :</h4>
                        <p>Salary:  80,000 to 1,00,000 BDT (Depends on Skill and Experience)</p>
                        <p>Increment: Yearly</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="singles-details-box">
                    <div class="details-title">
                        <h4>Job Summary:</h4>
                    </div>
                    <div class="details-thumb">
                        <img src="{{url('assets/images/d3.png')}}" alt="">
                        <div class="deta-title">
                            <span>Office Location</span>
                            <h5>Mirpur DOHS, Dhaka-1212</h5>
                        </div>
                    </div>
                    <div class="details-thumb">
                        <img src="{{url('assets/images/d2.png')}}" alt="">
                        <div class="deta-title">
                            <span>Job Type</span>
                            <h5>Full Time</h5>
                        </div>
                    </div>
                    <div class="details-thumb">
                        <img src="{{url('assets/images/d1.png')}}" alt="">
                        <div class="deta-title">
                            <span>JOb Posting Date</span>
                            <h5>2 Weeks ago</h5>
                        </div>
                    </div>
                    <div class="details-thumb">
                        <img src="{{url('assets/images/d6.png')}}" alt="">
                        <div class="deta-title">
                            <span>Deadline</span>
                            <h5>22 June, 2023</h5>
                        </div>
                    </div>
                    <div class="details-thumb">
                        <img src="{{url('assets/images/d2.png')}}" alt="">
                        <div class="deta-title">
                            <span>Working Hrs</span>
                            <h5>8.00 AM to 5.00 PM</h5>
                        </div>
                    </div>
                    <div class="details-thumb">
                        <img src="{{url('assets/images/d.png')}}" alt="">
                        <div class="deta-title">
                            <span>Working Days</span>
                            <h5>Weekly 5 Days Weekend : Sat, Sun</h5>
                        </div>
                    </div>
                    <div class="details-thumb">
                        <img src="{{url('assets/images/00000.html')}}" alt="">
                        <div class="deta-title">
                            <span>Vacancy</span>
                            <h5>No. Of Vacancy : 03</h5>
                        </div>
                    </div>
                    <div class="details-button">
                        <a href="#">Apply now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------------------------------------------------------->
@endsection
