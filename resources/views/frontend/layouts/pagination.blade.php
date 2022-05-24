@if ($paginator->lastPage() > 1)
<ul class="pagination">
    <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
        <a class="page-link" href="{{ $paginator->url(1)}}{{(!empty($params)) ? "&".http_build_query($params) :'' }}"><<</a>
    </li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
    <li class="page-item"><a href="{{ $paginator->url($i)}}{{(!empty($params)) ? "&".http_build_query($params) :'' }}" class="page-link {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">{{ $i }}</a>
    </li>
    @endfor
    <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
        <a href="{{ $paginator->url($paginator->currentPage()+1)}}{{(!empty($params)) ? "&".http_build_query($params) :'' }}" class="page-link">>></a>
    </li>
</ul>
@endif