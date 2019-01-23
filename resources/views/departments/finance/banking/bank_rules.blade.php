@extends('layouts.master')

@section('content')

    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">BANK RULES</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>BANK RULES</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>

                        <th>RULE NAME</th>
                        <th>FOR</th>
                        <th>IN</th>
                        <th>BANK TEXTS</th>
                        <th>CONTAINS</th>
                        <th>TRANSACTION TYPE</th>
                        <th>PAYEE</th>
                        <th>CATEGORY</th>
                        <th>MEMO</th>
                        <th>AUTOMATIC</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($bankrule_results))
                        @foreach($bankrule_results as $bankrule_result)
                            <tr>
                                <td>{{$bankrule_result->rule_name}}</td>
                                <td>{{$bankrule_result->for}}</td>
                                <td>{{$bankrule_result->in}}</td>

                                <td>{{$bankrule_result->bank_texts}}</td>
                                <td>{{$bankrule_result->contains}}</td>
                                <td>{{$bankrule_result->transaction_type}}</td>
                                <td>{{$bankrule_result->payee}}</td>
                                <td>{{$bankrule_result->category}}</td>
                                <td>{{$bankrule_result->memo}}</td>
                                <td>{{$bankrule_result->automatic}}</td>
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
                        <h4 class="modal-title">BANK RULES</h4>
                    </div>
                    <div class="modal-body">


                        <form  class="col-md-12" action="{{route('finance_banking_bankrules_post')}}" method="post" >{!! csrf_field() !!}
                            <div class="card">
                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <LABEL>rule name</LABEL>
                                        <input type="TEXT" class="form-control" name="rule_name" placeholder="rule name">
                                    </div>



                                    <div class="form-group col-md-3" >
                                        <label for="exampleSelect1">for</label>
                                        <select class="form-control" id="exampleSelect1" name="for">
                                            <option value="money_out">money out</option>
                                            <option value="money_in">money in</option>

                                        </select>
                                    </div>

                                    <div class="form-group col-md-8">
                                        <LABEL>in</LABEL>
                                        <input type="TEXT" class="form-control" name="" placeholder="in">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-1" >
                                        <label for="exampleSelect1">when a transaction meets</label>
                                        <select class="form-control" id="exampleSelect1" name="in">
                                            <option value="in">in</option>
                                            <option value="out">out</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-3" >
                                        <label for="exampleSelect1">bank texts</label>
                                        <select class="form-control" id="exampleSelect1" name="bank_texts" >
                                            <option value="bank_text">bank text</option>
                                            <option value="contains" >contains</option>
                                            <option value="amount">amount</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="exampleSelect1"></label>
                                        <select class="form-control" id="exampleSelect1" name="contains" >
                                            <option value="contains">contains</option>
                                            <option value="does_not_contain">does not contain</option>
                                            <option value="is_exactly">is exactly</option>
                                        </select>
                                    </div>
                                </div>
                                <P>set one or more of the following</P>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="exampleSelect1">transaction type</label>
                                        <select class="form-control" id="exampleSelect1" name="transaction_type">
                                            <option value="expense">Expense</option>
                                            <option value="cheque">cheque</option>
                                            <option value="transfer">transfer</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <input type="TEXT" class="form-control" name="payee" placeholder="payee">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleSelect1">category</label>
                                        <select class="form-control" id="exampleSelect1" name="category">
                                            <option value="amortisation_expense">Amortisation expense</option>
                                            <option value="bad_debts">bad debts</option>
                                            <option value="bank_charges">bank charges</option>
                                            <option value="commision_and_fees">commissions and fees</option>
                                            <option value="dues_and_subscription">dues and subscriptions</option>
                                            <option value="equipment_rentals">equipment rentals</option>
                                            <option value="income_tax_expense">income tax expense</option>
                                            <option value="insurance">insurance</option>
                                            <option value="disability">disability</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <LABEL>memo</LABEL>
                                        <input type="TEXT" class="form-control" name="memo" placeholder="memo">
                                    </div>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="automatic">
                                        automatically add my book
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button></div>
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