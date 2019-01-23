@extends('layouts.app')

@section('content')
<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">Case Death Summary</h4>
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
            <div class="container">
                <h2 class="text-center">CASE/DEATH SUMMARY</h2>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="">OP/IP NO</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="">Age</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Address</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Clinic/Ward</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Date of Admission</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Date of Discharge</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Consultants</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Diagnosis</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Complaints</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Physical Findings</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Investigations</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Management</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Outcome/Discharge Instructions</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <b><p>Follow Up Clinic</p></b>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Name of the clinic</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Firm</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Day</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Date</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Time</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="">Doctor's Name(Print)</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Sign</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <i>&copy; Kenyatta National Hospital</i>
                </form>
            </div>
        </div>
    </div>
@endsection