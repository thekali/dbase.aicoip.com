@props(['status' => 'to enable', 'type' => 'user'])

@php
    $classes = 'inline-block rounded-full px-2 py-1 text-xs font-medium';

    if ($status === '1') {
        $classes .= ' bg-green-500/10 text-green-500 border-green-500/20';
        $status = 'Enabled';
    } elseif ($status === '0') {
        $classes .= ' bg-yellow-500/10 text-yellow-500 border-yellow-500/20';
        $status = 'To enable';
    } elseif ($status > 1) {
        $classes .= ' bg-primary/10 text-primary border-primary/20';
        $status = '';
    }

    if ($type === '1') {
        $type = 'Admin';
    } elseif ($type === '0') {
        $type = 'User';
    }
@endphp


<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $type }} {{ $status }}
</span>
