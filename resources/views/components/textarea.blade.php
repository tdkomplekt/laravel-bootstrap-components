@props([
    'label' => null,
    'icon' => null,
    'prepend' => null,
    'append' => null,
    'rows' => 3,
    'size' => null,
    'help' => null,
    'model' => null,
    'debounce' => false,
    'lazy' => false,
    'value' => null,

    'helper_title' => null,
    'helper_icon' => null,
    'helper_placement' => null,
])

@php
    if ($debounce) $bind = 'debounce.' . (ctype_digit($debounce) ? $debounce : 150) . 'ms';
    else if ($lazy) $bind = 'lazy';
    else $bind = 'defer';

    $wireModel = $attributes->whereStartsWith('wire:model')->first();
    $key = $attributes->get('name', $model ?? $wireModel);
    $id = $attributes->get('id', $model ?? $wireModel);
    $prefix = config('laravel-bootstrap-components.use_with_model_trait') ? 'model.' : null;

    $attributes = $attributes->class([
        'form-control',
        'form-control-' . $size => $size,
        'rounded-end' => !$append,
        'is-invalid' => (isset($errors) ? $errors->has($key) : ''),
    ])->merge([
        'id' => $id,
        'rows' => $rows,
        'wire:model.' . $bind => $model ? $prefix . $model : null,
    ]);
@endphp

<div>
    <x-bs::label :for="$id" :label="$label"
                 :helper_title="$helper_title"
                 :helper_icon="$helper_icon"
                 :helper_placement="$helper_placement"
    />

    <div class="input-group">
        <x-bs::input-addon :icon="$icon" :label="$prepend"/>

        <textarea {{ $attributes }}>{{ $value }}</textarea>

        <x-bs::input-addon :label="$append" class="rounded-end"/>

        <x-bs::error :key="$key"/>
    </div>

    <x-bs::help :label="$help"/>
</div>
