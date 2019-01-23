@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->

    <div class="col-m-3 offset-md-2">
        <H3 class="mt-20 ">
            emergency services
        </H3>
    </div>


    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="d-flex flex-row mt-2">
                    <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">
                        <li class="nav-item">
                            <a href="#telemed" class="nav-link active" data-toggle="tab" role="tab" aria-controls="telemed">tele-medicine</a>
                        </li>

                        <li class="nav-item">
                            <a href="#ambulance" class="nav-link " data-toggle="tab" role="tab" aria-controls="ambulance">ambulance</a>
                        </li>

                        <li class="nav-item">
                            <a href="#first" class="nav-link " data-toggle="tab" role="tab" aria-controls="first">Emergency First Aid & CPR</a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active " id="telemed" role="tabpanel">
                            @include('departments/patient_profile/telemedicine')
                        </div>
                        <div class="tab-pane fade show active " id="ambulance" role="tabpanel">
                            @include('departments/patient_profile/ambulance')
                        </div>
                        <div class="tab-pane fade show active " id="first" role="tabpanel">
                            @include('departments/patient_profile/firstaid')
                        </div>




                    </div>



                </div>
            </div>
        </div>
    </div>
    </div>










@endsection

