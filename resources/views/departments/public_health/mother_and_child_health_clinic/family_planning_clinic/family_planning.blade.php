@extends('layouts.master')

@section('content')

    <div class="card">
        <div class="card-header">
            <h4>FAMILY PLANNING</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>AG</th>
                        <th>AH</th>
                        <th>AI</th>
                        <th>AJ</th>
                        <th>AK</th>
                        <th>AL</th>
                        <th>AM</th>
                        <th>AN</th>
                        <th>AO</th>
                        <th>AP</th>
                        <th>AL</th>
                        <th>AM</th>
                        <th>AN</th>
                        <th>AO</th>
                        <th>AU</th>
                        <th>AV</th>
                        <th>AW</th>
                        <th>AX</th>
                        <th>AY</th>
                        <th>AZ</th>
                        <th>NATURAL FP</th>
                        <th>VCT COUNCELLING</th>

                        <th>HIV STATUS</th>
                        <th>DIAGNOSIS</th>
                        <th>REMARKS</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    @if(isset( $show_family_planning_page_results))
                        @foreach( $show_family_planning_page_results as  $show_family_planning_page_results)
                            <tr>

                                <td>{{  $show_family_planning_page_results->ag }}</td>
                                <td>{{  $show_family_planning_page_results->ah}}</td>
                                <td>{{  $show_family_planning_page_results->ai}}</td>
                                <td>{{  $show_family_planning_page_results-> aj}}</td>
                                <td>{{  $show_family_planning_page_results->ak}}</td>
                                <td>{{  $show_family_planning_page_results->al}}</td>
                                <td>{{  $show_family_planning_page_results-> am}}</td>
                                <td>{{  $show_family_planning_page_results->an}}</td>
                                <td>{{  $show_family_planning_page_results->ao}}</td>
                                <td>{{  $show_family_planning_page_results->ap }}</td>
                                <td>{{  $show_family_planning_page_results->aq}}</td>
                                <td>{{  $show_family_planning_page_results->ar}}</td>
                                <td>{{  $show_family_planning_page_results->as}}</td>
                                <td>{{  $show_family_planning_page_results->au}}</td>
                                <td>{{  $show_family_planning_page_results->av}}</td>
                                <td>{{  $show_family_planning_page_results-> aw}}</td>
                                <td>{{  $show_family_planning_page_results->ax}}</td>
                                <td>{{  $show_family_planning_page_results->ay}}</td>
                                <td>{{  $show_family_planning_page_results-> az}}</td>
                                <td>{{  $show_family_planning_page_results->ba}}</td>
                                <td>{{  $show_family_planning_page_results->bb}}</td>
                                <td>{{  $show_family_planning_page_results-> bc}}</td>
                                <td>{{  $show_family_planning_page_results->bd}}</td>
                                <td>{{  $show_family_planning_page_results->be}}</td>
                            </tr>
                            @endforeach
                            @endif
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
                                    <form class="table-responsive" action="{{route('family_planning_post')}}" method="post" >{!! csrf_field() !!}
                                        <input type="text" name="departments" value="default" readonly>
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td rowspan="14"></td>
                                                <td rowspan="4"></td>
                                                <td rowspan="4"></td>
                                                <td rowspan="4"></td>
                                                <td colspan="2">
                                                    <label for="">Rev</label>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td class="font-weight-bold">AG</td>
                                                <td>Revisit client on IUCD</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">Change of Method</td>
                                                <td>
                                                    <label for="">From</label>
                                                    <input type="text" class="form-control" name="ag">
                                                </td>
                                                <td class="font-weight-bold">AH</td>
                                                <td>Client Change from IUCD to Another FP Method</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="">To</label>
                                                    <input type="text" class="form-control" name="ah">
                                                </td>
                                                <td class="font-weight-bold">AI</td>
                                                <td>Client Change from IUCD to Another Method of Choice or Recommended</td>
                                            </tr>
                                            <tr>
                                                <td class="table-active" colspan="2">
                                                    <label for="">Qty Disp.</label>
                                                    <input type="number" class="form-control" name="ai">
                                                </td>
                                                <td class="font-weight-bold">AJ</td>
                                                <td>Number of IUCD Inserted to Client on the Day of Visit</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="10">Condoms</td>
                                                <td rowspan="10">(Pieces)</td>
                                                <td rowspan="5">Male</td>
                                                <td colspan="2">
                                                    <label for="">New</label>
                                                    <input type="number" class="form-control" name="aj">
                                                </td>
                                                <td class="font-weight-bold">AK</td>
                                                <td>New Client on Male Condoms</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <label for="">Rev</label>
                                                    <input type="number" class="form-control" name="ak">
                                                </td>
                                                <td class="font-weight-bold">AL</td>
                                                <td>Revisit Client on Male Condoms</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">Change of method</td>
                                                <td>
                                                    <label for="">From</label>
                                                    <input type="text" class="form-control" name="al">
                                                </td>
                                                <td class="font-weight-bold">AM</td>
                                                <td>Client Change from Male Condoms to Another FP Method</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="">To</label>
                                                    <input type="text" class="form-control" name="am">
                                                </td>
                                                <td class="font-weight-bold">AN</td>
                                                <td>Client Change from Male Condoms to Another Method of Choice or Recommended</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="table-active">
                                                    <label for="">Qty Disp</label>
                                                    <input type="text" class="form-control" name="an">
                                                </td>
                                                <td class="font-weight-bold">AO</td>
                                                <td>Number of Male Condoms dispensed to Client on the Day of Visit</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="5">Female</td>
                                                <td colspan="2">
                                                    <label for="">New</label>
                                                    <input type="number" class="form-control" name="ao">
                                                </td>
                                                <td class="font-weight-bold">AP</td>
                                                <td>New Client on Female Condoms</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <label for="">Rev</label>
                                                    <input type="number" class="form-control" name="ap">
                                                </td>
                                                <td class="font-weight-bold">AL</td>
                                                <td>Revisit Client on Female Condoms</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">Change of method</td>
                                                <td>
                                                    <label for="">From</label>
                                                    <input type="text" class="form-control" name="aq">
                                                </td>
                                                <td class="font-weight-bold">AM</td>
                                                <td>Client Change from Female Condoms to Another FP Method</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="">To</label>
                                                    <input type="text" class="form-control" name="ar">
                                                </td>
                                                <td class="font-weight-bold">AN</td>
                                                <td>Client Change from Female Condoms to Another Method of Choice or Recommended</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="table-active">
                                                    <label for="">Qty Disp</label>
                                                    <input type="text" class="form-control" name="as">
                                                </td>
                                                <td class="font-weight-bold">AO</td>
                                                <td>Number of Female Condoms dispensed to Client on the Day of Visit</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td rowspan="5">Sterilization</td>
                                                <td rowspan="5">(Number of cases)</td>
                                                <td rowspan="2">Male</td>
                                                <td colspan="2">
                                                    <label for="">Change of method from other methods</label>
                                                    <input type="number" class="form-control">
                                                </td>
                                                <td class="font-weight-bold">AU</td>
                                                <td>Number of Male Clients changed method for sterilization</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2">
                                                    <label for="">Done</label>
                                                    <input type="number" class="form-control" name="au">
                                                </td>
                                                <td class="font-weight-bold">AV</td>
                                                <td>Number of Male Clients for sterilization on the Day of Visit</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td rowspan="2">Female</td>
                                                <td colspan="2">
                                                    <label for="">Change of method from other methods</label>
                                                    <input type="number" class="form-control" name="av">
                                                </td>
                                                <td class="font-weight-bold">AW</td>
                                                <td>Number of Female Clients changed method for sterilization</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2">
                                                    <label for="">Done</label>
                                                    <input type="number" class="form-control" name="aw">
                                                </td>
                                                <td class="font-weight-bold">AX</td>
                                                <td>Number of Female Clients counseled for sterilization</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Referral</td>
                                                <td colspan="2">
                                                    <label for="">Done</label>
                                                    <input type="number" class="form-control" name="ax">
                                                </td>
                                                <td class="font-weight-bold">AY</td>
                                                <td>Number of Female Clients referred for sterilization on the Day of Visit</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td rowspan="2">Natural FP</td>
                                                <td rowspan="2">(Number of Cases)</td>
                                                <td rowspan="2"></td>
                                                <td colspan="2">
                                                    <label for="">Counselled</label>
                                                    <input type="number" class="form-control" name="ay">
                                                </td>
                                                <td class="font-weight-bold">AZ</td>
                                                <td>Number of Female Clients Counseled for Natural FP</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2">
                                                    <label for="">Referral</label>
                                                    <input type="number" class="form-control" name="az">
                                                </td>
                                                <td class="font-weight-bold">BA</td>
                                                <td>Number of Female Clients Referred for Natural FP</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>VCT Counselling</td>
                                                <td></td>
                                                <td>C&T on site</td>
                                                <td colspan="2">
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="ba" id="inlineRadio1" value="option1">
                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="ba" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="font-weight-bold">BB</td>
                                                <td>Client Counselled and tested on site during the consultation</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Referred for C&T</td>
                                                <td colspan="2">
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="bb" id="inlineRadio1" value="option1">
                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="bb" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="font-weight-bold">BC</td>
                                                <td>Client referred elsewhere for counselling and testing</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>HIV Status</td>
                                                <td></td>
                                                <td>Pos/Neg</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="bc" id="inlineRadio1" value="option1">
                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="bc" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="font-weight-bold">BD</td>
                                                <td>Record HIV status using the key provided(1=Positive,2=Negative)</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Diagnosis</td>
                                                <td colspan="2">Insert provisional or confirmed diagnosis</td>
                                                <td colspan="2">
                                                    <input type="text" class="form-control" name="bd">
                                                </td>
                                                <td class="font-weight-bold">BE</td>
                                                <td>Record or indicate the results of provisional or confirmed diagnosis of FP client following history taking and examination</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Remarks</td>
                                                <td colspan="4">
                                                    <input type="text" class="form-control" name="be">
                                                </td>
                                                <td class="font-weight-bold">BF</td>
                                                <td>Any information that may be necessary</td>
                                            </tr>
                                            </tbody>

                                        </table>
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
        </div>
    </div>
    </div>

@endsection