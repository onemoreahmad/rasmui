@props([
    'class' => null,
    'value' => null,
    'name' => null,
    'label' => null,
    'disabled' => false,
    'dir' => '',
    'info' => '',
    'prefix' => null,
    'suffix' => null,
    'placeholder' => '',
])

<rasm:field-wrapper name="{{ $name }}" info="{{ $info }}" label="{{ __($label) }}">
    <textarea {{ $attributes }} @if ($name) wire:model="{{ $name }}" @endif
        id="{{ $name }}" dir="{{ $dir }}" placeholder="{{ $placeholder }}" value="{{ $value }}"
        class="block w-full rounded-md text-sm border-2 bg-white focus:text-gray-700 focus:border-primary-500 focus:outline-none py-2 px-3 text-gray-600 placeholder:text-sm  @error($name) border-red-300  @else border-transparent @enderror">{{ $value }}</textarea>

            {{ $slot }}
</rasm:field-wrapper>
