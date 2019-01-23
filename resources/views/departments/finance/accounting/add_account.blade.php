@extends('layouts.master')

@section('content')

    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">CHART OF ACCOUNT</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>CHART OF ACCOUNT</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ACCOUNT TYPE</th>
                        <th>DETAILS TYPE</th>
                        <th>NAME</th>\
                        <th>SUB ACCOUNT</th>
                        <th>DEFAULT TAX CODE</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($accounts_results))
                        @foreach($accounts_results as $accounts_result)
                            <tr>
                                <td>{{$accounts_result-> account_type}}</td>
                                <td>{{$accounts_result-> details_type}}</td>
                                <td>{{$accounts_result-> name}}</td>
                                <td>{{$accounts_result-> sub_account}}</td>
                                <td>{{$accounts_result-> default_tax}}</td>
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
                        <h4 class="modal-title">CHART OF ACCOUNT</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
                                <form action="{{route('finance_accounting_add_post')}}" method="post" >{!! csrf_field() !!}
                                    <div class="form-group">
                                        <label for="exampleSelect1">account type</label>
                                        <select class="form-control" id="exampleSelect1" name="account_type">
                                            <option value="account_receivable">Account Receivable(A/r)</option>
                                            <option value="current_assets">Current Assets</option>
                                            <option value="cash_and_cash_equivalent">Cash and Cash equivalent</option>
                                            <option value="fixed_assets">Fixed assets</option>
                                            <option value="non_current_assets">Non-current-assets</option>
                                            <option value="accounts_payable">Accounts payable(A/P)</option>
                                            <option value="credit_card">Credit Card</option>
                                            <option value="current_liabilities">Current Liabilities</option>
                                            <option value="non_current_liabilities">Non-current liabilities</option>
                                            <option value="owners_equity">owner's equity</option>
                                            <option value="income">Income</option>
                                            <option value="other_income">Other Income</option>
                                            <option value="cost_of_sale">Cost of sale</option>
                                            <option value="expenses">Expenses</option>
                                            <option value="other_expenses">Other Expenses</option>
                                        </select>
                                    </div>
                                    <div class="form-row">

                                        <p>Accounts receivable (also called A/R, Debtors, or Trade and other receivables) tracks money that customers owe you for products or services, and payments customers make.
                                            QuickBooks Online Plus automatically creates one Accounts receivable account for you. Most businesses need only one.

                                            Each customer has a register, which functions like an Accounts receivable account for each customer.</p>
                                        <div class="form-group col-md-4" >
                                            <input type="TEXT" class="form-control" name="details_type" placeholder="details type">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-1">
                                            <input type="TEXT" class="form-control" name="name" placeholder="name">
                                        </div>

                                        <div class="form-check col-md-4">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="sub_account">
                                                is a sub-account
                                            </label>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <input type="TEXT" class="form-control" name="default_tax" placeholder="default tax code">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
@endsection