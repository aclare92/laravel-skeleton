@extends('layouts.app')

@section('title', __('app.auth.reset_password'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card">
                <div class="card-header">{{ __('app.auth.reset_password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <x-input :label="__('app.auth.email')" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus></x-input>
                        <x-input :label="__('app.auth.password')" name="password" required></x-input>
                        <x-input :label="__('app.auth.confirm_password')" name="password_confirmation" required></x-input>
                        <x-form-submit :label="__('app.auth.reset_password')"></x-form-submit>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
