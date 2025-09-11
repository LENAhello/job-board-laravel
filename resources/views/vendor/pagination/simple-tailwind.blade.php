@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{!! __('Pagination Navigation') !!}" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center mx-4 px-4 py-2 text-sm font-medium text-primary/60 border-primary/60 border-2 bg-white rounded-xl">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center mx-4 px-4 py-2 text-sm font-medium text-primary border-primary border-2 bg-white hover:bg-secondary/30 rounded-xl">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center mx-4 px-4 py-2 text-sm font-medium text-primary border-primary border-2 bg-white hover:bg-secondary/30 rounded-xl">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="relative inline-flex items-center mx-4 px-4 py-2 text-sm font-medium text-primary/60 border-primary/60 border-2 bg-white rounded-xl">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
