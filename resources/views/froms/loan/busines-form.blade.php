@extends('layouts.master')
@section('title')
    {{ 'Business Loan Application From' }}
@endsection
@section('main-container')
    <!-----START BREADCUMB SECTION----->
    <div class="breadcumb-section">
        <div class="container">
            <div class="row">
                <div class="breadcumb-content">
                    <h1>Business Application From</h1>
                    <div class="breadcumb-inner">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><a href="{{ url('/busines-from') }}">Busines Loan Application From</a></li>
                        </ul>
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
                        <h5>Loan Form</h5>
                        <h2>BUSINESS LOAN APPLICATION FORM</h2>
                        <div class="animated-bar"> <span></span></div>
                    </div>
                </div>
            </div>
            <div class="about-section pt-30 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-area upper">
                                @if (session()->has('success'))
                                    <script>
                                        const Toast = Swal.mixin({
                                            position: 'center',
                                            iconColor: 'white',
                                            customClass: {
                                                popup: 'colored-toast',
                                            }
                                            })
                                                Swal.fire({
                                                icon: 'success',
                                                text: "{{ session('success') }}",
                                                showConfirmButton: false,
                                                timer: 7000,
                                                timerProgressBar: true,
                                            })
                                    </script>
                                @elseif (session()->has('error'))
                                    <script>
                                        const Toast = Swal.mixin({
                                            position: 'center',
                                            iconColor: 'white',
                                            customClass: {
                                                popup: 'colored-toast',
                                            }
                                            })
                                                Swal.fire({
                                                icon: 'error',
                                                text: "{{ session('error') }}",
                                                showConfirmButton: false,
                                                timer: 7000,
                                                timerProgressBar: true,
                                            })
                                    </script>
                                @endif
                                <form action="{{ route('business.from.sent') }}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row pb-3">
                                        <div class="col-md-12">
                                            <div class="block-title">
                                                <h3 class="title__block">Loan Details</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="loan___label">Loan Amount <span style="color:red;">*</span>
                                                    <strong>Rs. 20000/- & 50000/-</strong>
                                                </label>
                                                <input type="number" name="loanamount" placeholder="Loan Amount" class="form-control"/>
                                                @error('loanamount')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="loan___label">Monthly Income <span style="color:red;">*</span></label>
                                                <input type="number" name="income" placeholder="Monthly Income" class="form-control" />
                                                @error('income')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="loan___label">Purpose of Loan <span style="color:red;">*</span>
                                                </label>
                                                <select name="purposeloan" class="form-control" >
                                                    <option value="">---Select Purpose of Loan---</option>
                                                    <option value="Indiviual Loan">Indiviual Loan</option>
                                                    <option value="Group Loan">Group Loan</option>
                                                    <option value="Business Loan">Business Loan</option>
                                                    <option value="Gold Loan">Gold Loan</option>
                                                </select>
                                                @error('purposeloan')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="loan___label">Loan Months <span style="color:red;">*</span></label>
                                                <select name="loanmonths" class="form-control" >
                                                    <option value="">---Select Loan Months---</option>
                                                    <option value="5 Months"> 5 Months (Indiviual / Business Loan)</option>
                                                    <option value="4 Months">4 Months (Group Loan)</option>
                                                    <option value="1 Years">1 Years (Gold Loan)</option>
                                                </select>
                                                @error('loanmonths')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-md-12">
                                            <div class="block-title">
                                                <h3 class="title__block">Personal Details</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="loan___label">Your Name <span style="color:red;">*</span></label>
                                                <input type="text" name="name" placeholder="Your Name" class="form-control" />
                                                @error('name')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="loan___label">Father Name <span style="color:red;">*</span></label>
                                                <input type="text" name="fname" placeholder="Father Name" class="form-control" />
                                                @error('fname')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="loan___label">Mother Name  <span style="color:red;">*</span></label>
                                                <input type="text" name="mname" placeholder="Mother Name " class="form-control" />
                                                @error('mname')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="loan___label">Email Id <span style="color:red;">*</span></label>
                                                <input type="email" name="email" placeholder="Email Id" class="form-control" />
                                                @error('email')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="loan___label">Date of Birth <span style="color:red;">*</span></label>
                                                <input type="date" name="birthdate" placeholder="Birth Date" class="form-control" />
                                                @error('birthdate')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="loan___label">Mobile Number<span style="color:red;">*</span></label>
                                                <input type="number" name="phone" placeholder="Mobile Number " class="form-control" />
                                                @error('phone')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="loan___label">Pan Card Number<span style="color:red;">*</span></label>
                                                <input type="text" name="panno" placeholder="Pan Card Number" class="form-control" />
                                                @error('panno')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="loan___label">Aadhaar Card Number<span style="color:red;">*</span></label>
                                                <input type="number" name="aadhno" placeholder="Aadhaar Card Number" class="form-control" />
                                                @error('aadhno')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="loan___label">Voter Card Number<span style="color:red;">*</span></label>
                                                <input type="text" name="voterno" placeholder="Voter Card Number" class="form-control" />
                                                @error('voterno')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="loan___label">Bank Account Number<span style="color:red;">*</span></label>
                                                <input type="number" name="bankacno" placeholder="Bank Account Number" class="form-control" />
                                                @error('bankacno')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="loan___label">Bank Name & Branch<span style="color:red;">*</span></label>
                                                <input type="text" name="branchname" placeholder="Bank Name & Branch" class="form-control" />
                                                @error('branchname')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="loan___label">IFSC Code<span style="color:red;">*</span></label>
                                                <input type="text" name="ifsccode" placeholder="IFSC Code" class="form-control" />
                                                @error('ifsccode')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="loan___label">Gender <span style="color:red;">*</span></label>
                                                <select name="gender" class="form-control">
                                                    <option value="">---Select Gender---</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                @error('gender')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="loan___label">Category<span style="color:red;">*</span></label>
                                                <select name="category" class="form-control" >
                                                    <option value="">Select Your Category</option>
                                                    <option value="General">General</option>
                                                    <option value="SC">ST</option>
                                                    <option value="ST">SC</option>
                                                    <option value="OBC">OBC</option>
                                                </select>
                                                @error('category')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="loan___label">Qualification <span style="color:red;">*</span></label>
                                                <input type="text" name="qualif" placeholder="Qualification " class="form-control" />
                                                @error('qualif')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="loan___label">Marital Status<span style="color:red;">*</span></label>
                                                <select name="martialstatus" class="form-control" >
                                                    <option value="">-----Select-------</option>
                                                    <option value="Unmarried">Unmarried</option>
                                                    <option value="Married">Married</option>
                                                </select>
                                                @error('martialstatus')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="loan___label">Spose Name</label>
                                                <input type="text" name="spname" placeholder="Spose Name" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-md-12">
                                            <div class="block-title">
                                                <h3 class="title__block">Address Details</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="loan___label">House No/Name<span style="color:red;">*</span></label>
                                                <input type="text" name="houseno" placeholder="House No/Name" class="form-control" />
                                                @error('houseno')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="loan___label">Street<span style="color:red;">*</span></label>
                                                <input type="text" name="street" placeholder="Street" class="form-control" />
                                                @error('street')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="loan___label">City<span style="color:red;">*</span></label>
                                                <input type="text" name="city" placeholder="City" class="form-control" />
                                                @error('city')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="loan___label">State <span style="color:red;">*</span></label>
                                                <select name="state" class="form-control" >
                                                    <option value="">Select State</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Odisha">Odisha</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Uttarakhand">Uttarakhand</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                </select>
                                                @error('state')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="loan___label">Pin Code <span style="color:red;">*</span></label>
                                                <input type="number" name="pincode" placeholder="Pin Code" class="form-control" />
                                                @error('pincode')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-md-12">
                                            <div class="block-title">
                                                <h3 class="title__block">Business Details</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="loan___label">Shop Name<span style="color:red;">*</span></label>
                                                <input type="text" name="shopname" placeholder="Shop Name" class="form-control" />
                                                @error('shopname')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="loan___label">Trade License Number<span style="color:red;">*</span></label>
                                                <input type="number" name="tlnumber" placeholder="Trade License Number" class="form-control" />
                                                @error('tlnumber')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="loan___label">Business Type <span style="color:red;">*</span></label>
                                                <select name="busitype" class="form-control" >
                                                    <option value="Select">--- Select ---</option>
                                                    <option value="Part Time Employed">Part Time Employed</option>
                                                    <option value="Self Employed">Self Employed</option>
                                                    <option value="Salaries">Salaries</option>
                                                    <option value="Business">Business</option>
                                                    <option value="Pensioner">Pensioner</option>
                                                </select>
                                                @error('busitype')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="loan___label">Business Address <span style="color:red;">*</span> </label>
                                                <input type="text" name="baddress" placeholder="Business Address" class="form-control" />
                                                @error('baddress')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="loan___label">Business Mobile Number<span style="color:red;">*</span></label>
                                                <input type="number" name="bmobilen" placeholder="Business Mobile Number" class="form-control" />
                                                @error('bmobilen')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="loan___label">Business Email Id <span style="color:red;">*</span></label>
                                                <input type="email" name="bemailid" placeholder="Business Email Id" class="form-control" />
                                                @error('bemailid')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="block-title">
                                                <h3 class="title-block">Ducoments Upload <span style="color:red;">(only jpeg, jpg, png)</span></h3>
                                                <p style="color: green;"><b>(Size :: 500kb to 1 MB)</b></p>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Pan Card <span style="color:red;">*</span></label>
                                                        <p style="color:red;">(size : W-3.5" to H-2.5")</p>
                                                        <div style="border: 1px solid black; height: 150px; width: 250px;  background: #F5FAFF;">
                                                            <img id="outputpc" width="250" height="150" / style="display:none">
                                                        </div>
                                                    </div>
                                                    <input type="file" name="pancardimage[]" id="pancardimage" multiple="multiple" onchange="loadFilepc(event)" class="form-control" accept="image/*" / style="width:250px;" required>
                                                    @push('custom-scripts')
                                                    <script>
                                                        var loadFilepc = function(event) {
                                                            var reader = new FileReader();
                                                            reader.onload = function() {
                                                                var output = document.getElementById('outputpc');
                                                                output.src = reader.result;
                                                            };

                                                            $('#outputpc').show();
                                                            reader.readAsDataURL(event.target.files[0]);
                                                        };
                                                    </script>
                                                    @endpush
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Aadhaar Card <span style="color:red;">*</span></label>
                                                        <p style="color:red;">(size : W-3.5" to H-2.5")</p>
                                                        <div style="border: 1px solid black; height: 150px; width: 250px;  background: #F5FAFF;">
                                                            <img id="outputAc" width="250" height="150" / style="display:none">
                                                        </div>
                                                    </div>
                                                    <input type="file" name="aadhcardimage[]" id="aadhcardimage" multiple="multiple" onchange="loadFileAc(event)" class="form-control" accept="image/*" / style="width:250px;" required>
                                                    @push('custom-scripts')
                                                        <script>
                                                            var loadFileAc = function(event) {
                                                                var reader = new FileReader();
                                                                reader.onload = function() {
                                                                    var output = document.getElementById('outputAc');
                                                                    output.src = reader.result;
                                                                };

                                                                $('#outputAc').show();
                                                                reader.readAsDataURL(event.target.files[0]);
                                                            };
                                                        </script>
                                                    @endpush
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Voter Card <span style="color:red;">*</span></label>
                                                        <p style="color:red;">(size : W-3.5" to H-2.5")</p>
                                                        <div style="border: 1px solid black; height: 150px; width: 250px;  background: #F5FAFF;">
                                                            <img id="outputv" width="250" height="150" / style="display:none">
                                                        </div>
                                                    </div>
                                                    <input type="file" id="vimage" name="voterimage[]" multiple="multiple" onchange="loadFilesv(event)" class="form-control" accept="image/*" / style="width:250px;" required />
                                                   @push('custom-scripts')
                                                        <script>
                                                            var loadFilesv = function(event) {
                                                                var reader = new FileReader();
                                                                reader.onload = function() {
                                                                    var output = document.getElementById('outputv');
                                                                    output.src = reader.result;
                                                                };

                                                                $('#outputv').show();
                                                                reader.readAsDataURL(event.target.files[0]);
                                                            };
                                                        </script>
                                                   @endpush
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pt-4">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Bank Passbook <span style="color:red;">*</span></label>
                                                        <p style="color:red;">(size : W-3.5" to H-2.5")</p>
                                                        <div style="border: 1px solid black; height: 150px; width: 250px;  background: #F5FAFF;">
                                                            <img id="outputbp" width="250" height="150" / style="display:none">
                                                        </div>
                                                    </div>
                                                    <input type="file" name="bankpassimage[]" id="bankpassimage" multiple="multiple" onchange="loadFilebp(event)" class="form-control" accept="image/*" / style="width:250px;" required>

                                                    @push('custom-scripts')
                                                        <script>
                                                            var loadFilebp = function(event) {
                                                                var reader = new FileReader();
                                                                reader.onload = function() {
                                                                    var output = document.getElementById('outputbp');
                                                                    output.src = reader.result;
                                                                };

                                                                $('#outputbp').show();
                                                                reader.readAsDataURL(event.target.files[0]);
                                                            };
                                                        </script>
                                                    @endpush
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pt-4">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Trade License <span style="color:red;">*</span></label>
                                                        <p style="color:red;">(size : W-3.5" to H-2.5")</p>
                                                        <div style="border: 1px solid black; height: 150px; width: 250px;  background: #F5FAFF;">
                                                            <img id="outputtrl" width="250" height="150" / style="display:none">
                                                        </div>
                                                    </div>
                                                    <input type="file" id="trlimage" name="tredlinceimage[]" multiple="multiple" onchange="loadFilestl(event)" class="form-control" accept="image/*" / style="width:250px;" required>
                                                    @push('custom-scripts')
                                                        <script>
                                                            var loadFilestl = function(event) {
                                                                var reader = new FileReader();
                                                                reader.onload = function() {
                                                                    var output = document.getElementById('outputtrl');
                                                                    output.src = reader.result;
                                                                };

                                                                $('#outputtrl').show();
                                                                reader.readAsDataURL(event.target.files[0]);
                                                            };
                                                        </script>
                                                    @endpush
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pt-4">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Shop Photo&Owner <span style="color:red;">*</span></label>
                                                        <p style="color:red;">(size : W-3.5" to H-2.5")</p>
                                                        <div style="border: 1px solid black; height: 150px; width: 250px;  background: #F5FAFF;">
                                                            <img id="outputspo" width="250" height="150" / style="display:none">
                                                        </div>
                                                    </div>
                                                    <input type="file" id="spoimage" name="spopwonerimage[]" multiple="multiple" onchange="loadFilesspo(event)" class="form-control" accept="image/*" / style="width:250px;" required>
                                                    @push('custom-scripts')
                                                        <script>
                                                            var loadFilesspo = function(event) {
                                                                var reader = new FileReader();
                                                                reader.onload = function() {
                                                                    var output = document.getElementById('outputspo');
                                                                    output.src = reader.result;
                                                                };

                                                                $('#outputspo').show();
                                                                reader.readAsDataURL(event.target.files[0]);
                                                            };
                                                        </script>
                                                    @endpush
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pt-4 ">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12 ">
                                                    <div class="form-group">
                                                        <label>Your Phoro <span style="color:red;"> * </span></label>
                                                        <p style="color:red;">(size: W-2.5" to H-3.5")</p>
                                                        <div style="border: 1px solid black; height: 150px; width: 160px;  background: #F5FAFF;">
                                                            <img id="output" width="160" height="150" / style="display:none">
                                                        </div>
                                                    </div>
                                                    <input type="file" name="yphotoimage[]" id="yphotoimage" onchange="loadFile(event)" multiple="multiple" class="form-control" accept="image/*" / style="width:160px;" required>
                                                    @push('custom-scripts')
                                                        <script>
                                                            var loadFile = function(event) {
                                                                var reader = new FileReader();
                                                                reader.onload = function() {
                                                                    var output = document.getElementById('output');
                                                                    output.src = reader.result;
                                                                };

                                                                $('#output').show();
                                                                reader.readAsDataURL(event.target.files[0]);
                                                            };
                                                        </script>
                                                    @endpush
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pt-4">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Your Signature <span style="color:red;">*</span></label>
                                                        <p style="color:red;">(size: W-3.5" to H-1.2")</p>
                                                        <div style="border: 1px solid black; height: 110px; width: 260px;  background: #F5FAFF;">
                                                            <img id="outputs" width="260" height="110" / style="display:none">
                                                        </div>
                                                    </div>
                                                    <input type="file" id="signatimage" name="signatimage[]" multiple="multiple" onchange="loadFiles(event)" class="form-control" accept="image/*" / style="width:260px;" required>
                                                    @push('custom-scripts')
                                                        <script>
                                                            var loadFiles = function(event) {
                                                                var reader = new FileReader();
                                                                reader.onload = function() {
                                                                    var output = document.getElementById('outputs');
                                                                    output.src = reader.result;
                                                                };

                                                                $('#outputs').show();
                                                                reader.readAsDataURL(event.target.files[0]);
                                                            };
                                                        </script>
                                                    @endpush
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div style="padding:20px; border-radius: 25px;font-size: 18px;">
                                                <label>Declaration <span style="color:red;">*</span></label>
                                                <input type="checkbox" name="declaration" class="form-control" style="width:28px;" required />
                                                I hereby declare that all the information given above is true and correct to the best of my knowledge.
                                                All the information shared in the Loan request is correct, and I take full responsibility for its correctness.
                                                I solemnly declare that the information in this Loan request is true to the best of my knowledge and belief.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
                                        <div class="form-group">
                                            <div class="buttons">
                                                <input type="submit" class="submit-button" name="form_submit"  value="Save & Continue ">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------===================-------------------------------->
@endsection
