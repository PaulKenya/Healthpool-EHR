<!-- General patient Files-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">General patient Files </h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">
                    <a href="{{ Route::currentRouteName()}}/casedeath" class="btn waves-effect waves-light btn-primary">Case Death Summary</a>
                    <a href="{{ Route::currentRouteName()}}/labrequest" class="btn waves-effect waves-light btn-primary">Lab request form </a>
                    <a href="{{ Route::currentRouteName()}}/consultationrequest" class="btn waves-effect waves-light btn-primary">Consultation Request   </a>
                    <a href="{{ Route::currentRouteName()}}/ecgrequest" class="btn waves-effect waves-light btn-primary">ECG Request </a>
                    <a href="{{ Route::currentRouteName()}}/fluidintake" class="btn waves-effect waves-light btn-primary">Fluid intake Form </a>
                    {{--<a href="{{ Route::currentRouteName()}}/theatre" class="btn waves-effect waves-light btn-primary">Theatre</a>--}}
                    <a href="{{ Route::currentRouteName()}}/treatment_sheet" class="btn waves-effect waves-light btn-primary">Treatment Sheet</a>
                    <a href="{{ Route::currentRouteName()}}/request_for_appliance" class="btn waves-effect waves-light btn-primary">Request for appliance</a>
                    <a href="{{ Route::currentRouteName()}}/radiology_request_form" class="btn waves-effect waves-light btn-primary">Radiology request form</a>
                    <a href="{{ Route::currentRouteName()}}/patient_consent" class="btn waves-effect waves-light btn-primary">Patient consent</a>
                    <a href="{{ Route::currentRouteName()}}/daily_ward_report" class="btn waves-effect waves-light btn-primary">Daily ward report</a>
                    {{--<a href="{{ Route::currentRouteName()}}/xrayrequest" class="btn waves-effect waves-light btn-primary">X-ray request  </a>--}}
                </div>
            </div>
        </div>
    </div>
</div>


