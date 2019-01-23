@extends('auth.authmaster')

@section('content')

    <div class="col-12 col-sm-12 col-md-8 col-lg-8 login-sidebar animated fadeInRightBig">

        <div class="login-container">

            <h2 class="text-center text-upper">Register To Healthpool EHR</h2>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                    @endif
                </div>

                <div class="">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                </div>

                <div class="">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Health Facility Name</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    <select>
                        <option value="volvo">Choose Option</option>
                    </select>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <br>

                <div class="form-group">
                    <div class="flexbox align-items-center">
                        <button type="submit" class="btn gredient-bg"> {{ __('Register') }}</button>
                        <p>If You Are a Existing User <a href="{{ route('login') }}" data-toggle="tooltip" class="gredient-cl" data-original-title="Log In">Login Here.</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
