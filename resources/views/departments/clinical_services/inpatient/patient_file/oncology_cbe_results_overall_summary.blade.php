@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title &
    Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">CBE RESULTS</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>CBE RESULTS</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>name</th>
                                <th>date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($oncology_cbe_results_overall_results))
                                @foreach($oncology_cbe_results_overall_results as $oncology_cbe_results_overall_result)
                                    <tr>
                                        <td>{{ $oncology_cbe_results_overall_result->name }}</td>
                                        <td>{{ $oncology_cbe_results_overall_result->date }}</td>
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
                                <h4 class="modal-title">Add  Information</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <<form action="{{route('oncology_cbe_results_overall_summary_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                        <h3>overall summary</h3>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>clinician name for CBE</label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>date:</label>
                                                <input type="date" id="myDate" class="form-control" readonly name="date">
                                            </div>
                                        </div>
                                        <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                        <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                        <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
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
@endsection
