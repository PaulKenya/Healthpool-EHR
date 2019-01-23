@extends('layouts.master')

@section('footer')
<script>
    new Chart(document.getElementById("line-chart"), {
        type: 'line',
        data: {
            labels: [
                @if(isset($childtemperature_results))
                @foreach($childtemperature_results as $childtemperature_result)
                '{{$childtemperature_result->month}}',
                @endforeach
                @endif],
            datasets: [{
                data: [
                    @if(isset($childtemperature_results))
                    @foreach($childtemperature_results as $childtemperature_resultss)
                    {{$childtemperature_resultss->temp}},
                    @endforeach
                    @endif
                ],
                label: "temperature",
                borderColor: "#55e9ff",
                fill: false
            }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'temperature'
            }
        }
    });
</script>
@endsection
@section('content')
      @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">ATTENDANCE</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>ATTENDANCE FORM</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="card-header card-chart" data-background-color="black">
                        <canvas id="line-chart" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>
    <div class="col-md-4">

        <div class="content">
            <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add  Information</button>
            {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!— Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">ATTENDANCE</h4>
                </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="black">

                            </div>
                            <div class="card-content table-responsive">

                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                        PUBLIC HEALTH
                                    </H3>
                                </div>
                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                        temperature chart
                                    </H3>
                                </div>
                                <form action="{{route('childmonitemp_post',['patient_id'=>$patient_id])}}" method="post" enctype="multipart/form-data">{!! csrf_field() !!}
                                    <table class="table table-bordered">

                                        <table class="table-responsive">
                                            <thead>
                                            <tr>
                                                <th>TEMPERATURE IN 'C IN MONTHS</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                                <td>month</td>
                                                <td>temperature</td>


                                            </tr>
                                            <tr>
                                                <td><input type="date"   id="myDate" name="month"   readonly class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                <td><input type="float"  name="temp"  class="form-control" id="" aria-describedby="" placeholder=""></td>


                                            </tr>

                                            </tbody>
                                        </table>

                                        <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                        <input name="institution_id" type="text"  class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                        <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        <br>

                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <br>





    </div>
    </div>
    </div>
@endsection