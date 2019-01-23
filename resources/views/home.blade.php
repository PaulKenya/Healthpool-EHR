@extends('layouts.master')

@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <!-- Title & Breadcrumbs-->
            <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                    <h4 class="theme-cl">{{ Auth::user()->institution->name }}</h4>
                    <h4 class="theme-cl">Role:{{ Auth::user()->roles->role_name }}</h4>
                </div>
            </div>
    </div>
@endsection