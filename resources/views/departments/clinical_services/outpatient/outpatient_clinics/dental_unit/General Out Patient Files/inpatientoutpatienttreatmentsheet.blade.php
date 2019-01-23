@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        
        <div class="container-fluid">
        <h1 class="text-center">KENYATTA NATIONAL HOSPITAL</h1>
        <h2 class="text-center">IN-PATIENT/OUT-PATIENT CONTINUATION SHEET</h2>

        <form>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="">IP/OP No</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-1">
                    <label for="">Age</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">Sex</label>
                    <select class="custom-select">
                        <option selected>Sex...</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Ward/Clinic</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Date</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control"></textarea>
            </div>
        </form>
    </div>
        
    </div>
</div> 
@endsection