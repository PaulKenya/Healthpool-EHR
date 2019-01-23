@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="container">
            <div class="col-m-3 offset-md-2">
                <H3 class="mt-20 ">
                    BLOOD PRESSURE CHART
                </H3>
            </div>
            <div class="">
                <div class="offset-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <p>NAME:</p>
                        </div>
                        <div class="col-md-9">
                            <input type=" name" name="" class="form-control" placeholder="click to enter patients name"></td>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>AGE:</p>
                        </div>
                        <div class="col-md-9">
                            <input type="number" name="" class="form-control" placeholder="click to enter surname"></td>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group row col-md-12">
                            <label for="inputPassword" class=" col-form-label">SEX:</label>
                            <div class="col-sm-8">
                                <div class="form-group col-md-12">
                                    <div class="form-check form-check-inline  col-form-label">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">MALE</label>
                                    </div>
                                    <div class="form-check form-check-inline  col-form-label">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">FEMALE</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>WARD:</p>
                        </div>
                        <div class="col-md-9">
                            <input type=" text" name="" class="form-control" placeholder="click to enter mrn number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>BED NO:</p>
                        </div>
                        <div class="col-md-9">
                            <input type=" text" name="" class="form-control" placeholder="click to enter mrn number">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection