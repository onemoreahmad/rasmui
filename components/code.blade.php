@props(['language' => 'html', 'code' => ''])

@php
    $highlighter = (new \Tempest\Highlight\Highlighter())->withGutter();

    // $highlighter = new \Tempest\Highlight\Highlighter(new \Tempest\Highlight\InlineTheme(__DIR__ . '/../src/Themes/Css/solarized-dark.css'));
    $code = $highlighter->parse($slot->isEmpty() ? $code : $slot, $language);
@endphp
 
<pre dir="ltr" class="[*+&]:mt-4 p-2 rounded-md bg-gray-200 [&_code]:text-sm [&_code]:font-mono overflow-x-auto whitespace-pre-lineX"><code class="language-{{ $language }}">{!! $code !!}</code></pre>
 