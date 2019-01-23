@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">RECRUITMENT</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>RECRUITS INFORMATION</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive table-bordered table-striped" id="datatable">
                            <thead>
                            <tr>
                                <th>APPLICATION NAME/SUBJECT</th>
                                <th>APPLICANT'S NAME</th>
                                <th>TAGS</th>
                                <th>CONTACT</th>
                                <th>RESPONSIBLE</th>
                                <th>EMAIL</th>
                                <th>APPRECIATION</th>
                                <th>PHONE</th>
                                <th>SOURCE</th>
                                <th>MOBILE</th>
                                <th>REFERRED BY</th>
                                <th>APPLIED JOB</th>
                                <th>DEPARTMENT</th>
                                <th>EXPECTED SALARY</th>
                                <th>PROPOSED SALARY</th>
                                <th>AVAILABILITY</th>
                                <th>APPLICATION SUMMARY</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($recruitment_results))
                                @foreach($recruitment_results as $recruitment_result)
                                    <tr>
                                        <td>{{ $recruitment_result->subject }}</td>
                                        <td>{{ $recruitment_result->applicants_name }}</td>
                                        <td>{{ $recruitment_result->tags }}</td>
                                        <td>{{ $recruitment_result->contact }}</td>
                                        <td>{{ $recruitment_result->responsible}}</td>
                                        <td>{{ $recruitment_result->email }}</td>
                                        <td>{{ $recruitment_result->appreciation }}</td>
                                        <td>{{ $recruitment_result->phone }}</td>
                                        <td>{{ $recruitment_result->source }}</td>
                                        <td>{{ $recruitment_result->mobile }}</td>
                                        <td>{{ $recruitment_result->referred }}</td>
                                        <td>{{ $recruitment_result->applied_job }}</td>

                                        <td>{{ $recruitment_result->department }}</td>
                                        <td>{{ $recruitment_result->expected_salary }}</td>
                                        <td>{{ $recruitment_result->proposed_salary }}</td>
                                        <td>{{ $recruitment_result->availability }}</td>
                                        <td>{{ $recruitment_result->application_summary }}</td>

                                    </tr>
                                @endforeach
                            @endif


                            
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="content">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add More</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!— Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add a Recruit Record</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">

                                        <div class="container-fluid">
                                            <form action="{{route('recruitments_post')}}" method="post" enctype="multipart/form-data">{!! csrf_field() !!}
                                                <div class="row">
                                                    <label>Subject/Application Name</label>
                                                    <input type="text" name="subject" class="form-control" placeholder="">
                                                </div>
                                                <div class="row">
                                                 <div class="col-md-6">
                                                    <label>Applicant's Name</label>
                                                    <input type="text" name="applicants_name" class="form-control" placeholder="">
                                                 </div>
                                                 <div class="col-md-6">
                                                    <label>Tags</label>
                                                    <input type="text" name="tags" class="form-control" placeholder="">
                                                 </div>
                                                </div>

                                                 
                                                 <div class="row">
                                                 <div class="col-md-6">
                                                    <label>Contact</label>
                                                    <input type="text" name="contact" class="form-control" placeholder="">
                                                 </div>
                                                 <div class="col-md-6">
                                                    <label>Responsible</label>
                                                    <input type="text" name="responsible" class="form-control"  placeholder="">
                                                 </div>

                                                </div>

                                                <div class="row">
                                                 <div class="col-md-6">
                                                    <label>Email</label>
                                                    <input type="email" name="email" class="form-control" placeholder="">
                                                 </div>
                                                 <div class="col-md-6">
                                                    <label>Appreciation</label>
                                                    <input type="text" name="appreciation" class="form-control" placeholder="">
                                                 </div>

                                                </div>

                                                <div class="row">
                                                 <div class="col-md-6">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone" class="form-control" placeholder="">
                                                 </div>
                                                 <div class="col-md-6">
                                                    <label>Source</label>
                                                    <input type="text" name="source" class="form-control" placeholder="">
                                                 </div>

                                                </div>

                                                <div class="row">
                                                 <div class="col-md-6">
                                                    <label>Mobile</label>
                                                    <input type="text" name="mobile" class="form-control" placeholder="">
                                                 </div>
                                                 <div class="col-md-6">
                                                    <label>Referred by</label>
                                                    <input type="text" name="referred" class="form-control" placeholder="">
                                                 </div>

                                                </div>

                                                <div class="row">
                                                 <div class="col-md-6">
                                                    <label>Degree</label>
                                                    <input type="text" name="degree" class="form-control" placeholder="">
                                                 </div>
                                              </div>
                                              <h3>Job</h3>
                                              <div class="row">
                                                 
                                                    <label>Applied Job</label>
                                                    <input type="text" name="applied_job" class="form-control" placeholder="">
                                                 
                                                 </div>

                                                 <div class="row">
                                                 
                                                    <label>Department</label>
                                                    <input type="text" name="department" class="form-control" placeholder="">
                                                 
                                                 </div>

                                                 <h3>Contract</h3>

                                                 <div class="row">
                                                 
                                                    <label>Expected Salary</label>
                                                    <input type="number" name="expected_salary" class="form-control" placeholder="">
                                                 
                                                 </div>

                                                 <div class="row">
                                                 
                                                    <label>Proposed Salary</label>
                                                    <input type="number" name="proposed_salary" class="form-control" placeholder="">
                                                 
                                                 </div>
                                                  <div class="row">
                                                 
                                                    <label>Availability</label>
                                                    <input type="date" name="availability" class="form-control" placeholder="">
                                                 
                                                 </div>

                                                  <div class="row">
                                                 
                                                    <label>Application Summary</label>

                                                    <textarea type="text" name="application_summary" class="form-control" placeholder=""></textarea>
                                                 
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
