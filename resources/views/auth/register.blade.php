@extends('layouts.app')

@section('title', __('app.auth.register'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('app.auth.register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <x-input :label="__('app.auth.name')" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus></x-input>
                        <x-input :label="__('app.auth.email')" name="email" value="{{ old('email') }}" required autocomplete="email"></x-input>
                        <x-input :label="__('app.auth.password')" name="password" required autocomplete="new-password"></x-input>
                        <x-input :label="__('app.auth.confirm_password')" name="password_confirmation"></x-input>

                        <x-form-submit :label="__('app.auth.register')"></x-form-submit>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
