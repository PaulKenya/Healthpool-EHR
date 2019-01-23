@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        
<div>
  <div class="container">
    <p class="text-center">REPUBLIC OF KENYA - MINISTRY OF HEALTH, DIVISION OF VACCINE AND IMMUNIZATION </p>
    <p class="text-center">MATERNITY REGISTER</p>
  </div>
  <div class="container table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Date</th>
          <th>A</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>No. of anc visits</th>
          <th>B</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>In-patient no</th>
          <th>C</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Full Names</th>
          <th>D</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Age</th>
          <th>E</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>MArital status(1=m; 2=w; 3=d; 4=s; 5=se</th>
          <th>F</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Sub Location</th>
          <th>G</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Village/estate</th>
          <th>H</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Parity</th>
          <th>I</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Gravidae</th>
          <th>J</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>LMP</th>
          <th>K</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>EDD</th>
          <th>L</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Gestation at Birth</th>
          <th>M</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Diagnosis</th>
          <th>N</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Date of Delivery</th>
          <th>O</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Time of Delivery</th>
          <th>P</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Duration from onset of Labour</th>
          <th>Q</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Mode of Delivery</th>
          <th>R</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>APGAR</th>
          <th>S</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>If baby dead: 1=FSB; 2=MSB</th>
          <th>T</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Baby weight(grams)</th>
          <th>U</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Sex of Baby</th>
          <th>V</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Mother's conditions after delivery</th>
          <th>W</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Blood Loss (in mls)</th>
          <th>X</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Placenta Complete(1=yes; 2=no)</th>
          <th>Y</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Counselled and Tested HIV ANC Y/N</th>
          <th>Z</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Counselled and Tested HIV MAT Y/N</th>
          <th>AA</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>HIV Status(1=+ve; 2=ve)</th>
          <th>AB</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Patners(1=counselled; 2=Tested; 3=Referred) for</th>
          <th>AC</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Patner Status(1=+ve; 2=-ve)</th>
          <th>AD</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>VDRL Serology Results (+ve/-ve)</th>
          <th>AE</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>ARV Drug given (Mother) Y/N</th>
          <th>AF</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>ARV Prophylaxis given(Baby) Y/N</th>
          <th>AG</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>VIT A supplimentation to mother Y/N</th>
          <th>AH</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Food Options (1=Exclusive; 2=Formulae)</th>
          <th>AI</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Delivery conducted by (Name)</th>
          <th>AJ</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Birth Notification Number</th>
          <th>AK</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Date of Discharge</th>
          <th>AL</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Condition of baby on discharge (A/D)</th>
          <th>AM</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <th>Comments</th>
          <th>AN</th>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="container table-responsive">
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
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. with PPH:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. with Eclampsia:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. with Ruptured Uterus:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. with Obstructed Labour:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. with Sepsis:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="container table-responsive">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td>No. of Normal Deliveries:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. of Caesarean Sections:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. of Breech Deliveries:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. of Assisted Vaginal Deliveries:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>Total Live Births</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. of Still Births:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. of Underweight Babies:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. of Pre-term Babies:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. of Babies discharged alive:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>Referrals:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. of Neonatal Deaths (NND):</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. of Maternal Deaths:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. counselled of HIV:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. Tested of HIV:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. of HIV +ve:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. issued with preventive ARVs:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. of Infants Nevirapine administered:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. of Deliveries from HIV+ women:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. initiated cotrimoxaxole (women):</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. of Underweight Babies:</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. initiated cotrimoxaxole (infants):</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. HIV+ referred for follow-up (mothers):</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
        <tr>
          <td>No. HIV+ referred for folow-up (Patners):</td>
          <td>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>



        
    </div>
</div> 
@endsection