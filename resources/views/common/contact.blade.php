@extends('layouts.master')
@section('title')
    {{ 'Contact Us' }}
@endsection
@section('main-container')
    <!-----START BREADCUMB SECTION----->
    <div class="breadcumb-section">
        <div class="container">
            <div class="row">
                <div class="breadcumb-content">
                    <h1>Contact</h1>
                    <div class="breadcumb-inner">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----START CONTACT SECTION----->
    <div class="contact-fetaure pt-60 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head style-2 pb-60">
                        <h5>Contact Us</h5>
                        <h2>We are here for you</h2>
                        <h2>Nofino Rural Finance Private Limited</h2>
                        <div class="animated-bar"> <span></span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="contact-single-feature">
                        <div class="feature-icon"><i class="far fa-map"></i></div>
                        <div class="contact-content">
                            <div class="contact-title">
                                <h4>Company Address</h4>
                            </div>
                            <p>Mandia, Barpeta, Assam</p>
                            <p>781308 India </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="contact-single-feature">
                        <div class="feature-icon"><i class="far fa-clock"></i></div>
                        <div class="contact-content">
                            <div class="contact-title">
                                <h4>Opening Hours</h4>
                            </div>
                            <p>Mon - Sat: 09:00am - 05:00pm</p>
                            <p>Sunday office off</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="contact-single-feature">
                        <div class="feature-icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="contact-content">
                            <div class="contact-title">
                                <h4>Contact Directly</h4>
                            </div>
                            <p><a href="mailto:support@nofinofinance.com">support@nofinofinance.com</a></p>
                            <p><a href="tel:+913665357493">+91 3665357493</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----START APPINTMENT SECTION----->
    <div class="appoinment-section style-seven">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head style-2 pb-30">
                        <h5>Contact Us</h5>
                        <h2><span>Nofino Rural Finance </span>Private Limited </h2>
                        <h2>Get In Touch</h2>
                        <div class="animated-bar"> <span></span></div>
                    </div>
                </div>
            </div>
            <div class="about-section pt-30 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-7">
                            <div class="form-area upper">
                                @if (session()->has('success'))
                                    <script>
                                        const Toast = Swal.mixin({
                                            toast: true,
                                            position: 'top-end',
                                            iconColor: 'white',
                                            customClass: {
                                                popup: 'colored-toast',
                                            },
                                            showConfirmButton: false,
                                            timer: 7000,
                                            timerProgressBar: true,
                                            })
                                                Toast.fire({
                                                icon: 'success',
                                                text: "{{ session('success') }}",
                                            })
                                    </script>

                                @elseif (session()->has('error'))
                                <script>
                                    const Toast = Swal.mixin({
                                        toast: true,
                                        position: 'top-end',
                                        iconColor: 'white',
                                        customClass: {
                                            popup: 'colored-toast',
                                        },
                                        showConfirmButton: false,
                                        timer: 7000,
                                        timerProgressBar: true,
                                        })
                                            Toast.fire({
                                            icon: 'errror',
                                            text: "{{ session('errror') }}",
                                        })
                                </script>
                                @endif
                                <form action="{{ route('send.mail') }}" method="POST" id="contactForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Your Name" class="form-control">
                                                @error('name')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Your Email" class="form-control" />
                                                @error('email')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="number" name="phone" placeholder="Your Phone" class="form-control" />
                                                @error('phone')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="subject" placeholder="Your Subject" class="form-control" />
                                                @error('subject')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea name="message" id="messagebox" cols="10" rows="7" placeholder="Your Message"
                                                    class="form-control"></textarea>
                                                @error('message')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <div class="buttons">
                                                    <input type="submit" class="submit-button" name="form_submit"
                                                        value="Send A Message">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-5">
                            <div class="about-content-container">
                                <div class="about-skills style-two">
                                    <div class="skill-item">
                                        <div class="skill-header">
                                            <h6 class="skill-title">Ask for your query</h6>
                                            <a class="cont__text" href="tel:+913665357493">+91 3665357493</a>
                                            <br>
                                            <a class="cont__text" href="tel:+917086788028">+91 7086788028</a>
                                            <br>
                                            <a class="cont__text" href="tel:+917002079156">+91 7002079156</a>
                                        </div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-header">
                                            <h6 class="skill-title">Write Email</h6>
                                            <a class="cont__text" href="mailto:support@nofinofinance.com">support@nofinofinance.com</a>
                                        </div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-header">
                                            <h6 class="skill-title">Visit Office</h6>
                                            <p class="cont__pera">Mandia Goan, Mandia, Barpeta, Assam - 781308 India</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----START GOOGLE MAP SECTION----->
    <div class="google-map mb-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <iframe title="google map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577.6691095803158!2d90.95424887443284!3d26.272400487316162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37599bd0d6778d8d%3A0x9bb21e478b04061e!2sM%20Islam%20Computer%20service!5e0!3m2!1sen!2sin!4v1684249821993!5m2!1sen!2sin"
                        width="1920" height="350"style="border:0;" aria-hidden="false" tabindex="0"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    @push('custom-scripts')


    @endpush
    <!----------===================-------------------------------->

@endsection
