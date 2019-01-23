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
                        <th>CWC NO.</th>
                        <th>RE-VISIT</th>
                        <th>FULL NAMES</th>
                        <th>AGE</th>
                        <th>SEX</th>
                        <th>SUBLOCATION</th>
                        <th>VILLAGE/ESTATE</th>
                        <th>ADDRESS</th>
                        <th>WEIGHT IN kgm</th>
                        <th>UW(Y/N)</th>
                        <th>DANGER SIGNS</th>
                        <th>Issued with a net this visit?(Y/N)</th>
                        <th>TYPE OF FOLLOW UP</th>
                        <th>REFFERAL</th>
                        <th>TOTAL NEW CLIENTS</th>
                        <th>TOTAL REVISITS</th>
                        <th>TOTAL NO ISSUED WITH ITNS</th>
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
                        <h4 class="modal-title">Add record</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="container">
                                    <h1 class="text-center">MOH 511 CHILD WELFARE CLINIC (CWC) REGISTER</h1>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>CWC No.</th>
                                                <th>Re-visit</th>
                                                <th>Full names</th>
                                                <th>Age</th>
                                                <th>Sex</th>
                                                <th>Sub location</th>
                                                <th>Village/Estate</th>
                                                <th>Address</th>
                                                <th>Weight in kgm</th>
                                                <th>UW(Y/N)</th>
                                                <th>Any danger signs this visit</th>
                                                <th>Issued with a net this visit?(Y/N)</th>
                                                <th>Type of follow-up</th>
                                                <th>Referral</th>
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
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td>
                                                    <select class="custom-select">
                                                        <option selected>Sex...</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
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
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan="8">
                                                    <label for="">Total New Clients:</label>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td colspan="8">
                                                    <label for="">Total Underweight:</label>
                                                    <input type="number" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="8">
                                                    <label for="">Total Re-visits:</label>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td colspan="8">
                                                    <label for="">Total Referrals</label>
                                                    <input type="number" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="16">
                                                    <label for="">Total No issued with ITNs:</label>
                                                    <input type="number" class="form-control">
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
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