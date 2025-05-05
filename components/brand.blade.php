@props([
    'name' => null,
    'logo' => null,
    'alt' => null,
    'href' => null,
    'size' => '5',
    'iconClass' => null,
])

<a href="{{ $href }}" {{ $attributes->class('inline-flex items-center gap-2') }}>
    @if ($logo)
        <img src="{{ $logo }}" alt="{{ $alt }}" class="size-{{ $size }} {{ $iconClass }}">
    @endif
    <span class="font-bold">{{ $name }}</span>
</a>
