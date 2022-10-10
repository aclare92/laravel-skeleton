@props([
    'label'
])

<div class="row">
    <div class="col-sm-9 offset-sm-3 col-md-8 offset-md-4 col-xl-6">
        <button type="submit" class="btn btn-primary">{!! $label !!}</button>
        {{ $slot }}
    </div>
</div>
