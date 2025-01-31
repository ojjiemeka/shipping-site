@if ($paginator->hasPages())
<ul class="pagination mb-0 justify-content-center">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <span class="page-link">Previous</span>
        </li>
    @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">Previous</a>
        </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
        <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}">
            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
        </li>
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
        </li>
    @else
        <li class="page-item disabled">
            <span class="page-link">Next</span>
        </li>
    @endif
</ul>
@endif