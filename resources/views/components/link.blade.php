@props([
    'icon' => null,
    'label' => null,
    'color' => null,
    'route' => null,
    'url' => null,
    'href' => '#',
    'click' => null,
    'stretched' => null,
])

@php
    if ($route) $href = route($route);
    else if ($url) $href = url($url);

    $attributes = $attributes->class([
        'link-' . $color => $color,
        'stretched-link' => $stretched,
    ])->merge([
        'href' => $href,
        'wire:click.prevent' => $click,
    ]);
@endphp

<a {{ $attributes }}>
    <x-bs::icon :name="$icon"/>

    {{ $label ?? $slot }}
</a>
