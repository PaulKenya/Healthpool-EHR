@extends('auth.authmaster')

@section('content')


    <div class="col-12 col-sm-12 col-md-8 col-lg-8 login-sidebar">

        <div class="login-container">

            <h2 class="text-center text-upper">PATIENT LOGIN</h2>
            @if(isset($login_errors) && !empty($login_errors))
                <div class="alert alert-danger">
                    <ul>
                        @foreach($login_errors as $login_error)
                            <li>{{$login_error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form-horizontal" method="POST" action="{{ route('patient_login_post') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Patient Email Address: </label>
                    </div>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email_address" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Patient Password: </label>
                    </div>
                    <div class="form-group help">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        <i class="fa fa-lock"></i>
                        <a href="#" class="pass-view fa fa-eye"></a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flexbox align-items-center">
									<span class="custom-checkbox">
										<input type="checkbox" id="checkbox1"  name="remember" {{ old('remember') ? 'checked' : '' }} value="1">
										<label for="checkbox1">Remember me</label>
									</span>

                        <a href="{{ route('password.request') }}" data-toggle="tooltip" class="theme-cl" data-original-title="Forgot Password">Forgot Password?</a>
                    </div>
                </div>

                <div class="form-group">
                    <div class="flexbox align-items-center">
                        <button type="submit" class="btn gredient-bg">log in</button>
                        <p>If You Are a New User <a href="{{ route('patient_register') }}" data-toggle="tooltip" class="gredient-cl" data-original-title="Sign Up">Signup Here.</a></p>
                    </div>
                </div>


            </form>
        </div>
        <!-- .login-container -->

    </div> <!-- .login-sidebar -->
@endsection
