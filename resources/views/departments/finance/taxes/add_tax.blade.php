@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">TAX INFORMATION</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Tax</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>taxname</th>
                                <th>description</th>
                                <th>taxagency</th>
                                <th>sales</th>
                                <th>rate</th>
                                <th>account</th>
                                <th>return</th>
                                <th>sreturn</th>
                                <th>purchase</th>
                                <th>purchaserate</th>
                                <th>accounts</th>
                                <th>returns</th>
                                <th>returnss</th>
                                <th>period</th>
                                <th>frequency</th>
                                <th>business</th>
                                <th>accountno</th>
                                <th>balance</th>
                                <th>agencyperiod</th>
                                <th>total</th>
                                <th>date</th>
                                <th>amount</th>
                                <th>memo</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($taxes_results))
                                @foreach($taxes_results as $taxes_result)
                                    <tr>
                                        <td>{{ $taxes_result->taxname }}</td>
                                        <td>{{ $taxes_result->description }}</td>
                                        <td>{{ $taxes_result->taxagency }}</td>
                                        <td>{{ $taxes_result->sales }}</td>
                                        <td>{{ $taxes_result->rate }}</td>
                                        <td>{{ $taxes_result->account }}</td>
                                        <td>{{ $taxes_result->return }}</td>
                                        <td>{{ $taxes_result->sreturn }}</td>
                                        <td>{{ $taxes_result->purchase }}</td>
                                        <td>{{ $taxes_result->purchaserate }}</td>
                                        <td>{{ $taxes_result->accounts }}</td>
                                        <td>{{ $taxes_result->returns }}</td>
                                        <td>{{ $taxes_result->returnss }}</td>
                                        <td>{{ $taxes_result->period }}</td>
                                        <td>{{ $taxes_result->frequency }}</td>
                                        <td>{{ $taxes_result->business }}</td>
                                        <td>{{ $taxes_result->accountno }}</td>
                                        <td>{{ $taxes_result->balance }}</td>
                                        <td>{{ $taxes_result->agencyperiod }}</td>
                                        <td>{{ $taxes_result->total }}</td>
                                        <td>{{ $taxes_result->date }}</td>
                                        <td>{{ $taxes_result->amount }}</td>
                                        <td>{{ $taxes_result->memo }}</td>
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
                                <h4 class="modal-title">Add Tax Information</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                            <form action="{{route('finance_taxes_add_post')}}" method="post" >{!! csrf_field() !!}
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Tax Name:</label>
                                                                <input type="text" class="form-control" name="taxname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Description:</label>
                                                                <input type="text" class="form-control" name="description" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Tax Agency:</label>
                                                                <input type="text" class="form-control" name="taxagency" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <p><u>SALES</u></p>
                                                                <label for="exampleInputEmail1">Sales:</label>
                                                                <input type="checkbox" class="form-control" name="sales" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Sales Rate:</label>
                                                                <input type="number" class="form-control" name="rate" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted">%.</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Account:</label>
                                                                <select name="account" class="form-control" id="exampleSelect1">
                                                                    <option value="liability">Liability</option>
                                                                    <option value="expense">Expense</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Show Tax Amount On Return Line:</label>
                                                                <select name="return" class="form-control" id="exampleSelect1">
                                                                    <option value="other_adjustments">Other Adjustments</option>
                                                                    <option value="tax-collected_in-sales">Tax Collected On Sales</option>
                                                                    <option value="adjustment_to_tax_on_sales">Adjustments to Tax On Sales</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Show Net Amount On Return Line:</label>
                                                                <select name="sreturn" class="form-control" id="exampleSelect1">
                                                                    <option value="total_taxable_purchases_in_period_before_tax">Total taxable purchases in period,before tax</option>
                                                                    <option value="not_applicable">Not Applicable(N/A)</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <p><u>PURCHASES</u></p>
                                                                <label for="exampleInputEmail1">Purchase:</label>
                                                                <input type="checkbox" class="form-control" name="purchase" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Purchase Rate:</label>
                                                                <input type="number" class="form-control" name="purchaserate" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted">%.</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Account:</label>
                                                                <select name="accounts" class="form-control" id="exampleSelect1">
                                                                    <option value="liability">Liability</option>
                                                                    <option value="expense">Expense</option>
                                                                    <option value="non-tracking">Non-tracking</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Show Tax Amount On Return Line:</label>
                                                                <select name="returns" class="form-control" id="exampleSelect1">
                                                                    <option value="tax_reclaimable_on_purchases">Tax reclaimable on purchases</option>
                                                                    <option value="adjustments_to_reclaimable_tax_on_purchases">Adjustments to reclaimable tax on purchases</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Show Net Amount On Return Line:</label>
                                                                <select name="returnss" class="form-control" id="exampleSelect1">
                                                                    <option value="total_taxable_purchases_in_period_before_tax">Total taxable purchases in period,before tax</option>
                                                                    <option value="not_applicable">Not Applicable(N/A)</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Start of tax period:</label>
                                                                <select name="period" class="form-control" id="exampleSelect1">
                                                                    <option value="january">January</option>
                                                                    <option value="february">February</option>
                                                                    <option value="march">March</option>
                                                                    <option value="april">April</option>
                                                                    <option value="may">May</option>
                                                                    <option value="june">June</option>
                                                                    <option value="july">July</option>
                                                                    <option value="august">August</option>
                                                                    <option value="september">September</option>
                                                                    <option value="october">October</option>
                                                                    <option value="november">November</option>
                                                                    <option value="december">December</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Filling Frequency:</label>
                                                                <select name="frequency" class="form-control" id="exampleSelect1">
                                                                    <option value="monthly">Monthly</option>
                                                                    <option value="quaterly">Quartely</option>
                                                                    <option value="half-yearly">Half-yearly</option>
                                                                    <option value="yearly">Yearly</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Business ID No:</label>
                                                                <input type="number" class="form-control" name="business" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Account No:</label>
                                                                <input type="number" class="form-control" name="accountno" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <p><u>PAYMENT</u></p>
                                                                <label for="exampleInputEmail1">Balance Ksh0.00:</label>
                                                                <input type="number" class="form-control" name="balance" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted">.</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Agency Period:</label>
                                                                <select name="agencyperiod" class="form-control" id="exampleSelect1">
                                                                    <option value="january">January</option>
                                                                    <option value="february">February</option>
                                                                    <option value="march">March</option>
                                                                    <option value="april">April</option>
                                                                    <option value="may">May</option>
                                                                    <option value="june">June</option>
                                                                    <option value="july">July</option>
                                                                    <option value="august">August</option>
                                                                    <option value="september">September</option>
                                                                    <option value="october">October</option>
                                                                    <option value="november">November</option>
                                                                    <option value="december">December</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted">.</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Total Agency Due:</label>
                                                                <input type="number" class="form-control" name="total" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted">.</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Payment Date:</label>
                                                                <input type="date" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted">.</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Payment Amount:</label>
                                                                <input type="number" class="form-control" name="amount" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted">.</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Memo:</label>
                                                                <input type="text" class="form-control" name="memo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted">.</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
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