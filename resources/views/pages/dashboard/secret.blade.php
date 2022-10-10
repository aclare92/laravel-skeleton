@extends('layouts.app')

@section('title', __('Secret'))

@section('content')
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('Secret')</div>
                <div class="card-body">
                    Simple secret page hidden behind the confirmation password page
                </div>
            </div>
        </div>
    </div>

    <example-component></example-component>
@endsection
