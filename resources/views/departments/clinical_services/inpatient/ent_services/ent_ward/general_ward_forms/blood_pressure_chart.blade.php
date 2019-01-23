@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Nursing form</h4>
        </div>
    </div>
    <div class="col-md-12">


        <div class="card">
            <div class="card-header">
                <h4> Records</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Title1</th>
                            <th>Title2</th>
                            <th>Title3</th>
                            <th>Title4</th>
                            <th>Title5</th>
                            <th>Title6</th>
                            <th>Title7</th>
                            <th>Title8</th>
                            <th>Title9</th>
                            <th>Title10</th>
                            <th>Title11</th>
                            <th>Title12</th>
                            <th>Title14</th>
                            <th>Title15</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data1 </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                        </tr>
                        <tr>

                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data1 </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                            <td>data </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">

            <div class="content">
                <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Records</button>
                {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">


                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Record</h4>
                    </div>
                </div>

            </div>
            <div class="modal-body">
            </div>
            <div class="col-md-12">
                <div class="card">




                    <div class="col-m-3 offset-md-2">
                        <H3 class="mt-20 ">
                            DIABETIC CHART
                        </H3>
                    </div>
                    <br>
                    <form action="{{route('nursing_post')}}" method="post" >{!! csrf_field() !!}
                        <input type="hidden" name="departments" value="default">
                        <div class="row ">
                            <div class="col-md-4">
                                <div class="form-group row ">
                                    <label for="staticEmail" class="col-form-label ">PATIENT'S NAME:</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="patient_name" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row ">
                                    <label for="staticEmail" class="col-form-label ">I.P.NUMBER:</label>
                                    <div class="col-sm-8">
                                        <input type="	datetime" name="ip_number" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-3">
                                <label for="staticEmail" class="col-form-label ">MONTH:</label>
                                <div class="col-sm-8">
                                    <input type="number" name="month" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row col-md-2">
                                <label for="staticEmail" class="col-form-label ">YEAR:</label>
                                <div class="col-sm-8">
                                    <input type="number" name="year" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td>DATE</td>
                                <td></td>
                                <td><input type="date" name="date" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>TIME</td>
                                <td></td>
                                <td><input type="time" name="time" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td rowspan="6">URINE TESTING</td>
                                <td>SUGAR 2%</td>
                                <td><input type="number" name="sugar2" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>SUGAR 1%</td>
                                <td><input type="number" name="sugar1" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>SUGAR 1/2%</td>
                                <td><input type="number" name="sugar1/2" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>SUGAR 1/4%</td>
                                <td><input type="number" name="sugar1/4" class="form-control" placeholder=""></td>

                            </tr><tr>
                                <td>SUGAR NIL</td>
                                <td><input type="number" name="sugar_nil" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>ACETONE</td>
                                <td><input type="number" name="acetone" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>INSULIN (Dose) unit</td>
                                <td><input type="number" name="insulin" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>ORAL DRUG (Dose) mg.</td>
                                <td><input type="number" name="oral_drug" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>BLOOD SUGAR mgm.%</td>
                                <td><input type="number" name="blood_sugar" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>WEIGHT (kg)</td>
                                <td><input type="number" name="weight" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>DATE</td>
                                <td><input type="date" name="" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>TIME</td>
                                <td><input type="time" name="" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td rowspan="6">URINE TESTING</td>
                                <td>SUGAR 2%</td>
                                <td><input type="number" name="" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>SUGAR 1%</td>
                                <td><input type="number" name="" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>SUGAR 1/2%</td>
                                <td><input type="number" name="" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>SUGAR 1/4%</td>
                                <td><input type="number" name="" class="form-control" placeholder=""></td>

                            </tr><tr>
                                <td>SUGAR NIL</td>
                                <td><input type="number" name="" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>ACETONE</td>
                                <td><input type="number" name="" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>INSULIN (Dose) unit</td>
                                <td><input type="number" name="" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>ORAL DRUG (Dose) mg.</td>
                                <td><input type="number" name="" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>BLOOD SUGAR mgm.%</td>
                                <td><input type="number" name="" class="form-control" placeholder=""></td>

                            </tr>
                            <tr>
                                <td>WEIGHT (kg)</td>
                                <td><input type="number" name="" class="form-control" placeholder=""></td>

                            </tr>


                            </tbody>

                        </table>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>



                </div>
            </div>
@endsection