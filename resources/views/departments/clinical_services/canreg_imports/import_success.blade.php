@extends('layouts.master')

@section('content')
    <div id="comprehensive_care_centre">
        <!-- Title & Breadcrumbs-->
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h4 class="theme-cl">Csv imports</h4>
            </div>
        </div>
        <!-- Title & Breadcrumbs-->
        <!--Row-->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card" >
                    <div class="card-block">

                    <div class="panel-body">
                        Data imported successfully.
                    </div>
                    <a href="{{route('contact')}}" class="btn btn-lg btn-primary" style="margin: 5px;">report</a>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
