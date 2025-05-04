@props([
    'value' => null,
    'name' => 'text',
    'label' => null,
    'subtitle' => '',
    'info' => '',
    'placeholder' => '',
    'options' => [],
    'live' => false,
])

<rasm:field-wrapper name="{{ $name }}" info="{{ $info }}" label="{{ __($label) }}">
    <select @if($live) wire:model.live="{{ $name }}" @else wire:model="{{ $name }}"@endif id="{{ $name }}"
        class="py-2  bg-white border  p-2 px-3 text-sm  flex-shrink-0 rounded-md shadow-smX lg:w-1/3 focus:outline-none @error($name) border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red  @else border-transparent focus:border-primary-400 placeholder-gray-400 text-gray-700 @enderror ">
        @if ($options == array_values($options))
            @foreach ($options as $item)
                <option value="{{ $item }}" @if ($value == $item) selected @endif>
                    {{ __($item) }}</option>
            @endforeach
        @else
            @foreach ($options as $key => $item)
                <option value="{{ $key }}" @if ($value == $key) selected @endif>
                    {{ __($item) }}</option>
            @endforeach
        @endif
    </select>
</rasm:field-wrapper>
