@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
       

<div class="container-fluid">
        <h1 class="text-center">KENYATTA NATIONAL HOSPITAL</h1>
        <h2 class="text-center">INPATIENT TREATMENT SHEET</h2>
        <p>NOTE:</p>
        <ol>
            <li>All prescriptions must be rewritten weekly. Not later than monday midday</li>
            <li>Use red pen for DDA</li>
            <li>Drug allergies</li>
        </ol>
        <hr>
        <form>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="">IP.NO</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Sex</label>
                    <select class="custom-select">
                        <option selected>Sex...</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">Age</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Ward</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Bed</label>
                    <input type="number" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="">Consultant</label>
                <input type="text" class="form-control">
            </div>
        </form>
        <hr>
        <b><p>ONCE ONLY PRESCRIPTION,STAT DOSES,PRE-MED ETC.</p></b>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">#</th>
                <th scope="col">Drug</th>
                <th scope="col">Dose</th>
                <th scope="col">Route</th>
                <th scope="col">Frequency/Duration(FR/DU)</th>
                <th scope="col">Name & Signature</th>
                <th scope="col">Time</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text" class="form-control"></td>
                <th scope="row">1</th>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td><input type="text" class="form-control"></td>
                <th scope="row">2</th>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td><input type="text" class="form-control"></td>
                <th scope="row">3</th>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td><input type="text" class="form-control"></td>
                <th scope="row">4</th>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
            </tr>
            </tbody>
        </table>

        <hr>
        <b><p>REGULAR PRESCRIPTIONS</p></b>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">#</th>
                <th scope="col">Drug</th>
                <th scope="col">Dose</th>
                <th scope="col">Route</th>
                <th scope="col">Frequency/Duration(FR/DU)</th>
                <th scope="col">Name & Signature</th>
                <th scope="col">AM PM</th>
                <th scope="col">AM PM</th>
                <th scope="col">AM PM</th>
                <th scope="col">AM PM</th>
                <th scope="col">AM PM</th>
                <th scope="col">AM PM</th>
                <th scope="col">AM PM</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text" class="form-control"></td>
                <th scope="row">1</th>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="text" class="form-control"></td>
                <th scope="row">2</th>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

       
    </div>
</div> 
@endsection