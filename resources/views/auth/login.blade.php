@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        There's some error(s):
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                {{-- <form class="row g-3 needs-validation" novalidate> --}}
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="col-12 mb-3">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            {{-- <input type="text" name="username" class="form-control" id="yourUsername" required> --}}
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        {{-- <input type="password" name="password" class="form-control" id="yourPassword" required> --}}
                        <div class="invalid-feedback">Please enter your password!</div>
                        <div class="input-group has-validation">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- <div class="col-12 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div> --}}

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link w-100" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="col-12">
                        <p class="small mb-0">Don't have account? <a href="{{ route('register') }}">Create an account</a>
                        </p>
                    </div>

                </form>
            </div>
        </div>
    @endsection
