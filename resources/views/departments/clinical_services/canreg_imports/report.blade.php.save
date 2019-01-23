@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl offset-4">Canreg5 Cancer File Import</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="offset-4">Canreg5 Cancer File Import</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped">
                        <thead>
                        <tr>
                            <th>file name</th>
                            <th>id</th>
                            <th>age</th>
                            <th>county referred</th>
                            <th>county</th>
                            <th>incidence date</th>
                            <th>primary site</th>
                            <th>final diagnosis</th>
                            <th>behaviour</th>
                            <th> basis diagnosis</th>
                            <th>concurrent illness</th>
                            <th>grade</th>
                            <th>stage</th>
                            <th>patient serial number</th>
                            <th>sex</th>
                            <th>occupation</th>
                            <th>date last contact</th>
                            <th>status</th>
                            <th>surgery treatment</th>
                            <th>surgery treatment date</th>
                            <th>chemotherapy treatment</th>
                            <th>chemotherapy treatment_date</th>
                            <th>radiotherapy treatment</th>
                            <th>radiotherapy treatment date</th>
                            <th>other treatment</th>
                            <th>hospital number</th>
                            <th>_if dead cause</th>
                            <th>remarks_if any</th>
                            <th>religion</th>
                            <th>smoking status</th>
                            <th>drinking statu</th>
                            <th>hospital status</th>
                            <th>reffered from 1</th>
                            <th>ip no 1</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($csv))
                            @foreach($csv as $csvs)
                                @php
                                    $test = json_decode($csvs->csv_data, true);
                                        @endphp
@if(isset($test))
                                @foreach($test as $data)
                                    <tr>
                                        <td>{{$csvs->csv_filename}}</td>
                                        <td>{{$csvs->csv_header}}</td>
@if(isset($data))
                                        @foreach($data as $datas)
                                            <td>{{$datas}}</td>
                                        @endforeach
@endif
                                    </tr>
                                @endforeach
@endif
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                        <div class="card-block">
                            <a href="{{route('import')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Canreg Data import</a>
                        </div>
                        <div class="card-block">
                            <a href="{{route('canreg_analytics')}}" class="btn btn-lg btn-primary" style="margin: 5px;">CANCER REGISTRY DATA ANALYTICS</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
        </div>

@endsection
