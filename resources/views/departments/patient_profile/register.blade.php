@extends('auth.authmaster')

@section('content')


    <div class="col-12 col-sm-12 col-md-8 col-lg-8 login-sidebar">

        <div class="login-container">

            <h2 class="text-center text-upper">PATIENT REGISTRATION</h2>
            @if(isset($registration_errors) && !empty($registration_errors))
                <div class="alert alert-danger">
                    <ul>
                        @foreach($registration_errors as $registration_error)
                            <li>{{$registration_error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form-horizontal" method="POST" action="{{ route('patient_register_post') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Date</label>
                        <input required class="form-control" type="date" name="date">
                    </div>
                    <div class="form-group col-md-4">
                        <label>MRN No</label>
                        <input required class="form-control" type="number" name="mrn_number">
                    </div>
                    <div class="form-group col-md-4">
                        <label>IPAD No</label>
                        <input required class="form-control" type="number" name="ipad_number">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-1">
                        <label>Sex</label>
                    </div>
                    <div class="form-group col-md-11">
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="male" name="sex">
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" value="female" name="sex">
                            <label class="form-check-label">Female</label>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>FULL NAMES(as per ID card)</label>
                        <input required class="form-control" name="full_names" type="text">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>ID NO. / PASSPORT NO. (Attach copy)</label>
                        <input required class="form-control" name="id_number" type="number">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>P.O BOX</label>
                        <input required class="form-control" name="po_box" type="number">
                    </div>
                    <div class="form-group col-md-4">
                        <label>POSTAL CODE</label>
                        <input required class="form-control" name="postal_code" type="number">
                    </div>
                    <div class="form-group col-md-4">
                        <label>TOWN</label>
                        <input required class="form-control" name="town" type="text">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>EMAIL ADDRESS</label>
                        <input required class="form-control" name="email_address" type="email">
                    </div>
                    <div class="form-group col-md-4">
                        <label>TELEPHONE HOME</label>
                        <input required class="form-control" name="telephone_home" type="number">
                    </div>
                    <div class="form-group col-md-4">
                        <label>OFFICE</label>
                        <input required class="form-control" name="office" type="text">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>CURRENT RESIDENCE</label>
                        <input required class="form-control" name="current_residence" type="text">
                    </div>
                    <div class="form-group col-md-6">
                        <label>SUBLOCATION/RESIDENCE/TOWN</label>
                        <input required class="form-control" name="sublocation_residence_town" type="text">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>HOME DISTRICT</label>
                        <input required class="form-control" name="home_district" type="text">
                    </div>
                    <div class="form-group col-md-6">
                        <label>DATE OF BIRTH</label>
                        <input required class="form-control" name="date_of_birth" type="date">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>RELIGION</label>
                        <input required class="form-control" name="religion" type="text">
                    </div>
                    <div class="form-group col-md-6">
                        <label>NATIONALITY</label>
                        <input required class="form-control" name="nationality" type="text">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>PASSWORD</label>
                        <input required type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group col-md-6">
                        <label>CONFIRM PASSWORD</label>
                        <input required type="password" class="form-control" name="confirm_password">
                    </div>
                </div>

                <h2 class="text-center text-upper">NEXT OF KIN</h2>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>FULL NAMES</label>
                        <input required class="form-control" name="nok_full_names" type="text">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>P.O BOX</label>
                        <input required class="form-control" name="nok_po_box" type="number">
                    </div>
                    <div class="form-group col-md-4">
                        <label>POSTAL CODE</label>
                        <input required class="form-control" name="nok_postal_code" type="number">
                    </div>
                    <div class="form-group col-md-4">
                        <label>TOWN</label>
                        <input required class="form-control" name="nok_town" type="text">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>EMAIL ADDRESS</label>
                        <input required class="form-control" name="nok_email_address" type="email">
                    </div>
                    <div class="form-group col-md-4">
                        <label>TELEPHONE HOME</label>
                        <input required class="form-control" name="nok_telephone_home" type="number">
                    </div>
                    <div class="form-group col-md-4">
                        <label>OFFICE</label>
                        <input required class="form-control" name="nok_office" type="text">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>CURRENT RESIDENCE</label>
                        <input required class="form-control" name="nok_current_residence" type="text">
                    </div>
                    <div class="form-group col-md-6">
                        <label>SUBLOCATION/RESIDENCE/TOWN</label>
                        <input required class="form-control" name="nok_sublocation_residence_town" type="text">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>ID NO. / PASSPORT NO. (Attach copy)</label>
                        <input required class="form-control" name="nok_id_number" type="number">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>OCCUPATION</label>
                        <input required class="form-control" name="nok_occupation" type="text">
                    </div>
                    <div class="form-group col-md-6">
                        <label>RELATIONSHIP WITH THE PATIENT</label>
                        <input required class="form-control" name="nok_relationship_patient" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <div class="flexbox align-items-center">
                        <button type="submit" class="btn gredient-bg">Register</button>
                        <p>Already have an account?
                            <a href="{{ route('patient_login') }}" data-toggle="tooltip" class="gredient-cl" data-original-title="Sign Up">Login here.</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
        <!-- .login-container -->

    </div> <!-- .login-sidebar -->
@endsection
