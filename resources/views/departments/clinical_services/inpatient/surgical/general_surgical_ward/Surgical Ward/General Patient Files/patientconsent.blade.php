@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
       

<div class="container-fluid">
        <h3 class="text-center">INFORMATION CONSENT BY PATIENT, NEXT OF KIN OR GUARDIAN FOR OPERATION,PROCEDURE,MEDICAL INVESTIGATION OF TREATMENT</h3>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">SURNAME</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">HOSPITAL NO</label>
                    <input type="number" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="">OTHER NAMES</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">DATE OF BIRTH</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">AGE</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">SEX</label>
                    <select class="custom-select">
                        <option selected></option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="">WARD/CLINIC/DEBT</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">NAME OF SURGEON/MEDICAL PRACTITIONER</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">NAME OF ANAESTHETIST</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">NEXT OF KIN/GUARDIAN NAME(WHERE APPLICABLE)</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">RELATIONSHIP</label>
                <input type="text" class="form-control">
            </div>
            <h4>DOCTOR</h4>
            <p><b>This section to be completed by the Medical Practitioner responsible for care</b></p>
            <div class="form-group">
                <label for="">TYPE OF OPERATION/PROCEDURE/INVESTIGATION/TREATMENT</label>
                <textarea class="form-control"></textarea>
            </div>
            <h4>PATIENT</h4>
            <p><b>This section to be completed by the patient, or if the patient is below the age of consent or unfit to give own consent, to be completed by the Next of Kin/Parent or Guardian.</b></p>
            <p><b>Please read this form carefully and confirm that all the information is correct and that you understand it. If you want more information, your doctor will provide it.</b></p>
            <div class="form-group">
                <p><b>DECLARATION</b></p>
                <label for="">The doctor has explained/I understand that I have the following condition/diagnosis</label>
                <textarea class="form-control"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <p><b>The procedure</b></p>
                    <label>1.The nature and purpose of the operation/procedure/investigation/treatment, the appropriate available options have been explained to me,  and I have been informed of and understand the risks,benefits and possible complications of my treatment/procedure.</label>
                </div>
                <div class="form-group col-md-12">
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label>2.I consent to the performance of the above named operation/procedure/investigation/treatment and of such additional necessary, if in my best interest/in the best interest of the patient or desirable in the judgement of the doctor.</label>
                </div>
                <div class="form-group col-md-12">
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
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
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
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
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <p><b>Exceptions</b></p>
                    <label>5.Exceptions to the proposed operation/anaesthesia/investigation/treatment,if any</label>
                    <textarea class="form-control"></textarea>
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
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label>7.I understand that the Surgeon/Anaesthetist/Medical Practitioner may have assistants to help him/her during the procedures(s).These assistants may include other licenced doctors in training,surgical assistant,nurses and medical student; these assistants may perform a variety of tasks generally facilitating the procedureas the need arises.</label>
                </div>
                <div class="form-group col-md-12">
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label>8.I am also aware that,photographs and other illustration may be taken of this procedure for continuation of medical training and education.</label>
                </div>
                <div class="form-group col-md-12">
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
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
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
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
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
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
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Patient's signature</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Date</label>
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">Signature of parent/Next of Kin</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Date</label>
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <p><b>I/We confirm that I/We have explained the above operation/procedure/investigation/treatment, the appropriate available options, and the type of anaesthetic proposed(general/regional/sedation) to the Patient/Next of Kin/Guardian in terms which in my judgement are suitable understood by the Patient/Next of Kin/Guardian.</b></p>
                <div class="form-group col-md-4">
                    <label for="">Surgeon/Medical Practitioner's signature</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Date</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Anaesthetist's signature</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Date</label>
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <p><b>CONSENT IN CASE OF EMERGENCY ADMISSION OF PATIENTS NOT FIT TO GIVE OWN CONSENT; IN ABSENCE SUITABLE GUARDIAN/NEXT OF KIN</b></p>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Surgeon/anaesthesia/medical practitioner name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Signature</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <p><b>5. Reference</b></p>
            <p>Anaesthesia - Short test book of Anaesthesia.</p>
            <p>Tissue disposal - Publichealth Act Capt.</p>
            <p><b>6. Appendices</b></p>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <div class="float-right">
                        <button class="btn btn-primary" type="submit">Edit</button>
                        <button class="btn btn-success" type="submit">Save</button>
                        <button class="btn btn-danger" type="submit">Delete</button>
                        <button class="btn btn-primary" type="submit">Print</button>
                        <button class="btn btn-success" type="submit">Export</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

       
    </div>
</div> 
@endsection