@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Clinical Services - Labor Ward</h4>
        </div>
    </div>

    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">
                    <a href="{{ route('clinicalservices_maternity_pdr') }}" class="btn waves-effect waves-light btn-primary">Pre Delivery Room</a>
                    <a href="{{ route('clinicalservices_maternity_dr') }}" class="btn waves-effect waves-light btn-primary">Delivery Room</a>
                    <a href="{{ route('clinicalservices_maternity_podr') }}" class="btn waves-effect waves-light btn-primary">Post Delivery Room</a>
                </div>
            </div>
        </div>
    </div>
@endsection