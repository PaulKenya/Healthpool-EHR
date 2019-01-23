@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="container-fluid">
        <h1 class="text-center">IN-PATIENT TREATMENT SHEET</h1>
        <form>
            <h3>A:</h3>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label>IP No:</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>PATIENT'S NAME</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label>AGE</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label>Sex</label>
                    <select class="custom-select">
                        <option selected></option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>DOA</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>WT</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>HT</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>WARD</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>RM</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>BED</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <br>
            <h3>B: DRUG ALLERGIES</h3>
            <h6>Considerations for choice of drug and dose adjustments(Tick as appropriate: attach laboratory reports when ordering medicines)</h6>
            <div class="form-row">
                <div class="form-check col-md-2">
                    <input type="checkbox" class="form-check-control">
                    <label class="form-check-label">Renal Impairment</label>
                </div>
                <div class="form-check col-md-1">
                    <input type="checkbox" class="form-check-control">
                    <label class="form-check-label">FBC</label>
                </div>
                <div class="form-check col-md-2">
                    <input type="checkbox" class="form-check-control">
                    <label class="form-check-label">Hepatic Impairment</label>
                </div>
                <div class="form-check col-md-2">
                    <input type="checkbox" class="form-check-control">
                    <label class="form-check-label">Culture and Sensitivity</label>
                </div>
                <div class="form-check col-md-1">
                    <input type="checkbox" class="form-check-control">
                    <label class="form-check-label">IV Fluids</label>
                </div>
                <div class="form-group col-md-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-control">
                        <label class="form-check-label">Other (Specify</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <br>
            <h3>C: STAT MEDICINES/ONCE ONLY MEDICINES</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="5">CONSULTANT: DR/PROF</th>
                            <th colspan="3">NURSING</th>
                            <th colspan="4">PHARMACY USE ONLY</th>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <th>Drug</th>
                            <th>Dose</th>
                            <th>Route</th>
                            <th>Sign</th>
                            <th>Name</th>
                            <th>Sign</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th>Qty</th>
                            <th>DISP. by</th>
                            <th>Sign</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="date" class="form-control">
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
                                <input type="text" class="form-control">
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
                                <input type="date" class="form-control">
                            </td>
                            <td>
                                <input type="number" class="form-control">
                            </td>
                            <td>
                                <input type="text" class="form-control">
                            </td>
                            <td>
                                <input type="text" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" class="form-control">
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
                                <input type="text" class="form-control">
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
                                <input type="date" class="form-control">
                            </td>
                            <td>
                                <input type="number" class="form-control">
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
            <h3>D: FLUIDS AND PARENTERAL NUTRITION SECTION</h3>
            <h6>Administration details to be included in the fluid chart</h6>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th rowspan="2">Date</th>
                            <th rowspan="2">ITEM & ADMINISTRATION INSTRUCTIONS<br>(Volume,Frequency,Date,Duration)</th>
                            <th colspan="2">Prescribed by:</th>
                            <th colspan="4">Pharmacy use only</th>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <th>Sign</th>
                            <th>Date</th>
                            <th>Qty</th>
                            <th>Disp by</th>
                            <th>Sign</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="date" class="form-control">
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
                                <input type="date" class="form-control">
                            </td>
                            <td>
                                <input type="number" class="form-control">
                            </td>
                            <td>
                                <input type="text" class="form-control">
                            </td>
                            <td>
                                <input type="text" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" class="form-control">
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
                                <input type="date" class="form-control">
                            </td>
                            <td>
                                <input type="number" class="form-control">
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
            <h3>E: ANTIMICROBIAL SECTION</h3>
            <h6>(Antibiotic, Antiviral, Antifungal)</h6>
            <h6>Prophylactic antibiotic orders will lapse after 24 hours; Empiric antibiotic orders will lapse after 72 hours unless renewed or extended; Therapeutic, antibiotic orders will lapse after 72 hours unless renewed.</h6>
            <h4>(i) DR/PROF</h4>
            <div class="form-group">
                <label>Drug</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Dose</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Route</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Freq</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Duration</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Rate of Admin</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Date</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Time</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Doctor's Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Sign</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <p>Special Instructions:</p>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label">Prophylaxis</label>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="form-check col-md-4">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label">Empiric</label>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="form-check col-md-4">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label">Therapeutic</label>
                    </div>
                </div>
            </div>
            <h4>(ii) NURSE</h4>
            <div class="form-group">
                <label>Date & Time</label>
                <input type="datetime-local" class="form-control">
            </div>
            <div class="form-group">
                <label>Date & Time</label>
                <input type="datetime-local" class="form-control">
            </div>
            <h4>(iii) PHARMACY</h4>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Date</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Qty</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Sign</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <h3>F: NARCOTIC PRESCRIPTIONS ONLY (IN WORDS)</h3>
            <h4>(i) DR/PROF</h4>
            <div class="form-group">
                <label>Drug</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Dose</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Route</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Freq</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Duration</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Rate of Admin</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Date</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Time</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Doctor's Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Sign</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <p>Special Instructions:</p>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <textarea class="form-control"></textarea>
                </div>
            </div>
            <h4>(ii) NURSE</h4>
            <div class="form-group">
                <label>Date & Time</label>
                <input type="datetime-local" class="form-control">
            </div>
            <div class="form-group">
                <label>Date & Time</label>
                <input type="datetime-local" class="form-control">
            </div>
            <h4>(iii) PHARMACY</h4>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Date</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Qty</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Sign</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <h3>G: GENERAL MEDICINES SECTION</h3>
            <h4>(i) DR/PROF</h4>
            <div class="form-group">
                <label>Drug</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Dose</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Route</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Freq</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Duration</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Rate of Admin</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Date</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Time</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Doctor's Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Sign</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <p>Special Instructions:</p>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <textarea class="form-control"></textarea>
                </div>
            </div>
            <h4>(ii) NURSE</h4>
            <div class="form-group">
                <label>Date & Time</label>
                <input type="datetime-local" class="form-control">
            </div>
            <div class="form-group">
                <label>Date & Time</label>
                <input type="datetime-local" class="form-control">
            </div>
            <h4>(iii) PHARMACY</h4>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Date</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Qty</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>Sign</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <h3>H: DISCHARGE MEDICINES</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th rowspan="2">DISCHARGE MEDICINES</th>
                            <th colspan="3">Pharmacy Use Only</th>
                        </tr>
                        <tr>
                            <th>Qty</th>
                            <th>Name</th>
                            <th>Sign</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <textarea class="form-control"></textarea>
                            </td>
                            <td>
                                <input class="form-control" type="number">
                            </td>
                            <td>
                                <input class="form-control" type="text">
                            </td>
                            <td>
                                <input class="form-control" type="text">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Prescriber Name:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Sign:</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Designation:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Date</label>
                    <input type="date" class="form-control">
                </div>
            </div>
        </form>
    </div>
        
    </div>
</div> 
@endsection