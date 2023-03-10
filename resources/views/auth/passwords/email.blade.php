@extends('frontend.layouts.app')
@section('content')
<div class="inner-header py-5">
 <div class="container">
<div class="col-lg-10 col-xl-8 col-xxl-10 mx-auto text-center">
 <h1>{{ translate('Forgot Password?') }}</h1>
 <p>@if (addon_activation('otp_system'))
                            {{translate('Enter your email address or phone number to recover your password.')}}
                        @else
                            {{translate('Enter your email address to recover your password.')}}
                        @endif</p>
 </div></div>
</div>
<div class="py-6">
    <div class="container">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                    <!--<h1 class="h3 fw-600">{{ translate('Forgot Password?') }}</h1>
                    <p class="mb-4 opacity-60">
                        @if (addon_activation('otp_system'))
                            {{translate('Enter your email address or phone number to recover your password.')}}
                        @else
                            {{translate('Enter your email address to recover your password.')}}
                        @endif
                    </p>-->
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            @if (addon_activation('otp_system'))
                                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="{{ translate('Email or Phone') }}" required >
                            @else
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ translate('Email') }}" name="email" required>
                            @endif

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-primary btn-block" type="submit">
                                {{ translate('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                    <div class="mt-3">
                        <a href="{{route('user.login')}}" class="text-reset opacity-60">{{translate('Back to Login')}}</a>
                    </div>
                </div>
            </div> </div>
        </div>
    </div>
</div>
@endsection
