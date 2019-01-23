@extends('layouts.master')
@section('content')

    <div class="card">
        <div class="card-header">
            <h4>POST MORTEM REQUESTS</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NAME</th>
                        <th>WITNESS</th>
                        <th>RELATIONSHIP</th>
                        <th>DATE</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($moh387_results))
                        @foreach($moh387_results as $moh387_result)
                            <tr>
                                <td>{{ $moh387_result->name }}</td>
                                <td>{{ $moh387_result->witness}}</td>
                                <td>{{ $moh387_result->relationship }}</td>
                                <td>{{ $moh387_result->date }}</td>

                            </tr>
                        @endforeach
                    @endif


                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-4">

            <div class="content">
                <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add more</button>
                {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">

                <!— Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">REQUEST FOR POST-MORTEM EXAMINATION</h4>
                    </div>
                    <div class="modal-body">





                                    <div class="col-md-12">
                                        <div class="card">
                                            <form action="{{route('moh387_post')}}" method="post">{!! csrf_field() !!}
                                            <div class="col-m-3 offset-md-3">
                                                <H3 class="mt-20 ">
                                                    POST-MORTEM EXAMINATION REQUEST
                                                </H3>
                                                <b><p><i>I here by give permission for a post-mortem examination to be performed on</i></p></b>
                                                <div class="form-group row">
                                                   
                                                    <div class="col-sm-6">
                                                        <input type="text" name="name" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label>Relationship:</label>
                                                    <input type="text" name="relationship"   class="form-control"  aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Signature:</label>
                                                    <input type="text" name="signature"   class="form-control"  aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Witness:</label>
                                                    <input type="text" name="witness"   class="form-control"  aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Date:</label>
                                                    <input type="date" name="date"   class="form-control"  aria-describedby="" placeholder="">
                                                </div>
                                               
                                            </div>
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








@endsection
