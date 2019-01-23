<div class="card"> 
        <div class="card-header">
            <h4>BTU</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>PROVINCE</th>
                        <th>DISTRICT</th>
                        <th>CONSTITUENCY</th>
                        <th>FACILITY NAME</th>
                        <th>AGENCY</th>
                        <th>MONTH</th>
                        <th>YEAR</th>
                        <th>ANTIGEN FACILITY TOTALS</th>
                        <th>SUBMISSION DATES OF SUMMARY FORMS</th>
                        <th>BY</th>
                        <th>DESIGNATION</th>
                        <th>SIGNATURE</th>
                        <th>RECEIVED BY</th>
                        <th>DESIGNATION</th>
                        <th>SIGNATURE</th>
                        <th>DATE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
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
                        <h4 class="modal-title">Add cheque record</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="container">
                                    <h2 class="text-center">REQUEST FOR BLOOD GROUPING AND TRANSFUSION</h2>
                                    <p class="text-center">"Matched" blood will not be available until 24 hrs after receipt of specimen.</p>
                                    <p class="text-center">Patient's blood (5ml. clotted) in a labelled bottle must accompany this form.</p>

                                    <b><p>PART A- <i>To be completed by doctor in charge of case.</i></p></b>
                                    <div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">PASTNATAL REGISTER</h4>
    </div>
</div>
<div class="col-md-12">
    <div class="card">
      <div>
  <div class="container">
    <p class="text-center">REPUBLIC OF KENYA - MINISTRY OF HEALTH</p>
    <p class="text-center">MOH 406 POSTNATAL REGISTER</p>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Date</th>
          <th>PNC No.</th>
          <th>In-Patient No./Ref.No.</th>
          <th>Full Names</th>
          <th>Age</th>
          <th>Level of Education</th>
          <th>Sub Location</th>
          <th>Village/Estate</th>
          <th>Date of Delivery</th>
          <th>Place of Delivery</th>
          <th>State of Baby</th>
          <th>Temparature</th>
          <th>Pulse</th>
          <th>BP</th>
          <th>Palor:(Mild=1 Moderate=2 Severe=3) and HB</th>
          <th>Breast Exam: (1= Normal; 2=Cracked; 3=Engorged; 4=Mastitis; 5=Abscess)</th>
          <th>Uterus:(1=Normal; 2=-Tender; 3=Sub-involuted)</th>
          <th>PPH Y/N</th>
          <th>C/S site: 1=Normal; 2=Bleeding; 3=Infected</th>
          <th>Lochia: 1=Normal; 2=Foul smelling; 3=Excessive</th>
          <th>Episiotomy/tear: 1=Healed; 2=Repaired; 3=Gaping; 4=Infected</th>
          <th>HIV status: (1=+ve; 2=-ve)</th>
          <th>Diagnosis</th>
          <th>Mothers 1=Counselled; 2=Tested; 3=Recieved results; 4=HIV+; 5=follow-up</th>
          <th>Counselled on Neonatal care (Y/N)</th>
          <th>Counselled on FP (Y/N)</th>
          <th>On ARVs (Y/N)</th>
          <th>Cotrimoxazole/Septrin Prophylaxis (Y/N)</th>
          <th>Screened for Cancer of the Cervis: (Y/N)</th>
          <th>Other Condition</th>
          <th>Remarks</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>A</th>
          <th>B</th>
          <th>C</th>
          <th>D</th>
          <th>E</th>
          <th>F</th>
          <th>G</th>
          <th>H</th>
          <th>I</th>
          <th>J</th>
          <th>L</th>
          <th>M</th>
          <th>N</th>
          <th>O</th>
          <th>P</th>
          <th>Q</th>
          <th>R</th>
          <th>S</th>
          <th>T</th>
          <th>U</th>
          <th>V</th>
          <th>W</th>
          <th>X</th>
          <th>Y</th>
          <th>Z</th>
          <th>AA</th>
          <th>AB</th>
          <th>AC</th>
          <th>AE</th>
          <th>AF</th>
          <th>AG</th>
        </tr>
        <tr>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
        </tr>
        <tr>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
        </tr>
        <tr>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
        </tr>
        <tr>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
          <th>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </th>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="4">Total attendances:
              <div class="col-sm-8">
                <input type="Number" class="form-control" id="exampleFormControlInput1" ">
              </div>
            </th>
            <th>Total Number Counselled:
              <div class="col-sm-8">
                <input type="Number" class="form-control" id="exampleFormControlInput1" ">
              </div>
            </th> 
            <th>Total No. on ARVs:
              <div class="col-sm-8">
                <input type="Number" class="form-control" id="exampleFormControlInput1" ">
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </th>
            <th>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </th>
            <th>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </th>
            <th>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </th>
            <th>Total HIV +ve:
              <div class="col-sm-8">
                <input type="Number" class="form-control" id="exampleFormControlInput1" ">
              </div>
            </th>
            <th>Mothers:
              <div class="col-sm-8">
                <input type="Number" class="form-control" id="exampleFormControlInput1" ">
              </div>
            </th>
          </tr>
          <tr>
            <th>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </th>
            <th>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </th>
            <th>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </th>
            <th>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </th>
            <th></th>
            <th>Infants:
              <div class="col-sm-8">
                <input type="Number" class="form-control" id="exampleFormControlInput1" ">
              </div>
            </th>
          </tr>
        </tbody> 
      </table>
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
                </div>
            </div>
        </div>
    </div>