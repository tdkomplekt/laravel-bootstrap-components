@props([
    'label' => null,
    'icon' => null,
    'prepend' => null,
    'append' => null,
    'size' => null,
    'help' => null,
    'model' => null,
    'lazy' => false,

    'helper_title' => null,
    'helper_icon' => null,
    'helper_placement' => null,
])

@php
    if ($lazy) $bind = 'lazy';
    else $bind = 'defer';

    $wireModel = $attributes->whereStartsWith('wire:model')->first();
    $key = $attributes->get('name', $model ?? $wireModel);
    $id = $attributes->get('id', $model ?? $wireModel);
    $prefix = config('laravel-bootstrap-components.use_with_model_trait') ? 'model.' : null;

    $attributes = $attributes->class([
        'form-control form-control-color',
        'form-control-' . $size => $size,
        'rounded-end' => !$append,
        'is-invalid' => (isset($errors) ? $errors->has($key) : ''),
    ])->merge([
        'type' => 'color',
        'id' => $id,
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

        <input {{ $attributes }}>

        <x-bs::input-addon :label="$append" class="rounded-end"/>

        <x-bs::error :key="$key"/>
    </div>

    <x-bs::help :label="$help"/>
</div>
