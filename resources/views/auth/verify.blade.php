@extends('layouts.app')

@section('title', __('app.auth.email_verification'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card">
                <div class="card-header">{{ __('app.auth.verify_email') }}</div>

                <div class="card-body">
                    <p>
                        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
                    </p>

                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('app.auth.resend_verify_email') }}</button>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="btn btn-secondary">
                            {{ __('app.auth.logout') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
