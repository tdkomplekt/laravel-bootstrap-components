@props([
    'label' => null,
    'type' => 'text',
    'size' => null,
    'help' => null,
    'model' => null,
    'debounce' => false,
    'lazy' => false,
    'prepend' => null,
    'append' => null,

    'helper_title' => null,
    'helper_icon' => null,
    'helper_placement' => null,
])

@php
    if ($type == 'number') $inputmode = 'decimal';
    else if (in_array($type, ['tel', 'search', 'email', 'url'])) $inputmode = $type;
    else $inputmode = 'text';

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
        'is-invalid' => (isset($errors) ? $errors->has($key) : ''),
    ])->merge([
        'type' => $type,
        'inputmode' => $inputmode,
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

    <input {{ $attributes }}>

    <x-bs::error :key="$key"/>

    <x-bs::help :label="$help"/>
</div>
