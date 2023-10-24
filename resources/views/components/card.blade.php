@props([
    'label' => null,
    'border' => false,
    'title' => false,
    'subtitle' => false,
    'image' => false,
])

@php
    $attributes = $attributes->class([
        'card',
        'border-'.$border => $border,
    ])->merge([
        //
    ]);
@endphp

<div {{ $attributes }}>

    @if($image)
        <x-bs::img asset="{{ $image }}" class="card-img-top" />
    @endif

    <div class="card-body">
        @if($title)
            <h5 class="card-title">{{ $title }}</h5>
        @endif
        @if($subtitle)
            <h6 class="card-subtitle mb-2 text-muted">{{ $subtitle }}</h6>
        @endif

        {{ $label ?? $slot }}
    </div>
</div>
