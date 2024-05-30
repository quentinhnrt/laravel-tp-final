@props([
    'name' => 'valeurpardefaut',
    'label' => 'valeurpardefaut',
    'inputStyle' => 'blue',
])
<div>
    <input
        name="{{ $name }}"
        type="text"
        @class([
            'px-4 py-2',
            'bg-blue-500' => $inputStyle === 'blue',
            'bg-red-500' => $inputStyle === 'red',
        ])
    />
    {{ $label }}
</div>
