@props([
    'key' => null,
])

@php
    $attributes = $attributes->class([
        'invalid-feedback',
    ])->merge([
        //
    ]);
@endphp

@isset($errors)
    @error($key)
        <div {{ $attributes }}>
            {{ $message }}
        </div>
    @enderror
@endisset