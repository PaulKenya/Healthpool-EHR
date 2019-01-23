@extends('layouts.master')

@section('content')
  <div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
      <h4 class="theme-cl">MOH 303</h4>
    </div>
  </div>
  <div class="col-md-12">


    <div class="card">
      <div class="card-header">
        <h4> Records</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="datatable" class="table table-bordered">
            <thead>
            <tr>
              <th>DATE</th>
              <th>ANC VISITS</th>
              <th>INPATIENT NUMBER</th>
              <th>FULL NAMES</th>
              <th>AGE</th>
              <th>MARITAL STATUS</th>
              <th>SUB LOCATION</th>
              <th>VILLAGE</th>
              <th>PARITY</th>
              <th>GRAVIDAE</th>
              <th>LMP</th>
              <th>EDD</th>
              <th>GESTATION AT BIRTH</th>
              <th>DIAGNOSIS</th>
              <th>DATE OF DELIVERY</th>
              <th>TIME OF DELIVERY</th>
              <th>DURATION FROM ONSET OF LABOUR</th>
              <th>MODE OF DELIVERY</th>
              <th>APGAR</th>
              <th>BABY LIFE</th>
              <th>BABY WEIGHT</th>
              <th>SEX OF BABY</th>
              <th>MOTHERS CONDITION AFTER DELIVERY</th>
              <th>BLOOD LOSS</th>
              <th>PLACENTA COMPLETE</th>
              <th>COUNSELLED AND TESTED ANC</th>
              <th>COUNSELLED AND TESTED MAT</th>
              <th>HIV STATUS</th>
              <th>PARTNERS FOR</th>
              <th>PARTNER STATUS</th>
              <th>VDLR SEROLOGY STATUS</th>
              <th>ARV DRUG GIVEN MOTHER</th>
              <th>ARV DRUG GIVEN BABY</th>
              <th>VITAMIN A SUPPLEMENTATION MOTHER</th>
              <th>FOOD OPTIONS BABY</th>
              <th>DELIVERY CONDUCTED BY</th>
              <th>BIRTH NOTIFICATION</th>
              <th>DATE OF DISCHARGE</th>
              <th>CONDITION OF BABY DISCHARGE</th>
              <th>COMMENTS</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($moh333_results))
              @foreach($moh333_results as $moh333_result)
                <tr>
                  <td>{{ $moh333_result->date }}</td>
                  <td>{{ $moh333_result->anc_visits }}</td>
                  <td>{{ $moh333_result->inpatient_no }}</td>
                  <td>{{ $moh333_result->full_names }}</td>
                  <td>{{ $moh333_result->age }}</td>
                  <td>{{ $moh333_result->marital_status }}</td>
                  <td>{{ $moh333_result->sub_location }}</td>
                  <td>{{ $moh333_result->village }}</td>
                  <td>{{ $moh333_result->parity }}</td>
                  <td>{{ $moh333_result->gravidae }}</td>
                  <td>{{ $moh333_result->lmp }}</td>
                  <td>{{ $moh333_result->edd }}</td>
                  <td>{{ $moh333_result->gestation_at_birth }}</td>
                  <td>{{ $moh333_result->diagnosis }}</td>
                  <td>{{ $moh333_result->date_of_delivery }}</td>
                  <td>{{ $moh333_result->time_of_delivery }}</td>
                  <td>{{ $moh333_result->duration_from_onset_of_labor }}</td>
                  <td>{{ $moh333_result->mode_of_delivery }}</td>
                  <td>{{ $moh333_result->apgar }}</td>
                  <td>{{ $moh333_result->baby_life }}</td>
                  <td>{{ $moh333_result->baby_weight }}</td>
                  <td>{{$moh333_result->sex_of_baby}}</td>
                  <td>{{$moh333_result->mothers_condition_after_delivery}}</td>
                  <td>{{$moh333_result->blood_loss}}</td>
                  <td>{{$moh333_result->placenta_complete}}</td>
                  <td>{{$moh333_result->counseled_and_tested_anc}}</td>
                  <td>{{$moh333_result->counseled_and_tested_mat}}</td>
                  <td>{{$moh333_result->hiv_status}}</td>
                  <td>{{$moh333_result->partners_for}}</td>
                  <td>{{$moh333_result->partner_status}}</td>
                  <td>{{$moh333_result->vdlr_serology_status}}</td>
                  <td>{{$moh333_result->arv_drud_given_mother}}</td>
                  <td>{{$moh333_result->arv_drud_given_baby}}</td>
                  <td>{{$moh333_result->vit_a_supplementation_mother}}</td>
                  <td>{{$moh333_result->food_options_baby}}</td>
                  <td>{{$moh333_result->delivery_conducted_by}}</td>
                  <td>{{$moh333_result->birth_notification}}</td>
                  <td>{{$moh333_result->date_of_discharge}}</td>
                  <td>{{$moh333_result->condition_of_baby_discharge}}</td>
                  <td>{{$moh333_result->comments}}</td>
                </tr>
              @endforeach
            @endif
            </tbody>
          </table>
        </div>
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
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Record</h4>
          </div>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="card">
              <div>
                <div class="container">
                  <p class="text-center">REPUBLIC OF KENYA - MINISTRY OF HEALTH, DIVISION OF VACCINE AND IMMUNIZATION </p>
                  <p class="text-center">MATERNITY REGISTER</p>
                </div>
                <form action="{{route('moh333_post')}}" method="post" >{!! csrf_field() !!}
                  <input type="hidden" name="department" value="default">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th>Date</th>
                      <th>A</th>
                      <td>
                        <input name="date" type="date" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <th>No. of anc visits</th>
                      <th>B</th>
                      <td>
                        <input name="anc_visits" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>In-patient no</th>
                      <th>C</th>
                      <td>
                        <input name="inpatient_no" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Full Names</th>
                      <th>D</th>
                      <td>
                        <input name="full_names" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Age</th>
                      <th>E</th>
                      <td>
                        <input name="age" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Marital status(1=m; 2=w; 3=d; 4=s; 5=se</th>
                      <th>F</th>
                      <td>
                        <input name="marital_status" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Sub Location</th>
                      <th>G</th>
                      <td>
                        <input name="sub_location" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Village/estate</th>
                      <th>H</th>
                      <td>
                        <input name="village" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Parity</th>
                      <th>I</th>
                      <td>
                        <input name="parity" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Gravidae</th>
                      <th>J</th>
                      <td>
                        <input name="gravidae" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>LMP</th>
                      <th>K</th>
                      <td>
                        <input name="lmp" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>EDD</th>
                      <th>L</th>
                      <td>
                        <input name="edd" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Gestation at Birth</th>
                      <th>M</th>
                      <td>
                        <input name="gestation_at_birth" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Diagnosis</th>
                      <th>N</th>
                      <td>
                        <input name="diagnosis" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Date of Delivery</th>
                      <th>O</th>
                      <td>
                        <input name="date_of_delivery" type="date" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Time of Delivery</th>
                      <th>P</th>
                      <td>
                        <input name="time_of_delivery" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Duration from onset of Labour</th>
                      <th>Q</th>
                      <td>
                        <input type="text" name="duration_from_onset_of_labor" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Mode of Delivery</th>
                      <th>R</th>
                      <td>
                        <input type="text" name="mode_of_delivery" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>APGAR</th>
                      <th>S</th>
                      <td>
                        <input type="text" name="apgar" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>If baby dead: 1=FSB; 2=MSB</th>
                      <th>T</th>
                      <td>
                        <input type="text" name="baby_life" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Baby weight(grams)</th>
                      <th>U</th>
                      <td>
                        <input type="text" name="baby_weight" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Sex of Baby</th>
                      <th>V</th>
                      <td>
                        <input type="text" name="sex_of_baby" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Mother's conditions after delivery</th>
                      <th>W</th>
                      <td>
                        <input type="text" name="mothers_condition_after_delivery" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Blood Loss (in mls)</th>
                      <th>X</th>
                      <td>
                        <input type="text" name="blood_loss" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Placenta Complete(1=yes; 2=no)</th>
                      <th>Y</th>
                      <td>
                        <input type="text" name="placenta_complete" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Counselled and Tested HIV ANC Y/N</th>
                      <th>Z</th>
                      <td>
                        <input type="text" name="counseled_and_tested_anc" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Counselled and Tested HIV MAT Y/N</th>
                      <th>AA</th>
                      <td>
                        <input type="text" name="counseled_and_tested_mat" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>HIV Status(1=+ve; 2=ve)</th>
                      <th>AB</th>
                      <td>
                        <input name="hiv_status" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Patners(1=counselled; 2=Tested; 3=Referred) for</th>
                      <th>AC</th>
                      <td>
                        <input name="partners_for" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Patner Status(1=+ve; 2=-ve)</th>
                      <th>AD</th>
                      <td>
                        <input name="partner_status" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>VDRL Serology Results (+ve/-ve)</th>
                      <th>AE</th>
                      <td>
                        <input name="vdlr_serology_status" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>ARV Drug given (Mother) Y/N</th>
                      <th>AF</th>
                      <td>
                        <input name="arv_drud_given_mother" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>ARV Prophylaxis given(Baby) Y/N</th>
                      <th>AG</th>
                      <td>
                        <input name="arv_drud_given_baby" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>VIT A supplimentation to mother Y/N</th>
                      <th>AH</th>
                      <td>
                        <input name="vit_a_supplementation_mother" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Food Options (1=Exclusive; 2=Formulae)</th>
                      <th>AI</th>
                      <td>
                        <input name="food_options_baby" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Delivery conducted by (Name)</th>
                      <th>AJ</th>
                      <td>
                        <input name="delivery_conducted_by" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Birth Notification Number</th>
                      <th>AK</th>
                      <td>
                        <input name="birth_notification" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Date of Discharge</th>
                      <th>AL</th>
                      <td>
                        <input name="date_of_discharge" type="date" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Condition of baby on discharge (A/D)</th>
                      <th>AM</th>
                      <td>
                        <input name="condition_of_baby_discharge" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <th>Comments</th>
                      <th>AN</th>
                      <td>
                        <input name="comments" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th>Diagnosis</th>
                      <th>Alive:</th>
                      <th>Deaths:</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>No. with APH:</td>
                      <td>
                        <input name="no_with_aph" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                      <td>
                        <input name="no_with_aph_dead" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. with PPH:</td>
                      <td>
                        <input name="no_with_pph" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                      <td>
                        <input name="no_with_pph_dead" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. with Eclampsia:</td>
                      <td>
                        <input name="no_with_eclampsia" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                      <td>
                        <input name="no_with_eclampsia_dead" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. with Ruptured Uterus:</td>
                      <td>
                        <input name="no_with_ruptured_uterus" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                      <td>
                        <input name="no_with_ruptured_uterus_dead" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. with Obstructed Labour:</td>
                      <td>
                        <input name="no_with_obstructed_labour" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                      <td>
                        <input name="no_with_obstructed_labour_dead" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. with Sepsis:</td>
                      <td>
                        <input name="no_with_sepsis" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                      <td>
                        <input name="no_with_sepsis_dead" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <tbody>
                    <tr>
                      <td>No. of Normal Deliveries:</td>
                      <td>
                        <input name="no_of_normal_deliveries" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. of Caesarean Sections:</td>
                      <td>
                        <input name="no_of_cesarean_sections" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. of Breech Deliveries:</td>
                      <td>
                        <input name="no_of_breech_deliveries" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. of Assisted Vaginal Deliveries:</td>
                      <td>
                        <input name="no_of_assisted_vaginal_deliveries" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>Total Live Births</td>
                      <td>
                        <input name="total_live_births" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. of Still Births:</td>
                      <td>
                        <input name="no_of_still_births" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. of Underweight Babies:</td>
                      <td>
                        <input name="no_of_underweight_babies" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. of Pre-term Babies:</td>
                      <td>
                        <input name="no_of_preterm_babies" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. of Babies discharged alive:</td>
                      <td>
                        <input name="no_of_discharged_alive" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>Referrals:</td>
                      <td>
                        <input name="no_of_referrals" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. of Neonatal Deaths (NND):</td>
                      <td>
                        <input name="no_of_neonatal_deaths" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. of Maternal Deaths:</td>
                      <td>
                        <input name="no_of_maternal_death" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. counselled of HIV:</td>
                      <td>
                        <input name="no_counselled_of_hiv" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. Tested of HIV:</td>
                      <td>
                        <input name="no_tested_with_hiv" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. of HIV +ve:</td>
                      <td>
                        <input name="no_of_hiv" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. issued with preventive ARVs:</td>
                      <td>
                        <input name="no_issued_with_arvs" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. of Infants Nevirapine administered:</td>
                      <td>
                        <input name="no_of_infants_nevirapine" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. of Deliveries from HIV+ women:</td>
                      <td>
                        <input name="no_of_deliveries_from_hiv_women" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. initiated cotrimoxaxole (women):</td>
                      <td>
                        <input name="no_initiated_cotrimoxaxole_women" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. initiated cotrimoxaxole (infants):</td>
                      <td>
                        <input name="no_initiated_cotrimoxaxole_infants" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. HIV+ referred for follow-up (mothers):</td>
                      <td>
                        <input name="no_referred_follow_up_mothers" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
                    </tr>
                    <tr>
                      <td>No. HIV+ referred for follow-up (Patners):</td>
                      <td>
                        <input name="no_referred_follow_up_partners" type="text" class="form-control" id="exampleFormControlInput1">
                      </td>
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
      <div class="col-md-4">

        <div class="content">
          <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Records</button>
          {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
        </div>
      </div>
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Record</h4>
            </div>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
              <div class="card">
                <div>
                  <div class="container">
                    <p class="text-center">REPUBLIC OF KENYA - MINISTRY OF HEALTH, DIVISION OF VACCINE AND IMMUNIZATION </p>
                    <p class="text-center">MATERNITY REGISTER</p>
                  </div>
                  <form action="{{route('moh333_post')}}" method="post" >{!! csrf_field() !!}
                    <input type="hidden" name="department" value="default">
                    <table class="table table-bordered">
                      <thead>
                      <tr>
                        <th>Date</th>
                        <th>A</th>
                        <td>
                          <input name="date" type="date" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <th>No. of anc visits</th>
                        <th>B</th>
                        <td>
                          <input name="anc_visits" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>In-patient no</th>
                        <th>C</th>
                        <td>
                          <input name="inpatient_no" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Full Names</th>
                        <th>D</th>
                        <td>
                          <input name="full_names" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Age</th>
                        <th>E</th>
                        <td>
                          <input name="age" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Marital status(1=m; 2=w; 3=d; 4=s; 5=se</th>
                        <th>F</th>
                        <td>
                          <input name="marital_status" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Sub Location</th>
                        <th>G</th>
                        <td>
                          <input name="sub_location" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Village/estate</th>
                        <th>H</th>
                        <td>
                          <input name="village" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Parity</th>
                        <th>I</th>
                        <td>
                          <input name="parity" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Gravidae</th>
                        <th>J</th>
                        <td>
                          <input name="gravidae" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>LMP</th>
                        <th>K</th>
                        <td>
                          <input name="lmp" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>EDD</th>
                        <th>L</th>
                        <td>
                          <input name="edd" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Gestation at Birth</th>
                        <th>M</th>
                        <td>
                          <input name="gestation_at_birth" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Diagnosis</th>
                        <th>N</th>
                        <td>
                          <input name="diagnosis" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Date of Delivery</th>
                        <th>O</th>
                        <td>
                          <input name="date_of_delivery" type="date" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Time of Delivery</th>
                        <th>P</th>
                        <td>
                          <input name="time_of_delivery" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Duration from onset of Labour</th>
                        <th>Q</th>
                        <td>
                          <input type="text" name="duration_from_onset_of_labor" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Mode of Delivery</th>
                        <th>R</th>
                        <td>
                          <input type="text" name="mode_of_delivery" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>APGAR</th>
                        <th>S</th>
                        <td>
                          <input type="text" name="apgar" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>If baby dead: 1=FSB; 2=MSB</th>
                        <th>T</th>
                        <td>
                          <input type="text" name="baby_life" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Baby weight(grams)</th>
                        <th>U</th>
                        <td>
                          <input type="text" name="baby_weight" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Sex of Baby</th>
                        <th>V</th>
                        <td>
                          <input type="text" name="sex_of_baby" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Mother's conditions after delivery</th>
                        <th>W</th>
                        <td>
                          <input type="text" name="mothers_condition_after_delivery" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Blood Loss (in mls)</th>
                        <th>X</th>
                        <td>
                          <input type="text" name="blood_loss" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Placenta Complete(1=yes; 2=no)</th>
                        <th>Y</th>
                        <td>
                          <input type="text" name="placenta_complete" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Counselled and Tested HIV ANC Y/N</th>
                        <th>Z</th>
                        <td>
                          <input type="text" name="counseled_and_tested_anc" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Counselled and Tested HIV MAT Y/N</th>
                        <th>AA</th>
                        <td>
                          <input type="text" name="counseled_and_tested_mat" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>HIV Status(1=+ve; 2=ve)</th>
                        <th>AB</th>
                        <td>
                          <input name="hiv_status" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Patners(1=counselled; 2=Tested; 3=Referred) for</th>
                        <th>AC</th>
                        <td>
                          <input name="partners_for" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Patner Status(1=+ve; 2=-ve)</th>
                        <th>AD</th>
                        <td>
                          <input name="partner_status" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>VDRL Serology Results (+ve/-ve)</th>
                        <th>AE</th>
                        <td>
                          <input name="vdlr_serology_status" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>ARV Drug given (Mother) Y/N</th>
                        <th>AF</th>
                        <td>
                          <input name="arv_drud_given_mother" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>ARV Prophylaxis given(Baby) Y/N</th>
                        <th>AG</th>
                        <td>
                          <input name="arv_drud_given_baby" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>VIT A supplimentation to mother Y/N</th>
                        <th>AH</th>
                        <td>
                          <input name="vit_a_supplementation_mother" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Food Options (1=Exclusive; 2=Formulae)</th>
                        <th>AI</th>
                        <td>
                          <input name="food_options_baby" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Delivery conducted by (Name)</th>
                        <th>AJ</th>
                        <td>
                          <input name="delivery_conducted_by" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Birth Notification Number</th>
                        <th>AK</th>
                        <td>
                          <input name="birth_notification" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Date of Discharge</th>
                        <th>AL</th>
                        <td>
                          <input name="date_of_discharge" type="date" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Condition of baby on discharge (A/D)</th>
                        <th>AM</th>
                        <td>
                          <input name="condition_of_baby_discharge" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <th>Comments</th>
                        <th>AN</th>
                        <td>
                          <input name="comments" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      </tbody>
                    </table>
                    <table class="table table-bordered">
                      <thead>
                      <tr>
                        <th>Diagnosis</th>
                        <th>Alive:</th>
                        <th>Deaths:</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>No. with APH:</td>
                        <td>
                          <input name="no_with_aph" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                        <td>
                          <input name="no_with_aph_dead" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. with PPH:</td>
                        <td>
                          <input name="no_with_pph" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                        <td>
                          <input name="no_with_pph_dead" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. with Eclampsia:</td>
                        <td>
                          <input name="no_with_eclampsia" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                        <td>
                          <input name="no_with_eclampsia_dead" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. with Ruptured Uterus:</td>
                        <td>
                          <input name="no_with_ruptured_uterus" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                        <td>
                          <input name="no_with_ruptured_uterus_dead" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. with Obstructed Labour:</td>
                        <td>
                          <input name="no_with_obstructed_labour" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                        <td>
                          <input name="no_with_obstructed_labour_dead" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. with Sepsis:</td>
                        <td>
                          <input name="no_with_sepsis" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                        <td>
                          <input name="no_with_sepsis_dead" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      </tbody>
                    </table>
                    <table class="table table-bordered">
                      <tbody>
                      <tr>
                        <td>No. of Normal Deliveries:</td>
                        <td>
                          <input name="no_of_normal_deliveries" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. of Caesarean Sections:</td>
                        <td>
                          <input name="no_of_cesarean_sections" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. of Breech Deliveries:</td>
                        <td>
                          <input name="no_of_breech_deliveries" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. of Assisted Vaginal Deliveries:</td>
                        <td>
                          <input name="no_of_assisted_vaginal_deliveries" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>Total Live Births</td>
                        <td>
                          <input name="total_live_births" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. of Still Births:</td>
                        <td>
                          <input name="no_of_still_births" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. of Underweight Babies:</td>
                        <td>
                          <input name="no_of_underweight_babies" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. of Pre-term Babies:</td>
                        <td>
                          <input name="no_of_preterm_babies" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. of Babies discharged alive:</td>
                        <td>
                          <input name="no_of_discharged_alive" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>Referrals:</td>
                        <td>
                          <input name="no_of_referrals" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. of Neonatal Deaths (NND):</td>
                        <td>
                          <input name="no_of_neonatal_deaths" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. of Maternal Deaths:</td>
                        <td>
                          <input name="no_of_maternal_death" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. counselled of HIV:</td>
                        <td>
                          <input name="no_counselled_of_hiv" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. Tested of HIV:</td>
                        <td>
                          <input name="no_tested_with_hiv" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. of HIV +ve:</td>
                        <td>
                          <input name="no_of_hiv" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. issued with preventive ARVs:</td>
                        <td>
                          <input name="no_issued_with_arvs" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. of Infants Nevirapine administered:</td>
                        <td>
                          <input name="no_of_infants_nevirapine" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. of Deliveries from HIV+ women:</td>
                        <td>
                          <input name="no_of_deliveries_from_hiv_women" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. initiated cotrimoxaxole (women):</td>
                        <td>
                          <input name="no_initiated_cotrimoxaxole_women" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. initiated cotrimoxaxole (infants):</td>
                        <td>
                          <input name="no_initiated_cotrimoxaxole_infants" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. HIV+ referred for follow-up (mothers):</td>
                        <td>
                          <input name="no_referred_follow_up_mothers" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
                      </tr>
                      <tr>
                        <td>No. HIV+ referred for follow-up (Patners):</td>
                        <td>
                          <input name="no_referred_follow_up_partners" type="text" class="form-control" id="exampleFormControlInput1">
                        </td>
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
      </div>
    </div></div>
@endsection