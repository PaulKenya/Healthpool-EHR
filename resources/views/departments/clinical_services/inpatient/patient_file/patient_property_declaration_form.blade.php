@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">PATIENT PROPERTY DECLARATION FORM</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>PATIENT PROPERTY DECLARATION FORM</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th>BED NUMBER</th>
                            <th>JEWELLERY</th>
                            <th>WEAPON DECLARATION</th>
                            <th>NECKLACE</th>
                            <th>MODEL TYPE</th>
                            <th>RING</th>
                            <th>CLOTHING</th>
                            <th>WATCH</th>
                            <th>BELT</th>
                            <th>TYPE AND MAKE</th>
                            <th>BLOUSE/DRESS</th>
                            <th>CASH</th>
                            <th>COAT/JACKET</th>
                            <th>SHILLINGS(KENYA)</th>
                            <th>DRESS/SKIRT</th>
                            <th>FOREIGN CURRENCY</th>
                            <th>DRESSING GOWN</th>
                            <th>TRAVELLERS CHEQUE</th>
                            <th>UNDERWEAR</th>
                            <th>PERSONAL DOCUMENTS</th>
                            <th>SOCKS</th>
                            <th>ID CARD</th>
                            <th>SHOES</th>
                            <th>PASSPORT</th>
                            <th>SHIRT AND OTHERS</th>
                            <th>CREDIT CARD</th>
                            <th>PERSONAL ITEMS</th>
                            <th>LICENSE</th>
                            <th>GLASSES/CONTACT</th>
                            <th>MEDICAL INSURANCE</th>
                            <th>HEARING AID</th>
                            <th>LEFT/RIGHT</th>
                            <th>MODEL</th>
                            <th>ASSISTIVE DEVICES</th>
                            <th>PHONE NUMBERS</th>
                            <th>PROTHESIS</th>
                            <th>VEHICLE DEPOSIT</th>
                            <th>OTHERS</th>
                            <th>REG. NO</th>
                            <th>DENTURE</th>
                            <th>MODEL</th>
                            <th>PARTIALS</th>
                            <th>COLOR</th>
                            <th>UPPER/LOWER</th>
                            <th>ELECTRONICS</th>
                            <th>MISCELANEOUS</th>
                            <th>RADIO</th>
                            <th>LAPTOP</th>
                            <th>WALKMAN</th>
                            <th>CALCULATOR</th>
                            <th>CAMERA/VIDEO</th>
                            <th>NAME</th>
                            <th>SIGNATURE</th>
                            <th>DATE</th>
                            <th>VALUABLES TO SAFE</th>
                            <th>NAME OF PERSON TAKEN BY</th>
                            <th>SIGNATURE</th>
                            <th>CUT/SEVERED</th>
                            <th>SOILAGE</th>
                            <th>TAKEN BY SECURITY</th>
                            <th>SIGNATURE</th>
                            <th>DATE</th>
                            <th>VALUABLES TO SAFE</th>
                            <th>INVENTORY RECORDED BY</th>
                            <th>DATE</th>
                            <th>SIGNATURE</th>
                            <th>PATIENT NAME</th>
                            <th>WARD</th>
                            <th>SIGNATURE</th>
                            <th>DATE</th>


                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($patient_property_declaration_form_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($patient_property_declaration_form_results as $patient_property_declaration_form_result)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        VIEW
                                    </button>
                                    <td>{{ $patient_property_declaration_form_result->bio_bed_number}}</td>
                                    <td>{{ $patient_property_declaration_form_result->jewellery}}</td>
                                    <td>{{ $patient_property_declaration_form_result->weapon_declaration}}</td>
                                    <td>{{ $patient_property_declaration_form_result->necklace}}</td>
                                    <td>{{ $patient_property_declaration_form_result->model_type}}</td>
                                    <td>{{ $patient_property_declaration_form_result->ring}}</td>
                                    <td>{{ $patient_property_declaration_form_result->clothing}}</td>
                                    <td>{{ $patient_property_declaration_form_result->watch}}</td>
                                    <td>{{ $patient_property_declaration_form_result->belt}}</td>
                                    <td>{{ $patient_property_declaration_form_result->type_and_make}}</td>
                                    <td>{{ $patient_property_declaration_form_result->blouse_skirt}}</td>
                                    <td>{{ $patient_property_declaration_form_result->cash}}</td>
                                    <td>{{ $patient_property_declaration_form_result->coat_jacket}}</td>
                                    <td>{{ $patient_property_declaration_form_result->shillings_kenya}}</td>
                                    <td>{{ $patient_property_declaration_form_result->dress_skirt}}</td>
                                    <td>{{ $patient_property_declaration_form_result->foreign_currency}}</td>
                                    <td>{{ $patient_property_declaration_form_result->dressing_gown}}</td>
                                    <td>{{ $patient_property_declaration_form_result->travellers_cheque}}</td>
                                    <td>{{ $patient_property_declaration_form_result->underwear}}</td>
                                    <td>{{ $patient_property_declaration_form_result->personal_documents}}</td>
                                    <td>{{ $patient_property_declaration_form_result->socks}}</td>
                                    <td>{{ $patient_property_declaration_form_result->id_card}}</td>
                                    <td>{{ $patient_property_declaration_form_result->shoes}}</td>
                                    <td>{{ $patient_property_declaration_form_result->passport}}</td>
                                    <td>{{ $patient_property_declaration_form_result->shirt_others}}</td>
                                    <td>{{ $patient_property_declaration_form_result->credit_cards}}</td>
                                    <td>{{ $patient_property_declaration_form_result->personal_items}}</td>
                                    <td>{{ $patient_property_declaration_form_result->license}}</td>
                                    <td>{{ $patient_property_declaration_form_result->glasses_contact}}</td>
                                    <td>{{ $patient_property_declaration_form_result->medical_insurance}}</td>
                                    <td>{{ $patient_property_declaration_form_result->hearing_aid}}</td>
                                    <td>{{ $patient_property_declaration_form_result->left_right}}</td>
                                    <td>{{ $patient_property_declaration_form_result->model}}</td>
                                    <td>{{ $patient_property_declaration_form_result->assistive_devices}}</td>
                                    <td>{{ $patient_property_declaration_form_result->phone_number}}</td>
                                    <td>{{ $patient_property_declaration_form_result->prothesis}}</td>
                                    <td>{{ $patient_property_declaration_form_result->vehicle_deposit}}</td>
                                    <td>{{ $patient_property_declaration_form_result->others}}</td>
                                    <td>{{ $patient_property_declaration_form_result->reg_no}}</td>
                                    <td>{{ $patient_property_declaration_form_result->denture}}</td>
                                    <td>{{ $patient_property_declaration_form_result->model2}}</td>
                                    <td>{{ $patient_property_declaration_form_result->partials}}</td>
                                    <td>{{ $patient_property_declaration_form_result->color}}</td>
                                    <td>{{ $patient_property_declaration_form_result->uper_lower}}</td>
                                    <td>{{ $patient_property_declaration_form_result->electronics}}</td>
                                    <td>{{ $patient_property_declaration_form_result->miscellaneous}}</td>
                                    <td>{{ $patient_property_declaration_form_result->radio}}</td>
                                    <td>{{ $patient_property_declaration_form_result->laptop}}</td>
                                    <td>{{ $patient_property_declaration_form_result->walkman}}</td>
                                    <td>{{ $patient_property_declaration_form_result->calculator}}</td>
                                    <td>{{ $patient_property_declaration_form_result->camera_video}}</td>
                                    <td>{{ $patient_property_declaration_form_result->names}}</td>
                                    <td>{{ $patient_property_declaration_form_result->signature_a}}</td>
                                    <td>{{ $patient_property_declaration_form_result->date_b}}</td>
                                    <td>{{ $patient_property_declaration_form_result->valuables_to_safe}}</td>
                                    <td>{{ $patient_property_declaration_form_result->taken_by_name}}</td>
                                    <td>{{ $patient_property_declaration_form_result->signature}}</td>
                                    <td>{{ $patient_property_declaration_form_result->cut_served}}</td>
                                    <td>{{ $patient_property_declaration_form_result->soilage}}</td>
                                    <td>{{ $patient_property_declaration_form_result->taken_by_security_police}}</td>
                                    <td>{{ $patient_property_declaration_form_result->signatures}}</td>
                                    <td>{{ $patient_property_declaration_form_result->date_c}}</td>
                                    <td>{{ $patient_property_declaration_form_result->valuables_to_safe2}}</td>
                                    <td>{{ $patient_property_declaration_form_result->inventory_recorded_by}}</td>
                                    <td>{{ $patient_property_declaration_form_result->date_d}}</td>
                                    <td>{{ $patient_property_declaration_form_result->signature3}}</td>
                                    <td>{{ $patient_property_declaration_form_result->name_of_patient}}</td>
                                    <td>{{ $patient_property_declaration_form_result->ward}}</td>
                                    <td>{{ $patient_property_declaration_form_result->signature4}}</td>
                                    <td>{{ $patient_property_declaration_form_result->date_e}}</td>

                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">PATIENT PROPERTY DECLARATION FORM</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>PATIENT PROPERTY DECLARATION FORM</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">BED NUMBER</label>
                                                           {{ $patient_property_declaration_form_result->bio_bed_number}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">JEWELLERY</label>
                                                         {{ $patient_property_declaration_form_result->jewellery}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">WEAPON DECLARATION</label>
{{ $patient_property_declaration_form_result->weapon_declaration}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for=""NECKLACE</label>
{{ $patient_property_declaration_form_result->necklace}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">MODEL TYPE</label>
{{ $patient_property_declaration_form_result->model_type}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">RING</label>
{{ $patient_property_declaration_form_result->ring}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">CLOTHING</label>
{{ $patient_property_declaration_form_result->clothing}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">WATCH</label>
{{ $patient_property_declaration_form_result->watch}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">BELT</label>
{{ $patient_property_declaration_form_result->belt}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">TYPE AND MAKE</label>
{{ $patient_property_declaration_form_result->type_and_make}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">BLOUSE/DRESS</label>
{{ $patient_property_declaration_form_result->blouse_skirt}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">CASH</label>
{{ $patient_property_declaration_form_result->cash}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">COAT/JACKET</label>
{{ $patient_property_declaration_form_result->coat_jacket}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">SHILLINGS(KENYA)</label>
{{ $patient_property_declaration_form_result->shillings_kenya}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">DRESS/SKIRT</label>
{{ $patient_property_declaration_form_result->dress_skirt}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">FOREIGN CURRENCY</label>
{{ $patient_property_declaration_form_result->foreign_currency}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">DRESSING GOWN</label>
{{ $patient_property_declaration_form_result->dressing_gown}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">TRAVELLERS CHEQUE</label>
{{ $patient_property_declaration_form_result->travellers_cheque}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">UNDERWEAR</label>
{{ $patient_property_declaration_form_result->underwear}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">PERSONAL DOCUMENTS</label>
{{ $patient_property_declaration_form_result->personal_documents}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">SOCKS</label>
{{ $patient_property_declaration_form_result->socks}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">ID CARD<</label>
{{ $patient_property_declaration_form_result->id_card}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">SHOES</label>
{{ $patient_property_declaration_form_result->shoes}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">PASSPORT</label>
{{ $patient_property_declaration_form_result->passport}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">SHIRT AND OTHERS</label>
{{ $patient_property_declaration_form_result->shirt_others}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">CREDIT CARD</label>
{{ $patient_property_declaration_form_result->credit_cards}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">PERSONAL ITEMS</label>
{{ $patient_property_declaration_form_result->personal_items}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">LICENSE</label>
{{ $patient_property_declaration_form_result->license}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">GLASSES/CONTACT</label>
{{ $patient_property_declaration_form_result->glasses_contact}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">MEDICAL INSURANCE</label>
{{ $patient_property_declaration_form_result->medical_insurance}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">HEARING AID</label>
{{ $patient_property_declaration_form_result->hearing_aid}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">LEFT/RIGHT</label>
{{ $patient_property_declaration_form_result->left_right}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">MODEL</label>
{{ $patient_property_declaration_form_result->model}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">ASSISTIVE DEVICES</label>
{{ $patient_property_declaration_form_result->assistive_devices}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">PHONE NUMBERS</label>
{{ $patient_property_declaration_form_result->phone_number}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">PROTHESIS</label>
{{ $patient_property_declaration_form_result->prothesis}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">VEHICLE DEPOSIT</label>
{{ $patient_property_declaration_form_result->vehicle_deposit}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">OTHERS</label>
{{ $patient_property_declaration_form_result->others}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">REG. NO</label>
{{ $patient_property_declaration_form_result->reg_no}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">DENTURE</label>
{{ $patient_property_declaration_form_result->denture}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">MODEL</label>
{{ $patient_property_declaration_form_result->model2}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">PARTIALS</label>
{{ $patient_property_declaration_form_result->partials}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">COLOR</label>
{{ $patient_property_declaration_form_result->color}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">UPPER/LOWER</label>
{{ $patient_property_declaration_form_result->uper_lower}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">ELECTRONICS</label>
{{ $patient_property_declaration_form_result->electronics}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">MISCELANEOUS</label>
{{ $patient_property_declaration_form_result->miscellaneous}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">RADIO</label>
{{ $patient_property_declaration_form_result->radio}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">LAPTOP</label>
{{ $patient_property_declaration_form_result->laptop}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">WALKMAN</label>
{{ $patient_property_declaration_form_result->walkman}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">CALCULATOR</label>
{{ $patient_property_declaration_form_result->calculator}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">CAMERA/VIDEO</label>
{{ $patient_property_declaration_form_result->camera_video}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">NAME</label>
{{ $patient_property_declaration_form_result->names}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">SIGNATURE</label>
{{ $patient_property_declaration_form_result->signature_a}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">DATE</label>
{{ $patient_property_declaration_form_result->date_b}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">VALUABLES TO SAFE</label>
{{ $patient_property_declaration_form_result->valuables_to_safe}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">NAME OF PERSON TAKEN BY</label>
{{ $patient_property_declaration_form_result->taken_by_name}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">SIGNATURE</label>
{{ $patient_property_declaration_form_result->signature}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">CUT/SEVERED</label>
{{ $patient_property_declaration_form_result->cut_served}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">SOILAGE</label>
{{ $patient_property_declaration_form_result->soilage}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">TAKEN BY SECURITY</label>
{{ $patient_property_declaration_form_result->taken_by_security_police}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">SIGNATURE</label>
{{ $patient_property_declaration_form_result->signatures}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">DATE</label>
{{ $patient_property_declaration_form_result->date_c}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">VALUABLES TO SAFE</label>
{{ $patient_property_declaration_form_result->valuables_to_safe2}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">INVENTORY RECORDED BY</label>
{{ $patient_property_declaration_form_result->inventory_recorded_by}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">DATE</label>
{{ $patient_property_declaration_form_result->date_d}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">SIGNATURE</label>
{{ $patient_property_declaration_form_result->signature3}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">PATIENT NAME</label>
{{ $patient_property_declaration_form_result->name_of_patient}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">WARD</label>
{{ $patient_property_declaration_form_result->ward}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">SIGNATURE</label>
{{ $patient_property_declaration_form_result->signature4}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">DATE</label>
{{ $patient_property_declaration_form_result->date_e}}
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <input type="button" class="btn btn-success" onclick="printDiv('printableArea{{$i}}')" value="print" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


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
                            <h4 class="modal-title">Add  Information</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="container">
                                        <form action="{{route('patient_property_declaration_form_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}


                                                <input name="administration_patient_informations_id" hidden type="text" class="form-control d-none" value="{{$patient_id}}">
                                                <input name="institution_id" type="text" class="form-control" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">



                                            <h1>PATIENT'S PROPERTY DECLARATION FORM AND IDEMNITY CERTIFICATE</h1><br><br><br>
                                            <P>Dear Patient,<br><br> It is recommended that all valuables be sent back home or placed in hospital safe. The patient is responsible for all items retained in the patient's room including item brought in after admission. Kindly hand over to the Ward Sister in Charge all valuables or item(s) of sentimental value as listed for the safe custody. By complying with this requirement, the safety of surrendered items is guaranteed. Please note that none compliance will imply that you have assumed full responsibility for your item(s) and shall not hold the hospital liable in event of loss. We wish you a pleasant, comfortable and safe stay at the Hospital.</P>
                                            <div class="col-m-3 offset-md-0">
                                                <H3 class="mt-20">
                                                    PATIENT'S VALUABLES CHECKLIST
                                                </H3>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p>BED NUMBER:</p>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="bio_bed_number" class="form-control" placeholder="click to enter bed number">
                                                </div>
                                            </div>
                                            <table class="table table-bordered">

                                                <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Item</th>
                                                    <th>With Patient</th>
                                                    <th>To Safe or Ward</th>
                                                    <th>Returned Home</th>
                                                    <th></th>
                                                    <th>Item</th>
                                                    <th>With Patient</th>
                                                    <th>To Safe or Ward</th>
                                                    <th>Return Home</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Jewellery</td>
                                                    <td><input type="radio" name="jewellery" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="jewellery" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="jewellery" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td>8</td>
                                                    <td>Weapon Declaration</td>
                                                    <td><input type="radio" name="weapon_declaration" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="weapon_declaration" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="weapon_declaration" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Necklace</td>
                                                    <td><input type="radio" name="necklace" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="necklace" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="necklace" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Model/Type</td>
                                                    <td><input type="radio" name="model_type" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="model_type" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="model_type" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Ring</td>
                                                    <td><input type="radio" name="ring" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="ring" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="ring" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td>9</td>
                                                    <td>Clothing</td>
                                                    <td><input type="radio" name="clothing" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="clothing" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="clothing" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Watch</td>
                                                    <td><input type="radio" name="watch" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="watch" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="watch" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Belt</td>
                                                    <td><input type="radio" name="belt" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="belt" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="belt" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Type and Make</td>
                                                    <td><input type="radio" name="type_and_make" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="type_and_make" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="type_and_make" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Blouse/Skirt</td>
                                                    <td><input type="radio" name="blouse_skirt" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="blouse_skirt" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="blouse_skirt" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Cash</td>
                                                    <td><input type="radio" name="cash" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="cash" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="cash" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Coat/Jacket</td>
                                                    <td><input type="radio" name="coat_jacket" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="coat_jacket" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="coat_jacket" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Shillings(Kenya)</td>
                                                    <td><input type="radio" name="shillings_kenya" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="shillings_kenya" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="shillings_kenya" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Dress/Skirt</td>
                                                    <td><input type="radio" name="dress_skirt" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="dress_skirt" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="dress_skirt" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Foreign Currency</td>
                                                    <td><input type="radio" name="foreign_currency" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="foreign_currency" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="foreign_currency" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Dressing Gown</td>
                                                    <td><input type="radio" name="dressing_gown" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="dressing_gown" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="dressing_gown" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Travellers' Cheque</td>
                                                    <td><input type="radio" name="travellers_cheque" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="travellers_cheque" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="travellers_cheque" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Underwear</td>
                                                    <td><input type="radio" name="underwear" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="underwear" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="underwear" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Personal Documents</td>
                                                    <td><input type="radio" name="personal_documents" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="personal_documents" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="personal_documents" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Socks</td>
                                                    <td><input type="radio" name="socks" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="socks" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="socks" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>ID Card</td>
                                                    <td><input type="radio" name="id_card" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="id_card" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="id_card" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Shoes</td>
                                                    <td><input type="radio" name="shoes" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="shoes" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="shoes" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Passport</td>
                                                    <td><input type="radio" name="passport" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="passport" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="passport" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Shirts/ Others</td>
                                                    <td><input type="radio" name="shirt_others" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="shirt_others" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="shirt_others" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Credit Cards</td>
                                                    <td><input type="radio" name="credit_cards" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="credit_cards" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="credit_cards" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td>10</td>
                                                    <td>Personal Items</td>
                                                    <td><input type="radio" name="personal_items" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="personal_items" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="personal_items" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>License</td>
                                                    <td><input type="radio" name="license" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="license" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="license" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Glasses/ Contacts</td>
                                                    <td><input type="radio" name="glasses_contact" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="glasses_contact" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="glasses_contact" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Medical Insurance</td>
                                                    <td><input type="radio" name="medical_insurance" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="medical_insurance" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="medical_insurance" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Hearing aids</td>
                                                    <td><input type="radio" name="hearing_aid" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="hearing_aid" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="hearing_aid" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Mobile Phone</td>
                                                    <td><input type="radio" name="mobile_phone" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="mobile_phone" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="mobile_phone" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Left/Right</td>
                                                    <td><input type="radio" name="left_right" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="left_right" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="left_right" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Model</td>
                                                    <td><input type="radio" name="model" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="model" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="model" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td>11</td>
                                                    <td>Assistive Devices</td>
                                                    <td><input type="radio" name="assistive_devices" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="assistive_devices" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="assistive_devices" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Phone Number</td>
                                                    <td><input type="radio" name="phone_number" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="phone_number" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="phone_number" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Prosthesis</td>
                                                    <td><input type="radio" name="prothesis" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="prothesis" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="prothesis" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Vehicle Deposit</td>
                                                    <td><input type="radio" name="vehicle_deposit" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="vehicle_deposit" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="vehicle_deposit" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Others</td>
                                                    <td><input type="radio" name="others" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="others" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="others" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Reg. No.</td>
                                                    <td><input type="radio" name="reg_no" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="reg_no" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="reg_no" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td>12</td>
                                                    <td>Denture</td>
                                                    <td><input type="radio" name="denture" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="denture" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="denture" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Model</td>
                                                    <td><input type="radio" name="model2" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="model2" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="model2" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Partials</td>
                                                    <td><input type="radio" name="partials" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="partials" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="partials" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>

                                                    <td></td>
                                                    <td>Color</td>

                                                    <td><input type="radio" name="color" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="color" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="color" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td>Upper/Lower</td>
                                                    <td><input type="radio" name="uper_lower" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="uper_lower" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="uper_lower" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Electronics</td>
                                                    <td><input type="radio" name="electronics" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="electronics" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="electronics" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td>13</td>
                                                    <td>Miscellaneous</td>
                                                    <td><input type="radio" name="miscellaneous" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="miscellaneous" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="miscellaneous" value="Returned Home" class="radio-inline" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Radio</td>
                                                    <td><input type="radio" name="radio" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="radio" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="radio" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Laptop</td>
                                                    <td><input type="radio" name="laptop" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="laptop" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="laptop" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Walkman</td>
                                                    <td><input type="radio" name="walkman" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="walkman" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="walkman" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Calculator</td>
                                                    <td><input type="radio" name="calculator" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="calculator" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="calculator" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Camera/Video</td>
                                                    <td><input type="radio" name="camera_video" value="With Patient" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="camera_video" value="To the safe or Ward" class="radio-inline" placeholder=""></td>
                                                    <td><input type="radio" name="camera_video" value="Returned Home" class="radio-inline" placeholder=""></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>

                                                </tbody>
                                            </table>

                                            <br><br>

                                            <table class="table table-bordered">

                                                <tbody>
                                                <tr>
                                                    <td>

                                                            <p>I take responsibilty for the personal belongings I have choosen to keep with me.<br><br> I shall not hold the hospital liable in event of loss<br>Patient/Responsibility Party:<br></p>
                                                            <span class="row"> <span class="col-md-5">Names:</span> <span class="col-md-6"> <input type="text" name="names" class=" form-control" placeholder=""></span></span>
                                                            <span class="row"> <span class="col-md-5">Signature:</span> <span class="col-md-6"> <input type="text" name="signature_a" class=" form-control" placeholder=""></span></span>
                                                            <span class="row"> <span class="col-md-5">Date:</span> <span class="col-md-6"> <input type="date" id="myDate" name="date_b" readonly class=" form-control" placeholder=""></span></span>
                                                            Valuables to safe<input type="radio" value="No"  name="valuables_to_safe">No
                                                            <input type="radio" value="Yes"  name="valuables_to_safe">Yes
                                                            <span class="row"> <span class="col-md-5">Taken by:Name</span> <span class="col-md-6"> <input type="text" name="taken_by_name" class=" form-control" placeholder=""></span></span>
                                                            <span class="row"> <span class="col-md-5">Signature:</span> <span class="col-md-6"> <input type="text" name="signature" class=" form-control" placeholder=""></span></span>
                                                            The following items were:<br>
                                                            <span class="row"> <span class="col-md-5">()Cut/Severed </span> <span class="col-md-6"> <input type="text" name="cut_served" class=" form-control" placeholder=""></span></span>
                                                            <span class="row"> <span class="col-md-5">()Thrown away due to soilage</span> <span class="col-md-6"> <input type="text" name="soilage" class=" form-control" placeholder=""></span></span>
                                                            <span class="row"> <span class="col-md-5">()Taken by Security police</span> <span class="col-md-6"> <input type="text" name="taken_by_security_police" class=" form-control" placeholder=""></span></span>
                                                            <span class="row"> <span class="col-md-5">Signature:</span> <span class="col-md-6"> <input type="text" name="signatures" class=" form-control" placeholder=""></span></span>
                                                            <span class="row"> <span class="col-md-5">Date:</span> <span class="col-md-6"> <input type="date" id="myDate1" name="date_c" readonly  class=" form-control" placeholder=""></span></span>
                                                            Valuables to safe <input type="radio" value="No"  name="valuables_to_safe2">No
                                                            <input type="radio"  value="Yes" name="valuables_to_safe2">Yes



                                                        </form>
                                                    </td>
                                                </tr>
                                                </tbody>

                                            </table>
                                            <br><br>

                                            <div class="row">
                                                <span class="row"> <span class="col-md-5">Initial/Inventory recorded by:</span> <span class="col-md-5"> <input type="text" name="inventory_recorded_by" class=" form-control" placeholder=""></span></span>
                                                <span class="row"> <span class="col-md-5"> :</span> <span class="col-md-6"> <input type="date" id="myDate2" name="date_d" readonly class=" form-control" placeholder=""></span></span>
                                                <span class="row"> <span class="col-md-5">Signature:</span> <span class="col-md-5"> <input type="text" name="signature3" class=" form-control" placeholder=""></span></span>
                                            </div>
                                            <div class="row">
                                                <span class="row"> <span class="col-md-5">Items handed back to patient by:Name:</span> <span class="col-md-3"> <input type="text" name="name_of_patient" class=" form-control" placeholder=""></span></span>
                                                <span class="row"> <span class="col-md-5">Ward:</span> <span class="col-md-3"> <input type="text" name="ward" class=" form-control" placeholder=""></span></span>
                                                <span class="row"> <span class="col-md-5">Signature:</span> <span class="col-md-4"> <input type="text" name="signature4" class=" form-control" placeholder=""></span></span>
                                                <span class="row"> <span class="col-md-5">DATE:</span> <span class="col-md-5"> <input type="date" name="date_e" id="myDate3"  class="  form-control" readonly placeholder=""></span></span>

                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <!--form here--->
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
