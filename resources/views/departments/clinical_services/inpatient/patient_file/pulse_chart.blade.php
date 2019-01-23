@extends('layouts.master')
@section('footer')
    <script>
        new Chart(document.getElementById("line-charts"), {
            type: 'line',
            data: {
                labels: ["01:00:00",
                    "02:00:00",
                    "03:00:00",
                    "04:00:00",
                    "05:00:00",
                    "06:00:00",
                    "07:00:00","08:00:00","09:00:00","10:00:00","11:00:00","12:00:00","13:00:00","14:00:00","15:00:00","16:00:00","17:00:00",

                    "18:00:00",
                    "19:00:00",
                    "20:00:00",
                    "21:00:00",
                    "22:00:00","23:00:00","24:00:00"],
                datasets: [
                    {
                        data: [@if(isset($pulse_chart))
                            @foreach($pulse_chart as $pulse_chartss)
                            {{$pulse_chartss->pulse}},
                            @endforeach
                            @endif],
                        label: "pulse",
                        borderColor: "#a21c1b",
                        fill: false
                    }
                ]
            },
            options: {
                title: {
                    display: true,
                    text: 'four hourly'
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
            <h4 class="theme-cl">Four hourly temperature chart record</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Four hourly temperature chart record</h4>
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
                            @if(isset($pulse_chart))
                                @foreach($pulse_chart as $pulse_charts)
                                    <tr>
                                        <td>{{ $pulse_charts->pulse}}</td>
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
                                <form action="{{ route('pulse_chart_post',['patient_id'=>$patient_id])}}" method="post" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <div class="col-md-12">
                                        <div class="card">

                                            <div class="container-fluid">

                                                <h4>PULSE CHART</h4>
                                                <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                <input name="institution_id" type="text" class="form-control" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                                    <div class="form-group col-md-2">
                                                        <label for="pulse">Pulse</label>
                                                        <input type="number"
                                                               name="pulse" id="pulse" class="form-control" placeholder="" aria-describedby="helpId">
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