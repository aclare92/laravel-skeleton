@props([
    'label' => ''
])

<a {{$attributes->merge(['href' => 'javascript:void(0)'])}}>{!! $label !!}</a>
