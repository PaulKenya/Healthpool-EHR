@extends('layouts.master')

@section('page_css')
    <!--select2-->
    <link href="{{asset('assets/plugins/multiselect/css/multi-select.css')}}"  rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/select2/dist/css/select2-bootstrap.css')}}" rel="stylesheet" type="text/css">

    @endsection

@section('content')
    @if(Auth::user()->is_admin==1)
        <!-- Title & Breadcrumbs-->
    <div class=" page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl offset-3"> {{ Auth::user()->institution->name }} Settings</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <!-- row -->
    <div class="row">


            <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-overlap">

                                <img class="card-img-top" src="{{ asset('uploads/logos/')}}/{{Auth::user()->institution->avatar }}" alt="Card image cap" />
                            </div>
                            <div class="card-block padd-10  text-center">
                                <h5 class="font-normal mrg-bot-0 font-18 card-title">{{ Auth::user()->institution->name }}</h5>
                                <p class="card-small-text">{{Auth::user()->institution->email }}</p>
                            </div>
                            <div class="bottom">
                                <ul class="social-detail padd-15 text-center">
                                    <a href="#modal-1"  data-toggle="modal" data-target="#modal-1" class="btn waves-effect waves-light btn-rounded btn-info">Change Logo</a>
                                    <a href="{{ route('manage_users')  }}"  class="btn waves-effect waves-light btn-rounded btn-info">Manage Users</a>
                                </ul>
                            </div>
                        </div>

                    <div class="modal modal-box-1 fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" id="myModalLabel1">
                                <div class="modal-header theme-bg">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form enctype="multipart/form-data" action="{{ route('set_logo') }}" method="post">
                                                <input type="file" name="cover">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="pull-right btn btn-info" value="update">
                                            </form>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- About Me Box -->
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="box-title">About This Hospital</h4>
                            </div>
                            <!-- /.box-header -->
                            <div class="card-body">
                                @if( isset( Auth::user()->institution->facility_type))

                                    <strong><i class="fa fa-level-up margin-r-5"></i> Keph level</strong>
                                    <p class="text-muted">
                                        {{ Auth::user()->institution->keph_level }}
                                    </p>
                                    <strong><i class="fa fa-industry margin-r-5"></i> Facility Type</strong>
                                    <p class="text-muted">
                                        {{ Auth::user()->institution->facility_type }}
                                    </p>
                                    <strong><i class="fa fa-users margin-r-5"></i> Owner</strong>
                                    <p class="text-muted">
                                        {{ Auth::user()->institution->owner }}
                                    </p>
                                    <strong><i class="fa fa-balance-scale margin-r-5"></i> Regulatory body</strong>
                                    <p class="text-muted">
                                        @foreach(explode(',', Auth::user()->institution->regulatory_body) as $regulatory_body)
                                                 <span class="label label-info">
                                            {{$regulatory_body}}</span>
                                        @endforeach

                                    </p>
                                    <strong>
                                        <i class="fa fa-fw fa-bed margin-r-5"></i> Bed capacity</strong>
                                    <p class="text-muted">
                                        {{ Auth::user()->institution->bed_capacity }}
                                    </p>
                                    <strong><i class="fa fa-arrows margin-r-5"></i> Branches </strong>
                                    <p class="text-muted">
                                        {{ Auth::user()->institution->branches }}
                                    </p>
                                    <strong><i class="fa fa-file-text margin-r-5"></i> Brief Description Of Services</strong>
                                    <p class="text-muted">
                                        {{ Auth::user()->institution->brief_description_of_services }}
                                    </p>
                                    <strong><i class="fa fa-shield margin-r-5"></i> Insurance</strong>
                                    <p class="text-muted">
                                        @foreach(explode(',', Auth::user()->institution->insurance) as $insurance)
                                            <span class="label label-success">{{ $insurance }}</span>
                                        @endforeach
                                    </p>
                                    <strong><i class="fa fa-map-marker margin-r-5"></i> Street Address</strong>
                                    <p class="text-muted">
                                        {{ Auth::user()->institution->city }} City,{{ Auth::user()->institution->street_address }} , {{ Auth::user()->institution->county }} County
                                    </p>

                                @else

                                @endif


                            </div>
                       
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
            </div>
            <!-- /.col-md-4 -->
        <div class="col-md-8">

            <form class="form-horizontal" method="POST" action="{{ route('update_hospital_profile') }}">
            @csrf
                <div class="card" style="overflow-x: hidden;">
                    <div class="card-header ">
                        <h4 class="text-center offset-md-5">Facility Info</h4>
                    </div>
                    <div class="card-block">

                        <!-- Step 1 -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Facility name:</label>
                                    <input  maxlength="100" type="text" name="name" required="required" class="form-control" placeholder="Facility name" value="{{ Auth::user()->institution->name }}"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Facility Registration Number:</label>
                                    <input type="text" name="registration_number" required="required" class="form-control" placeholder="Enter Facility Registration Number" value="{{ Auth::user()->institution->registration_number }}" />
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
                                        <option value="{{ Auth::user()->institution->keph_level }}" selected>{{ Auth::user()->institution->keph_level }}</option>
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
                                        <button type="submit" class="btn gredient-bg nextBtn btn-lg pull-right" style="color: white;">Save</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header ">
                        <h4 class="text-center offset-md-5">Location Info</h4>
                    </div>
                    <div class="card-block">
                        <!-- Step 2 -->
                        <div class="row " id="step-2">
                            <div class="col-md-12">
                                <!--SHIPPING METHOD-->
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="row mrg-0">
                                            <div class="col-md-6 col-12">
                                                <label class="form-label">Address:</label>
                                                <input maxlength="100" type="text" name="address" class="form-control" required="required" placeholder="Enter Address" value="{{ Auth::user()->institution->address }}"/>
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
                                                    <option value="{{ Auth::user()->institution->county }}" selected> {{ Auth::user()->institution->keph_level }}</option>
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
                                                    <option value="{{ Auth::user()->institution->sub_county }}" selected>{{ Auth::user()->institution->sub_county }}</option>
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
                                                    <option value="{{ Auth::user()->institution->constituency }}" selected>{{ Auth::user()->institution->constituency }}</option>
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
                                                    <option value="{{ Auth::user()->institution->ward }}" selected>{{ Auth::user()->institution->ward }}</option>
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
                                                <select class="multipleselect" id="" name="working_days[]" multiple="multiple" style="width: 100%;">
                                                    <optgroup label="Working Days">

                                                        @foreach(explode(',', Auth::user()->institution->working_days) as $working_days)
                                                            <option value="{{ $working_days }}" selected>{{ $working_days }}</option>
                                                        @endforeach
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
                                            <textarea maxlength="" type="text" name="brief_description_of_services" class="form-control" required="required" placeholder="Brief Description of Services"/>
                                            {{ Auth::user()->institution->brief_description_of_services }}
                                            </textarea>
                                        </div>
                                        @if ($errors->has('brief_description_of_services'))
                                            <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('brief_description_of_services') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="flexbox text-center">
                                            <button type="submit" class="btn gredient-bg nextBtn btn-lg pull-right" style="color: white;">Save</button>
                                         </div>
                                    </div>
                                </div>
                                <!--SHIPPING METHOD END-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header ">
                        <h4 class="text-center offset-md-5">Contact Info</h4>
                    </div>
                    <div class="card-block">
                        <!-- Step 3 -->
                        <div class="row " >
                            <div class="col-md-12">
                                <!--CREDIT CART PAYMENT-->
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-md-12"><label class="form-label">E-mail Address:</label></div>
                                        <div class="col-md-12">
                                            <input maxlength="100" type="email" name="email" class="form-control" required="required" placeholder="Enter your Facility E-mail Address" value="{{ Auth::user()->institution->email }}"/>

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
                                            <input type="text" class="form-control" name="telephone" required="required" placeholder="Enter your Facility Phone Number" value="{{ Auth::user()->institution->telephone }}"/>
                                            @if ($errors->has('telephone'))
                                                <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('telephone') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="flexbox align-items-center">
                                            <button type="submit" class="btn gredient-bg nextBtn btn-lg pull-right" style="color: white;">Save</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header ">
                        <h4 class="text-center offset-md-5">Hospital capacity Info</h4>
                    </div>
                    <div class="card-block">
                        <!-- Step 4 -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Bed Capacity:</label>
                                    <input  maxlength="100" type="text" name="bed_capacity" required="required" class="form-control" placeholder="Bed capacity" value="{{ Auth::user()->institution->bed_capacity }}"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Cots:</label>
                                    <input  maxlength="100" type="text" name="cots" required="required" class="form-control" placeholder="Enter number of Cots " value="{{ Auth::user()->institution->cots }}" />
                                </div>


                                <div class="form-group">
                                    <label class="form-label">Facility Type:</label>
                                    <div>
                                        <select class=" multipleselect" id="option_s37" name="facility_type[]" multiple="multiple" style="width: 100%;">
                                            <optgroup label="Facility Type">
                                                @foreach( explode(',', Auth::user()->institution->facility_type) as $facility)
                                                    <option value="{{ $facility }}" selected>{{ $facility }}</option>
                                                @endforeach

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
                                        <select class=" multipleselect" id="option_s32" name="insurance[]" multiple="multiple" style="width: 100%;">
                                            <optgroup label="Insurances">
                                                @foreach( explode(',', Auth::user()->institution->insurance) as $insurance)
                                                    <option value="{{ $insurance }}" selected>{{ $insurance }}</option>
                                                @endforeach
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
                                        <select class=" multipleselect" id="option_s3" name="regulatory_body[]" multiple="multiple" style="width: 100%;">
                                            <optgroup label="Regulatory Body">

                                                @foreach(explode(',', Auth::user()->institution->regulatory_body) as $regulatory_body)
                                                    <option value="{{ $regulatory_body }}" selected>{{ $regulatory_body }}</option>
                                                @endforeach
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
                                        <input type="submit" class="btn gredient-bg nextBtn btn-lg pull-right" style="color: white;" value="Save">
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Successfully Message END-->
            </form>
        </div>
    </div>
        @else

        <h3 class="text-danger">You are not allowed to access this page</h3>

        @endif

    <!-- /row -->
@endsection

@section('page_scripts')


    <!-- Custom Theme JavaScript -->
    <script src="{{asset('assets/dist/js/custom/form-wizard.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
    <script src="{{asset('assets/plugins/select2/dist/js/select2.min.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('.multipleselect').select2();
        });

    </script>
@endsection

