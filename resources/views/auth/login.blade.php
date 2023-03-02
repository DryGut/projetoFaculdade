@extends('layouts.app')

@section('content')
<section class="vh-100" style="background-color: #9A616D;">
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                        <img = src="unopar-virtual.jpg" alt="login-form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;"/>
                    </div>
                    <!--<div class="card-header">{{ __('Login') }}</div>-->
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
                            <form method="POST" action="{{ route('login') }}">
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <i class="bi bi-globe-americas" style="color: #0D6EFD; font-size: 3.5rem;"></i>
                                    <span class="h1 fw-bold mb-0" style="position: relative;left: 1rem;">Mapa Faculdades</span>
                                </div>
                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Acesse a sua conta</h5>
                                @csrf
                                <div class="form-outline mb-4">
                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Insira sua senha">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <!--<div class="col-md-8 offset-md-4">-->
                                        <button type="submit" class="btn btn-lg btn-block" style="background-color: #0D6EFD;">{{ __('Login') }}
                                        </button>
                                        @if (Route::has('password.request'))
                                        <a class="small text-muted" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    <!--</div>-->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
