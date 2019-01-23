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
                    <li role="presentation" class="active">
                        <a href="#injectionroom" aria-controls="home" role="tab" data-toggle="tab">Injection Room </a></li>
                    <li role="presentation"><a href="#triage" role="tab" data-toggle="tab">Triage</a></li>
                    <li role="presentation"><a href="#immunizationroom" role="tab" data-toggle="tab">Immunization Room</a></li>
                    <li role="presentation"><a href="#minortheatre" role="tab" data-toggle="tab">Minor theatre</a></li>
                    <li role="presentation"><a href="#procedureroom" role="tab" data-toggle="tab">Procedure room</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs" id="home">
                    <div role="tabpanel" class="tab-pane fade in active" id="injectionroom">

                        <p> injectionroom</p>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="triage">
                        <p>triage</p>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="immunizationroom">
                        <p>Immunization Room</p>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="minortheatre">
                        <p> Minor theatre</p>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="procedureroom">
                        <p> Procedure Room</p>
                    </div>

                </div>
            </div>
        </div>
    </div>





@endsection
