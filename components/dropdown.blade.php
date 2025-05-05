@props([
    'trigger' => null,
])
 
<div x-data="{ openDropdown: false }" class="relative">
    {{ $trigger }}
 
    <div x-show="openDropdown" @click.outside="openDropdown = false" {{ $attributes->class('absolute [*+&]:mt-2 z-40 left-0') }} x-transition x-cloak>
        {{ $slot }}
    </div>
</div>


<div class="hidden" x-data="{ dropdownMenu: false }">
    <div class="relative" @click.outside="dropdownMenu=false">
        <button @click="dropdownMenu = ! dropdownMenu" type="button" class="flex items-center gap-2"
            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
            <div class="flex items-center gap-x-2 justify-center text-center">
                down
                <span class="-mt-2 opacity-50">⌄</span>
            </div>
        </button>

        <div x-show="dropdownMenu" x-cloak
            class="absolute z-50 mt-2 bg-white border shadow-sm rounded-b-lg text-gray-800 text-sm flex p-1 ltr:right-0 rtl:left-0 w-48 flex-col gap-y-px"
            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
            x-transition.scale.origin.top>
            <div class="p-3 truncate">
                <p>username</p>
            </div>

            <a href="#" wire:navigate.hover
                class="bg-stone-100 hover:bg-stone-200 p-1.5 rounded flex items-center gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                    <path d="M12 12a5 5 0 1 0 0-10 5 5 0 0 0 0 10Z" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path opacity=".4" d="M20.59 22c0-3.87-3.85-7-8.59-7s-8.59 3.13-8.59 7"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
                {{ __('Manage account') }}
                adfad
            </a>

        </div>
    </div>
</div>
