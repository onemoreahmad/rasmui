@props([
    'name' => '',
    'label' => null,
    'info' => '',
    'hidelabel' => true,
    'block' => false,
    'prefix' => null,
    'suffix' => null,
    'dir' => null,
    'width' => '',
])

<div wire:key="{{$name}}" class="lg:flex items-center w-full gap-x-2 p-1 bg-gray-100/75 rounded-md @if ($block) flex-col items-start @endif XX[&:has(+[*])]:mb-2 XX[*+&]:mt-2">
    @if ($label)
        <label for="{{$name}}" class="inline-block text-sm text-gray-500 p-2 flex-shrink-0 @if ($block) w-full @else w-36 @endif font-semibold">
            {{ $label }} </label>
    @endif
    <div {{ $attributes->merge(['class' => 'relative '. $width]) }} dir="{{ $dir }}">
        <div class="flex items-center w-full text-gray-500">

            @if ($prefix)
                <div class="px-2 text-sm text-gray-500 shrink-0">
                    {{ $prefix }}
                </div>
            @endif
            
            <div class="w-full">
                {{ $slot }}
            </div>

            @if ($suffix)
                <div class="px-2 text-sm shrink-0">
                    {{ $suffix }}
                </div>
            @endif

        </div> 

        <div>
            @if ($info)
                <small class=" text-gray-400 flex items-center gap-x-1 text-xs mt-1 px-1">
                    {{ $info }}
                </small>
            @endif
        </div>
 
        @error($name)
            <small class="text-red-600 mt-1 text-xs">{{ $message }}</small>
        @enderror
    </div>
</div>
