@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        
        <div class="container-fluid">
        <h1 class="text-center">GENERAL LABORATORY REQUEST FORM</h1>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Patient Name:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Hos No:</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Date:</label>
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="">Age</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">Gender</label>
                    <select class="custom-select">
                        <option selected></option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="">To be sent to:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Tel. No.</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="">NHIF No.</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Invoice No.</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Receipt No.</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Specimen type:</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">Requesting clinician Name:</label>
                    <input type="text" class="form-control">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Signature:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Time:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <br>
                    <br>
                    <br>
                    <label for="">Tel:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <br>
                    <br>
                    <br>
                    <label for="">Priority</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <div class="form-check-label">Urgent</div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <div class="form-check-label">Routine</div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="">Clinical Information/Provisional Dx:</label>
                    <textarea class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2">BIOCHEMISTRY</th>
                                <th>MICROBIOLOGY</th>
                                <th>IMMUNOLOGY</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">UBC</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Liver function tests</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Fasting Lipid Profile</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Amylase</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Lipase</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Total Billirubin</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Direct Billirubin</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Bone Chemistry</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Creatinine Kinase(CK)</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Uric Acid</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">CK-MB</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">HbA1C</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">FBS</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">RBS</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Lactate</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">LDH</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Fluid chemistry</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">CSF Chemistry</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">D-Dimers</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">CRP</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">CSFMicroprotein</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">CSF Sugar</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Urine Microalbumin</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Blood Gas Analysis</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Neonatal Billirubin</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Pev/Hb</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Procalcitonin</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Cyclosporine</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Tacrolimus</label>
                                    </div>
                                </td>
                                <td>
                                    <p><b><u>Endocrinology</u></b></p>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Thyroid Function Test</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">TSH</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">B-HCG</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">FSH</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">LH</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Oestradiol(E2)</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Progesterone</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Prolactin</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Testosterone</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">AFP</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">PTH</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Cortisol AM</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Cortisol PM</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">CEA</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">CA 125</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">CA 15-3</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">CA 19-9</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">TPSA</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">FPSA</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">FERRITIN</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">VIT B-12</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Folates</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">TROPONIN I</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">TROPONIN T</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">TROPONIN HS</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Growth Hormone</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Vitamin D</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">DHEA-S</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">MYOGLOBIN</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Routine MC&S</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">CSF cell count MC&S</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Blood culture</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Fungal M&C</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Urine routine</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Urine MC&S</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Stool MC&S</label>
                                    </div>
                                    <p><b><u>TB Investigation</u></b></p>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Microscopy</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Culture</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Sensitivity</label>
                                    </div>
                                    <p><b><u>VIROLOGY</u></b></p>
                                    <p>HIV testing</p>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">HIV serology</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">HIV viral load</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">PCR: HIV</label>
                                    </div>
                                    <p>Hepatitis serology</p>
                                    <p>Y Clinical hepatitis</p>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">A</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">B</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">C</label>
                                    </div>
                                    <p>Other serology</p>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">CMV</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">EBV</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">HSV</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">VZV</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Rubelia</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Measles</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Mumps</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">VDRL</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">CD4</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">CRP</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">ANF</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">ASOT</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Toxoplasma</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">RF</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Syphillis serology</label>
                                    </div>
                                    <p><b><u>PARASITOLOGY</u></b></p>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Stool</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Blood slide/mps</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">PDT</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Urinalysis</label>
                                    </div>
                                    <p><b><u>HAEMATOLOGY</u></b></p>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">FBC & ESR</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">FBF</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Reticulocyte count</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Factor assays(VIII & IX)</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Bleeding time test</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Platelet aggregation</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Lupus anticoagulant</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">D-Dimer</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">INR</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">APTT</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Fibrinogen</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Thrombin time</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Hb Electrophoresis</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">BMA cytology</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">Inhibitor Screen</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">L.E Cells</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">KCT</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label">
                                        <label class="form-check-label">FNA/CSF Cytology</label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group">
                <label for="">OTHER TESTS/REMARKS</label>
                <textarea class="form-control"></textarea>
            </div>
        </form>
    </div>
        
    </div>
</div> 
@endsection