@extends('layouts.app')

@section('title', __('app.pages.home.title'))

@section('content')
    <div class="col-12">
        {{ Illuminate\Mail\Markdown::parse(File::get(base_path('README.md'))) }}
    </div>
@endsection
