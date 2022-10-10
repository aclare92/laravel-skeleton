@extends('layouts.app')

@section('title', __('app.auth.confirm_password'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card">
                <div class="card-header">{{ __('app.auth.confirm_password') }}</div>

                <div class="card-body">
                    <p>{{ __('app.auth.confirm_password_detail') }}</p>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <x-input :label="__('app.auth.password')" name="password" required autofocus></x-input>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('app.auth.confirm_password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
