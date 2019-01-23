@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->

    <div class="col-m-3 offset-md-2">
        <H3 class="mt-20 ">
            cards
        </H3>
    </div>


    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="d-flex flex-row mt-2">
                    <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">
                        <li class="nav-item">
                            <a href="#anc_card" class="nav-link active" data-toggle="tab" role="tab" aria-controls="anc_card">attendance card</a>
                        </li>

                        <li class="nav-item">
                            <a href="#vaccination" class="nav-link " data-toggle="tab" role="tab" aria-controls="vaccination">immunization record</a>
                        </li>
                        <li class="nav-item">
                            <a href="#yellow" class="nav-link " data-toggle="tab" role="tab" aria-controls="yellow">yellow fever immunization card</a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active " id="anc_card" role="tabpanel">
                            @include('departments.patient_profile.attendance_card')
                        </div>
                        <div class="tab-pane fade show active " id="vaccination" role="tabpanel">
                            @include('departments.patient_profile.immunization')
                        </div>
                        <div class="tab-pane fade show active " id="yellow" role="tabpanel">
                            @include('departments.patient_profile.yellow')
                        </div>




                    </div>



                </div>
            </div>
        </div>
    </div>
    </div>










@endsection

