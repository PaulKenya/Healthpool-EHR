@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
     
<div class="container">
  <div class="container">
    <p class="text-center">REPUBLIC OF KENYA - MINISTRY OF HEALTH</p>
    <p class="text-center">MONTHLY WORKLOAD REPORT FOR HOSPITALS</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="form-group row col-md-6">
        <label for="date" class="col-sm-4 col-form-label">DISTRICT</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="exampleFormControlInput1" ">
        </div>  
      </div>
      <div class="form-group row col-md-6">
        <label for="date" class="col-sm-4 col-form-label">HEALTH FACILITY </label>
        <div class="col-sm-8">
          <input type="email" class="form-control" id="exampleFormControlInput1" ">
        </div>  
      </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="form-group row col-md-4">
        <label for="date" class="col-sm-4 col-form-label">MONTH</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="exampleFormControlInput1" ">
        </div>  
      </div>
      <div class="form-group row col-md-4">
        <label for="date" class="col-sm-4 col-form-label">YEAR</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="exampleFormControlInput1" ">
        </div>  
      </div>
      <div class="form-group row col-md-4">
        <label for="date" class="col-sm-4 col-form-label">FACILITY CODE</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="exampleFormControlInput1" ">
        </div>  
      </div>
    </div>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="5">A. OUTPATIENT SERVICES</th>
      </tr>
    </thead>
    <thead>
      <tr>
        <th colspan="2">A.1 GENERAL OUTPATIENTS(FILTER CLINICS)</th>
        <th>NEW</th>
        <th>RE-ATT</th>
        <th>TOTAL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">A.1.1</td>
        <td>Over 5 Years - Male</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">A.1.2</td>
        <td>Over 5 Years - Male</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">A.1.3</td>
        <td>Children Under 5 Years - Male</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">A.1.4</td>
        <td>Children Under 5 Years - Female</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
        <th scope="row">A.1.4</th>
        <th>TOTAL GENERAL OUTPATIENTS</th>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
    </tbody>
    <thead>
      <tr>
        <th colspan="2">A.2 CASUALTY</th>
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
    </thead>
    <thead>
      <tr>
        <th colspan="5">A.3 SPECIAL CLINICS(If recommended separately from General Filter Clinics)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">A.3.1</td>
        <td>E.N.T Clinic</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td></td>
      </tr>
      <tr>
        <td scope="row">A.3.2</td>
        <td>Eye Clinic</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">A.3.3</td>
        <td>TB and Leprosy</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">A.3.4</td>
        <td>Sexually Transmitted Infections</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">A.3.5</td>
        <td>Psychiatry</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">A.3.6</td>
        <td>Orthropeadic Clinic</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">A.3.7</td>
        <td>All other Special Clinics(Medicine, Peadietrics,Surgery etc.)</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <th scope="row">A.3.8</th>
        <th>TOTAL SPECIAL CLINICS</th>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
    </tbody>
    <thead>
      <tr>
        <th colspan="5">A.4 MCH/FP CLIENTS</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">A.4.1</td>
        <td>CWC Attendances</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">A.4.2</td>
        <td>ANC Attendances</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">A.4.3</td>
        <td>PNC Attendances</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">A.4.4</td>
        <td>FD Attendances</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <th scope="row">A.4.5</th>
        <th>TOTAL MCH/FP</th>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
    </tbody>
    <thead>
      <tr>
        <th colspan="5">A.5 DENTAL CLINIC</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">A.5.1</td>
        <td>Attendances (Excluding Fillings and Extraction)</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">A.5.2</td>
        <td>Fillings</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">A.5.3</td>
        <td>Extractions</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <th scope="row">A.5.4</th>
        <th>TOTAL DENTAL SERVICES</th>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
    </tbody>
    <thead>
      <tr>
        <th scope="row">A.6</th>
        <th>TOTAL OUTPATIENT SERVICES (=A.1.5+A.2+A.3.8+A.5.4)</th>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th colspan="2">A.7 MEDICAL EXAMINATION(except P3)</th>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <th>A.10 INJECTIONS</th>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
       <th colspan="2">A.8 MEDICAL REPORT(incl. P3,Compensation,Insurace)</th>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <th>A.11 STITCHING</th>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
       <th colspan="2">A.9 DRESSINGS</th>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <th>A.12 P.O.P</th>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
    </tbody>
  </table>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="7">B. IN-PATIENT SERVICES</th>
      </tr>
    </thead>
    <thead>
      <tr>
        <th colspan="2">B.1 INPATIENTS</th>
        <th>GENERAL ADULTS</th>
        <th>PAEDIETRICS</th>
        <th>MATERNITY (Mothers only)</th>
        <th>AMENITY</th>
        <th>TOTAL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">B.1.1</td>
        <td>Discharges</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">B.1.2</td>
        <td>Deaths</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">B.1.3</td>
        <td>Absconders</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <th scope="row">B.1.4</th>
        <th>TOTAL DISCHARGES, DEATHS etc.</th>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">B.1.9</td>
        <td>Admissions</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">B.1.10</td>
        <td>Paroles</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">B.1.11</td>
        <td>Occupied Bed Days - NHIF Members</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">B.1.11a</td>
        <td>Occupied Bed Days - non-NHIF Members</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">B.1.12</td>
        <td>Well Persons Days</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">B.1.5</td>
        <td>Beds - Authorized</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">B.1.6</td>
        <td>Beds - Actual Physical</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">B.1.7</td>
        <td>Cots - Authorised</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">B.1.8</td>
        <td>Cots - Actual Physical</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
    </tbody>
  </table>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="2">B.2 METERNITY SERVICES</th>
        <th>Number</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">B.2.1</td>
        <td>Vaginal Delivery (includes minimal and assisted delivery)</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">B.2.2</td>
        <td>Caesarian Sections</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">B.2.3</td>
        <td>Fresh Still Birth</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">B.2.4</td>
        <td>Macerate Still Birth</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
    </tbody>
  </table>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="2">B.3 OPERATIONS</th>
        <th>Number</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">B.3.1</td>
        <td>Minor Surgeries</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">B.3.2</td>
        <td>Circumcision</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">B.3.3</td>
        <td>Major Surgeries</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
    </tbody>
  </table>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="8">C. SPECIAL SERVICES (include both inpatients and outpatients)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">C.1</td>
        <td>Laboratory- Number of Tests</td>
        <td>Routine</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>Special</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>Total</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">C.2</td>
        <td rowspan="2"> X-Ray- Number of Examinations</td>
        <td>Plain without Enhancement</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>Enhancement with contrast media</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>Ultrasound</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
        <td scope="row"></td>
        <td>Special with Magnetic Process (MRI, CT Scan)</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>Total raidological Examination</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">C.3</td>
        <td>Physiotherapy- Number of treatments</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>Non-Private</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>Total</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">C.4</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>Private</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>Non-Private</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>Total</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">C.5</td>
        <td>Orthorpeadic Technology- No. of ITEMS e.g. a pair of crutches, Prosthesis etc. count as one item</td>
        <td>Private</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>Non-Private</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>Total</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
    </tbody>
  </table>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="4">D. PHARMACY- No. of Prescriptions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">D.1</td>
        <td>Common Drugs</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">D.2</td>
        <td>Antibiotics</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">D.3</td>
        <td>Special Drugs</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">D.4</td>
        <td>For Children</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
    </tbody>
  </table>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="2">E. MORTUARY</th>
        <th>Number</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">E.1</td>
        <td>Body Days</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">E.2</td>
        <td>Embaiment</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">E.3</td>
        <td>Post-Mortem</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">E.4</td>
        <td>Unclaimed body days</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
    </tbody>
  </table>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="2">F. MEDICAL RECORDS ISSUED</th>
        <th>Number</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">F.1</td>
        <td>New Flies</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <td scope="row">F.2</td>
        <td>Outpatient Records</td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
    </tbody>
  </table>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th></th>
        <th>Name</th>
        <th>Designation</th>
        <th>Signature</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Prepared by:</th>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <th>Checked by:</th>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
      <tr>
        <th>Entered by:</th>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
        <td>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </td>
      </tr>
    </tbody>
</div>   




        
    </div>
</div> 
@endsection