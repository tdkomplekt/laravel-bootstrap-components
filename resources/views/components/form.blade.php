@props([
    'submit' => null,
    'route' => null,
    'url' => null,
    'href' => null,
])

@php
    if ($route) $href = route($route);
    else if ($url) $href = url($url);

    $attributes = $attributes->class([
        //
    ])->merge([
        'action' => $href,
        'wire:submit.prevent' => $submit
    ]);
@endphp

<form {{ $attributes }}>
    {{ $slot }}
</form>
