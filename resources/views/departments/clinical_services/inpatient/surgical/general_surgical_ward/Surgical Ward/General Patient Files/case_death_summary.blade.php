@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="container">
                <h2 class="text-center">CASE/DEATH SUMMARY</h2>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="">OP/IP NO</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="">Age</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Address</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Clinic/Ward</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Date of Admission</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Date of Discharge</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Consultants</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Diagnosis</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Complaints</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Physical Findings</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Investigations</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Management</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Outcome/Discharge Instructions</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <b><p>Follow Up Clinic</p></b>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Name of the clinic</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Firm</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Day</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Date</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Time</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="">Doctor's Name(Print)</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Sign</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <i>&copy; Kenyatta National Hospital</i>
                </form>
            </div>
        </div>
    </div>
@endsection