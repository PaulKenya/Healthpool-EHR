@extends('layouts.master')

@section('content')

    <div id="comprehensive_care_centre">
        <!-- Title & Breadcrumbs-->
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h4 class="theme-cl">Comprehensive Care Centre</h4>
            </div>
        </div>
        <!-- Title & Breadcrumbs-->
        <!--Row-->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card" >
                    <div class="card-block">
                        <a href="{{route('cancer_records_management')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Cancer Records Management</a>
                        <a href="{{route('canregdata')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Canreg Data upload</a>
                        <a href="{{route('contact')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Canreg Data import</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection