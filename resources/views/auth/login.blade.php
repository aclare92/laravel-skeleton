@extends('layouts.app')

@section('title', __('app.auth.login'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('app.auth.login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <x-input :label="__('app.auth.email')" name="email" value="{{ old('email') }}" required autofocus></x-input>
                        <x-input :label="__('app.auth.password')" error_bag="updatePassword" name="password" required></x-input>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <x-form-submit :label="__('app.auth.login')">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('app.auth.forgot_password') }}
                                </a>
                            @endif
                        </x-form-submit>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
