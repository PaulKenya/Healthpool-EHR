@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
      <div class="offset-1 panel    ">

    <H3 class="">X-RAY REQUEST FORM</H3>
    <br><br>
    <div class="row ">
            <div class="col-md-3">
                <div class="form-group row ">
                    <label for="staticEmail" class="col-form-label ">Date:</label>
                    <div class="col-sm-8">
                      <input type="date" name="" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
             <div class="form-group row ">
                        <label for="staticEmail" class="col-form-label ">IP/OPD No:</label>
                        <div class="col-sm-8">
                          <input type=" datetime" name="" class="form-control" placeholder="">
                        </div>
                    </div>
            </div>
         <div class="form-group row col-md-4">
                    <label for="staticEmail" class="col-form-label ">REF No:</label>
                    <div class="col-sm-8">
                      <input type="number" name="" class="form-control" placeholder="">
                    </div>
                </div>
    </div>
    <br><br>
    <div class="row">
        <div class="form-group row col-md-6">
            <label for="inputPassword" class=" col-form-label">Patient</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" placeholder="Patient">
            </div>
          </div>
          <div class="form-group row col-md-4">
            <label for="inputPassword" class=" col-form-label">Cell:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputPassword" placeholder="Cell:">
            </div>
          </div>
    </div>
    <br><br>
    <div class="row">
        <div class="form-group row col-md-3">
            <label for="inputPassword" class=" col-form-label">Age</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" placeholder="Age">
            </div>
          </div>
          <div class="form-group row col-md-3">
            <label for="inputPassword" class=" col-form-label">Weight</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" placeholder="Weight">
            </div>
          </div>
          <div class="form-group row col-md-4">
            <label for="inputPassword" class=" col-form-label">SEX:</label>
            <div class="col-sm-8">
                <div class="form-group">
                    <div class="form-check form-check-inline  col-form-label">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline  col-form-label">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
                </div>
          </div>
    </div>
    <div class="row">
        <div class="form-group row col-md-10">
            <label for="inputPassword" class=" col-form-label">Clinical Information</label>
            <div class="col-sm-10">
              <textarea  class="form-control" id="" ></textarea>
            </div>
          </div>
          <div class="form-group row col-md-12">
            <label for="inputPassword" class=" col-form-label">LMP:</label>
            <div class="col-sm-8">
              <textarea  class="form-control" id="" ></textarea>
            </div>
          </div>
           <div class="form-group row col-md-12">
            <label for="inputPassword" class=" col-form-label">Investigations Required:</label>
            <div class="col-sm-8">
              <textarea  class="form-control" id="" ></textarea>
            </div>
          </div>
    </div>
    <br><br>
    <div class="row">
        <p class="text-center offset-4" class=" ">Report</label>
        <div class="form-group row col-md-10">
            
            <div class="col-sm-10">
              <textarea  rows="4" cols="15" class="form-control" id="" ></textarea>
            </div>
          </div>
    </div>
    <div class="row">
        <div class="form-group row col-md-6">
            <label for="inputPassword" class=" col-form-label">Referring Doctor</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" placeholder="Referring Doctor">
            </div>
          </div>
          <div class="form-group row col-md-4">
            <label for="inputPassword" class=" col-form-label">Branch:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputPassword" placeholder="Branch:">
            </div>
          </div>
    </div>
    <div class="row">
        <div class="form-group row col-md-6">
            <label for="inputPassword" class=" col-form-label">Signature</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" placeholder="Signature">
            </div>
          </div>
          <div class="form-group row col-md-4">
            <label for="inputPassword" class=" col-form-label">cell:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputPassword" placeholder="Cell:">
            </div>
          </div>
    </div>
    <div class="row">
        <div class="form-group row col-md-6">
            <label for="inputPassword" class=" col-form-label">Reported By</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" placeholder="Signature">
            </div>
          </div>
          <div class="form-group row col-md-4">
            <label for="inputPassword" class=" col-form-label">Time:</label>
            <div class="col-sm-8">
              <input type="time" class="form-control" id="inputPassword" placeholder="Cell:">
            </div>
          </div>
    </div>
</div>   
    </div>
</div> 
@endsection