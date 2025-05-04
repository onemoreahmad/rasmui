@props([
    'label' => null,
    'href' => null,
    'icon' => null,
    'target' => '',
    'variant' => 'primary',
    'rounded' => null,
])

@php $iconTrailing = $attributes->get('icon:trailing'); @endphp
 
@php
    $tag = $href ? 'a' : 'button';
    $variantClasses = match($variant) {
        'primary' => 'bg-blue-600 text-white hover:bg-blue-700',
        'secondary' => 'bg-gray-300 text-gray-800 hover:bg-gray-400 shadow-none',
        'outline' => 'bg-white text-gray-800 hover:bg-gray-100 border border-gray-200 shadow-none',
        'ghost' => 'bg-transparent text-gray-800 hover:bg-gray-100 shadow-none',
        'green' => 'bg-green-600 text-white hover:bg-green-700',
        'danger' => 'bg-red-600 text-white hover:bg-red-700',
        'warning' => 'bg-yellow-500 text-white hover:bg-yellow-600',
        'link' => 'bg-transparent text-gray-800 underline hover:bg-transparent shadow-none hover:text-gray-800/50',
        default => 'bg-gray-300 text-gray-800'
    };
 
    $class = "inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm transition-colors  focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50  [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0  h-9 px-4 py-2 
     
    {$variantClasses} 
    "
@endphp

{{-- {$bgColor} {$colorText} {$hover} {$shadow} {$border} --}}

<{{$tag}} 
@if ($href) href="{{ $href }}" @else role="button" @endif
class="{{ $class}} {{ $attributes->get('class') }}"
{{ $attributes->except('icon:trailing') }}
> 

@if ($icon)
<rasm:icon name="{{ $icon }}" class="!w-5 !h-5 @if($slot->isEmpty() && !$label) rtl:-mr-1 ltr:-ml-1 @endif" />
@endif

@if ($label)
    <span>
        {{ $label }}
    </span>
@endif
 
{{ $slot->isEmpty() ? '' : $slot }}

@if ($iconTrailing)
    <rasm:icon name="{{ $iconTrailing }}" class="!w-5 !h-5 rtl:-ml-1 ltr:-mr-1" />
@endif

@if ($target)
<div wire:loading wire:target="{{ $target }}">
    <svg xmlns="http://www.w3.org/2000/svg"
        class="icon icon-tabler icon-tabler-loader animate-spin h-5 w-5" viewBox="0 0 24 24"
        stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
        stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <line x1="12" y1="6" x2="12" y2="3" />
        <line x1="16.25" y1="7.75" x2="18.4" y2="5.6" />
        <line x1="18" y1="12" x2="21" y2="12" />
        <line x1="16.25" y1="16.25" x2="18.4" y2="18.4" />
        <line x1="12" y1="18" x2="12" y2="21" />
        <line x1="7.75" y1="16.25" x2="5.6" y2="18.4" />
        <line x1="6" y1="12" x2="3" y2="12" />
        <line x1="7.75" y1="7.75" x2="5.6" y2="5.6" />
    </svg>
</div>
@enderror


</{{$tag}}>