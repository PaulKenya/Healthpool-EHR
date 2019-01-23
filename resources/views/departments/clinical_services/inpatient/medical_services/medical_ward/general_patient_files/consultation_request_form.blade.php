@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="container-fluid">
        
        <h2 class="text-center">CONSULTATION REQUEST FORM</h2>

        <form>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <p>The opinion of DR/MR</p>
                </div>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-1 text-center">
                    <p>in the</p>
                </div>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <p>CONSULTANT CLINIC would be appreciated in this case.</p>
                </div>
            </div>
            <div class="form-group">
                <label for="">Full name of patient</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Referred from ward</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Bed number</label>
                    <input type="number" class="form-control">
                </div>
            </div>
            <p class="text-center">OR</p>
            <div class="form-group">
                <label for="">Clinic</label>
                <input type="text" class="form-control">
            </div>
            <p><b>Previous patient numbers</b></p>
            <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Unit No.</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Casualty No.</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Others</label>
                        <input type="number" class="form-control">
                    </div>
            </div>
            <div class="form-group">
                <label for="">Diagnosis</label>
                <input type="number" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Brief details indicating reasons for consultations</label>
                <textarea class="form-control"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <p>Please circle degree of urgency</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label for="" class="form-check-label">Very urgent</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label for="" class="form-check-label">Urgent</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label for="" class="form-check-label">Fairly urgent</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label for="" class="form-check-label">Not urgent</label>
                    </div>
                </div>
                <div class="form-group col-md-8">
                    <div class="form-group">
                        <label for="">Signature</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Name printed</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </form>
    </div>
        
    </div>
</div> 
@endsection