@extends('layouts.master')

@section('content')

<div class="card">
  <div class="card-header">
    <h4>moh511</h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="datatable" class="table table-bordered">
        <thead>
        <tr>
          <td>DATE</td>
          <td>CWC NO</td>
          <td>REVISIT</td>
          <td>FULL NAMES</td>
          <td>AGE</td>
          <td>SEX</td>
          <td>SUB LOCATION</td>
          <td>VILLAGE</td>
          <td>ADDRESS</td>
          <td>WEIGHT</td>
          <td>UNDERWEIGHT</td>
          <td>DANGER SIGNS</td>
          <td>NET ISSUED</td>
          <td>TYPE OF FOLLOWUP</td>
          <td>REFERRAL</td>
          <td>REMARKS</td>

        </tr>
        </thead>
        <tbody>
        @if(isset($show_moh_511_page))
          @foreach($show_moh_511_page as $show_moh_511_page)
            <tr>
              <td>{{ $show_moh_511_page->date}}</td>
              <td>{{ $show_moh_511_page->cwc_no}}</td>
              <td>{{ $show_moh_511_page->revisit}}</td>
              <td>{{ $show_moh_511_page->full_names}}</td>
              <td>{{ $show_moh_511_page->age}}</td>
              <td>{{ $show_moh_511_page->sex}}</td>
              <td>{{ $show_moh_511_page->sub_location}}</td>
              <td>{{ $show_moh_511_page->village}}</td>
              <td>{{ $show_moh_511_page->address}}</td>
              <td>{{ $show_moh_511_page->weight}}</td>
              <td>{{ $show_moh_511_page->underweight}}</td>
              <td>{{ $show_moh_511_page->danger_signs}}</td>
              <td>{{ $show_moh_511_page->net_issued}}</td>
              <td>{{ $show_moh_511_page->type_of_follow_up}}</td>
              <td>{{ $show_moh_511_page->referral}}</td>
              <td>{{ $show_moh_511_page->remarks}}</td>
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
          <h4 class="modal-title">Add records</h4>
        </div>
        <div class="modal-body">

          <div class="col-md-12">
            <div class="card">
              <div class="container">

                <div class="row page-titles">
                  <div class="col-md-12 align-self-center text-center">
                    <h4 class="theme-cl">PUBLIC HEALTH MOH511</h4>
                  </div>
                </div>

                <div class="col-m-3 offset-md-2">
                  <H3 class="mt-20 ">
                    PUBLIC HEALTH
                  </H3>
                  <form action="{{ route('cwc_moh_511_post') }}" method="post" >
                    {!! csrf_field() !!}
                    <table class="table table-bordered">
                      <thead>
                      <tr>
                        <p>MOH 511 CHILD WELFARE CLINIC (CWC) REGISTER STEP BY STEP FILLING IN THE REGISTER GUIDELINES FOR THE HEALTH PROVIDERS<P>
                        <p>The register is used at the MCH for clients/children less than 5 years (0-59 Months) who attend Child Welfare Clinic (CWC). This register is kept SEPARATE from Permanent EPI register<p>
                      </tr>
                      <tr class="color background-color:black">
                        <th scope="col">COLUMN</th>
                        <th scope="col">DATA</th>
                        <th scope="col">DEFINITIONS/EXPLANATIONS</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>A</td>
                        <td>DATE</td>
                        <td><input type="date" name="date" class="form-control" placeholder=""></td>
                      </tr>
                      <tr>
                        <td>B</td>
                        <td>CWC NO</td>
                        <td><input type="text" name="cwc_no" class="form-control" placeholder=""></td>
                      </tr>
                      <tr>
                        <td>C</td>
                        <td>RE-VISIT</td>
                        <td><input type="text" name="revisit" class="form-control" placeholder=""></td>
                      </tr>
                      <tr>
                        <td>D</td>
                        <td>FULL NAMES</td>
                        <td><input type="name" name="full_names" class="form-control" placeholder=""></td>
                      </tr>
                      <tr>
                        <td>E</td>
                        <td>AGE</td>
                        <td><input type="number" name="age" class="form-control" placeholder=""></td>
                      </tr>
                      <tr>
                        <td>F</td>
                        <td>SEX</td>
                        <td><input type="text" name="sex" class="form-control" placeholder=""></td>
                      </tr>
                      <tr>
                        <td>G</td>
                        <td>SUB LOCATION</td>
                        <td><input type="text" name="sub_location" class="form-control" placeholder=""></td>
                      </tr>
                      <tr>
                        <td>H</td>
                        <td>VILLAGE/ESTATE</td>
                        <td><input type="text" name="village" class="form-control" placeholder=""></td>
                      </tr>
                      <tr>
                        <td>I</td>
                        <td>ADRDRESS</td>
                        <td><input type="text" name="address" class="form-control" placeholder=""></td>
                      </tr>
                      <tr>
                        <td>J</td>
                        <td>WEIGHT IN KG</td>
                        <td><input type="number" name="weight" class="form-control" placeholder=""></td>
                      </tr>
                      <tr>
                        <td>K</td>
                        <td>UW<br>Y = UNDERWEIGHT,N = NOT UNDERWEIGHT</td>
                        <td><input type="text" name="underweight" class="form-control" placeholder=""></td>
                      </tr>
                      <tr>
                        <td>L</td>
                        <td>ANY DANGER SIGNS THIS VISIT</td>
                        <td><input type="text" name="danger_signs" class="form-control" placeholder=""></td>
                      </tr>
                      <tr>
                        <td>M</td>
                        <td>ISSUED WITH A NET THIS VISIT?<br>Y = GIVEN DURING THAT PARTICULAR VISIT<br>N = IF NOT GIVEN AT THIS VISIT</td>
                        <td><input type="text" name="net_issued" class="form-control" placeholder=""></td>
                      </tr>
                      <tr>
                        <td>N</td>
                        <td>TYPE OF FOLLOW-UP</td>
                        <td><input type="text" name="type_of_follow_up" class="form-control" placeholder=""></td>
                      </tr>
                      <tr>
                        <td>O</td>
                        <td>REFERRAL</td>
                        <td><input type="text" name="referral" class="form-control" placeholder=""></td>
                      </tr>
                      <tr>
                        <td>P</td>
                        <td>REMARKS</td>
                        <td><input type="text" name="remarks" class="form-control" placeholder=""></td>
                      </tr>
                      </tbody>
                    </table>
                    <input type="submit" class="btn btn-info" value="Save">

                  </form>
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
@endsection