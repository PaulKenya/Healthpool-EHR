@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="container-fluid">
        <form>
            <div class="form-group">
                <label for="">NOTIFICATION OF DEATHS</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">NAMES</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="">*WARD/DEPT</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">AGE</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">SEX</label>
                    <select class="custom-select">
                        <option selected></option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="">RESIDENCE</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="">*IP/OP NO</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group col-md-5">
                    <label for="">DATE OF ADMISSION</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">TIME</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">DATE OF DEATH</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">TIME</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="">DIAGNOSIS</label>
                <textarea class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">ADDRESS</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">NAME & ADDRESS OF HOSPITAL THE PATIENT WAS REFERRED FROM(for referrals only)</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">*NEXT OF KIN/HOSPITAL OFFICIAL(of transferring hospital)INFORMED</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">*RELATIONSHIP/DESIGNATION</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">(signature of ward nurse)</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">*(acn/Dcn/Cn's signature)</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">*(Can/Dcn/Cn's signature)</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <p>(After relatives have been informed)</p>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">DATE</label>
                    <input type="date" class="form-control">
                </div>
            </div>
            <p><b><i>*Delete where applicable. Do not use abbreviations. Two original copies to be filled for referrals</i></b></p>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <div class="float-right">
                        <button class="btn btn-primary" type="submit">Edit</button>
                        <button class="btn btn-success" type="submit">Save</button>
                        <button class="btn btn-danger" type="submit">Delete</button>
                        <button class="btn btn-primary" type="submit">Print</button>
                        <button class="btn btn-success" type="submit">Export</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
        
    </div>
</div> 
@endsection