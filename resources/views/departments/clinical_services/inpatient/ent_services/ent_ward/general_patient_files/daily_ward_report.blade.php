@extends('layouts.app')

@section('content')
<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">Daily Ward Report</h4>
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
<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">DAILY WARD REPORT</h4>
    </div>
</div>    

<div class="col-md-12">
    <div class="card">
        <div class="container-fluid">
        <form>
            <div class="form-group">
                <label for="">NOTIFICATION OF DEATHS</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">NAMES</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="">*WARD/DEPT</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">AGE</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">SEX</label>
                    <select class="custom-select">
                        <option selected></option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="">RESIDENCE</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="">*IP/OP NO</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group col-md-5">
                    <label for="">DATE OF ADMISSION</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">TIME</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">DATE OF DEATH</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">TIME</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="">DIAGNOSIS</label>
                <textarea class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">ADDRESS</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">NAME & ADDRESS OF HOSPITAL THE PATIENT WAS REFERRED FROM(for referrals only)</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">*NEXT OF KIN/HOSPITAL OFFICIAL(of transferring hospital)INFORMED</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">*RELATIONSHIP/DESIGNATION</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">(signature of ward nurse)</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">*(acn/Dcn/Cn's signature)</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">*(Can/Dcn/Cn's signature)</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <p>(After relatives have been informed)</p>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">DATE</label>
                    <input type="date" class="form-control">
                </div>
            </div>
            <p><b><i>*Delete where applicable. Do not use abbreviations. Two original copies to be filled for referrals</i></b></p>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <div class="float-right">
                        <button class="btn btn-primary" type="submit">Edit</button>
                        <button class="btn btn-success" type="submit">Save</button>
                        <button class="btn btn-danger" type="submit">Delete</button>
                        <button class="btn btn-primary" type="submit">Print</button>
                        <button class="btn btn-success" type="submit">Export</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
        
    </div>
</div> 
@endsection