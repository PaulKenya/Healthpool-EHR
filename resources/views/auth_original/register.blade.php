@extends('auth.authmaster')

@section('css')
    <style>
    body.sticky-footer {
    margin-bottom: 0px;
    }
    body.fixed-nav {
        padding-top: 0px;
    }


    </style>
    @endsection

@section('content')
    <div class=" col-sm-12 col-md-6 col-lg-6 login-sidebar animated fadeInRightBig">
        <div class="login-container animated fadeInRightBig">

            <h2 class="text-center text-upper">Login To Healthpool Dashboard</h2>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="facility_name">{{ __('facility_name') }}</label>
                    <select class="form-control {{ $errors->has('facility_name') ? ' is-invalid' : '' }}" name="facility_name" id="facility_name"  required autofocus>
                        <option value="name">Name</option>
                        <option value="option">option</option>
                    </select>
                    @if ($errors->has('facility_name'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('facility_name') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="">
                    <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('telephone') }}</label>

                    <input id="telephone" type="number" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}" required autofocus>

                    @if ($errors->has('telephone'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telephone') }}</strong>
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

                <div class="offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
