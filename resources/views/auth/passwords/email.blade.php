@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <!-- main-signin-wrapper -->
    <div class="my-auto page page-h">
        <div class="main-signin-wrapper">
            <div class="main-card-signin d-md-flex wd-100p">
                <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white">
                    <div class="my-auto authentication-pages">
                        <div>
                            <img src="../../assets/img/brand/logo-white.png" class="m-0 mb-4" alt="logo">
                            <h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
                            <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                an unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting</p>
                            <a href="index.html" class="btn btn-danger">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="sign-up-body wd-md-50p">
                    <div class="main-signin-header">
                        <div class="">
                            <h2>Welcome back!</h2>
                            <h4 class="text-left">Reset Your Password</h4>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group text-left">
                                    <label>Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ auth()->user()->email ?? old('email') }}" required autocomplete="email"
                                        autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button class="btn ripple btn-main-primary btn-block">
                                    {{ __('Send Password Reset Link') }}</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /main-signin-wrapper -->
@endsection
