@extends('layouts.master')
@section('footer')
<script>
    // Bar chart
    new Chart(document.getElementById("line-charts"), {
        type: 'line',
        data: {
            labels: [@if(isset($blood_pressure_chart))
                @foreach($blood_pressure_chart as $blood_pressureS)
                {{$blood_pressureS->month}},
                @endforeach
                @endif],
            datasets: [{
                data: [@if(isset($blood_pressure_chart))
                    @foreach($blood_pressure_chart as $blood_pressureSS)
                    {{$blood_pressureSS->systole}},
                    @endforeach
                    @endif],
                label: "systole",
                borderColor: "#3e95cd",
                fill: false
            }, {
                data: [@if(isset($blood_pressure_chart))
                    @foreach($blood_pressure_chart as $blood_pressureSSS)
                    {{$blood_pressureSSS->diastole}},
                    @endforeach
                    @endif],
                label: "diastole",
                borderColor: "#8e5ea2",
                fill: false
            }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'blood pressure'
            }
        }
    });
</script>
@endsection
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl"></h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>BLOOD PRESSURE CHART</h4>
            </div>

            <div class="card-body">
                <canvas id="line-charts" width="800" height="450"></canvas>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>month</th>
                            <th>systole</th>
                            <th>diastole</th>


                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($blood_pressure_chart))
                            @foreach($blood_pressure_chart as $blood_pressure)
                                <tr>
                                    <td>{{ $blood_pressure->month}}</td>
                                    <td>{{ $blood_pressure->systole}}</td>
                                    <td>{{ $blood_pressure->diastole}}</td>

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

                    <!— Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add  Information</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="container">
                                        <form action="{{route('blood_pressure_chart_post',['patient_id'=>$patient_id])}}" method="post" >
                                            {!! csrf_field() !!}
                                            <div class="row ">
                                                <div class="col-md-12 align-self-center text-center">
                                                    BLOOD PRESSURE CHART
                                                </div>
                                            </div>
                                            <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                            <input name="institution_id" type="text" class="form-control" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                            <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                            <div class="">
                                                <table class="table table-bordered">

                                                    <table class="table-responsive">
                                                        <thead>
                                                        <tr>
                                                            <th>BLOOD PRESSURE IN mmHg IN MONTHS</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        <td>month</td>
                                                        <td>systole</td>
                                                        <td>diastole</td>


                                                        </tr>
                                                        <tr>
                                                            <td><input type="date" id="myDate" name="month"  class="form-control" aria-describedby="" placeholder="" readonly></td>
                                                            <td><input type="float"  name="systole"  class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                            <td><input type="float"  name="diastole"  class="form-control" id="" aria-describedby="" placeholder=""></td>


                                                        </tr>

                                                        </tbody>


                                                </table>
                                                </table>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                                    <table class="table-responsive">
                                                        <thead>
                                                        <tr>
                                                            <th>BMI INDEX CALCULATOR</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>




                                                        </tr>
                                                        <tr>
                                                            <td>  <p>Enter your height: <input type="float" id="height" name="height"/>

                                                                    <select type="multiple" id="heightunits">

                                                                        <option value="metres" selected="selected">metres</option>

                                                                        <option value="inches">inches</option>

                                                                        <option value="cm">cm</option>

                                                                    </select>

                                                                </p></td>
                                                            <td> <p>Enter your weight: <input type="float" id="weight" name="weight"/>

                                                                    <select type="multiple" id="weightunits">

                                                                        <option value="kg" selected="selected">kilograms</option>

                                                                        <option value="lb">pounds</option>

                                                                    </select>

                                                                </p></td>


                                                            </body>

                                                        </tr>

                                                        </tbody>
                                                    </table>

                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary" value="computeBMI" onclick="computeBMI();">Compute</button>
                                                    </div>



                                                    <strong>Status:<span id="output"></span></strong><br>





                                                    <strong>This means you are: <span id="comment"></span> </strong>
                                            </div>
                                            <script type="text/javascript">

                                                function computeBMI()

                                                {

                                                    //Obtain user inputs

                                                    var height=Number(document.getElementById("height").value);

                                                    var heightunits=document.getElementById("heightunits").value;

                                                    var weight=Number(document.getElementById("weight").value);

                                                    var weightunits=document.getElementById("weightunits").value;









                                                    //Convert all units to metric

                                                    if (heightunits=="inches") height/=39.3700787;

                                                    if (weightunits=="lb") weight/=2.20462;

                                                    if (heightunits=="cm") height/=100;





                                                    //Perform calculation

                                                    var BMI=weight/Math.pow(height,2);





                                                    //Display result of calculation

                                                    document.getElementById("output").innerText=Math.round(BMI*100)/100;





                                                    var output =  Math.round(BMI*100)/100

                                                    if (output<18.5)

                                                        document.getElementById("comment").innerText = "Underweight";

                                                    else   if (output>=18.5 && output<=25)

                                                        document.getElementById("comment").innerText = "Normal";

                                                    else   if (output>=25 && output<=30)

                                                        document.getElementById("comment").innerText = "Obese";

                                                    else   if (output>30)

                                                        document.getElementById("comment").innerText = "Overweight";

                                                    // document.getElementById("answer").value = output;

                                                }

                                            </script>


                                    </div>
                                </div>
                            </div>
                                                    </div>


                                            </div>

                                        </form>
                                        <!--form here--->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection