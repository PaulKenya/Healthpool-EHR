@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Finance</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-md-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('finance_banking_bankandcreditcards')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Bank and Credit Cards</a>
                    <a href="{{route('finance_banking_bankrules')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Bank Rules</a>
                </div>
            </div>
        </div>
    </div>

@endsection