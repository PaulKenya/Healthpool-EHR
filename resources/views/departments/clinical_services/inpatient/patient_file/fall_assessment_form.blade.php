@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
    <div class="page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Fall Assessment</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Fall Assessment</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>Print Record</th>
                                <th>PATIENT NAME</th>
                                <th>IP NUMBER</th>
                                <th>DATE</th>
                                <th>AGE</th>
                                <th>WARD</th>
                                <th>BED NUMBER</th>
                                <th>SEX</th>
                                <th>FALL RISK CATEGORY</th>
                                <th>AGE</th>
                                <th>MEDICATION</th>
                                <th>URGENCY</th>
                                <th>FALL HISTORY</th>
                                <th>NUMBER OF PEOPLE PRESENT</th>
                                <th>MOBILITY</th>
                                <th>POINTS</th>
                                <th>CONDITION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($fallassessmentform_results))
                                @php
                                    $i=0
                                @endphp
                                @foreach($fallassessmentform_results as $fallassessmentform_result)
                                    @php
                                        $i++;
                                    @endphp
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">Print Record</button>
                                        </td>
                                        <td>{{ $fallassessmentform_result->bio_patient_name}}</td>
                                        <td>{{ $fallassessmentform_result->bio_ip_no}}</td>
                                        <td>{{ $fallassessmentform_result->bio_date}}</td>
                                        <td>{{ $fallassessmentform_result->bio_age}}</td>
                                        <td>{{ $fallassessmentform_result->bio_ward}}</td>
                                        <td>{{ $fallassessmentform_result->bio_bed_number}}</td>
                                        <td>{{ $fallassessmentform_result->bio_sex}}</td>
                                        <td>{{ $fallassessmentform_result->risk}}</td>
                                        <td>{{ $fallassessmentform_result->drug}}</td>
                                        <td>{{ $fallassessmentform_result->year}}</td>
                                        <td>{{ $fallassessmentform_result->medication}}</td>
                                        <td>{{ $fallassessmentform_result->status}}</td>
                                        <td>{{ $fallassessmentform_result->urgency}}</td>
                                        <td>{{ $fallassessmentform_result->present}}</td>
                                        <td>{{ $fallassessmentform_result->mobility}}</td>
                                        <td>{{ $fallassessmentform_result->condition}}</td>

                                        <!-- Triage Modal -->
                                        <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Fall Assessment</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="printableArea{{$i}}">
                                                            <h2>PATIENT RECORD</h2>
                                                            <p><b>Patient Name : </b> {{$patient->name}}</p>
                                                            <p><b>Ip No : </b>{{ $fallassessmentform_result->bio_ip_no}}</p>
                                                            <p><b>Date : </b>{{ $fallassessmentform_result->bio_date}}</p>
                                                            <p><b>Age : </b>{{ $fallassessmentform_result->bio_age}}</p>
                                                            <p><b>Ward : </b>{{ $fallassessmentform_result->bio_ward}}</p>
                                                            <p><b>Bed Number : </b>{{ $fallassessmentform_result->bio_bed_number}}</p>
                                                            <p><b>Sex : </b>{{ $fallassessmentform_result->bio_sex}}</p>
                                                            <p><b>Risk : </b>{{ $fallassessmentform_result->risk}}</p>
                                                            <p><b>Drug : </b>{{ $fallassessmentform_result->drug}}</p>
                                                            <p><b>Year : </b>{{ $fallassessmentform_result->year}}</p>
                                                            <p><b>Medication : </b>{{ $fallassessmentform_result->medication}}</p>
                                                            <p><b>Status : </b>{{ $fallassessmentform_result->status}}</p>
                                                            <p><b>Urgency : </b>{{ $fallassessmentform_result->urgency}}</p>
                                                            <p><b>Present : </b>{{ $fallassessmentform_result->present}}</p>
                                                            <p><b>Mobility : </b>{{ $fallassessmentform_result->mobility}}</p>
                                                            <p><b>Condition : </b>{{ $fallassessmentform_result->condition}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <input type="button" class="btn btn-success" onclick="printDiv('printableArea{{$i}}')" value="print" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="content">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add more Items</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!— Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Assessment Information</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                            <form action="{{route('fallassessmentform_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                                <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                                <div class="">
                                                    <div class="offset-md-6">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <p>PATIENTS NAME:</p>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input type=" text" name="bio_patient_name" class="form-control" placeholder="click to enter patients name"></td>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <p>IP NUMBER:</p>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input type=" text" name="bio_ip_no" class="form-control" placeholder="click to enter IP number"></td>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <p>DATE:</p>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input type="date" id="myDate" name="bio_date" readonly class="form-control" placeholder="click to enter date">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <p>AGE:</p>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input type="number" name="bio_age" class="form-control" placeholder="click to enter age">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <p>WARD:</p>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input type="text" name="bio_ward" class="form-control" placeholder="click to enter ward number">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <p>BED NUMBER:</p>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input type="text" name="bio_bed_number" class="form-control" placeholder="click to enter bed number">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <p>SEX:</p>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <select class="form-control" name="bio_sex" id="sex">
                                                                    <option value="male">--Choose sex--</option>
                                                                    <option value="male">Male</option>
                                                                    <option value="female">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-m-3 offset-md-3">
                                                    <H3 class="mt-20">
                                                        FALL ASSESSMENT TOOL
                                                    </H3>
                                                </div>

                                                <table class="table table-bordered">
                                                    <tbody>

                                                    <tr class="col-md-4">
                                                        <td>
                                                            <h1>Fall Risk Factory Category</h1> <br>

                                                            <p>Scoring not completed for the reason(s) (check any that apply). Enter risk category (i.e Low/High) based on box selected </p><br>

                                                            <input type="checkbox" name="risk" value="complete paralysis">  Complete paralysis,or complete immobilize, Implement basic safety(low fall risk)Intervention <br><br>

                                                            <input type="checkbox" name="risk" value="one fall">  Patient has a history of more than one fall within 6 months before admission. Implement high fall risk intervention through hospitalization. <br><br>

                                                            <input type="checkbox" name="risk" value="fall during this hospitalization"> Patient has experienced a fall during this hospitalization. Implement high fall risk interventions throughout hospitalization <br><br>


                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <br><br>


                                                <table class="table table-bordered">

                                                    <thead>
                                                    <tr>
                                                        <th scope="col">COMPLETE THE FOLLOWING AND CALCULATE FALL RISK SCORE IF NO BOX IS CHECKED ,SCORE FOR CATEGORY IS 0</th>
                                                        <th scope="col">POINTS</th>
                                                    </tr>
                                                    </thead>



                                                    <tbody>

                                                    <tr class="col-md-4">

                                                        <td>
                                                            AGE (SINGLE-SELECT)<br><input type="checkbox" name="years">60-69 years
                                                        </td>
                                                        <td>1</td>
                                                    </tr>
                                                    <tr class="col-md-4">

                                                        <td>
                                                            <input type="checkbox" name="years">70-79 years
                                                        </td>
                                                        <td>2</td>
                                                    </tr>

                                                    <tr class="col-md-4">

                                                        <td>
                                                            <input type="checkbox" name="years">>80 years
                                                        </td>
                                                        <td>3</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            FALL HISTORY(SINGLE-SELECT)<br><input type="checkbox" name="status">One fall within 6 months before admission
                                                        </td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            ELIMINATION, BOWEL AND URINE (SINGLE-SELECT)<br><input type="checkbox" name="status">Incontinence
                                                        </td>
                                                        <td>2</td>
                                                    </tr>

                                                    <tr class="col-md-4">

                                                        <td>
                                                            <input type="checkbox" name="urgency">Urgency or frequency
                                                        </td>
                                                        <td>2</td>
                                                    </tr

                                                    <tr class="col-md-4">

                                                        <td>
                                                            <input type="checkbox" name="urgency">Urgency/frequency and Incontinence
                                                        </td>
                                                        <td>4</td>
                                                    </tr>

                                                    <td>
                                                        MEDICATIONS:INCLUDES PCA/OPIATES,ANTI-CONVULSANTS, ANTI-HYPERTENSIVES, DIURETICS,LAXATIVES,SEDATIVES AND PSYCHOTROPICS(SINGLE-SELECT)<br><input type="checkbox" name="medication"> On 1 high fall risk drug
                                                    </td>
                                                    <td>3</td>
                                                    </tr>

                                                    <td>
                                                        <input type="checkbox" name="drug"> On 2 more high fall risk drug
                                                    </td>
                                                    <td>5</td>
                                                    </tr>

                                                    <td>
                                                        <input type="checkbox" name="drug"> Sedated procedure within past 24 hours
                                                    </td>
                                                    <td>5</td>
                                                    </tr>

                                                    <td>
                                                        PATIENT CARE EQUIPMENT ANY THAT TETHERS PATIENTS, E.G. IV INFUSION, CHEST TUBE,INDWELLING CATHETERS, SCDS, ETC (SINGLE-SELECT)<br><input type="checkbox" name="present">One present
                                                    </td>
                                                    <td>1</td>
                                                    </tr>

                                                    <td>
                                                        <input type="checkbox" name="present"> Two present
                                                    </td>
                                                    <td>2</td>
                                                    </tr>
                                                    <td>
                                                        <input type="checkbox" name="present"> 3 or more present
                                                    </td>
                                                    <td>2</td>
                                                    </tr>


                                                    <td>
                                                        MOBILITY (MULTI-SELECT, CHOOSE ALL THAT APPLY AND ADD POINRS TOGETHER)<br><input type="checkbox" name="mobility"> Requires asnsistance or supervision for mobility, transer or ambulation
                                                    </td>
                                                    <td>3</td>
                                                    </tr>

                                                    <td>
                                                        <input type="checkbox" name="mobility"> Unsteady gail
                                                    </td>
                                                    <td>2</td>
                                                    </tr>
                                                    <td>
                                                        <input type="checkbox" name="mobility"> Visual or auditory impairement affecting mobility
                                                    </td>
                                                    <td>2</td>
                                                    </tr>



                                                    <td>
                                                        COGNITION (MULTI-SELECT, CHOOSE ALL THAT APPLY AND ADD POINTS TOGETHER)<br><input type="checkbox" name="condition">Altered awareness of immediate physical environment
                                                    </td>
                                                    <td>1</td>
                                                    </tr>

                                                    <td>
                                                        <input type="checkbox" name="condition"> Impulsive
                                                    </td>
                                                    <td>2</td>
                                                    </tr>
                                                    <td>
                                                        <input type="checkbox" name="condition"> Lack of understanding of one's physical and cognitive limitations
                                                    </td>
                                                    <td>4</td>
                                                    </tr>

                                                    </tr>
                                                    <td> Total points</td>
                                                    <td>
                                                        <input type="number" name="points">
                                                    </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                            <!--form here--->
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
    <!-- end container -->
@endsection
