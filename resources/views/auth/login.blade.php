@extends('layouts.app_material')

@section('content')
    <div class="container">
        <div class="row">
        </div>
        <div class="row justify-content-center" style="margin-top: 50px;">
            <div class="col-md-8">
                <div class="card" style="background-color:rgba(244,244,244,0.6);border-radius: 15px;">
                    <div class="header" style="color:#052f66;"><b><h4>Youth Lead Zambia</h4></b></div>
                    <div class="card-body" style="background-color:rgba(244,244,244,0.6);border-radius: 15px;">
                        <div class="col-md-7">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <div class="form-line">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <div class="form-line">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('images/usaid_fhi_logo.png') }}" width="260" height="90" alt="USAID FHI Log" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

