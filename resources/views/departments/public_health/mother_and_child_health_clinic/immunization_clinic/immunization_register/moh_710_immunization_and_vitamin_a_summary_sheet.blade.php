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
                    <th>PROVINCE</th>
                    <th>DISTRICT</th>
                    <th>FACILITY NAME</th>
                    <th>AGENCY</th>
                    <th>MONTH</th>
                    <th>YEAR</th>
                    <th>CONSTITUENCY</th>
                    <th>NO OF IMMUNIZING HEALTH FACILITIES</th>
                    <th>TOTAL NO OF REPORTING EPI</th>
                    <th>SUBMISSION DATES OF SUMMARY FORMS</th>
                    <th>BY</th>
                    <th>DESIGNATION</th>
                    <th>SIGNATURE</th>
                    <th>RECEIVED BY</th>
                    <th>DESIGNATION</th>
                    <th>SIGNATURE</th>
                    <th>DATE</th>
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
                        <h4 class="modal-title">Add cheque record</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="container">
                                    <div class="row page-titles">
                                        <div class="col-md-12 align-self-center text-center">
                                            <h4 class="theme-cl">IMMUNIZATION AND VITAMIN A SUMMARY SHEET</h4>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="form-group row col-md-4">
                                                    <label for="date" class="col-sm-4 col-form-label">PROVINCE:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control form-control-full" id="exampleFormControlInput1" ">
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-4">
                                                    <label for="date" class="col-sm-4 col-form-label">DISTRICT:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control form-control-full" id="exampleFormControlInput1" ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="form-group row col-md-4">
                                                    <label for="date" class="col-sm-4 col-form-label">FACILITY NAME:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control form-control-full" id="exampleFormControlInput1" ">
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-4">
                                                    <label for="date" class="col-sm-4 col-form-label">AGENCY:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control form-control-full" id="exampleFormControlInput1" ">
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-4">
                                                    <label for="date" class="col-sm-4 col-form-label">MONTH:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control form-control-full" id="exampleFormControlInput1" ">
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-4">
                                                    <label for="date" class="col-sm-4 col-form-label">YEAR:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control form-control-full" id="exampleFormControlInput1" ">
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-6">
                                                    <label for="date" class="col-sm-4 col-form-label">CONSTITUENCY:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control form-control-full" id="exampleFormControlInput1" ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="form-group row col-md-6">
                                                    <label for="date" class="col-sm-4 col-form-label">Number of Immunizing health facilities during the month:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control form-control-full" id="exampleFormControlInput1" ">
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-6">
                                                    <label for="date" class="col-sm-4 col-form-label">Total number of Reporting EPI Health Facilities:</label>
                                                    <div class="col-sm-8">
                                                        <input type="email" class="form-control form-control-full" id="exampleFormControlInput1" ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <p class="text-center">FILL SECTION A AND B OF THIS FORM AS COMPLETELY AS POSSIBLE; IN SECTION B ONLY MONTHLY TOTAL SHOULD BE FILLED OUT AT HEALTH FACILITY LEVEL</p>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th colspan="35" class="text-center">SECTION A</th>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <th>ANTIGEN FACILITY</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th rowspan="2" class="text-center">TOTALS</th>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <th colspan="2">DAYS OF THE MONTH</th>
                                                    <th>1</th>
                                                    <th>2</th>
                                                    <th>3</th>
                                                    <th>4</th>
                                                    <th>5</th>
                                                    <th>6</th>
                                                    <th>7</th>
                                                    <th>8</th>
                                                    <th>9</th>
                                                    <th>10</th>
                                                    <th>11</th>
                                                    <th>12</th>
                                                    <th>13</th>
                                                    <th>14</th>
                                                    <th>15</th>
                                                    <th>16</th>
                                                    <th>17</th>
                                                    <th>18</th>
                                                    <th>19</th>
                                                    <th>20</th>
                                                    <th>21</th>
                                                    <th>22</th>
                                                    <th>23</th>
                                                    <th>24</th>
                                                    <th>25</th>
                                                    <th>26</th>
                                                    <th>27</th>
                                                    <th>28</th>
                                                    <th>29</th>
                                                    <th>30</th>
                                                    <th>31</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th rowspan="2" scope="row">1</th>
                                                    <th rowspan="2">BCG</th>
                                                    <th>Under 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Above 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="2" scope="row">2</th>
                                                    <th rowspan="2">DPT;Hep B/HB<sub>1</sub></th>
                                                    <th>Under 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Above 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="2" scope="row">3</th>
                                                    <th rowspan="2">DPT;Hep B/HB<sub>2</sub></th>
                                                    <th>Under 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Above 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="2" scope="row">4</th>
                                                    <th rowspan="2">DPT;Hep B/HB<sub>3</sub></th>
                                                    <th>Under 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Above 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="2" scope="row">5</th>
                                                    <th rowspan="2">OPV (Birth dose)</th>
                                                    <th>Under 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Above 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="2" scope="row">7</th>
                                                    <th rowspan="2">OPV<sub>1</sub></th>
                                                    <th>Under 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Above 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="2" scope="row">7</th>
                                                    <th rowspan="2">OPV<sub>2</sub></th>
                                                    <th>Under 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Above 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="2" scope="row">8</th>
                                                    <th rowspan="2">OPV<sub>3</sub></th>
                                                    <th>Under 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Above 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="2" scope="row">9</th>
                                                    <th rowspan="2">Measles</th>
                                                    <th>Under 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Above 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="2" scope="row">10</th>
                                                    <th rowspan="2">Yellow Fever</th>
                                                    <th>Under 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Above 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="2" scope="row">11</th>
                                                    <th rowspan="2">Fully Immunized Child(FIC)</th>
                                                    <th>Under 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Above 1 Year</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="3" scope="row">13</th>
                                                    <th rowspan="3">Vitamin A</th>
                                                    <th>6 Months to 12 Months(100,000 IU)</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Above 1 Year (200,000 IU)</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Lactating Mothers (200,000 IU)</th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th colspan="35" class="text-center">SECTION B</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="35" class="text-center">MONTHLY VACCINE STOCK AND VITAMIN A WASTAGE MONITORING REPORT</th>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <th>ANTIGEN FACILITY</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th rowspan="2" class="text-center">TOTALS</th>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <th colspan="2">DAYS OF THE MONTH</th>
                                                    <th>1</th>
                                                    <th>2</th>
                                                    <th>3</th>
                                                    <th>4</th>
                                                    <th>5</th>
                                                    <th>6</th>
                                                    <th>7</th>
                                                    <th>8</th>
                                                    <th>9</th>
                                                    <th>10</th>
                                                    <th>11</th>
                                                    <th>12</th>
                                                    <th>13</th>
                                                    <th>14</th>
                                                    <th>15</th>
                                                    <th>16</th>
                                                    <th>17</th>
                                                    <th>18</th>
                                                    <th>19</th>
                                                    <th>20</th>
                                                    <th>21</th>
                                                    <th>22</th>
                                                    <th>23</th>
                                                    <th>24</th>
                                                    <th>25</th>
                                                    <th>26</th>
                                                    <th>27</th>
                                                    <th>28</th>
                                                    <th>29</th>
                                                    <th>30</th>
                                                    <th>31</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td rowspan="8">14</td>
                                                    <td rowspan="8">BCG</td>
                                                    <td>[A]Doses in stock at the beginning of the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[B]Doses recieved within the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[C]Total doses stocked in the month[A+B]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[D]Doses remaining at the end of the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[E]Doses used in the month[C-D]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[F]Number of children vaccinated during the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[G]doses wasted in he month[E-F]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[H]Wastage rate in the month= [D/E]*100</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="8">15</td>
                                                    <td rowspan="8">OPV</td>
                                                    <td>[A]Doses in stock at the beginning of the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[B]Doses recieved within the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[C]Total doses stocked in the month[A+B]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[D]Doses remaining at the end of the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[E]Doses used in the month[C-D]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[F]Number of children vaccinated during the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[G]doses wasted in he month[E-F]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[H]Wastage rate in the month= [D/E]*100</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="8">16</td>
                                                    <td rowspan="8">MEASLES</td>
                                                    <td>[A]Doses in stock at the beginning of the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[B]Doses recieved within the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[C]Total doses stocked in the month[A+B]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[D]Doses remaining at the end of the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[E]Doses used in the month[C-D]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[F]Number of children vaccinated during the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[G]doses wasted in he month[E-F]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[H]Wastage rate in the month= [D/E]*100</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="8">17</td>
                                                    <td rowspan="8">DPT-HIB-HEP B</td>
                                                    <td>[A]Doses in stock at the beginning of the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[B]Doses recieved within the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[C]Total doses stocked in the month[A+B]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[D]Doses remaining at the end of the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[E]Doses used in the month[C-D]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[F]Number of children vaccinated during the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[G]doses wasted in he month[E-F]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[H]Wastage rate in the month= [D/E]*100</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="8">18</td>
                                                    <td rowspan="8">TT</td>
                                                    <td>[A]Doses in stock at the beginning of the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[B]Doses recieved within the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[C]Total doses stocked in the month[A+B]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[D]Doses remaining at the end of the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[E]Doses used in the month[C-D]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[F]Number of children vaccinated during the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[G]doses wasted in he month[E-F]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[H]Wastage rate in the month= [D/E]*100</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="8">19</td>
                                                    <td rowspan="8">Vitamin A- 100,000 IU</td>
                                                    <td>[A]Doses in stock at the beginning of the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[B]Doses recieved within the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[C]Total doses stocked in the month[A+B]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[D]Doses remaining at the end of the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[E]Doses used in the month[C-D]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[F]Number of children vaccinated during the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[G]doses wasted in he month[E-F]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[H]Wastage rate in the month= [G/E]*100</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="8">20</td>
                                                    <td rowspan="8">Vitamin A- 200,000 IU</td>
                                                    <td>[A]Doses in stock at the beginning of the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[B]Doses recieved within the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[C]Total doses stocked in the month[A+B]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[D]Doses remaining at the end of the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[E]Doses used in the month[C-D]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[F]Number of children vaccinated during the month</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[G]doses wasted in he month[E-F]</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>[H]Wastage rate in the month= [G/E]*100</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="container">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="form-group row col-md-4">
                                                            <label for="date" class="col-sm-4 col-form-label">Sumary of form submitted on</label>
                                                            <div class="col-sm-8">
                                                                <input type="date" class="form-control" id="exampleFormControlInput1" ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row col-md-3">
                                                            <label for="date" class="col-sm-4 col-form-label">By</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control form-control-full" id="exampleFormControlInput1" ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row col-md-5">
                                                            <label for="date" class="col-sm-4 col-form-label">Designation</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control form-control-full" id="exampleFormControlInput1" ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row col-md-4">
                                                            <label for="date" class="col-sm-4 col-form-label">Signature</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control form-control-full" id="exampleFormControlInput1" ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="form-group row col-md-4">
                                                            <label for="date" class="col-sm-4 col-form-label">Recieved by</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="exampleFormControlInput1" ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row col-md-5">
                                                            <label for="date" class="col-sm-4 col-form-label">Designation</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control form-control-full" id="exampleFormControlInput1" ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row col-md-4">
                                                            <label for="date" class="col-sm-4 col-form-label">Signature</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control form-control-full" id="exampleFormControlInput1" ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row col-md-3">
                                                            <label for="date" class="col-sm-4 col-form-label">Date</label>
                                                            <div class="col-sm-8">
                                                                <input type="date" class="form-control form-control-full" id="exampleFormControlInput1" ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="text-center">Facilities: Send the completed form to the Medical Officer of Health by 5<sup>th</sup> of the following month</p>
                                                <p class="text-center">Districts: Send the completed form to the PMO, By 15<sup>th</sup> of the following month.</p>
                                                <p class="text-center">Province: Send Electronic copy of the completed Provincial eSumary by district to he DVI Office HEAD DVI P.O BOX 43319 Nairobi by 21<sup>st</sup> of the following month</p>
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