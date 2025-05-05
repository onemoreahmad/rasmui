@props([
    'name' => '',
    'label' => null,
    'info' => '',
    'hidelabel' => true,
    'block' => false,
    'prefix' => null,
    'suffix' => null,
    'dir' => null,
])

<div class="lg:flex items-center gap-x-2 p-1 bg-gray-100/75 rounded-md @if ($block) flex-col items-start @endif [&:has(+[*])]:mb-2 [*+&]:mt-2">
    @if ($label)
        <label for="title" class="inline-block text-sm text-gray-500 p-2 flex-shrink-0 @if ($block) w-full @else w-36 @endif font-semibold">
            {{ $label }} </label>
    @endif
    <div {{ $attributes->merge(['class' => 'relative w-full ']) }} dir="{{ $dir }}">
        <div class="flex items-center w-full text-gray-500">

            @if ($prefix)
                <div class="px-2 text-sm text-gray-500">
                    {{ $prefix }}
                </div>
            @endif
            
            {{ $slot }}

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
