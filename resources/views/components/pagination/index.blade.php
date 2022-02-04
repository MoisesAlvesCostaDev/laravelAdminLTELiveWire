<div class="clearfix mt-3 mr-3 bg-white">
    <ul class="pagination pagination m-0 float-right">

        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
        @else
            <li class="page-item disabled">
                <a href="{{ $paginator->previousPageUrl() }}" class="page-link" href="#">«</a>
            </li>
        @endif

        @foreach ($elements as $element)
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item"><a class="page-link">{{ $page }}</a></li>
                @else
                    <li class="page-item"><a href="{{ $url }}"
                            class="page-link">{{ $page }}</a></li>
                @endif
            @endforeach
        @endforeach

        @if ($paginator->hasMorePages())
            <ul class="pagination pagination m-0 float-right">
                <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link"
                        href="#">»</a></li>
            </ul>
        @else
            <ul class="pagination pagination m-0 float-right">
                <li class="page-item disabled"><a class="page-link" href="#">»</a></li>
            </ul>
        @endif
    </ul>

</div>
