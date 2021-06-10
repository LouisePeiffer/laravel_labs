{{-- <style>
    #liste {
        color: black;
    }
    #link {
        display: inline-block;
        font-family: "Oswald", sans-serif;
        font-size: 16px;
        color: #0b1033;
        padding: 6px 10px;
        margin-right: 5px;
    }
    

    .active span {
        background: #2be6ab;
    }
</style> --}}
@if ($paginator->hasPages())
    <nav>
        <ul class="page-pagination">
            {{-- Previous Page Link --}}
            {{-- @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif --}}

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a class="disabled" aria-disabled="true" id="listeA"><span>{{ $element }}</span></a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="active" aria-current="page">0{{ $page }}.</a>
                        @else
                            <a href="{{ $url }}">0{{ $page }}.</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            {{-- @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif --}}
        </ul>
    </nav>
@endif
