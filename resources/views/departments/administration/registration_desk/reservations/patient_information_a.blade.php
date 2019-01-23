@extends('layouts.master')
@section('content')

<div class="card"> 
        <div class="card-header">
            <h4>PATIENT INFOERMATION REPORT</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NAME</th>
                        <th>TITLE</th>
                        <th>SEX</th>
                        <th>MARRIED</th>
                        <th>COMPANY</th>
                        <th>DISTRICT</th>
                        <th>LOCATION</th>
                        <th>BIRTH DATE</th>
                        <th>AGE</th>
                        <th>PHONE NUMBER</th>
                        <th>SUBLOCATION</th>
                        <th>DIVISION</th>
                        <th>VILLAGE</th>
                        <th>ID/PASSPORT NO</th>
                        <th>NEXT OF KIN NAME</th>
                        <th>NEXT OF KIN RELATIONSHIP</th>
                        <th>PHONE NO</th>
                        <th>RELIGION</th>
                        <th>OCCUPATION</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
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
                        <h4 class="modal-title">Add Patient Information</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="container">
                                    <h2 class="text-center"></h2>
                                    <p class="text-center">.</p>
                                    <p class="text-center"></p>

                                    <b><p>PATIENT INFORMATION APPLICATION FORM- <i>To be completed by administrator in charge of case.</i></p></b>
                                    <div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">PATIENT INFORMATION APPLICATION FORM</h4>
    </div>
</div>
<div class="col-md-12">
<div class="card">

<div class="col-m-3 offset-md-2">
  <H3 class="mt-20 ">
    PATIENT INFORMATION
  </H3>
    <form action="{{route('patient_information_a_post')}}" method="post" >{!! csrf_field() !!}

<div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">NAME:</label>
         <div class="col-sm-6">
        <input type="name" name="name" class="form-control" placeholder="">
</div>
</div>
<div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">TITLE:</label>
         <div class="col-sm-6">
        <input type="text" name="title" class="form-control" placeholder="">
 </div>
</div>
<div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">SEX:</label>
         <div class="col-sm-6">
        <input type="checkbox" name="sex" placeholder="">Male<br>
        <input type="checkbox" name="sex" placeholder="">Female<br>
</div>
</div>
<div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">MARRIED:</label>
        <div class="col-sm-6">
        <input type="checkbox" name="married" placeholder="">Single<br>
        <input type="checkbox" name="married" placeholder="">Married<br>
</div>
</div>
<div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">COMPANY:</label>
         <div class="col-sm-6">
        <input type="checkbox" name="company" placeholder="">Self<br>
        <input type="checkbox" name="company" placeholder="">Not Self<br>
 </div>
</div>
 <div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">DISTRICT:</label>
         <div class="col-sm-6">
        <input type="text" name="district" class="form-control" placeholder="">
 </div>
</div>
 <div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">LOCATION:</label>
         <div class="col-sm-6">
        <input type="text" name="location" class="form-control" placeholder="">
 </div>
</div>
 <div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">BIRTH DATE:</label>
         <div class="col-sm-6">
        <input type="date" name="birth_date" class="form-control" placeholder="">
 </div>
</div>
 <div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">AGE:</label>
         <div class="col-sm-6">
        <input type="number" name="age" class="form-control" placeholder="">
 </div>
</div>
 <div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">PHONE NUMBER:</label>
         <div class="col-sm-6">
        <input type="number" name="phone_number" class="form-control" placeholder="">
 </div>
</div>
 <div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">SUBLOCATION:</label>
         <div class="col-sm-6">
        <input type="text" name="sub_location" class="form-control" placeholder="">
 </div>
</div>
 <div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">DIVISION:</label>
         <div class="col-sm-6">
        <input type="text" name="division" class="form-control" placeholder="">
 </div>
</div>
 <div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">VILLAGE:</label>
         <div class="col-sm-6">
        <input type="text" name="village" class="form-control" placeholder="">
 </div>
</div>
 <div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">ID/PASSPORT NO:</label>
         <div class="col-sm-6">
        <input type="number" name="id_passport_no" class="form-control" placeholder="">
 </div>
</div>
 <div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">NEXT OF KIN NAME:</label>
         <div class="col-sm-6">
        <input type="name" name="next_of_kin_name" class="form-control" placeholder="">
 </div>
</div>
 <div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">NEXT OF KIN RELATIONSHIP:</label>
         <div class="col-sm-6">
        <input type="text" name="next_of_kin_relationship" class="form-control" placeholder="">
 </div>
</div>
 <div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">PHONE NO:</label>
         <div class="col-sm-6">
        <input type="number" name="phone_no" class="form-control" placeholder="">
 </div>
</div>
 <div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">RELIGION:</label>
         <div class="col-sm-6">
        <input type="text" name="religion" class="form-control" placeholder="">
 </div>
</div>
 <div class="form-group row ">
        <label for="staticEmail" class="col-sm-3 col-form-label">OCCUPATION:</label>
         <div class="col-sm-6">
        <input type="text" name="occupation" class="form-control" placeholder="">
 </div>
</div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
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
