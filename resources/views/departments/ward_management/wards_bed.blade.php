@extends('layouts.master')

@section('content')
    <center>

    <button type="button" class="btn btn-outline-primary" href="{{route("wards")}}">
        <a class="nav-link" href="{{route('wards')}}" data-parent="#exampleAccordion" >

            <span class="nav-link-text">WARDS</span>
        </a>
    </button>

    <button type="button" class="btn btn-outline-primary" href="{{route("wards")}}">
        <a class="nav-link" href="{{route('bed')}}" data-parent="#exampleAccordion" >

            <span class="nav-link-text">BEDS</span>
        </a>
    </button>

    </center>
@endsection