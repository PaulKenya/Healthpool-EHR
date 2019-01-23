@extends('auth.institution')

@section('content')

    <div class="col-12 col-sm-12 col-md-8 col-lg-8 login-sidebar ">
        <div class="login-container">
            <div class="col-md-4 offset-4">
                <h3 class=" text-upper">Institution Register</h3>
            </div>
            <div class="col-md-12 col-sm-12 ">
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="form-wizard-setup first">
                            <a href="#step-1" class="btn active-wizard circle-button"><i class="fa fa-user "></i></a>
                            <p>Identity</p>
                        </div>
                        <div class="form-wizard-setup">
                            <a href="#step-2" class="btn btn-default circle-button"><i class="fa  fa-map-marker"></i></a>
                            <p> Location</p>
                        </div>
                        <div class="form-wizard-setup">
                            <a href="#step-3" class="btn btn-default circle-button"><i class="fa fa-envelope-o "></i></a>
                            <p>Contacts</p>
                        </div>

                        <div class="form-wizard-setup last">
                            <a href="#step-4" class="btn btn-default circle-button"><i class="fa fa-bed"></i></a>
                            <p>Status</p>
                        </div>
                    </div>
                </div>
                <form class="form-horizontal" method="POST" action="{{ route('institution_post') }}">
                @csrf
                    <!-- Step 1 -->
                    <div class="row setup-content" id="step-1">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Facility name:</label>
                                <input  maxlength="100" type="text" name="name" required="required" class="form-control" placeholder="Facility name"/>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Facility Registration Number:</label>
                                <input  maxlength="100" type="text" name="registration_number" required="required" class="form-control" placeholder="Enter Facility Registration Number" />
                                @if ($errors->has('registration_number'))
                                    <span class="invalid-feedback">
                                                <strong>{{ $errors->first('registration_number') }}</strong>
                                            </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Keph Level</label>
                                <select maxlength="100" type="text" name="keph_level" required="required" class="form-control" placeholder="Choose your Keph Level">
                                    <option>Choose your Keph Level</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                @if ($errors->has('keph_level'))
                                    <span class="invalid-feedback">
                                                <strong>{{ $errors->first('keph_level') }}</strong>
                                            </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="flexbox align-items-center">
                                    <button type="button" class="btn gredient-bg nextBtn btn-lg pull-right" style="color: white;">Next</button>
                                    <p>If You Are a Existing User <a href="{{route('login')}}" data-toggle="tooltip" class="gredient-cl" data-original-title="Log In">Login Here.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="row setup-content" id="step-2">
                        <div class="col-md-12">
                            <!--SHIPPING METHOD-->
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="row mrg-0">
                                        <div class="col-md-6 col-12">
                                            <label class="form-label">Address:</label>
                                            <input maxlength="100" type="text" name="address" class="form-control" required="required" placeholder="Enter Address"/>
                                            @if ($errors->has('address'))
                                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                            @endif

                                        </div>
                                        <div class="span1"></div>
                                        <div class="col-md-6 col-12">
                                            <label class="form-label">County:</label>
                                            <select maxlength="100" type="text" name="county" required="required" class="form-control" placeholder="Select your County">
                                                <option>Select your County</option>
                                                <option value="Nairobi">Nairobi County</option>
                                                <option value="Mombasa">Mombasa County</option>
                                                <option value="Kisumu">Kisumu County</option>
                                                <option value="Lamu">Lamu County</option>
                                            </select>
                                            @if ($errors->has('county'))
                                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('county') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mrg-0">
                                        <div class="col-md-6 col-12">
                                            <label class="form-label">Sub County:</label>
                                            <select maxlength="100" type="text" name="sub_county" required="required" class="form-control" placeholder="Select your Sub-County">
                                                <option>Select your Sub-County</option>
                                                <option value="Nairobi">Nairobi County</option>
                                                <option value="Mombasa">Mombasa County</option>
                                                <option value="Kisumu">Kisumu County</option>
                                                <option value="Lamu">Lamu County</option>
                                            </select>
                                            @if ($errors->has('sub_county'))
                                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('sub_county') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="span1"></div>
                                        <div class="col-md-6 col-12">
                                            <label class="form-label">Constituency:</label>
                                            <select maxlength="100" type="text" name="constituency" required="required" class="form-control" placeholder="Select your Constituency">
                                                <option>Select your Constituency</option>
                                                <option value="Nairobi">Nairobi County</option>
                                                <option value="Mombasa">Mombasa County</option>
                                                <option value="Kisumu">Kisumu County</option>
                                                <option value="Lamu">Lamu County</option>
                                            </select>
                                            @if ($errors->has('constituency'))
                                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('constituency') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mrg-0">
                                        <div class="col-md-6 col-12">
                                            <label class="form-label">Ward:</label>
                                            <select maxlength="100" type="text" name="ward" required="required" class="form-control" placeholder="Select your Ward">
                                                <option>Select your Ward</option>
                                                <option value="Nairobi">Nairobi County</option>
                                                <option value="Mombasa">Mombasa County</option>
                                                <option value="Kisumu">Kisumu County</option>
                                                <option value="Lamu">Lamu County</option>
                                            </select>
                                            @if ($errors->has('ward'))
                                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('ward') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="span1"></div>
                                        <div class="col-md-6 col-12">
                                            <label class="form-label">Working Days:</label>
                                            <select class="multipleselect" id="" name="working_days[]" multiple="multiple" style="width: 100%;" required>
                                                <optgroup label="Working Days">
                                                    <option value="monday">Monday</option>
                                                    <option value="tuesday">Tuesday</option>
                                                    <option value="wednesday">Wednesday</option>
                                                    <option value="thursday">Thursday</option>
                                                    <option value="friday">Friday</option>
                                                    <option value="saturday">Saturday</option>
                                                    <option value="sunday">Sunday</option>

                                                </optgroup>
                                            </select>
                                            @if ($errors->has('working_days'))
                                                <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('working_days') }}</strong>
                                                    </span>
                                            @endif
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12"><label class="form-label">Brief Description of Services:</label></div>
                                    <div class="col-md-12">
                                        <textarea maxlength="100" type="text" name="brief_description_of_services" class="form-control" required="required" placeholder="Brief Description of Services"/></textarea>
                                    </div>
                                    @if ($errors->has('brief_description_of_services'))
                                        <span class="invalid-feedback">
                                                <strong>{{ $errors->first('brief_description_of_services') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="flexbox align-items-center">
                                        <button type="button" class="btn gredient-bg nextBtn btn-lg pull-right" style="color: white;">Next</button>
                                    </div>
                                </div>
                            </div>
                            <!--SHIPPING METHOD END-->
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="row setup-content" id="step-3">
                        <div class="col-md-12">
                            <!--CREDIT CART PAYMENT-->
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12"><label class="form-label">E-mail Address:</label></div>
                                    <div class="col-md-12">
                                        <input maxlength="100" type="email" name="email" class="form-control" required="required" placeholder="Enter your Facility E-mail Address"/>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12"><label class="form-label">Telephone Number:</label></div>
                                    <div class="col-md-12">
                                        <input type="Number" class="form-control" name="telephone" required="required" placeholder="Enter your Facility Phone Number"/>
                                        @if ($errors->has('telephone'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('telephone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="flexbox align-items-center">
                                        <button type="button" class="btn gredient-bg nextBtn btn-lg pull-right" style="color: white;">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="row setup-content" id="step-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Bed Capacity:</label>
                                <input  maxlength="100" type="number" name="bed_capacity" required="required" class="form-control" placeholder="Bed capacity"/>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Cots:</label>
                                <input  maxlength="100" type="number" name="cots" required="required" class="form-control" placeholder="Enter number of Cots " />
                            </div>
                            <div class="form-group">
                                <label class="form-label">Facility Type:</label>
                                <div>
                                    <select class=" multipleselect" id="option_s37" name="facility_type[]" multiple="multiple" style="width: 100%;" required>
                                        <optgroup label="Facility Type">

                                            <option value="Dispensary">Dispensary</option>
                                            <option value="Clinical Outpatient">Clinical Outpatient</option>
                                            <option value="VCT">VCT</option>
                                            <option value="Laboratory">Laboratory</option>
                                            <option value="Primary Care Hospital">Primary Care Hospital</option>
                                            <option value="Basic Primary Care Facility">Basic Primary Care Facility</option>
                                            <option value="Chemist">Chemist</option>
                                            <option value="Radiology Center">Radiology Center</option>
                                            <option value="Nursing Home">Nursing Home</option>
                                            <option value="Clinical Outpatient">Pharmacy</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                               <div class="form-group">
                                <label class="form-label">Insurances:</label>
                                <div>
                                    <select class=" multipleselect" id="option_s32" name="insurance[]" multiple="multiple" style="width: 100%;" required>
                                        <optgroup label="Insurances">

                                            <option value="NHIF">NHIF</option>
                                            <option value="APA">APA</option>
                                            <option value="Jubilee">Jubilee</option>
                                            <option value="AON">AON</option>
                                            <option value="AAR">AAR</option>
                                            <option value="Basic Primary Care Facility">Basic Primary Care Facility</option>
                                            <option value="Chemist">Chemist</option>
                                            <option value="Radiology Center">Radiology Center</option>
                                            <option value="Nursing Home">Nursing Home</option>
                                            <option value="Clinical Outpatient">Pharmacy</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Regulatory Body:</label>
                                <div>
                                    <select class=" multipleselect" id="option_s3" name="regulatory_body[]" multiple="multiple" style="width: 100%;" required>
                                        <optgroup label="Regulatory Body">


                                            <option value="Kenya MPDB">Kenya MPDB</option>
                                            <option value="Nursing Council of Kenya">Nursing Council of Kenya</option>
                                            <option value="Clinical Officer Council">Clinical Officer Council</option>
                                            <option value="Ministry of Health">Ministry of Health</option>
                                            <option value="Pharmacy and Poisons Board">Pharmacy and Poisons Board</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="flexbox align-items-center">
                                    <input type="submit" class="btn gredient-bg nextBtn btn-lg pull-right" style="color: white;" value="Finish">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Successfully Message END-->
                </form>
            </div>
        </div>
    </div>
@endsection
