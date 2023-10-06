@props([
    'spinner' => 'border',
    'color' => 'dark',
    'text' => __('Loading...'),
    'size' => null,
])

@php
    $attributes = $attributes->class([
        'spinner-' . $spinner,
        'text-' . $color,
        'spinner-' . $spinner . '-' . $size => $size,
    ])->merge([
        //
    ]);
@endphp

<div {{ $attributes }} role="status">
    <span class="visually-hidden">{{ $text }}</span>
</div>
