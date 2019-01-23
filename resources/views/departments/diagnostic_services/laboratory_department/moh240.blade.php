@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
<div class="card"> 
        <div class="card-header">
            <h4>MOH 240</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>PRINT VIEW</th>
                            <th>DATE</th>
                            <th>OPD/IP/Ref.NO</th>
                            <th>LAB NO</th>
                            <th>RE-VISIT</th>
                            <th>VILLAGE/ESTATE</th>
                            <th>ADDRESS</th>
                            <th>CLINICAL DIAGNOSIS</th>
                            <th>PRIOR TREATMENT</th>
                            <th>TYPE OF SPECIMEN</th>
                            <th>CONDITION OF SPECIMEN</th>
                            <th>INVESTIGATION REQUIRED</th>
                            <th>DATE SAMPLE COLLECTED</th>
                            <th>DATE SAMPLE RECEIVED</th>
                            <th>CLINICIAN NAME</th>
                            <th>DATE SAMPLE ANALYZED</th>
                            <th>RESULTS</th>
                            <th>DATE RESULTS DISPATCHED</th>
                            <th>AMOUNT CHARGED</th>
                            <th>COMMENTS</th>
                            <th>NAME OF ANALYZING OFFICER</th>
                            <th>SIGNATURE</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(isset($moh240_results))

                        @php
                            $i=0
                        @endphp

                        @foreach($moh240_results as $moh240_result)

                            @php
                                $i++;
                            @endphp


                            <tr>

                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
                                </td>


                                <td>{{ $moh240_result->date }}</td>
                                <td>{{ $moh240_result->opd_ip_ref_no }}</td>
                                <td>{{ $moh240_result->lab_no }}</td>
                                <td>{{ $moh240_result->revisit }}</td>
                                <td>{{ $moh240_result->village_estate }}</td>
                                <td>{{ $moh240_result->address }}</td>
                                <td>{{ $moh240_result->clinical_diagnosis }}</td>
                                <td>{{ $moh240_result->prior_treatment }}</td>
                                <td>{{ $moh240_result->type_of_specimen }}</td>
                                <td>{{ $moh240_result->condition_specimen }}</td>
                                <td>{{ $moh240_result->investigation_required }}</td>
                                <td>{{ $moh240_result->date_sample_collected }}</td>
                                <td>{{ $moh240_result->date_sample_received }}</td>
                                <td>{{ $moh240_result->clinician_name }}</td>
                                <td>{{ $moh240_result->date_sample_analyzed }}</td>
                                <td>{{ $moh240_result->results }}</td>
                                <td>{{ $moh240_result->date_results_dispatched }}</td>
                                <td>{{ $moh240_result->amount_charged }}</td>
                                <td>{{ $moh240_result->comments }}</td>
                                <td>{{ $moh240_result->name_of_analyzing_officer }}</td>
                                <td>{{ $moh240_result->signature }}</td>
                            </tr>

                            <!-- Triage Modal -->
                            <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="printableArea{{$i}}">
                                                <h2>VIEW MOH 240 FORM</h2>
                                                <p><b>PATIENT NAME : </b>{{$patient->name}}</p>
                                                <p><b>DATE : </b>{{$moh240_result->date }}</p>
                                                <p><b>OPD/IP/Ref.NO : </b>{{$moh240_result->opd_ip_ref_no }}</p>
                                                <p><b>LAB NO : </b>{{$moh240_result->lab_no }}</p>
                                                <p><b>RE-VISIT : </b>{{$moh240_result->revisit }}</p>
                                                <p><b>VILLAGE/ESTATE : </b>{{$moh240_result->village_estate }}</p>
                                                <p><b>ADDRESS : </b>{{$moh240_result->address }}</p>
                                                <p><b>CLINICAL DIAGNOSIS : </b>{{$moh240_result->clinical_diagnosis }}</p>
                                                <p><b>PRIOR TREATMENT : </b>{{$moh240_result->prior_treatment }}</p>
                                                <p><b>TYPE OF SPECIMEN : </b>{{$moh240_result->type_of_specimen }}</p>
                                                <p><b>CONDITION OF SPECIMEN : </b>{{$moh240_result->condition_specimen }}</p>
                                                <p><b>INVESTIGATION REQUIRED : </b>{{$moh240_result->investigation_required }}</p>
                                                <p><b>DATE SAMPLE COLLECTED : </b>{{$moh240_result->date_sample_collected }}</p>
                                                <p><b>DATE SAMPLE RECEIVED : </b>{{$moh240_result->date_sample_received }}</p>
                                                <p><b>CLINICIAN NAME : </b>{{$moh240_result->clinician_name }}</p>
                                                <p><b>DATE SAMPLE ANALYZED : </b>{{$moh240_result->date_sample_analyzed }}</p>
                                                <p><b>RESULTS : </b>{{$moh240_result->results }}</p>
                                                <p><b>DATE RESULTS DISPATCHED : </b>{{$moh240_result->date_results_dispatched }}</p>
                                                <p><b>AMOUNT CHARGED : </b>{{$moh240_result->amount_charged }}</p>
                                                <p><b>COMMENTS : </b>{{$moh240_result->comments }}</p>
                                                <p><b>NAME OF ANALYZING OFFICER : </b>{{$moh240_result->name_of_analyzing_officer }}</p>
                                                <p><b>SIGNATURE : </b>{{$moh240_result->signature }}</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input type="button" class="btn btn-success" onclick="printDiv('printableArea{{$i}}')" value="print" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-4">

                <div class="content">
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Records</button>
                    {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">

                <!— Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">QUIT</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">MOH 240</h4>
    </div>
</div> 

<div class="col-md-12">
    <div class="card">
      <div class="container-fluid">
        <br>
          <form action="{{route('moh240_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
              <br>
              <div class="align-self-center text-center">
                  <p id="demo"></p>
                  <script>
                      var d = new Date();
                      document.getElementById("demo").innerHTML = d;
                  </script>
              </div>
            <p>MOH 240 The register is to be introduced in all Laboratory Centres/Health facilities with laboratory services. Step by step instructions on how to fill the register</p>
              <br>
              <div class="row">
                  <div class="col-md-3">
                      <p></p>
                  </div>
                  <div class="col-md-9">
                      <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-3">
                      <p></p>
                  </div>
                  <div class="col-md-9">
                      <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-3">
                      <p></p>
                  </div>
                  <div class="col-md-9">
                      <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                  </div>
              </div>
              <br>
            <table class="table table-bordered">
              <thead>

                <tr class="color background-color:black">
                  <th scope="col">COLUMN</th>
                  <th scope="col">DATA</th>
                  <th scope="col">DEFINITIONS/EXPLANATIONS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>A</td>
                  <td>Date</td>
                  <td><input type="date" name="date" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>B</td>
                  <td>OPD/IP/Ref.NO</td>
                  <td><input type="number" name="opd_ip_ref_no" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>C</td>
                  <td>LAB NO</td>
                  <td><input type="number" name="lab_no" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>D</td>
                  <td>RE-VISIT</td>
                  <td><input type="text" name="revisit" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>E</td>
                  <td>VILLAGE/ESTATE</td>
                  <td><input type="text" name="village_estate" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>F</td>
                  <td>ADDRESS</td>
                  <td><input type="text" name="address" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>G</td>
                  <td>CLINICAL DIAGNOSIS</td>
                  <td><input type="text" name="clinical_diagnosis" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>H</td>
                  <td>PRIOR TREATMENT</td>
                  <td><input type="text" name="prior_treatment" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>I</td>
                  <td>TYPE OF SPECIMEN</td>
                  <td><input type="text" name="type_of_specimen" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>J</td>
                  <td>CONDITION OF SPECIMEN</td>
                  <td><input type="text" name="condition_specimen" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>K</td>
                  <td>INVESTIGATION REQUIRED</td>
                  <td><input type="text" name="investigation_required" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>L</td>
                  <td>DATE SAMPLE COLLECTED</td>
                  <td><input type="date" name="date_sample_collected" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>M</td>
                  <td>DATE SAMPLE RECEIVED</td>
                  <td><input type="date" name="date_sample_received" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>N</td>
                  <td>CLINICIAN NAME</td>
                  <td><input type="name" name="clinician_name" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>O</td>
                  <td>DATE SAMPLE ANALYZED</td>
                  <td><input type="date" name="date_sample_analyzed" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>P</td>
                  <td>RESULTS</td>
                  <td><input type="text" name="results" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>Q</td>
                  <td>DATE RESULTS DISPATCHED</td>
                  <td><input type="date" name="date_results_dispatched" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>R</td>
                  <td>AMOUNT CHARGED</td>
                  <td><input type="number" name="amount_charged" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>S</td>
                  <td>COMMENTS</td>
                  <td><input type="text" name="comments" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>T</td>
                  <td>NAME OF ANALYZING OFFICER</td>
                  <td><input type="name" name="name_of_analyzing_officer" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>U</td>
                  <td>SIGNATURE</td>
                  <td><input type="password" name="signature" class="form-control" placeholder=""></td>
                </tr>
              </tbody>
            </table>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>
  </div>
                  <div class="content">
                        <input type="submit" value="Save" class="btn btn-info" />
                    
                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
