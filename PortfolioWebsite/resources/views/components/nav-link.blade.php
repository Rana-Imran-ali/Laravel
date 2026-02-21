@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-cyan-400 font-medium border-b-2 border-cyan-400 pb-1 transition'
            : 'text-slate-300 hover:text-cyan-400 transition hover:translate-y-[-2px]';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
