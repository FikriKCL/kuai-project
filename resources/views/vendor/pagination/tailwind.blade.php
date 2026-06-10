@if ($paginator->hasPages())
<nav class="flex items-center justify-between" aria-label="Pagination">
    <div class="text-sm text-gray-400">
        Menampilkan {{ $paginator->firstItem() }}–{{ $paginator->lastItem() }} dari {{ $paginator->total() }} data
    </div>
    <div class="flex items-center gap-1">
        {{-- Previous Page --}}
        @if ($paginator->onFirstPage())
            <span class="px-3 py-1.5 rounded-lg text-sm text-gray-300 bg-gray-50 cursor-not-allowed">‹</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-1.5 rounded-lg text-sm text-gray-600 bg-white border border-gray-200 hover:bg-gray-50 transition-colors">‹</a>
        @endif

        {{-- Page Numbers --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="px-3 py-1.5 rounded-lg text-sm text-gray-400">{{ $element }}</span>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-3 py-1.5 rounded-lg text-sm font-semibold text-white" style="background:#2d7034">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="px-3 py-1.5 rounded-lg text-sm text-gray-600 bg-white border border-gray-200 hover:bg-gray-50 transition-colors">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-1.5 rounded-lg text-sm text-gray-600 bg-white border border-gray-200 hover:bg-gray-50 transition-colors">›</a>
        @else
            <span class="px-3 py-1.5 rounded-lg text-sm text-gray-300 bg-gray-50 cursor-not-allowed">›</span>
        @endif
    </div>
</nav>
@endif
