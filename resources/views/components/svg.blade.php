@props([
    'icon' => null,
    'path' => null,
])

@php
    $attributes = $attributes->class([
        'svg-icon icon-' . ($icon ?? 'none'),
    ])->merge([
        //
    ]);

    $fullpath = config('laravel-bootstrap-components.svg_icons_public_path')
        .($path ?? '')
        .'/'
        .($icon ?? 'none')
        .'.svg';
@endphp

<i {{ $attributes }}>
    @if(File::exists($fullpath))
        {!! file_get_contents($fullpath) !!}
    @endif
</i>