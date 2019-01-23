<div class="panel-group accordion-stylist" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default" style="display:inline-block">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                    Register 1
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="">
            <div class="panel-body">

                <a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('diet_sheet')}}">Diet Sheet</a>

            </div>
        </div>
    </div>

    <div class="panel panel-default" style="display:inline-block">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Register 2
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">

                <a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('accident_and_emergency')}}">Accident And Emergency</a>

            </div>
        </div>
    </div>

    <div class="panel panel-default" style="display:inline-block">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Register 3
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">

                <a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('allergy_form',['patient_id'=>$patient_information->id])}}">Allergy Form</a>

            </div>
        </div>
    </div>

    <div class="panel panel-default" style="display:inline-block">
        <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Register 4
                </a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body">

                <a class=" btn waves-effect waves-light btn-rounded btn-info m-2 pf-btn" href="{{ route('patient_assessment_and_progress_card')}}">Patient Assessment And Progress Card</a>

            </div>
        </div>
    </div>

</div>