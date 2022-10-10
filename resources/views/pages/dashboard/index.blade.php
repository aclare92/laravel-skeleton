@extends('layouts.app')

@section('title', __('app.pages.dashboard.title'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('app.pages.dashboard.title')</div>
                <div class="card-body">
                    @lang('app.pages.dashboard.welcome', ['email' => auth()->user()->email])
                </div>
            </div>
        </div>
    </div>
@endsection
