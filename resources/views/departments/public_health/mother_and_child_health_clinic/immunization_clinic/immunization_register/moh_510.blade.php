@extends('layouts.master')

@section('content')

    <div class="card">
        <div class="card-header">
            <h4>BTU</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>DATE</th>
                        <th>SERIAL NUMBER</th>
                        <th>CHILD'S NUMBER</th>
                        <th>CHILD'S NUMBER</th>
                        <th>CHILD'S NAMES</th>
                        <th>SEX</th>
                        <th>DATE OF BIRTH</th>
                        <th>DATE FIRST SEEN</th>
                        <th>FATHER'S FULL NAMES</th>
                        <th>MOTHER'S FULL NAMES</th>
                        <th>LOCATION</th>
                        <th>ADDRESS</th>
                        <th>BCG VACCINE DATE</th>
                        <th>RE-VACCINATION DATE</th>
                        <th>POLIO BIRTH DOSE VACCINE DATE</th>
                        <th>1ST POLIO  VACCINE DATE</th>
                        <th>2ND POLIO  VACCINE DATE</th>
                        <th>3RD POLIO  VACCINE DATE</th>
                        <th>DPT/Hep.B/Hib.1 Vaccines Date</th>
                        <th>DPT/Hep.B/Hib.2 Vaccines Date</th>
                        <th>DPT/Hep.B/Hib.3 Vaccines Date</th>
                        <th>MEASLES VACCINE DATE</th>
                        <th>YELLOW FEVER VACCINE DATE</th>
                        <th>VITAMIN A VACCINE DATE</th>
                        <th>FULLY IMMUNIZED VACCINE DATE</th>

                        <th>REMARKS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($show_moh510_page_results))
                        @foreach($show_moh510_page_results as $show_moh510_page_result)
                            <tr>

                                <td>{{ $show_moh510_page_result->date }}</td>
                                <td>{{ $show_moh510_page_result->serial_number }}</td>
                                <td>{{ $show_moh510_page_result->childs_number }}</td>
                                <td>{{ $show_moh510_page_result->sex }}</td>
                                <td>{{ $show_moh510_page_result->date_of_birth }}</td>
                                <td>{{ $show_moh510_page_result->date_first_seen }}</td>
                                <td>{{ $show_moh510_page_result->fathers_full_names }}</td>
                                <td>{{ $show_moh510_page_result->mothers_full_names }}</td>
                                <td>{{ $show_moh510_page_result->location }}</td>
                                <td>{{ $show_moh510_page_result->address }}</td>
                                <td>{{ $show_moh510_page_result->bcg_vaccine }}</td>
                                <td>{{ $show_moh510_page_result->revaccination_date }}</td>
                                <td>{{ $show_moh510_page_result->polio_birth_dose_vaccination }}</td>
                                <td>{{ $show_moh510_page_result->first_polio_vaccine_date}}</td>
                                <td>{{ $show_moh510_page_result->second_polio_vaccine_date}}</td>
                                <td>{{ $show_moh510_page_result->third_polio_vaccine_date}}</td>
                                <td>{{ $show_moh510_page_result->dpt_hepb_hb1_vaccine_date }}</td>
                                <td>{{ $show_moh510_page_result->dpt_hepb_hb2_vaccine_date }}</td>
                                <td>{{ $show_moh510_page_result->dpt_hepb_hb3_vaccine_date }}</td>
                                <td>{{ $show_moh510_page_result->measles_vaccine_date}}</td>
                                <td>{{ $show_moh510_page_result->yellow_fever_vaccine_date}}</td>
                                <td>{{ $show_moh510_page_result->vitamin_a_vaccine_date}}</td>
                                <td>{{ $show_moh510_page_result->fully_immunized_vaccine_date}}</td>
                                <td>{{ $show_moh510_page_result->remarks}}</td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-4">

            <div class="content">
                <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add more Items</button>
                {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">

                <!— Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add cheque record</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="container">
                                    <div class="col-md-12">
                                        <form class="card" action="{{route('moh510_page_post')}}" method="post" >{!! csrf_field() !!}
                                            <input type="hidden" name="departments" value="default">
                                            <div class="col-m-3 offset-md-2">
                                                <h3 class="mt-20 ">PUBLIC HEALTH</h3>
                                            </div>
                                            <input type="hidden" name="departments" value="default">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <p>MOH 510 IMMUNISATION REGISTER FOR CHILDREN STEP BY STEP FILLING IN THE REGISTER GUIDELINES FOR THE HEALTH PROVIDERS<P>
                                                </tr>
                                                <tr class="color background-color:black">
                                                    <th scope="col">COLUMN</th>
                                                    <th scope="col">DATA</th>
                                                    <th scope="col">DEFINITIONS/EXPLANATIONS</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>A</td>
                                                    <td>DATE</td>
                                                    <td><input type="date" name="date" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>B</td>
                                                    <td>SERIAL NUMBER</td>
                                                    <td><input type="text" name="serial_number" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>C</td>
                                                    <td>CHILD'S NUMBER</td>
                                                    <td><input type="text" name="childs_number" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>D</td>
                                                    <td>CHILD'S NAMES</td>
                                                    <td><input type="text" name="childs_names" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>E</td>
                                                    <td>SEX</td>
                                                    <td><input type="text" name="sex" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>F</td>
                                                    <td>DATE OF BIRTH</td>
                                                    <td><input type="date" name="date_of_birth" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>G</td>
                                                    <td>DATE FIRST SEEN</td>
                                                    <td><input type="date" name="date_first_seen" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>H</td>
                                                    <td>FATHER'S FULL NAMES</td>
                                                    <td><input type="text" name="fathers_full_names" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>I</td>
                                                    <td>MOTHER'S FULL NAMES</td>
                                                    <td><input type="text" name="mothers_full_names" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>J</td>
                                                    <td>LOCATION</td>
                                                    <td><input type="text" name="location" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>K</td>
                                                    <td>ADDRESS</td>
                                                    <td><input type="text" name="address" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>L</td>
                                                    <td>BCG VACCINE DATE</td>
                                                    <td><input type="date" name="bcg_vaccine" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>M</td>
                                                    <td>REVACCINATION DATE</td>
                                                    <td><input type="date" name="revaccination_date" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>N</td>
                                                    <td>POLIO BIRTH DOSE VACCINE DATE</td>
                                                    <td><input type="date" name="polio_birth_dose_vaccination" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>O</td>
                                                    <td>1st POLIO VACCINE DATE</td>
                                                    <td><input type="date" name="first_polio_vaccine_date" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>P</td>
                                                    <td>2nd POLIO VACCINE DATE</td>
                                                    <td><input type="date" name="second_polio_vaccine_date" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Q</td>
                                                    <td>3rd POLIO VACCINE DATE</td>
                                                    <td><input type="date" name="third_polio_vaccine_date" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>R</td>
                                                    <td>DPT/Hep.B/Hib.1 VACCINE DATE</td>
                                                    <td><input type="date" name="dpt_hepb_hb1_vaccine_date" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>S</td>
                                                    <td>DPT/Hep.B/Hib.2 VACCINE DATE</td>
                                                    <td><input type="date" name="dpt_hepb_hb2_vaccine_date" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>T</td>
                                                    <td>DPT/Hep.B/Hib.3 VACCINE DATE</td>
                                                    <td><input type="date" name="dpt_hepb_hb3_vaccine_date" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>U</td>
                                                    <td>MEASLES VACCINE DATE</td>
                                                    <td><input type="date" name="measles_vaccine_date" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>V</td>
                                                    <td>YELLOW FEVER VACCINE DATE</td>
                                                    <td><input type="date" name="yellow_fever_vaccine_date" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>W</td>
                                                    <td>VITAMIN A VACCINE DATE</td>
                                                    <td><input type="date" name="vitamin_a_vaccine_date" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>X</td>
                                                    <td>FULLY IMMUNIZED VACCINE DATE</td>
                                                    <td><input type="date" name="fully_immunized_vaccine_date" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Y</td>
                                                    <td>REMARKS</td>
                                                    <td><input type="text" name="remarks" class="form-control" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="form-group">
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