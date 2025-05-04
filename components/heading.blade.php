@props([
    'size' => 'base',
    'level' => null,
])

@php
$classes = match ($size) {
    'xl' => 'text-2xl [&:has(+[*])]:mb-2 [*+&]:mt-4',
    'lg' => 'text-base [&:has(+[*])]:mb-2 [*+&]:mt-4',
    'base' => 'text-sm [&:has(+[*])]:mb-2 [*+&]:mt-4',
};

$classes = 'font-medium ' . $classes;
@endphp
 
<?php switch ((int) $level): case(1): ?>
        <h1 {{ $attributes->class($classes) }}>{{ $slot }}</h1>

        @break
    <?php case(2): ?>
        <h2 {{ $attributes->class($classes) }}>{{ $slot }}1</h2>

        @break
    <?php case(3): ?>
        <h3 {{ $attributes->class($classes) }}>{{ $slot }}</h3>

        @break
    <?php case(4): ?>
        <h4 {{ $attributes->class($classes) }}>{{ $slot }}</h4>

        @break
    <?php default: ?>
        <div {{ $attributes->class($classes) }}>{{ $slot }}</div>
<?php endswitch; ?>
