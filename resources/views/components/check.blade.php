@props([
    'label' => null,
    'checkLabel' => null,
    'help' => null,
    'switch' => false,
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
        'form-check-input',
        'is-invalid' => (isset($errors) ? $errors->has($key) : ''),
    ])->merge([
        'type' => 'checkbox',
        'id' => $id,
        'wire:model.' . $bind => $model ? $prefix . $model : null,
    ]);
@endphp

<div>
    <x-bs::label :label="$label"
                 :helper_title="$helper_title"
                 :helper_icon="$helper_icon"
                 :helper_placement="$helper_placement"
    />

    <div class="form-check {{ $switch ? 'form-switch' : '' }}">
        <input {{ $attributes }}>

        <x-bs::check-label :for="$id" :label="$checkLabel"/>

        <x-bs::error :key="$key"/>

        <x-bs::help :label="$help"/>
    </div>
</div>
