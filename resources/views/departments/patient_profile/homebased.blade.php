@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->

    <div class="col-m-3 offset-md-2">
        <H3 class="mt-20 ">
           home based care
        </H3>
    </div>


    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="d-flex flex-row mt-2">
                    <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">
                        <li class="nav-item">
                            <a href="#hospitals" class="nav-link active" data-toggle="tab" role="tab" aria-controls="hospitals">hospitals</a>
                        </li>

                        <li class="nav-item">
                            <a href="#agencies" class="nav-link " data-toggle="tab" role="tab" aria-controls="agencies">agencies</a>
                        </li>
                        <li class="nav-item">
                            <a href="#nurse" class="nav-link " data-toggle="tab" role="tab" aria-controls="nurse">nurse</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active " id="hospitals" role="tabpanel">
                            @include('departments/patient_profile/hospitals')
                        </div>
                        <div class="tab-pane fade show active " id="agencies" role="tabpanel">
                            @include('departments/patient_profile/agencies')
                        </div>
                        <div class="tab-pane fade show active " id="nurse" role="tabpanel">
                            @include('departments/patient_profile/nurse')
                        </div>




                    </div>



                </div>
            </div>
        </div>
    </div>
    </div>










@endsection

