@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">ATTENDANCE</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>ATTENDANCE FORM</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>EMPLOYEE NAME</th>
                            <th>CHECK IN TIME</th>
                            <th>CHECK OUT TIME</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($attendances_results))
                            @foreach($attendances_results as $attendances_result)
                                <tr>
                                    <td>{{ $attendances_result->name}}</td>
                                    <td>{{ $attendances_result->checkin}}</td>
                                    <td>{{ $attendances_result->checkout}}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-4">

                <div class="content">
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Attendance Information</button>
                    {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                </div>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!— Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">ATTENDANCE</h4>
                        </div>
                        <form action="{{ route('attendances_post') }}" method="post" >{!! csrf_field() !!}

                            <div class="card padd-15">
                                <div class="tab" role="tabpanel">
                                    <!— Nav tabs —>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">ATTENDANCES</a></li>
                                        <li role="presentation"><a href="#Section4" role="tab" data-toggle="tab">CONTACTS $ ADDRESSES</a></li>
                                        <li role="presentation"><a href="#Section8" role="tab" data-toggle="tab">SALES $ PURCHASE</a></li>
                                        <li role="presentation"><a href="#Section9" role="tab" data-toggle="tab">ACCOUNTING</a></li>
                                        <li role="presentation"><a href="#Section10" role="tab" data-toggle="tab">ACCOUNTING ENTRIES</a></li>
                                    </ul>
                                    <!— Tab panes —>
                                    <div class="tab-content tabs" id="home">

                                        <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                            <div class="form-group row ">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">EMPLOYEE NAME:</label>
                                                <div class="col-sm-6">
                                                    <input type="name" name="name" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">CHECK IN TIME:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="checkin" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">CHECK OUT TIME:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="checkout" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#Section2" aria-controls="home" role="tab" data-toggle="tab">WORK INFORMATION</a></li>
                                                <li role="presentation"><a href="#Section5" role="tab" data-toggle="tab">HR SETTINGS</a></li>
                                                <li role="presentation"><a href="#Section7" role="tab" data-toggle="tab">PRIVATE INFORMATION</a></li>
                                            </ul>
                                        </div>

                                        <div role="tabpanel" class="tab-pane fade" id="Section2">
                                            <h4 class="theme-cl">WORK INFORMATION</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>NAME:</label>
                                                    <input type="text" class="form-control" name="wname" placeholder="name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputFile">PASSPORT PHOTO:</label>
                                                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <h4 class="theme-cl">CONTACT INFORMATION</h4>
                                                    <label for="exampleSelect1">WORK ADDRESS:</label>
                                                    <select class="form-control" id="exampleSelect1" name="workaddress">
                                                        <option value="opt1">1</option>
                                                        <option value="opt2">2</option>
                                                    </select>
                                                    <!— Nav tabs —>
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li role="presentation" class="active"><a href="#Section3" aria-controls="home" role="tab" data-toggle="tab">WORK ADDRESS</a></li>
                                                    </ul>
                                                    <!— Tab panes —>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <h4 class="theme-cl">POSITION</h4>
                                                    <label for="exampleSelect1">DEPARTMENT</label>
                                                    <select class="form-control" id="exampleSelect1" name="department">
                                                        <option value="administration"></option>
                                                        <option value="administration">Finance</option>
                                                        <option value="administration">Stores</option>
                                                        <option value="administration">Pharmacy</option>
                                                        <option value="administration">Public Health</option>
                                                        <option value="administration">Diagnostic Services</option>
                                                        <option value="administration">Farewell parlour</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>WORK LOCATION:</label>
                                                    <input type="text" class="form-control" name="worklocation" placeholder="work location">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>JOB POSITION:</label>
                                                    <input type="text" class="form-control" name="job" placeholder="job position">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>WORK EMAIL:</label>
                                                    <input type="text" class="form-control" name="workemail" placeholder="work email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>MANAGER:</label>
                                                    <input type="text" class="form-control" name="manager" placeholder="manager">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>WORK MOBILE:</label>
                                                    <input type="text" class="form-control" name="workmobile" placeholder="work mobile">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>COACH:</label>
                                                    <input type="text" class="form-control" name="coach" placeholder="coach">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>WORK PHONE:</label>
                                                    <input type="text" class="form-control" name="workphone" placeholder="work phone">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>WORKING HOURS:</label>
                                                    <input type="text" class="form-control" name="workinghours" placeholder="working hours">
                                                    <!— Nav tabs —>
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li role="presentation" class="active"><a href="#Section6" aria-controls="home" role="tab" data-toggle="tab">WORKING HOURS</a></li>
                                                    </ul>
                                                    <!— Tab panes —>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">OTHER INFORMATION:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="information" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">BACK</a></li>
                                            </ul>
                                        </div>


                                        <div role="tabpanel" class="tab-pane fade" id="Section3">
                                            <h4 class="theme-cl">WORK ADDRESS</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>NAME:</label>
                                                    <input type="text" class="form-control" name="nameb" placeholder="name">
                                                    <input type="text" class="form-control" name="company" placeholder="Company">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputFile">PASSPORT PHOTO</label>
                                                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>ADDRESS:</label>
                                                    <input type="text" class="form-control" name="address" placeholder="Street">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>JOB POSITION:</label>
                                                    <input type="text" class="form-control" name="jobposition" placeholder="job position">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="Street" placeholder="Street2">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>PHONE:</label>
                                                    <input type="text" class="form-control" name="phone" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="city" placeholder="City">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>MOBILE:</label>
                                                    <input type="text" class="form-control" name="mobile" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="state" placeholder="State">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>EMAIL:</label>
                                                    <input type="text" class="form-control" name="email" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="zip" placeholder="Zip">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>WEBSITE:</label>
                                                    <input type="text" class="form-control" name="website" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="country" placeholder="Country">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>TITLE:</label>
                                                    <input type="text" class="form-control" name="title" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>TIN:</label>
                                                    <input type="text" class="form-control" name="tin" placeholder="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>LANGUAGE:</label>
                                                    <input type="text" class="form-control" name="language" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>TAGS:</label>
                                                    <input type="text" class="form-control" name="tags" placeholder="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>INTERNAL NOTES:</label>
                                                    <textarea class="form-control" name="internalnotes" placeholder=" "></textarea>
                                                </div>
                                            </div>
                                            <!— Nav tabs —>
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#Section2" aria-controls="home" role="tab" data-toggle="tab">BACK</a></li>
                                            </ul>
                                            <!— Tab panes —>
                                        </div>

                                        <div role="tabpanel" class="tab-pane fade" id="Section4">

                                            <h4 class="theme-cl">CONTACTS AND ADDRESSES</h4>
                                            <div class="row">
                                                <div class="form-group row col-md-12">
                                                    <label for="inputPassword" class=" col-form-label"><p></p></label>
                                                        <div class="col-sm-8">
                                                            <div class="form-group col-md-12">
                                                                <div class="form-check form-check-inline  col-form-label">
                                                                    <input class="form-check-input" type="radio" name="info" id="inlineRadio1" value="option1">
                                                                    <label class="form-check-label" for="inlineRadio1">CONTACTS</label>
                                                                </div>
                                                                <div class="form-check form-check-inline  col-form-label">
                                                                    <input class="form-check-input" type="radio" name="info" id="inlineRadio2" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">INVOICE ADDRESS</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group row col-md-12">
                                                    <label for="inputPassword" class=" col-form-label"><p></p></label>
                                                        <div class="col-sm-8">
                                                            <div class="form-group col-md-12">
                                                                <div class="form-check form-check-inline  col-form-label">
                                                                    <input class="form-check-input" type="radio" name="info" id="inlineRadio1" value="option1">
                                                                    <label class="form-check-label" for="inlineRadio1">SHIPPING ADDRESS</label>
                                                                </div>
                                                                <div class="form-check form-check-inline  col-form-label">
                                                                    <input class="form-check-input" type="radio" name="info" id="inlineRadio1" value="option1">
                                                                    <label class="form-check-label" for="inlineRadio1">OTHER ADDRESS</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">CONTACT NAME:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="contactname" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">TITLE:</label>
                                                <select name="titleb" class="custom-select">
                                                    <option selected>-Select Title-</option>
                                                    <option value="administration">Doctor</option>
                                                    <option value="administration">Sir</option>
                                                    <option value="administration">Madam</option>
                                                    <option value="administration">Mister</option>
                                                    <option value="administration">Professor</option>
                                                    <option value="administration">Miss</option>
                                                </select>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">PHONE NUMBER:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="phoneno" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">MOBILE NUMBER:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="mobileno" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">NOTES:</label>
                                                <div class="col-sm-12">
                                                    <textarea name="notes" class="form-control" placeholder=""></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div role="tabpanel" class="tab-pane fade" id="Section5">
                                            <h4 class="theme-cl">HR SETTINGS</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>NAME:</label>
                                                    <input type="text" class="form-control" name="namec" placeholder="name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputFile">PASSPORT PHOTO</label>
                                                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                STATUS
                                                <br>
                                                <div class="form-group col-md-12">
                                                    <label>RELATED USER:</label>
                                                    <input type="text" class="form-control" name="status" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>EMAIL ADDRESS:</label>
                                                    <input type="text" class="form-control" name="emailadd" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>PHONE NUMBER:</label>
                                                    <input type="number" class="form-control" name="phonenob" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>MOBILE NUMBER:</label>
                                                    <input type="number" class="form-control" name="mobilenob" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                ATTENDANCE
                                                <br>
                                                <div class="form-group col-md-12">
                                                    <label>BADGE ID:</label>
                                                    <input type="number" class="form-control" name="badgeno" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>MANUAL ATTENDANCE:</label>
                                                    <input type="checkbox" class="form-control" name="manualattendance" placeholder="">
                                                </div>
                                            </div>
                                            <!— Nav tabs —>
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">BACK</a></li>
                                            </ul>
                                            <!— Tab panes —>
                                        </div>

                                        <div role="tabpanel" class="tab-pane fade" id="Section6">
                                            <h4 class="theme-cl">WORKING HOURS</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>NAME:</label>
                                                    <input type="text" class="form-control" name="named" placeholder="name">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                        <label for="exampleInputFile">DAY OF THE WEEK:</label>
                                                        <select name="days" class="custom-select">
                                                            <option selected>-Select Day-</option>
                                                            <option value="administration">Sunday</option>
                                                            <option value="administration">Monday</option>
                                                            <option value="administration">Tuesday</option>
                                                            <option value="administration">Wednesday</option>
                                                            <option value="administration">Thursday</option>
                                                            <option value="administration">Friday</option>
                                                            <option value="administration">Saturday</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>WORK FROM:</label>
                                                    <input type="time" class="form-control" name="workfrom" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>WORK TO:</label>
                                                    <input type="time" class="form-control" name="workto" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>STARTING DATE:</label>
                                                    <input type="date" class="form-control" name="startingdate" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>END DATE:</label>
                                                    <input type="date" class="form-control" name="enddate" placeholder="">
                                                </div>
                                            </div>
                                            <!— Nav tabs —>
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#Section2" aria-controls="home" role="tab" data-toggle="tab">BACK</a></li>
                                            </ul>
                                            <!— Tab panes —>
                                        </div>


                                        <div role="tabpanel" class="tab-pane fade" id="Section7">
                                            <h4 class="theme-cl">PRIVATE INFORMATION</h4>
                                            <div class="form-row">
                                                CITIZENSHIP AND OTHER INFORMATION
                                                <div class="form-group col-md-12">
                                                    <label for="exampleSelect1">NATIONALITY(country):</label>
                                                    <select class="form-control" id="exampleSelect1" name="nationality">
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="opt2">Uganda</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>IDENTIFICATION NUMBER:</label>
                                                    <input type="number" class="form-control" name="idno" placeholder="identification number">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>PASSPORT NUMBER:</label>
                                                    <input type="number" class="form-control" name="passno" placeholder="passport number">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>BANK ACCOUNT NUMBER:</label>
                                                    <input type="number" class="form-control" name="acno" placeholder="bank account number">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <h4 class="theme-cl">CONTACT INFORMATION</h4>
                                                    <label>PRIVATE ADDRESS:</label>
                                                    <input type="text" class="form-control" name="privateaddress" placeholder="private address">
                                                    <!— Nav tabs —>
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li role="presentation" class="active"><a href="#Section11" aria-controls="home" role="tab" data-toggle="tab">PRIVATE ADDRESS</a></li>
                                                    </ul>
                                                    <!— Tab panes —>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <h4 class="theme-cl">STATUS</h4>
                                                    <label for="exampleSelect1">GENDER</label>
                                                    <select class="form-control" id="exampleSelect1" name="gender">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <h4 class="theme-cl">BIRTH</h4>
                                                        <label>DATE OF BIRTH:</label>
                                                        <input type="date" class="form-control" name="dob" placeholder="date of birth">
                                                    </div>
                                                </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>MARITAL STATUS:</label>
                                                    <select class="form-control" id="exampleSelect1" name="maritalstatus">
                                                        <option value="administrator">Married</option>
                                                        <option value="administrator">Single</option>
                                                        <option value="administrator">Legal Cohabitant</option>
                                                        <option value="administrator">Widower</option>
                                                        <option value="administrator">Divorced</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <h4 class="theme-cl">WORK PERMIT</h4>
                                                <div class="form-group col-md-12">
                                                    <label>VISA NO:</label>
                                                    <input type="number" class="form-control" name="visano" placeholder="visa No">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>WORK PERMIT NUMBER:</label>
                                                    <input type="number" class="form-control" name="workpermitno" placeholder="work permit No">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>VISA EXPIRY DATE:</label>
                                                    <input type="date" class="form-control" name="visaexdate" placeholder="visa expiry date">
                                                </div>
                                            </div>
                                            <!— Nav tabs —>
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">BACK</a></li>
                                            </ul>
                                            <!— Tab panes —>
                                        </div>


                                        <div role="tabpanel" class="tab-pane fade" id="Section8">
                                            <h4 class="theme-cl">SALES $ PURCHASES</h4>
                                            <div class="form-row">
                                                SALE
                                                <br>
                                                <div class="form-group col-md-12">
                                                    <label>IS A CUSTOMER:</label>
                                                    <input type="checkbox" class="form-control" name="customer" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>NAME OF SALES PERSON:</label>
                                                    <input type="name" class="form-control" name="salesperson" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                PURCHASE
                                                <br>
                                                <div class="form-group col-md-12">
                                                    <label>IS A VENDOR:</label>
                                                    <input type="checkbox" class="form-control" name="vendor" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>NAME OF VENDOR:</label>
                                                    <input type="name" class="form-control" name="vendorb" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                MISC
                                                <br>
                                                <div class="form-group col-md-12">
                                                    <label>INTERNAL REFERENCE:</label>
                                                    <input type="checkbox" class="form-control" name="intreference" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                ACCOUNTING ENTRIES
                                                <div class="form-group col-md-12">
                                                    <label>ACCOUNT RECEIVABLE:</label>
                                                    <input type="text" class="form-control" name="accreceivable" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                MISC
                                                <br>
                                                <div class="form-group col-md-12">
                                                    <label>ACCOUNT PAYABLE:</label>
                                                    <input type="text" class="form-control" name="accpayable" placeholder="">
                                                </div>
                                            </div>
                                        </div>


                                        <div role="tabpanel" class="tab-pane fade" id="Section9">
                                            <h4 class="theme-cl">ACCOUNTING</h4>
                                            <div class="form-row">
                                                SALE
                                                <br>
                                                <div class="form-group col-md-12">
                                                    <label>CUSTOMER PAYMENT TERMS::</label>
                                                    <select class="form-control" id="exampleSelect1" name="cuspaymentterms">
                                                        <option value="administration"></option>
                                                        <option value="administration">Immediate Payment</option>
                                                        <option value="administration">15 Days</option>
                                                        <option value="administration">30 Net Days</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                PURCHASE
                                                <br>
                                                <div class="form-group col-md-12">
                                                    <label>VENDOR PAYMENT TERMS:</label>
                                                    <select class="form-control" id="exampleSelect1" name="venpaymentterms">
                                                        <option value="stores"></option>
                                                        <option value="administration">Immediate Payment</option>
                                                        <option value="finance">15 Days</option>
                                                        <option value="stores">30 Net Days</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                FISCAL INFORMATION
                                                <br>
                                                <div class="form-group col-md-12">
                                                    <label>FISCAL POSITION:</label>
                                                    <select class="form-control" id="exampleSelect1" name="fiscalpositon">
                                                        <option value="administration"></option>
                                                        <option value="administration"></option>
                                                        <option value="administration"></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                ACCOUNTING ENTRIES
                                                <div class="form-group col-md-12">
                                                    <label>ACCOUNT RECEIVABLE:</label>
                                                    <input type="text" class="form-control" name="accrec" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>ACCOUNT PAYABLE:</label>
                                                    <input type="text" class="form-control" name="accpay" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                    <div role="tabpanel" class="tab-pane fade" id="Section10">
                                        <h4 class="theme-cl">ACCOUNTING ENTRIES</h4>
                                        <div class="form-row">
                                            ACCOUNT RECEIVABLE
                                            <br>
                                            <div class="form-group col-md-12">
                                                <label>CODE:</label>
                                                <input type="text" class="form-control" name="code" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>NAME:</label>
                                                <input type="name" class="form-control" name="namee" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>TYPE:</label>
                                                <select class="form-control" id="exampleSelect1" name="type">
                                                    <option value="administration"></option>
                                                    <option value="administration">Receivable</option>
                                                    <option value="administration">Payable</option>
                                                    <option value="administration">Bank $ Cash</option>
                                                    <option value="administration">Credit Card</option>
                                                    <option value="administration">Current Assets</option>
                                                    <option value="administration">Non Current Assets</option>
                                                    <option value="administration">Prepayments</option>
                                                    <option value="administration">Fixed Assets</option>
                                                    <option value="administration">Current Liabilities</option>
                                                    <option value="administration">Non Current Liabilities</option>
                                                    <option value="administration">Equity</option>
                                                    <option value="administration">Current Year Earnings</option>
                                                    <option value="administration">Income</option>
                                                    <option value="administration">Other Income</option>
                                                    <option value="administration">Depreciation</option>
                                                    <option value="administration">Expenses</option>
                                                    <option value="administration">Cost Of Revenues</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>DEFAULT TAXES:</label>
                                                <select class="form-control" id="exampleSelect1" name="defaulttaxes">
                                                    <option value="administration"></option>
                                                    <option value="administration">15.00%</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>TAGS:</label>
                                                <select class="form-control" id="exampleSelect1" name="tagsb">
                                                    <option value="administration"></option>
                                                    <option value="administration">Operating Activities</option>
                                                    <option value="administration">Financing Activities</option>
                                                    <option value="administration">Investing $ Extraordinary Activities</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>GROUP:</label>
                                                <input type="text" class="form-control" name="group" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>ALLOW RECONCILIATION:</label>
                                                <input type="checkbox" class="form-control" name="allowrecon" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>DEPRECIATED:</label>
                                                <input type="checkbox" class="form-control" name="depreciated" placeholder="">
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-row">
                                            ACCOUNT PAYABLE
                                            <br>
                                            <div class="form-group col-md-12">
                                                <label>CODE:</label>
                                                <input type="text" class="form-control" name="codeb" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>NAME:</label>
                                                <input type="name" class="form-control" name="namef" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>TYPE:</label>
                                                <select class="form-control" id="exampleSelect1" name="typeb">
                                                    <option value="administration"></option>
                                                    <option value="administration">Receivable</option>
                                                    <option value="administration">Payable</option>
                                                    <option value="administration">Bank $ Cash</option>
                                                    <option value="administration">Credit Card</option>
                                                    <option value="administration">Current Assets</option>
                                                    <option value="administration">Non Current Assets</option>
                                                    <option value="administration">Prepayments</option>
                                                    <option value="administration">Fixed Assets</option>
                                                    <option value="administration">Current Liabilities</option>
                                                    <option value="administration">Non Current Liabilities</option>
                                                    <option value="administration">Equity</option>
                                                    <option value="administration">Current Year Earnings</option>
                                                    <option value="administration">Income</option>
                                                    <option value="administration">Other Income</option>
                                                    <option value="administration">Depreciation</option>
                                                    <option value="administration">Expenses</option>
                                                    <option value="administration">Cost Of Revenues</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>DEFAULT TAXES:</label>
                                                <select class="form-control" id="exampleSelect1" name="deftaxes">
                                                    <option value="administration"></option>
                                                    <option value="administration">15.00%</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>TAGS:</label>
                                                <select class="form-control" id="exampleSelect1" name="tagsc">
                                                    <option value="administration"></option>
                                                    <option value="administration">Operating Activities</option>
                                                    <option value="administration">Financing Activities</option>
                                                    <option value="administration">Investing $ Extraordinary Activities</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>GROUP:</label>
                                                <input type="text" class="form-control" name="groupc" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>ALLOW RECONCILIATION:</label>
                                                <input type="checkbox" class="form-control" name="allowrec" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>DEPRECIATED:</label>
                                                <input type="checkbox" class="form-control" name="dep" placeholder="">
                                            </div>
                                        </div>
                                    </div>


                                        <div role="tabpanel" class="tab-pane fade" id="Section11">
                                            <h4 class="theme-cl">PRIVATE ADDRESS</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>NAME:</label>
                                                    <input type="text" class="form-control" name="pname" placeholder="name">
                                                    <input type="text" class="form-control" name="companyb" placeholder="Company">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputFile">Passport Photo</label>
                                                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>ADDRESS:</label>
                                                    <input type="text" class="form-control" name="addresb" placeholder="Street">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>JOB POSITION:</label>
                                                    <input type="text" class="form-control" name="jobpos" placeholder="job position">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="streetb" placeholder="Street2">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>PHONE:</label>
                                                    <input type="text" class="form-control" name="phonef" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="cityc" placeholder="City">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>MOBILE:</label>
                                                    <input type="text" class="form-control" name="moblef" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="stateb" placeholder="State">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>EMAIL:</label>
                                                    <input type="text" class="form-control" name="emailc" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="zipb" placeholder="Zip">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>WEBSITE:</label>
                                                    <input type="text" class="form-control" name="websiteg" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="countryc" placeholder="Country">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>TITLE:</label>
                                                    <input type="text" class="form-control" name="titlez" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>TIN:</label>
                                                    <input type="text" class="form-control" name="tinx" placeholder="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>LANGUAGE:</label>
                                                    <input type="text" class="form-control" name="lang" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>TAGS:</label>
                                                    <input type="text" class="form-control" name="tagsp" placeholder="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>INTERNAL NOTES:</label>
                                                    <textarea class="form-control" name="intnots" placeholder=" "></textarea>
                                                </div>
                                            </div>
                                            <!— Nav tabs —>
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#Section7" aria-controls="home" role="tab" data-toggle="tab">BACK</a></li>
                                            </ul>
                                            <!— Tab panes —>
                                        </div>
                                    </div>
                                </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
