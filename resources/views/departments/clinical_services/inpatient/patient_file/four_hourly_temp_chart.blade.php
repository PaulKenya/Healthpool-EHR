@extends('layouts.master')
@section('footer')
    <script>
        new Chart(document.getElementById("line-charts"), {
            type: 'line',
            data: {
                labels: ["03:00:00",
                    "07:00:00",
                    "11:00:00",
                    "03:00:00",
                    "07:00:00",
                    "11:00:00"],
                datasets: [{
                    data: [@if(isset($four_hourly_temp_charts))
                        @foreach($four_hourly_temp_charts as $four_hourly_temp_chartss)
                        {{$four_hourly_temp_chartss->resp}},
                        @endforeach
                        @endif],
                    label: "respirations(b/min)",
                    borderColor: "#3e95cd",
                    fill: false
                }, {
                    data: [@if(isset($four_hourly_temp_charts))
                        @foreach($four_hourly_temp_charts as $four_hourly_temp_chartsssss)
                        {{$four_hourly_temp_chartsssss->temp}},
                        @endforeach
                        @endif],
                    label: "temperature",
                    borderColor: "#8e5ea2",
                    fill: false
                },
                    {
                        data: [@if(isset($four_hourly_temp_charts))
                            @foreach($four_hourly_temp_charts as $four_hourly_temp_chartssss)
                            {{$four_hourly_temp_chartssss->pulse}},
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
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumb
    s-->
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
                            <th>date_of_admission</th>
                            <th>date_of_disease</th>
                            <th>time_for_measurement</th>
                            <th>temp</th>
                            <th>pulse</th>
                            <th>resp</th>
                            <th>bowels</th>
                            <th>urine</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($four_hourly_temp_charts))
                            @foreach($four_hourly_temp_charts as $four_hourly_temp_chart)
                                <tr>
                                    <td>{{ $four_hourly_temp_chart->date_of_admission}}</td>
                                    <td>{{ $four_hourly_temp_chart->date_of_disease}}</td>
                                    <td>{{ $four_hourly_temp_chart->time_for_measurement}}</td>
                                    <td>{{ $four_hourly_temp_chart->temp}}</td>
                                    <td>{{ $four_hourly_temp_chart->pulse}}</td>
                                    <td>{{ $four_hourly_temp_chart->resp}}</td>
                                    <td>{{ $four_hourly_temp_chart->bowels}}</td>
                                    <td>{{ $four_hourly_temp_chart->urine}}</td>
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
                            <form action="{{ route('four_hourly_temp_chart_post',['patient_id'=>$patient_id])}}" method="post" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                            <div class="col-md-12">
                                <div class="card">

                                    <div class="container-fluid">

                                            <h4>FOUR HOURLY TEMPERATURE CHART</h4>
                                            <div class="form-row">

                                                <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                <input name="institution_id" type="text" class="form-control" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">

                                                <div class="form-group col-md-2">
                                                    <label for="date_of_admission">Date of Admission</label>
                                                    <input type="date"
                                                           name="date_of_admission" id="date_of_admission" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="date_of_disease">Date of Disease</label>
                                                    <input type="date" name="date_of_disease" id="date_of_disease" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                {{--<div class="form-group col-md-6">--}}
                                                    {{--<label for="time_of_measurement">Time</label>--}}
                                                    {{--<select class="form-control" name="time_for_measurement" id="time_of_measurement">--}}
                                                        {{--<option value="03:00:00">03:00:00</option>--}}
                                                        {{--<option value="07:00:00">07:00:00</option>--}}
                                                        {{--<option value="11:00:00">11:00:00</option>--}}
                                                        {{--<option value="03:00:00">03:00:00</option>--}}
                                                        {{--<option value="07:00:00">07:00:00</option>--}}
                                                        {{--<option value="11:00:00">11:00:00</option>--}}
                                                    {{--</select>--}}
                                                {{--</div>--}}
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <h5>Measurements</h5>
                                                </div>


                                                <div class="form-group col-md-1">
                                                    <label for="temp">Temp</label>
                                                    <input type="number"
                                                           name="temp" id="temp" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="pulse">Pulse</label>
                                                    <input type="number"
                                                           name="pulse" id="pulse" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="resp">Resp(b/min)</label>
                                                    <input type="number"
                                                           name="resp" id="resp" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="bowels">Bowels</label>
                                                    <input type="number"
                                                           name="bowels" id="bowels" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="urine">Urine</label>
                                                    <input type="number"
                                                           name="urine" id="urine" class="form-control" placeholder="" aria-describedby="helpId">
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