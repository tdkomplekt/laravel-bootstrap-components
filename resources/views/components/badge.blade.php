@props([
    'icon' => null,
    'label' => null,
    'color' => 'primary',
    'rounded' => false,
])

@php
    $attributes = $attributes->class([
        'badge bg-' . $color,
        'rounded-pill' => $rounded,
    ])->merge([
        //
    ]);
@endphp

<span {{ $attributes }}>
    <x-bs::icon :name="$icon"/>

    {{ $label ?? $slot }}
</span>
