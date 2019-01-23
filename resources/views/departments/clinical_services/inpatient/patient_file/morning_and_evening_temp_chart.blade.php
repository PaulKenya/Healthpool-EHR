@extends('layouts.master')
@section('footer')
    <script>
        new Chart(document.getElementById("line-charts"), {
            type: 'line',
            data: {
                labels: ["morning",
                    "everning"],
                datasets: [
                    {
                        data: [@if(isset( $morning_and_evening_temp_chart))
                            @foreach( $morning_and_evening_temp_chart as  $morning_and_evening_temp_chartss)
                            {{ $morning_and_evening_temp_chartss->temp}},
                            @endforeach
                            @endif],
                        label: "temperature",
                        borderColor: "#a21c1b",
                        fill: false
                    }
                ]
            },
            options: {
                title: {
                    display: true,
                    text: 'morning and evening temp'
                }
            }
        });
    </script>
@endsection
@section('content')
    <!-- Title & Breadcrumb
    s-->
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Morning Everning temperature chart record</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Morning Everning temperature chart record</h4>
                </div>
                <div class="card-body">
                    <canvas id="line-charts" width="800" height="450"></canvas>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped">
                            <thead>
                            <tr>

                                <th>time_for_measurement</th>

                                <th>pulse</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if(isset( $morning_and_evening_temp_chart))
                                @foreach( $morning_and_evening_temp_chart as  $morning_and_evening_temp_charts)
                                    <tr>
                                        <td>{{  $morning_and_evening_temp_charts->temp}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="content">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add more Items</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Four hourly temperature chart record</h4>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('morning_and_evening_temp_chart_post',['patient_id'=>$patient_id])}}" method="post" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <div class="col-md-12">
                                        <div class="card">

                                            <div class="container-fluid">

                                                <h4>Morning and everning temperature</h4>

                                                    <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                    <input name="institution_id" type="text" class="form-control" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                    <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                                <div class="form-group col-md-2">
                                                    <label for="temp">Temperature</label>
                                                    <input type="float"
                                                           name="temp" id="temp" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>

                                            </div>
                                            <button class="btn btn-success" type="submit">Submit</button>

                                        </div>

                                    </div>

                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection