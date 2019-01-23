@extends('auth.authmaster')

@section('content')


    <div class="col-12 col-sm-12 col-md-6 col-lg-6 login-sidebar animated fadeInRightBig">

        <div class="login-container animated fadeInRightBig">

            <h2 class="text-center text-upper">Login To Healthpool Dashboard</h2>
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    <i class="fa fa-user"></i>
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
                        <p>If You Are a New User <a href="{{ route('register') }}" data-toggle="tooltip" class="gredient-cl" data-original-title="Sign Up">Signup Here.</a></p>
                    </div>
                </div>

            </form>
        </div>
        <!-- .login-container -->

    </div> <!-- .login-sidebar -->
    </div> <!-- .row -->
    </div>
@endsection
