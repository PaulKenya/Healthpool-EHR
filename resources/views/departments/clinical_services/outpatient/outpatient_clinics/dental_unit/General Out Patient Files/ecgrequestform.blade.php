@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        
        <div class="container-fluid">
        <h1 class="text-center"></h1>
        <h2 class="text-center">E.C.G REQUEST FORM</h2>

        <form>
            <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="">Patient Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Unit Number</label>
                    <input type="number" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="">Age</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Sex</label>
                    <select class="custom-select">
                        <option>Sex...</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="">Ward Clinic</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Bed</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-1">
                    <label for="">Previous E.C.G</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input">
                        <label class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input">
                        <label class="form-check-label">No</label>
                    </div>
                </div>
                <div class="form-group col-md-11">
                    <label for="">Report to be sent to:</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="">Medication</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Digoxin / Diuretics / Others</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio">
                    <label class="form-check-label">Yes/No</label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Relevant history and clinical findings and provisional diagnosis</label>
                <textarea class="form-control"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">Date</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Signed</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Printed</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </form>
    </div>
        
    </div>
</div> 
@endsection