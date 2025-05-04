@props([
    'color' => 'transparent',
    'icon' => null,
    'heading' => null,
    'text' => null,
    'close' => false,
    'action' => null,
])

 
<div {{$attributes->class('rounded-lg bg-'.$color.'-50 p-3 [*+&]:mt-4 border border-'.$color.'-300')}}>
    <div class="flex items-center">
        @if ($icon)
        <div class="flex-shrink-0">
                <rasm:icon name="{{ $icon }}" size="6" class="text-{{ $color }}-600/50" />
        </div>
        @endif
        <div class="px-2 @if($icon) pt-1 @endif flex items-center justify-between w-full">
            <div>
                @if ($heading)
                    <rasm:heading level="3" size="base" class="text-{{ $color }}-700">{{ $heading }}</rasm:heading>
                @endif
                @if ($text)
                    <rasm:text size="sm" class="!text-{{ $color }}-700">{{ $text }}</rasm:text>
                @endif
            </div>
            <div>
                @if ($action)
                    {{$action}}
                @endif
                @if ($close)
                    <rasm:button icon="x" variant="ghost" />
                @endif
            </div>

        </div>
    </div>
</div>

