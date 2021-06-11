<?php
/**
 * @var LengthAwarePaginator $paginator
 */

use Illuminate\Pagination\LengthAwarePaginator;

?>

@if ($paginator->hasPages())
    <nav>
        <span>Страница:</span>
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a href="#" class="disabled" onclick="return false;">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="{{ $url }}" class="active">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

    </nav>
@endif
