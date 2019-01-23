@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>BTU</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>DATE</th>
                        <th>SERIAL NUMBER</th>
                        <th>CHILD'S NUMBER</th>
                        <th>CHILD'S NUMBER</th>
                        <th>CHILD'S NAMES</th>
                        <th>SEX</th>
                        <th>DATE OF BIRTH</th>
                        <th>DATE FIRST SEEN</th>
                        <th>FATHER'S FULL NAMES</th>
                        <th>MOTHER'S FULL NAMES</th>
                        <th>LOCATION</th>
                        <th>ADDRESS</th>
                        <th>REMARKS</th>
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
                        <h4 class="modal-title">Add cheque record</h4>
                    </div>
                    <div class="modal-body">
<div class="col-md-12">
    <div class="card">
        <div class="container-fluid">
        <h1 class="text-center">MOH 510 IMMUNISATION REGISTER FOR CHILDREN</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th colspan="23">DATE WHEN IMMUNISATION WAS GIVEN MUST BE INDICATED. TICKS OR CHECKS ARE NOT ACCEPTIBLE</th>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <th>Serial Number</th>
                        <th>Child's Number</th>
                        <th>Child's Names</th>
                        <th>Sex</th>
                        <th>Date of Birth</th>
                        <th>Date first Seen</th>
                        <th>Father's Full Names</th>
                        <th>Mother's Full Names</th>
                        <th>Location/Sub-location</th>
                        <th>Address</th>
                        <th>BCG</th>
                        <th>Revaccination</th>
                        <th>Polio birth Dose</th>
                        <th>1st Polio</th>
                        <th>2nd Polio</th>
                        <th>3rd Polio</th>
                        <th>DPT/Hep.B/Hib.1</th>
                        <th>DPT/Hep.B/Hib.2</th>
                        <th>DPT/Hep.B/Hib.3</th>
                        <th>Measles</th>
                        <th>Yellow fever</th>
                        <th>Vitamin A</th>
                        <th>Fully Immunized</th>
                        <th>Remarks</th>
                    </tr>
                    <tr>
                        <th>A</th>
                        <th>B</th>
                        <th>C</th>
                        <th>D</th>
                        <th>E</th>
                        <th>F</th>
                        <th>G</th>
                        <th>H</th>
                        <th>I</th>
                        <th>J</th>
                        <th>K</th>
                        <th>L</th>
                        <th>M</th>
                        <th>N</th>
                        <th>O</th>
                        <th>P</th>
                        <th>Q</th>
                        <th>R</th>
                        <th>S</th>
                        <th>T</th>
                        <th>U</th>
                        <th>V</th>
                        <th>W</th>
                        <th>X</th>
                        <th>Y</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="number" class="form-control">
                    </td>
                    <td>
                        <input type="number" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <select class="custom-select">
                            <option selected>Sex...</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div> 




        
    </div>
</div> 
@endsection