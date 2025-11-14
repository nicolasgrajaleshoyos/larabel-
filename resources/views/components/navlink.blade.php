@props(['href', 'type'])

@php
    $isActive = request()->url() === url($href);
@endphp

@if ($type == 'enlace')
    <a href="{{ $href }}"aria-current="{{ $isActive ? 'page' : 'false' }}" {{ $attributes->merge([ 'class' => $isActive   ? 'text-white'   : 'text-gray-300 hover:bg-white/5 hover:text-white' ]) }}>
        {{ $slot }}
    </a>

@elseif ($type == 'boton')
    <button type="button"
        onclick="window.location.href='{{ $href }}'" role="link"  aria-current="{{ $isActive ? 'page' : 'false' }}" {{ $attributes->merge([    'class' => 'hidden sm:inline-flex rounded-md px-3 py-2 text-sm font-medium bg-blue-400 text-white' ]) }}>
        {{ $slot }}
    </button>
    
@elseif ($type == 'responsivo')
    <a href="{{ $href }}" aria-current="{{ $isActive ? 'page' : 'false' }}" @class([
        'sm:hidden block w-full rounded-md px-3 py-2 text-base font-medium',
        'bg-gray-900 text-white' => $isActive,
        'text-gray-300 hover:bg-white/5 hover:text-white' => !$isActive,
    ])>
        {{ $slot }}
    </a>
@endif
