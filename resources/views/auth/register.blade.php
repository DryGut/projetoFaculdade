@extends('layouts.app')

@section('content')
<section class="vh-100" style="background-color: #9A616D;">
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
                <!--<div class="card-header">{{ __('Register') }}</div>-->
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                    <form method="POST" action="{{ route('register') }}">
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <i class="bi bi-globe-americas" style="color: #0D6EFD; font-size: 3.5rem;"></i>
                            <span class="h1 fw-bold mb-0" style="position: relative; left: 1rem;">Mapa Faculdades</span>
                        </div>
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Crie sua Conta</h5>
                        @csrf

                        <div class="form-outline mb-4">
                            <label for="name" class="form-label">{{ __('Nome') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                             @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="row mb-0">
                            <button type="submit" class="btn btn-lg btn-block" style="background-color: #0D6EFD;">
                                    {{ __('Cadastre-se') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection