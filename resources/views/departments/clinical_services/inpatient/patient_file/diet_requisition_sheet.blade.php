@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">DIET REQUISITION FORM</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>DIET REQUISITION FORM</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ward</th>
                                <th>date</th>
                                <th>On_call</th>
                                <th>children</th>
                                <th>adults</th>
                                <th>well_people</th>
                                <th>patients_on_ngt</th>
                                <th>regular_diet</th>
                                <th>low_salt_diet</th>
                                <th>diabetic_diet</th>
                                <th>low_fat_diet</th>
                                <th>renal_diet</th>
                                <th>soft_light_diet</th>
                                <th>high_protein_diet</th>
                                <th>toto_diet</th>
                                <th>cocoa_with_sugar</th>
                                <th>porridge_with_sugar</th>
                                <th>white_bread</th>
                                <th>specify_any_other</th>
                                <th>MilkpacketsFresh</th>
                                <th>mala</th>
                                <th>f_seventy_five</th>
                                <th>f_one_hundred</th>
                                <th>special_uji</th>
                                <th>special_soup</th>
                                <th>enriched_lactose_free_uji</th>
                                <th>uji_without_sugar</th>
                                <th>tea_without_sugar</th>
                                <th>brown_bread</th>
                                <th>fruits</th>
                                <th>Eggs_Boiled</th>
                                <th>remarks</th>
                                <th>ordered_by</th>
                                <th>designation</th>
                                <th>signature</th>
                                <th>date1</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($diet_requisition_sheet_results))
                                @foreach($diet_requisition_sheet_results as $diet_requisition_sheet_result)
                                    <tr>
                                        <td>{{$diet_requisition_sheet_result->ward}}</td>
                                        <td>{{$diet_requisition_sheet_result->date}}</td>
                                        <td>{{$diet_requisition_sheet_result->On_call}}</td>
                                        <td>{{$diet_requisition_sheet_result->children}}</td>
                                        <td>{{$diet_requisition_sheet_result->adults}}</td>
                                        <td>{{$diet_requisition_sheet_result->well_people}}</td>
                                        <td>{{$diet_requisition_sheet_result->patients_on_ngt}}</td>
                                        <td>{{$diet_requisition_sheet_result->regular_diet}}</td>
                                        <td>{{$diet_requisition_sheet_result->low_salt_diet}}</td>
                                        <td>{{$diet_requisition_sheet_result->diabetic_diet}}</td>
                                        <td>{{$diet_requisition_sheet_result->low_fat_diet}}</td>
                                        <td>{{$diet_requisition_sheet_result->renal_diet}}</td>
                                        <td>{{$diet_requisition_sheet_result->soft_light_diet}}</td>
                                        <td>{{$diet_requisition_sheet_result->high_protein_diet}}</td>
                                        <td>{{$diet_requisition_sheet_result->toto_diet}}</td>
                                        <td>{{$diet_requisition_sheet_result->cocoa_with_sugar}}</td>
                                        <td>{{$diet_requisition_sheet_result->porridge_with_sugar}}</td>
                                        <td>{{$diet_requisition_sheet_result->white_bread}}</td>
                                        <td>{{$diet_requisition_sheet_result->specify_any_other}}</td>
                                        <td>{{$diet_requisition_sheet_result->MilkpacketsFresh}}</td>
                                        <td>{{$diet_requisition_sheet_result->mala}}</td>
                                        <td>{{$diet_requisition_sheet_result->f_seventy_five}}</td>
                                        <td>{{$diet_requisition_sheet_result->f_one_hundred}}</td>
                                        <td>{{$diet_requisition_sheet_result->special_uji}}</td>
                                        <td>{{$diet_requisition_sheet_result->special_soup}}</td>
                                        <td>{{$diet_requisition_sheet_result->enriched_lactose_free_uji}}</td>
                                        <td>{{$diet_requisition_sheet_result->uji_without_sugar}}</td>
                                        <td>{{$diet_requisition_sheet_result->tea_without_sugar}}</td>
                                        <td>{{$diet_requisition_sheet_result->brown_bread}}</td>
                                        <td>{{$diet_requisition_sheet_result->fruits}}</td>
                                        <td>{{$diet_requisition_sheet_result->Eggs_Boiled}}</td>
                                        <td>{{$diet_requisition_sheet_result->remarks}}</td>
                                        <td>{{$diet_requisition_sheet_result->ordered_by}}</td>
                                        <td>{{$diet_requisition_sheet_result->designation}}</td>
                                        <td>{{$diet_requisition_sheet_result->signature}}</td>
                                        <td>{{$diet_requisition_sheet_result->date1}}</td>
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
                                <h4 class="modal-title">DIET REQUISITION FORM</h4>
                            </div>
                            <form action="{{route('patient_file_diet_requisition_post')}}" method="post" >{!! csrf_field() !!}
                                <br>
                                <div class="container-fluid">
                                    <span class="row"> <span class="col-md-4">Ward</span> <span class="col-md-8"> <input type="text" name="ward" class=" form-control" placeholder=""></span></span><br>
                                    <span class="row"> <span class="col-md-4">  </span> <span class="col-md-8"> <input id="myDate"   type="date" name="date"  readonly class=" form-control" placeholder=""></span></span><br>
                                    On call:
                                    <input type="radio"  name="On_call"> YES
                                    <input type="radio"  name="On_call"> NO
                                    <br><br><br>



                                    <span class="row"> <span class="col-md-4">Total number of patients</span> <span class="col-md-8"> <input type="number" name="total_number_of_patients" class=" form-control" placeholder=""></span></span><br>
                                    <span class="row"> <span class="col-md-4">Children</span> <span class="col-md-8"> <input type="number" name="children" class=" form-control" placeholder=""></span></span><br>
                                    <span class="row"> <span class="col-md-4">Adults</span> <span class="col-md-8"> <input type="number" name="adults" class=" form-control" placeholder=""></span></span><br>
                                    <span class="row"> <span class="col-md-4">Well people</span> <span class="col-md-8"> <input type="number" name="well_people" class=" form-control" placeholder=""></span></span><br>
                                    <span class="row"> <span class="col-md-4">Patients on NGT</span> <span class="col-md-8"> <input type="number" name="patients_on_ngt" class=" form-control" placeholder=""></span></span><br>

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Description of item/diet</th>
                                            <th>No. of Pts</th>
                                            <th>Amount required</th>
                                            <th>Amount Issued</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Regular Diet</td>
                                            <td><input type="number" name="regular_diet" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Low salt Diet</td>
                                            <td><input type="number" name="low_salt_diet" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Diabetic Diet</td>
                                            <td><input type="number" name="diabetic_diet" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Low fat Diet</td>
                                            <td><input type="number" name="low_fat_diet" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Renal Diet</td>
                                            <td><input type="number" name="renal_diet" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Soft light Diet</td>
                                            <td><input type="number" name="soft_light_diet" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>High protein diet(HBV)</td>
                                            <td><input type="number" name="high_protein_diet" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Toto Diet</td>
                                            <td><input type="number" name="toto_diet" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Tea/cocoa with sugar</td>
                                            <td><input type="number" name="cocoa_with_sugar" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Porridge with sugar</td>
                                            <td><input type="number" name="porridge_with_sugar" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>White bread(slices)</td>
                                            <td><input type="number" name="white_bread" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Specify any other</td>
                                            <td><input type="number" name="specify_any_other" class=" form-control" placeholder=""></td>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Description of item/diet</th>
                                            <th>No. of Pts</th>
                                            <th>Amount required</th>
                                            <th>Amount Issued</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Special feeds</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td rowspan="2">Milk packets:Fresh<br><br><br>Mala</td>
                                            <td><input type="number" name="MilkpacketsFresh" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td></td>

                                            <td><input type="number" name="mala" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>F75</td>
                                            <td><input type="number" name="f_seventy_five" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>F100</td>
                                            <td><input type="number" name="f_one_hundred" class=" form-control" placeholder=""></td>

                                        <tr>
                                            <td>4</td>
                                            <td>Special uji</td>
                                            <td><input type="number" name="special_uji" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Special soup</td>
                                            <td><input type="number" name="special_soup" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Enriched Lactose free uji</td>
                                            <td><input type="number" name="enriched_lactose_free_uji" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Uji without sugar</td>
                                            <td><input type="number" name="uji_without_sugar" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Tea without sugar</td>
                                            <td><input type="number" name="tea_without_sugar" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Brown bread</td>
                                            <td><input type="number" name="brown_bread" class=" form-control" placeholder=""></td>

                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>fruits</td>
                                            <td><input type="number" name="fruits" class=" form-control" placeholder=""></td>

                                        </tr>

                                        <tr>
                                            <td>11</td>
                                            <td rowspan="2">Eggs:Boiled<br><br><br>Fried</td>
                                            <td><input type="number" name="Eggs_Boiled" class=" form-control" placeholder=""></td>

                                        </tr>


                                        </tbody>
                                    </table>
                                    <span class="row"> <span class="col-md-4">Remarks</span> <span class="col-md-8"> <textarea type="text" name="remarks" class=" form-control" placeholder=""></textarea></span></span><br>
                                    <span class="row"> <span class="col-md-4">ORDERED BY: Name</span> <span class="col-md-8"> <input type="text" name="ordered_by" class=" form-control" placeholder=""></span></span><br>
                                    <span class="row"> <span class="col-md-4">Designation</span> <span class="col-md-8"> <input type="text" name="designation" class=" form-control" placeholder=""></span></span><br>
                                    <span class="row"> <span class="col-md-4">Signature</span> <span class="col-md-8"> <input type="text" name="signature" class=" form-control" placeholder=""></span></span><br>
                                    <span class="row"> <span class="col-md-4"> </span> <span class="col-md-8"> <input type="date"  id="myDate1" name="date1" class="  form-control" readonly placeholder=""></span></span>
                                    <br><br>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection