@props([
    'value' => null,
    'live' => false,
    'block' => false,
    'name' => 'text',
    'label' => null,
    'subtitle' => '',
    'info' => '',
    'placeholder' => '',
    'options' => [],
])

<rasm:field wire:key="{{ $name }}" name="{{ $name }}" info="{{ $info }}" label="{{ __($label) }}" :width="$width" :labelWidth="$labelWidth">
 
    <div class="flex items-center gap-1 text-sm w-full @if ($block) flex-col @endif">
 

           @if ($options == array_values($options))
            @foreach ($options as $item)
                <label for="radio{{ $name }}-{{ $item }}"
                class="p-2 px-3 bg-white hover:bg-primary-100 rounded cursor-pointer flex items-center gap-x-2 @if ($block) w-full @endif capitalize">
           
                <input type="radio"
                    @if ($live) wire:model.live="{{ $name }}" @else wire:model="{{ $name }}" @endif
                    value="{{ $item }}" id="radio{{ $name }}-{{ $item }}"
                    {{ $attributes }}
                    />

                   {{ __($item) }}
            </label>
            @endforeach
        @else
            @foreach ($options as $key => $item)
                <label for="radio{{ $name }}-{{ $key }}"
                class="p-2 px-3 bg-white hover:bg-primary-100 rounded cursor-pointer flex items-center gap-x-2 @if ($block) w-full @endif capitalize">
          
                <input type="radio"
                    @if ($live) wire:model.live="{{ $name }}" @else wire:model="{{ $name }}" @endif
                    value="{{ $key }}" id="radio{{ $name }}-{{ $key }}" {{ $attributes }} />

                    {{ __($item) }}
            </label>

            @endforeach
        @endif

         

    </div>

</rasm:field>
