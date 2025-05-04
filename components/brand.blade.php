@props([
    'name' => null,
    'logo' => null,
    'alt' => null,
    'href' => null,
])

<a href="{{ $href }}" {{ $attributes->class('inline-flex items-center gap-2') }}>
    @if ($logo)
        <img src="{{ $logo }}" alt="{{ $alt }}" class="size-5">
    @endif
    <span class="text-base font-bold">{{ $name }}</span>
</a>
