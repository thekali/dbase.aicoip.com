@props(['active' => false])


<a class=" px-4 py-1.5 rounded-full text-sm transition-colors
    {{ $active ? 'bg-white border border-zinc-200 font-medium text-zinc-800 hover:text-zinc-600' : 'text-zinc-500 hover:text-zinc-400' }}"
    @if ($active) aria-current="page" @endif {{ $attributes }}>{{ $slot }}</a>
