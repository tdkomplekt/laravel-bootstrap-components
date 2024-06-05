@props([
    'label' => null,

    'helper_title' => null,
    'helper_icon' => null,
    'helper_placement' => null,
])

@php
    $attributes = $attributes->class([
        'form-check-label',
    ])->merge([
        //
    ]);
@endphp

@if($label || !$slot->isEmpty())
    <label {{ $attributes }}>
        {{ $label ?? $slot }}
        @if($helper_title)
            <x-bs::icon
                    name="{{ $helper_icon ?? 'circle-info' }}"
                    class="i-helper"
                    data-bs-toggle="tooltip"
                    data-bs-placement="{{ $helper_placement ?? 'top' }}"
                    data-bs-custom-class="tooltip-helper"
                    data-bs-html="true"
                    data-bs-title="{{ $helper_title ?? '' }}"
            />
        @endif
    </label>
@endif
