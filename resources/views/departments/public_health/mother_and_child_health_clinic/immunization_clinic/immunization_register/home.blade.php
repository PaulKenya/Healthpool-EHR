@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Immunization Register</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <!--Row-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('ic_ir_moh_510')}}" class="btn btn-lg btn-primary" style="margin: 5px;">MOH 510 Form</a>
                    <a href="{{route('ic_ir_moh_510_ir_for_children')}}" class="btn btn-lg btn-primary" style="margin: 5px;">MOH 510 Immunization Register for Children Form</a>
                    <a href="{{route('ic_ir_and_vitamin_a_tally_sheet')}}" class="btn btn-lg btn-primary" style="margin: 5px;">MOH 702 Immunization and Vitamin A Tally Sheet Form</a>
                    <a href="{{route('ic_ir_and_vitamin_a_summary_sheet')}}" class="btn btn-lg btn-primary" style="margin: 5px;">MOH 710 Immunization and Vitamin A Summary Sheet Form</a>
                </div>
            </div>
        </div>
    </div>

@endsection