@props([
    'class' => null,
    'value' => null,
    'name' => null,
    'type' => 'text',
    'inputWidth' => 'w-full',
    'disabled' => (bool)false,
    'label' => null,
    'focus' => false,
    'dir' => null,
    'icon' => null,
    'description' => '',
    'width' => 'full',
    'placeholder' => '',
    'prefix' => null,
    'suffix' => null,
])

@php $iconTrailing = $attributes->get('icon:trailing'); @endphp

<rasm:field name="{{ $name }}" :info="$description" :label="__($label)" :prefix="$prefix" :suffix="$suffix" :dir="$dir">

    <div class="relative w-full" 
        x-data="{
            value: $wire.$entangle(@js($name)),
            toEnglishNumber: function(strNum) {
                var ar = '٠١٢٣٤٥٦٧٨٩'.split('');
                var en = '0123456789'.split('');
                strNum = strNum.replace(/[٠١٢٣٤٥٦٧٨٩]/g, x => en[ar.indexOf(x)]);
                strNum = strNum.replace(/[^\d\.]/g, '');
                this.value = strNum
            }
        }"
    >

        @if ($icon)
            <rasm:icon name="{{ $icon }}" class="!w-5 !h-5 @if($slot->isEmpty() && !$label) rtl:-mr-1 ltr:-ml-1 @endif absolute ltr:left-3 rtl:right-3 top-2 opacity-50" />
        @endif

        <input id="{{ $name }}" type="{{ $type }}"
            @if ($name) wire:model="{{ $name }}" @endif
            {{ $disabled ? 'disabled="disabled"' : '' }} 
    
            placeholder="{{ $placeholder }}"
            class="block {{ $inputWidth }}   rounded-md text-sm border-2 bg-white   disabled:text-gray-400/50 disabled:cursor-not-allowed  focus:text-{{ config('ui.primary', 'gray') }}-700 placeholder:text-sm focus:border-{{ config('ui.primary', 'primary') }}-500 focus:outline-none py-1.5 px-3 text-gray-600  
            @error($name) border-red-300  @else border-transparent @enderror
            @if($icon) ps-8 @endif
            @if($iconTrailing) pe-8 @endif
            "
            @keyup="toEnglishNumber($event.target.value)" x-ref="input"
            {{ $attributes }}
            >


        @if ($iconTrailing)
        <rasm:icon name="{{ $iconTrailing }}" class="!w-5 !h-5 absolute rtl:left-2 ltr:right-2 top-2 opacity-50" />
        @endif
    
        {{ $slot }}
    </div>
</rasm:field>
