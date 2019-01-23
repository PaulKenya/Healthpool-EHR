@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Patient Consent</h4>
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
                            <th>Print</th>
                            <th>name_of_surgeon</th>
                            <th>name_of_anaesthetist</th>
                            <th>next_of_kin</th>
                            <th>relationship</th>
                            <th>type_of_operation</th>
                            <th>doctor_explanation</th>
                            <th>1 ?</th>
                            <th>2 ?</th>
                            <th>3 ?</th>
                            <th>4 ?</th>
                            <th>5 ?</th>
                            <th>6 ?</th>
                            <th>7 ?</th>
                            <th>8 ?</th>
                            <th>9 ?</th>
                            <th>10 ?</th>
                            <th>law_protection</th>
                            <th>patient_signature</th>
                            <th>patient_date</th>
                            <th>nok_signature</th>
                            <th>nok_name</th>
                            <th>nok_date</th>
                            <th>smp_signature</th>
                            <th>smp_name</th>
                            <th>smp_date</th>
                            <th>a_signature</th>
                            <th>a_name</th>
                            <th>a_date</th>
                            <th>practitioners_name</th>
                            <th>samp_signature</th>
                        </tr>
                        </thead>
                        <tbody>

                            @if(isset($consent_forms))
                                @php
                                    $i=0
                                @endphp
                                @foreach($consent_forms as $consent_form)
                                    @php
                                        $i++;
                                    @endphp
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">Print Record</button>
                                        </td>
                                        <td>{{$consent_form->name_of_surgeon}}</td>
                                        <td>{{$consent_form->name_of_anaesthetist}}</td>
                                        <td>{{$consent_form->next_of_kin}}</td>
                                        <td>{{$consent_form->relationship}}</td>
                                        <td>{{$consent_form->type_of_operation}}</td>
                                        <td>{{$consent_form->doctor_explanation}}</td>
                                        <td>{{$consent_form->pcf_1}}</td>
                                        <td>{{$consent_form->pcf_2}}</td>
                                        <td>{{$consent_form->pcf_3}}</td>
                                        <td>{{$consent_form->pcf_4}}</td>
                                        <td>{{$consent_form->pcf_5}}</td>
                                        <td>{{$consent_form->pcf_6}}</td>
                                        <td>{{$consent_form->pcf_7}}</td>
                                        <td>{{$consent_form->pcf_8}}</td>
                                        <td>{{$consent_form->pcf_9}}</td>
                                        <td>{{$consent_form->pcf_10}}</td>
                                        <td>{{$consent_form->law_protection}}</td>
                                        <td>{{$consent_form->patient_signature}}</td>
                                        <td>{{$consent_form->patient_date}}</td>
                                        <td>{{$consent_form->nok_signature}}</td>
                                        <td>{{$consent_form->nok_name}}</td>
                                        <td>{{$consent_form->nok_date}}</td>
                                        <td>{{$consent_form->smp_signature}}</td>
                                        <td>{{$consent_form->smp_name}}</td>
                                        <td>{{$consent_form->smp_date}}</td>
                                        <td>{{$consent_form->a_signature}}</td>
                                        <td>{{$consent_form->a_name}}</td>
                                        <td>{{$consent_form->a_date}}</td>
                                        <td>{{$consent_form->practitioners_name}}</td>
                                        <td>{{$consent_form->samp_signature}}</td>
                                        <!-- Triage Modal -->
                                        <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Patient Consent Form</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="printableArea{{$i}}">
                                                            <h2>PATIENT RECORD</h2>
                                                            <p><b>Patient Name : </b> {{$patient->name}}</p>
                                                            <p><b>NAME OF SURGEON/MEDICAL PRACTITIONER : </b> {{$consent_form->name_of_surgeon}}</p>
                                                            <p><b>NAME OF ANAESTHETIST : </b> {{$consent_form->name_of_anaesthetist}}</p>
                                                            <p><b>NEXT OF KIN/GUARDIAN NAME(WHERE APPLICABLE) : </b>{{$consent_form->next_of_kin}}</p>
                                                            <p><b>RELATIONSHIP : </b>{{$consent_form->relationship}}</p>
                                                            <h4>DOCTOR</h4>
                                                            <p><b>This section to be completed by the Medical Practitioner responsible for care</b></p>
                                                            <div>
                                                                <p><b>TYPE OF OPERATION/PROCEDURE/INVESTIGATION/TREATMENT</b></p>
                                                                <p>{{$consent_form->type_of_operation}}</p>
                                                            </div>
                                                            <h4>PATIENT</h4>
                                                            <p><b>This section to be completed by the patient, or if the patient is below the age of consent or unfit to give own consent, to be completed by the Next of Kin/Parent or Guardian.</b></p>
                                                            <p><b>Please read this form carefully and confirm that all the information is correct and that you understand it. If you want more information, your doctor will provide it.</b></p>
                                                            <div>
                                                                <p><b>DECLARATION</b></p>
                                                                <p><b>The doctor has explained/I understand that I have the following condition/diagnosis</b></p>
                                                                <p>{{$consent_form->doctor_explanation}}</p>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <p><b>The procedure</b></p>
                                                                    <p><b>1.The nature and purpose of the operation/procedure/investigation/treatment, the appropriate available options have been explained to me,  and I have been informed of and understand the risks,benefits and possible complications of my treatment/procedure.</b></p>
                                                                    <p>{{$consent_form->pcf_1}}</p>
                                                                </div>
                                                                <div>
                                                                    <p><b>2.I consent to the performance of the above named operation/procedure/investigation/treatment and of such additional necessary, if in my best interest/in the best interest of the patient or desirable in the judgement of the doctor.</b></p>
                                                                    <p>{{$consent_form->pcf_2}}</p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <p><b>Anaesthesia/Sedation</b></p>
                                                                    <p><b>3.I consent to the administration of  an anaesthesia/sedation advised by the doctor, and to the administration of such further anaesthesia as maybe considered necessary by the doctor during the course of the operation/procedure/investigation/treatment.</b></p>
                                                                    <p>{{$consent_form->pcf_3}}</p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <p><b>Tissue disposal</b></p>
                                                                    <p><b>4.I consent to the disposal by the authorities of this medical facility of any tissue or parts,which may be necessary to remove.</b></p>
                                                                    <p>{{$consent_form->pcf_4}}</p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <p><b>Exceptions</b></p>
                                                                    <p><b>5.Exceptions to the proposed operation/anaesthesia/investigation/treatment,if any</b></p>
                                                                    <p>{{$consent_form->pcf_5}}</p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <p><b>Medical Training</b></p>
                                                                    <p><b>6.I understand that for general patients,operations/procedures/investigation/treatment will be carried out by the surgeons/anaesthetists/Medical Practitioners and other practitioners on the hospital Rota.
                                                                        <br>
                                                                            Assurance/No assurance has been given to me that the operation/procedure/investigation/treatment will be performed by a particular medical practitioner</b>
                                                                    </p>
                                                                    <p>{{$consent_form->pcf_6}}</p>
                                                                </div>
                                                                <div>
                                                                    <p><b>7.I understand that the Surgeon/Anaesthetist/Medical Practitioner may have assistants to help him/her during the procedures(s).These assistants may include other licenced doctors in training,surgical assistant,nurses and medical student; these assistants may perform a variety of tasks generally facilitating the procedureas the need arises.</b></p>
                                                                    <p>{{$consent_form->pcf_7}}</p>
                                                                </div>
                                                                <div>
                                                                    <p><b>8.I am also aware that,photographs and other illustration may be taken of this procedure for continuation of medical training and education.</b></p>
                                                                    <p>{{$consent_form->pcf_8}}</p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <p><b>Other health information</b></p>
                                                                    <p><b>9.I understand that it is my duty to inform my primary care specialist/practitioner of interactions and treatment schedules that I may have with other healthcare providers.</b></p>
                                                                    <p>{{$consent_form->pcf_9}}</p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <p><b>Blood and/or products</b></p>
                                                                    <p><b>10.I consent/do not consent to be administration of me of blood or blood products as may be found necessary and to my best interest of the patient during the course of the operation/procedure/investigation/treatment.</b></p>
                                                                    <p>{{$consent_form->pcf_10}}</p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <p><b>PRIVACY AND CONFIDENTIALITY</b></p>
                                                                    <p><b>I understand the laws that protect and confidentiality of medical information will be respected, and that on information obtained in the course of my treatment/procedures and carrying my identity will be indiscreetly disclosed to researches or other entities without my consent.</b></p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <p><b>CONSENT FOR RELEASE OF INFORMATION</b></p>
                                                                    <p><b>I understand that the Chief Executive Officer of this hospital or assignee may release relevant medical information compiled in my medical records during this admission or outpatientvisit to any organization, which is or may be liable or responsible for payment of charges. If my injury is work related, I understand the hospital may release any information from my records to my employer or its designee</b></p>
                                                                    <p>{{$consent_form->law_protection}}</p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <p><b>Patient's signature</b></p>
                                                                    <p>{{$consent_form->patient_signature}}</p>
                                                                </div>
                                                                <div>
                                                                    <p><b>Date</b></p>
                                                                    <p>{{$consent_form->patient_date}}</p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <p><b>Signature of parent/Next of Kin</b></p>
                                                                    <p>{{$consent_form->nok_signature}}</p>
                                                                </div>
                                                                <div>
                                                                    <p><b>Name</b></p>
                                                                    <p>{{$consent_form->nok_name}}</p>
                                                                </div>
                                                                <div>
                                                                    <p><b>Date</b></p>
                                                                    <p>{{$consent_form->nok_date}}</p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <p><b>I/We confirm that I/We have explained the above operation/procedure/investigation/treatment, the appropriate available options, and the type of anaesthetic proposed(general/regional/sedation) to the Patient/Next of Kin/Guardian in terms which in my judgement are suitable understood by the Patient/Next of Kin/Guardian.</b></p>
                                                                <div>
                                                                    <p><b>Surgeon/Medical Practitioner's signature</b></p>
                                                                    <p>{{$consent_form->smp_signature}}</p>
                                                                </div>
                                                                <div>
                                                                    <p><b>Name</b></p>
                                                                    <p>{{$consent_form->smp_name}}</p>
                                                                </div>
                                                                <div>
                                                                    <p><b>Date</b></p>
                                                                    <p>{{$consent_form->smp_date}}</p>
                                                                </div>
                                                                <div>
                                                                    <p><b>Anaesthetist's signature</b></p>
                                                                    <p>{{$consent_form->a_signature}}</p>
                                                                </div>
                                                                <div>
                                                                    <p><b>Name</b></p>
                                                                    <p>{{$consent_form->a_name}}</p>
                                                                </div>
                                                                <div>
                                                                    <p><b>Date</b></p>
                                                                    <p>{{$consent_form->a_date}}</p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <p><b>CONSENT IN CASE OF EMERGENCY ADMISSION OF PATIENTS NOT FIT TO GIVE OWN CONSENT; IN ABSENCE SUITABLE GUARDIAN/NEXT OF KIN</b></p>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <p><b>Surgeon/anaesthesia/medical practitioner name</b></p>
                                                                    <p>{{$consent_form->practitioners_name}}</p>
                                                                </div>
                                                                <div>
                                                                    <p><b>Signature</b></p>
                                                                    <p>{{$consent_form->samp_signature}}</p>
                                                                </div>
                                                            </div>
                                                            <p><b>5. Reference</b></p>
                                                            <p>Anaesthesia - Short test book of Anaesthesia.</p>
                                                            <p>Tissue disposal - Publichealth Act Capt.</p>
                                                            <p><b>6. Appendices</b></p>
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
                    <div class="modal-body">
                        <div class="row page-titles">
                            <div class="col-md-12 align-self-center text-center">
                                <h4 class="theme-cl">INFORMATION CONSENT BY PATIENT, NEXT OF KIN OR GUARDIAN FOR OPERATION,PROCEDURE,MEDICAL INVESTIGATION OF TREATMENT</h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="container-fluid">
                                    <form action="{{route('consent_form_post',['patient_id'=>$patient_id])}}" method="post" >
                                        {!! csrf_field() !!}
                                        <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                        <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                        <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">

                                        <div class="form-group">
                                            <label for="">NAME OF SURGEON/MEDICAL PRACTITIONER</label>
                                            <input required type="text" class="form-control" name="name_of_surgeon">
                                        </div>
                                        <div class="form-group">
                                            <label for="">NAME OF ANAESTHETIST</label>
                                            <input required type="text" class="form-control" name="name_of_anaesthetist">
                                        </div>
                                        <div class="form-group">
                                            <label for="">NEXT OF KIN/GUARDIAN NAME(WHERE APPLICABLE)</label>
                                            <input required type="text" class="form-control" name="next_of_kin">
                                        </div>
                                        <div class="form-group">
                                            <label for="">RELATIONSHIP</label>
                                            <input required type="text" class="form-control" name="relationship">
                                        </div>
                                        <h4>DOCTOR</h4>
                                        <p><b>This section to be completed by the Medical Practitioner responsible for care</b></p>
                                        <div class="form-group">
                                            <label for="">TYPE OF OPERATION/PROCEDURE/INVESTIGATION/TREATMENT</label>
                                            <textarea class="form-control" name="type_of_operation"></textarea>
                                        </div>
                                        <h4>PATIENT</h4>
                                        <p><b>This section to be completed by the patient, or if the patient is below the age of consent or unfit to give own consent, to be completed by the Next of Kin/Parent or Guardian.</b></p>
                                        <p><b>Please read this form carefully and confirm that all the information is correct and that you understand it. If you want more information, your doctor will provide it.</b></p>
                                        <div class="form-group">
                                            <p><b>DECLARATION</b></p>
                                            <label for="">The doctor has explained/I understand that I have the following condition/diagnosis</label>
                                            <textarea class="form-control" name="doctor_explanation"></textarea>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <p><b>The procedure</b></p>
                                                <label>1.The nature and purpose of the operation/procedure/investigation/treatment, the appropriate available options have been explained to me,  and I have been informed of and understand the risks,benefits and possible complications of my treatment/procedure.</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="form-group" >
                                                    <div class="form-check">
                                                        <input required value="yes" type="radio" class="form-check-input" name="pcf_1">
                                                        <label class="form-check-label">Yes</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input required value="no" type="radio" class="form-check-input" name="pcf_1">
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>2.I consent to the performance of the above named operation/procedure/investigation/treatment and of such additional necessary, if in my best interest/in the best interest of the patient or desirable in the judgement of the doctor.</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="form-group" >
                                                    <div class="form-check">
                                                        <input required value="yes" type="radio" class="form-check-input" name="pcf_2">
                                                        <label class="form-check-label">Yes</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input required value="no" type="radio" class="form-check-input" name="pcf_2">
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <p><b>Anaesthesia/Sedation</b></p>
                                                <label>3.I consent to the administration of  an anaesthesia/sedation advised by the doctor, and to the administration of such further anaesthesia as maybe considered necessary by the doctor during the course of the operation/procedure/investigation/treatment.</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input required value="yes" type="radio" class="form-check-input" name="pcf_3">
                                                        <label class="form-check-label">Yes</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input required value="no" type="radio" class="form-check-input" name="pcf_3">
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <p><b>Tissue disposal</b></p>
                                                <label>4.I consent to the disposal by the authorities of this medical facility of any tissue or parts,which may be necessary to remove.</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="form-group" >
                                                    <div class="form-check">
                                                        <input required value="yes" type="radio" class="form-check-input" name="pcf_4">
                                                        <label class="form-check-label">Yes</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input required value="no" type="radio" class="form-check-input" name="pcf_4">
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <p><b>Exceptions</b></p>
                                                <label>5.Exceptions to the proposed operation/anaesthesia/investigation/treatment,if any</label>
                                                <textarea class="form-control" name="pcf_5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <p><b>Medical Training</b></p>
                                                <label>6.I understand that for general patients,operations/procedures/investigation/treatment will be carried out by the surgeons/anaesthetists/Medical Practitioners and other practitioners on the hospital Rota.
                                                    <br>
                                                    Assurance/No assurance has been given to me that the operation/procedure/investigation/treatment will be performed by a particular medical practitioner
                                                </label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="form-group" >
                                                    <div class="form-check" >
                                                        <input required type="radio" class="form-check-input" name="pcf_6" value="yes" >
                                                        <label class="form-check-label">Yes</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input required type="radio" class="form-check-input" name="pcf_6" value="no" >
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>7.I understand that the Surgeon/Anaesthetist/Medical Practitioner may have assistants to help him/her during the procedures(s).These assistants may include other licenced doctors in training,surgical assistant,nurses and medical student; these assistants may perform a variety of tasks generally facilitating the procedureas the need arises.</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="form-group" >
                                                    <div class="form-check">
                                                        <input required type="radio" class="form-check-input" name="pcf_7" value="yes" >
                                                        <label class="form-check-label">Yes</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input required type="radio" class="form-check-input" name="pcf_7" value="no" >
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>8.I am also aware that,photographs and other illustration may be taken of this procedure for continuation of medical training and education.</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="form-group" >
                                                    <div class="form-check">
                                                        <input required type="radio" class="form-check-input" name="pcf_8" value="yes">
                                                        <label class="form-check-label">Yes</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input required type="radio" class="form-check-input"name="pcf_8" value="no" >
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <p><b>Other health information</b></p>
                                                <label>9.I understand that it is my duty to inform my primary care specialist/practitioner of interactions and treatment schedules that I may have with other healthcare providers.</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="form-group" >
                                                    <div class="form-check">
                                                        <input required type="radio" class="form-check-input"  name="pcf_9" value="yes">
                                                        <label class="form-check-label">Yes</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input required type="radio" class="form-check-input" name="pcf_9" value="no" >
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <p><b>Blood and/or products</b></p>
                                                <label>10.I consent/do not consent to be administration of me of blood or blood products as may be found necessary and to my best interest of the patient during the course of the operation/procedure/investigation/treatment.</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="form-group" >
                                                    <div class="form-check">
                                                        <input required type="radio" class="form-check-input" name="pcf_10" value="yes">
                                                        <label class="form-check-label">Yes</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input required type="radio" class="form-check-input" name="pcf_10" value="no">
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <p><b>PRIVACY AND CONFIDENTIALITY</b></p>
                                                <label>I understand the laws that protect and confidentiality of medical information will be respected, and that on information obtained in the course of my treatment/procedures and carrying my identity will be indiscreetly disclosed to researches or other entities without my consent.</label>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <p><b>CONSENT FOR RELEASE OF INFORMATION</b></p>
                                                <label>I understand that the Chief Executive Officer of this hospital or assignee may release relevant medical information compiled in my medical records during this admission or outpatientvisit to any organization, which is or may be liable or responsible for payment of charges. If my injury is work related, I understand the hospital may release any information from my records to my employer or its designee</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="form-group" >
                                                    <div class="form-check">
                                                        <input required type="radio" class="form-check-input" name="law_protection" value="yes" >
                                                        <label class="form-check-label">Yes</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input required type="radio" class="form-check-input" name="law_protection" value="no" >
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="">Patient's signature</label>
                                                <input required type="text" class="form-control" name="patient_signature">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Date</label>
                                                <input required type="date" class="form-control" id="myDate" name="patient_date"  readonly>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="">Signature of parent/Next of Kin</label>
                                                <input required type="text" class="form-control" name="nok_signature" >
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Name</label>
                                                <input required type="text" class="form-control" name="nok_name">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Date</label>
                                                <input required type="date" class="form-control"  id="myDate1" name="nok_date" readonly>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <p><b>I/We confirm that I/We have explained the above operation/procedure/investigation/treatment, the appropriate available options, and the type of anaesthetic proposed(general/regional/sedation) to the Patient/Next of Kin/Guardian in terms which in my judgement are suitable understood by the Patient/Next of Kin/Guardian.</b></p>
                                            <div class="form-group col-md-4">
                                                <label for="">Surgeon/Medical Practitioner's signature</label>
                                                <input required type="text" class="form-control" name="smp_signature">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Name</label>
                                                <input required type="text" class="form-control" name="smp_name">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Date</label>
                                                <input required type="date" id="myDate2" class="form-control" name="smp_date"readonly >
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Anaesthetist's signature</label>
                                                <input required type="text" class="form-control" name="a_signature">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Name</label>
                                                <input required type="text" class="form-control" name="a_name">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Date</label>
                                                <input required type="date" id="myDate3" class="form-control" readonly name="a_date">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <p><b>CONSENT IN CASE OF EMERGENCY ADMISSION OF PATIENTS NOT FIT TO GIVE OWN CONSENT; IN ABSENCE SUITABLE GUARDIAN/NEXT OF KIN</b></p>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="">Surgeon/anaesthesia/medical practitioner name</label>
                                                <input required type="text" class="form-control" name="practitioners_name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Signature</label>
                                                <input required type="text" class="form-control" name="samp_signature">
                                            </div>
                                        </div>
                                        <p><b>5. Reference</b></p>
                                        <p>Anaesthesia - Short test book of Anaesthesia.</p>
                                        <p>Tissue disposal - Publichealth Act Capt.</p>
                                        <p><b>6. Appendices</b></p>

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