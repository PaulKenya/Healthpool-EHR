@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">BANK AND CREDIT CARDS</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>BANK AND CREDIT CARDS</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>TRANSACTION</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($creditcards_results))
                            @foreach($creditcards_results as $creditcards_result)
                                <tr>
                                    <td>{{$creditcards_result-> file}}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-4">

                <div class="content">
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">upload transaction manually</button>
                    {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                </div>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!— Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">bank and credit cards</h4>
                        </div>
                        <form action="{{route('finance_banking_bankandcreditcards_post')}}" method="post" >{!! csrf_field() !!}
                            <P>Download data from your bank</P>
                            <ul>
                                <li>1.Open a new tab and sign in to your bank.</li>
                                <li>2.Download transactions: CSV, QFX, QBO, or OFX format only.</li>
                                <li>3.Close the tab and return to Healthpool.</li>
                            </ul>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">upload transaction manually</label>
                                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="file">
                                    <small id="fileHelp" class="form-text text-muted"></small>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()