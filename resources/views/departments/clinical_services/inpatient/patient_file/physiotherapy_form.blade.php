@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title &
    Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">PHYSIOTHERAPY FORM</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>PHYSIOTHERAPY FORM VIEWS</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>DATE OF REFERAL</th>
                                <th>DATE OF ASSESSMENT</th>
                                <th>OCCUPATION</th>
                                <th>DIAGNOSIS</th>
                                <th>OT NUMBER</th>
                                <th>ADDRESSED BY</th>
                                <th>REFERRED BY</th>
                                <th>SIGNATURE</th>
                                <th>MAIN COMPLAINT</th>
                                <th>PERSONAL HISTORY</th>
                                <th>HISTORY</th>
                                <th>RELEVANCE</th>
                                <th>OCCUPATIONAL ENTAIL</th>
                                <th>ACTIVITIES</th>
                                <th>TYPICAL DAY</th>
                                <th>LEISURE TIME</th>
                                <th>PRIORITIES IN LIFE</th>
                                <th>IMPAIRMENT PREVENTION</th>
                                <th>COMMUNICATION SKILLS</th>
                                <th>PLANNING</th>
                                <th>MEMORY</th>
                                <th>ORGANIZATION</th>
                                <th>PROBLEM SOLVING</th>
                                <th>SENSORY PROCESS</th>
                                <th>PHYSICAL ABILITY</th>
                                <th>CLIENT POSTURE</th>
                                <th>CLIENT MOBILITY</th>
                                <th>COORDINATION</th>
                                <th>CLIENT MUSCLE</th>
                                <th>ADLS</th>
                                <th>BARRIERS</th>
                                <th>ASSISTIVE DEVICES</th>
                                <th>SOCIAL SUPPORT</th>
                                <th>EATING SKILLS</th>
                                <th>DRESSING SKILLS</th>
                                <th>HYGIENE SKILLS</th>
                                <th>DOMESTIC LIVING</th>
                                <th>COMMUNICATION SKILLS</th>
                                <th>OTHER</th>
                                <th>FINE MOTOR</th>
                                <th>HANDWRITING</th>
                                <th>GROSS MOTOR</th>
                                <th>SOCIALIZING SKILLS</th>
                                <th>PRE VOCATIONAL</th>
                                <th>OTHERS</th>
                                <th>PLAY LEISURE</th>
                                <th>NO CLARITY</th>
                                <th>INTERVENTION</th>
                                <th>NEED FOR O_THERAPY</th>
                                <th>NEED FOR EXTENSIVE</th>
                                <th>REFERRAL</th>
                                <th>O_THERAPY ISSUES</th>
                                <th>INTERVENTION PLANS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($physiotherapy_form_results))
                                @foreach($physiotherapy_form_results as $physiotherapy_form_result)
                                    <tr>
                                        <td>{{$physiotherapy_form_result->date_referred}}</td>
                                        <td>{{$physiotherapy_form_result->date_of_asessment}}</td>
                                        <td>{{$physiotherapy_form_result->occupational}}</td>
                                        <td>{{$physiotherapy_form_result->diagnosis}}</td>
                                        <td>{{$physiotherapy_form_result->ot_no}}</td>
                                        <td>{{$physiotherapy_form_result->adressed_by}}</td>
                                        <td>{{$physiotherapy_form_result->referred_by}}</td>
                                        <td>{{$physiotherapy_form_result->signature}}</td>
                                        <td>{{$physiotherapy_form_result->main_complaint}}</td>
                                        <td>{{$physiotherapy_form_result->personal_history}}</td>
                                        <td>{{$physiotherapy_form_result->history}}</td>
                                        <td>{{$physiotherapy_form_result->relevant}}</td>
                                        <td>{{$physiotherapy_form_result->occupational_entail}}</td>
                                        <td>{{$physiotherapy_form_result->activities}}</td>
                                        <td>{{$physiotherapy_form_result->typical_day}}</td>
                                        <td>{{$physiotherapy_form_result->leisure_time}}</td>
                                        <td>{{$physiotherapy_form_result->priorities_in_life}}</td>
                                        <td>{{$physiotherapy_form_result->impairement_prevent}}</td>
                                        <td>{{$physiotherapy_form_result->communicational_skills}}</td>
                                        <td>{{$physiotherapy_form_result->planning}}</td>
                                        <td>{{$physiotherapy_form_result->memory}}</td>
                                        <td>{{$physiotherapy_form_result->organization}}</td>
                                        <td>{{$physiotherapy_form_result->problem_solving}}</td>
                                        <td>{{$physiotherapy_form_result->sensory_processing}}</td>
                                        <td>{{$physiotherapy_form_result->physical_ability}}</td>
                                        <td>{{$physiotherapy_form_result->clients_posture}}</td>
                                        <td>{{$physiotherapy_form_result->clients_mobility}}</td>
                                        <td>{{$physiotherapy_form_result->co_ordination}}</td>
                                        <td>{{$physiotherapy_form_result->clients_muscle}}</td>
                                        <td>{{$physiotherapy_form_result->adls}}</td>
                                        <td>{{$physiotherapy_form_result->barriers}}</td>
                                        <td>{{$physiotherapy_form_result->assistive_devices}}</td>
                                        <td>{{$physiotherapy_form_result->social_support}}</td>
                                        <td>{{$physiotherapy_form_result->eating_skills}}</td>
                                        <td>{{$physiotherapy_form_result->dressing_skils}}</td>
                                        <td>{{$physiotherapy_form_result->hygiene_skills}}</td>
                                        <td>{{$physiotherapy_form_result->domestic_living}}</td>
                                        <td>{{$physiotherapy_form_result->comm_skills}}</td>
                                        <td>{{$physiotherapy_form_result->other}}</td>
                                        <td>{{$physiotherapy_form_result->fine_motor}}</td>
                                        <td>{{$physiotherapy_form_result->handwriting}}</td>
                                        <td>{{$physiotherapy_form_result->gross_motor}}</td>
                                        <td>{{$physiotherapy_form_result->socializing_skills}}</td>
                                        <td>{{$physiotherapy_form_result->pre_vocational}}</td>
                                        <td>{{$physiotherapy_form_result->others}}</td>
                                        <td>{{$physiotherapy_form_result->play_leisure}}</td>
                                        <td>{{$physiotherapy_form_result->no_clear}}</td>
                                        <td>{{$physiotherapy_form_result->intevention}}</td>
                                        <td>{{$physiotherapy_form_result->needforot}}</td>
                                        <td>{{$physiotherapy_form_result->need_extensive}}</td>
                                        <td>{{$physiotherapy_form_result->referral}}</td>
                                        <td>{{$physiotherapy_form_result->ot_issues}}</td>
                                        <td>{{$physiotherapy_form_result->intervention_plan}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="content">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Data</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!— Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Quit</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <form action="{{route('physiotherapy_form_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                        <div class="col-m-3 offset-md-3">
                                            <H1 class="mt-20 ">
                                                Physiotherapy Form
                                            </H1>
                                        </div>
                                        <h1>1.biodata</h1>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="">Date Referred:</label>
                                                <input type="date" name="date_referred" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="">Date Of Assesment:</label>
                                                <input type="date" name="date_of_asessment" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label for="">occupational</label>
                                                <input type="text" name="occupational" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="">diagnosis</label>
                                                <input type="text" name="diagnosis" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-sm-6">
                                                <label for="">O.T NO</label>
                                                <input type="number" name="ot_no" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="">Assesed By</label>
                                                <input type="text" name="adressed_by" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-sm-6">
                                                <label for="">Refferred by/from</label>
                                                <input type="text" name="referred_by" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="">signature</label>
                                                <input type="text" name="signature" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>2.main complaint</label>
                                            <input type="text" name="main_complaint"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>3.PERSONAL SOCIAL HISTORY</label>
                                            <input type="text" name="personal_history"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <H4>4.BRIEF MEDICAL HISTORY</H4>
                                        <div class="form-group">
                                            <label>i)History for current condition or illness</label>
                                            <input type="text" name="history"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>ii)relevant past medical/surgical History</label>
                                            <input type="text" name="relevant"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <H4>4.WORK/EMPLOYMENT/OCCUPATIONAL HISTORY</H4>
                                        <div class="form-group">
                                            <label>i)What does your occupational entail?</label>
                                            <input type="text" name="occupational_entail"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>ii)What activities give you/the child a sense of purpose in life? </label>
                                            <input type="text" name="activities"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>iii)Describe you're childs typical/normal day </label>
                                            <input type="text" name="typical_day"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>iv)How do you/child spend leisure time </label>
                                            <input type="text" name="leisure_time"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>v)What are your priorities in life </label>
                                            <input type="text" name="priorities_in_life"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>vi)How does youre impairment prevent you/child from doing what youre interested in? </label>
                                            <input type="text" name="impairement_prevent"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label><h4>6.ii)Occupational Performanece Components (describe any deficit noted)</h4>
                                                <p>Interpersonal skills</p><br>
                                                <p>Communicational Interactional skills' (non-verbal skils,conversation,vocal expression,relationships)</p>
                                            </label>
                                            <input type="text" name="communicational_skills"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label><h4>Cognitive ability</h4> <p>planning</p></label>
                                            <input type="text" name="planning"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>memory </label>
                                            <input type="text" name="memory"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>organization </label>
                                            <input type="text" name="organization"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>problem-solving </label>
                                            <input type="text" name="problem_solving"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Sensory processing </label>
                                            <input type="text" name="sensory_processing"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label><h4>physical ability</h4> <p>Describe clients Muscle tone,</p></label>
                                            <input type="text" name="physical_ability"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Describe clients posture, </label>
                                            <input type="text" name="clients_posture"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Describe clients mobility(PROM,General mobility), </label>
                                            <input type="text" name="clients_mobility"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Describe any co-ordination deficits observed, </label>
                                            <input type="text" name="co_ordination"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Describe clients muscle strength, </label>
                                            <input type="text" name="clients_muscle"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label><h4>iii)Physical Environment(Home/Work?Place of study)</h4>
                                                <p>which facilities are available for ADLs</p><br>

                                            </label>
                                            <input type="text" name="adls"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Describe the barriers hindering accessibility at Home/work environment. </label>
                                            <input type="text" name="barriers"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Which assistive devices does the client need </label>
                                            <input type="text" name="assistive_devices"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Describe the social support available to the client(family dynamics,friends,neighbours,peers,work colleagues,expectations and invilvement.) </label>
                                            <input type="text" name="social_support"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label><h4>iv)Activities of Daily Living (describe difficulties of deficits noted)</h4>
                                                <p>feeding and eating skills</p><br>

                                            </label>
                                            <input type="text" name="eating_skills"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Dressing skills </label>
                                            <input type="text" name="dressing_skils"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Hygiene skills </label>
                                            <input type="text" name="hygiene_skills"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Domestic living </label>
                                            <input type="text" name="domestic_living"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Communication skills </label>
                                            <input type="text" name="comm_skills"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>other </label>
                                            <input type="text" name="other"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label><h4>v)Educational & work Activities(describe difficulties or deficits noted)</h4>
                                                <p>Fine motor /visual motor</p><br>

                                            </label>
                                            <input type="text" name="fine_motor"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Handwriting ,Computer use</label>
                                            <input type="text" name="handwriting"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Gross motor skills</label>
                                            <input type="text" name="gross_motor"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>socializational skills</label>
                                            <input type="text" name="socializing_skills"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>pre-vocational tasks</label>
                                            <input type="text" name="pre_vocational"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>other</label>
                                            <input type="text" name="others"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label><h4>v)play and leisure</h4></label>
                                            <input type="text" name="play_leisure"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group ">
                                            <label><h4>7)IDENTIFIED NEED FOR OCCUPATIONAL THERAPPY</h4></label><br>
                                            <input type="CHECKBOX" name="no_clear" value="No clear need for OT-no occupational needs identified"> No clear need for OT-no occupational needs identified<br>
                                            <input type="CHECKBOX" name="intevention" value="Intervention to support wellness and/or prevent dysfunction">Intervention to support wellness and/or prevent dysfunction<br>
                                            <input type="CHECKBOX" name="needforot" value="Need for OT intervention to restore /improve function"> Need for OT intervention to restore /improve functon<br>
                                            <input type="CHECKBOX" name="need_extensive" value="Need for extensive OT intervention to improve function">Need for extensive OT intervention to improve function<br>
                                            <input type="CHECKBOX" name="referral" value="Refferal to follow-up services also recommemnded"> Refferal to follow-up services also recommemnded <br>

                                            <div class="form-group">
                                                <label>
                                                    <h4>8)OCCUPATIONAL THERAPY ISSUES IDENTIFIED</h4>
                                                </label>
                                                <input type="text" name="ot_issues"   class="form-control"  aria-describedby="" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label><h4>v)INTERVENTION PLAN DRAWN(in collaboration with client)</h4>


                                                </label>
                                                <input type="text" name="intervention_plan"   class="form-control"  aria-describedby="" placeholder="">
                                            </div>
                                        </div>
                                        <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                        <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                        <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection