@extends('layouts.app')

@section('title', __('app.auth.reset_password'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card">
                <div class="card-header">{{ __('app.auth.reset_password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <x-input :label="__('app.auth.email')" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus></x-input>
                        <x-form-submit :label="__('app.auth.send_password_reset')"></x-form-submit>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
