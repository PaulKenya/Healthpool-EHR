@extends('layouts.master')
@section('content')
   @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
   <!-- Title & Breadcrumbs-->
   <div class="row page-titles">
      <div class="col-md-12 align-self-center">
         <h4 class="theme-cl">OPERATION NOTES</h4>
      </div>
   </div>
   <!-- Title & Breadcrumbs-->
   <div class="row">
      <div class="col-sm-12 col-md-12">
         <div class="card">
            <div class="card-header">
               <h4>OPERATION NOTES RECORDS</h4>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped">
                     <thead>
                     <tr>
                        <th>DATE AND TIME</th>
                        <th>OPERATION NOTES</th>

                     </tr>
                     </thead>
                     <tbody>
                     <tr>
                     @if(isset($operation_note_records))
                        @foreach($operation_note_records as $operation_note_record)
                           <tr>
                              <td>{{$operation_note_record->created_at}}</td>
                              <td>{{$operation_note_record->operation_notes}}</td>

                           </tr>
                        @endforeach
                     @endif
                     </tbody>
                  </table>
               </div>
            </div>

            <div class="col-md-4">
               <div class="content">
                  <button class="btn btn-success" data-toggle="modal" data-target="#myModal">ADD OPERATION NOTES</button>
                  {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
               </div>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
               <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Operation notes record</h4>
                     </div>
                     <div class="modal-body">

                        <div class="col-md-12">
                           <div class="card">

                              <div class="container-fluid">
                                 <form action="{{route('operation_note_post', ['patient_id'=>$patient_id])}}" enctype="multipart/form-data" method="post">
                                    {!! csrf_field() !!}
                                    <h4>Operation notes Record</h4>
                                    <div class="form-row">
                                       <div class="form-group col">
                                          <label for="op_ip_number">Operation Notes</label>
                                          <textarea type="number" name="operation_notes"  class="form-control" placeholder="" ></textarea>
                                       </div>
                                    </div>
                                    <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                    <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                    <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                    <div class="form-row">
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
   </div>

@endsection