@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h3 class="theme-cl">Anaesthesia  </h3>
        </div>
    </div>

    <div class="col-md-12 col-sm-12">
        <div class="card padd-15">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Anaestehesia </a></li>
                    <li role="presentation"><a href="#Section2" role="tab" data-toggle="tab">Theater Form</a></li>
                    <li role="presentation"><a href="#Section3" role="tab" data-toggle="tab">Consent form</a></li>
                    <li role="presentation"><a href="#Section4" role="tab" data-toggle="tab">Operative Checklist</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs" id="home">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">

                        <p> Anaesthesia</p>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <p>Form not available</p>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                        <p> Consent form </p>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="Section4">
                        <p> Operative checklist</p>
                    </div>

                </div>
            </div>
        </div>
    </div>





@endsection
