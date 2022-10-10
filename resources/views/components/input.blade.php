@props([
    'label' => null,
    'type' => 'text',
    'size' => null,
    'help' => null,
    'error' => null,
    'errorBag' => 'default',
])

@php
    /** @var \Illuminate\Support\ViewErrorBag $errors */

    $id = uniqid();
    $name = $error ?? $attributes->get('name');
    $is_invalid = $errorBag ? $errors->getBag($errorBag)->has($name) : $errors->has($name);

    if (Str::contains($name, 'password')) {
        $type = 'password'; // Fallback to password for security
    }

    $attributes = $attributes->class([
        'form-control',
        'form-control-' . $size => $size,
        'is-invalid' => $is_invalid,
    ])->merge([
        'type' => $type,
        'id' => $id,
    ]);
@endphp

<div class="row mb-3">
    <label for="{{ $id }}" class="col-sm-3 col-md-4 col-form-label text-sm-start text-md-end">{!! $label !!}</label>
    <div class="col-sm-9 col-md-8 col-xl-6">
        <input id="{{ $id }}" {{ $attributes }}>
        @error($name, $errorBag)
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <x-help :label="$help"/>
</div>
