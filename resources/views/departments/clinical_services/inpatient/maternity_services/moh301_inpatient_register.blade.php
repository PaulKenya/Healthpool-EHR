@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="container-fluid">
        <h1 class="text-center">MOH 301 IN-PATIENT REGISTER</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Date of Admission</th>
                    <th>In-patient No.</th>
                    <th>Full Names</th>
                    <th>Age in Years</th>
                    <th>Sex</th>
                    <th>Sub Location</th>
                    <th>Village/Estate</th>
                    <th>Address</th>
                    <th>HIV-(1=Counselled),(2=Tested)</th>
                    <th>HIV(Pos/Neg)</th>
                    <th>3=Nutrition education<br>4=Nutrition supplements</th>
                    <th>Diagnosis</th>
                    <th>Treatment/Prescription number</th>
                    <th>Date of Discharge</th>
                    <th>Outcome(A=Alive D=Dead)</th>
                    <th>Referral</th>
                    <th>Remarks</th>
                </tr>
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
                    <th>K</th>
                    <th>L</th>
                    <th>M</th>
                    <th>N</th>
                    <th>O</th>
                    <th>P</th>
                    <th>Q</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="number" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <input type="number" class="form-control">
                    </td>
                    <td>
                        <select class="custom-select">
                            <option selected>Sex...</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <select class="custom-select">
                            <option selected></option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </td>
                    <td>
                        <select class="custom-select">
                            <option selected></option>
                            <option>Positive</option>
                            <option>Negative</option>
                        </select>
                    </td>
                    <td>
                        <select class="custom-select">
                            <option selected></option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <select class="custom-select">
                            <option selected></option>
                            <option>A</option>
                            <option>D</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <br>
        <p class="font-weight-bold">The register is for all patients to be admitted to the hospital/hospitalized for treatment care regardless of age</p>
    </div>  




        
    </div>
</div> 
@endsection