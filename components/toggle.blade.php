@props([
    'value' => false,
    'live' => false,
    'name' => null,
    'label' => null,
    'info' => null,
    'class' => null,
    'placeholder' => null,
    'position' => 'end',
    'description' => null,
])

<label for="toggle-{{ $name }}" class="inline-flex @if($label) items-center @endif @if($label && $description) items-start @endif">

    <div class="flex flex-col gap-1">
        @if ($label && $position === 'end')
        <div class="flex flex-col gap-1 me-3">
            <rasm:heading level="3" >{{$label}}</rasm:heading>
            @if ($description)
                <rasm:text>{{$description}}</rasm:text>
            @endif
        </div>
        @endif  

    </div>

    <input id="toggle-{{ $name }}" type="checkbox" name="{{ $name }}" class="peer sr-only" role="switch" {{ $value ? 'checked' : '' }}  />
 
    <div class="relative h-6 w-11 after:h-5 after:w-5 peer-checked:after:translate-x-[1.3rem] rounded-full bg-gray-200 after:absolute after:bottom-0 after:left-[0.1rem] after:top-0 after:my-auto after:rounded-full after:bg-white after:transition-all after:content-[''] peer-checked:bg-primary-500 peer-checked:after:bg-gray-100 " aria-hidden="true"></div>

    <div class="flex flex-col gap-1">
        @if ($label && $position === 'start')
            <div class="flex flex-col gap-1 ms-3">
                <rasm:heading level="3" >{{$label}}</rasm:heading>
                @if ($description)
                    <rasm:text>{{$description}}</rasm:text>
                @endif
            </div>
        @endif
    </div>
  
</label>
 