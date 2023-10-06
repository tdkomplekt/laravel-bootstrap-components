@props([
    'submit' => null,
    'route' => null,
    'url' => null,
    'href' => '#',
])

@php
    if ($route) $href = route($route);
    else if ($url) $href = url($url);

    $attributes = $attributes->class([
        //
    ])->merge([
        'href' => $href,
        'wire:submit.prevent' => $submit
    ]);
@endphp

<form {{ $attributes }}>
    {{ $slot }}
</form>
