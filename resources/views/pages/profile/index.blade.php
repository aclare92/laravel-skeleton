@extends('layouts.app')

@section('title', __('app.pages.profile.title'))

@section('content')
    @if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
        @include('pages.profile.update-profile-information-form')
    @endif

    @if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        @include('pages.profile.update-password-form')
    @endif
@endsection
