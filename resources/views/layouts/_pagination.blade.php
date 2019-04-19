@if ($paginator->hasPages())
<nav>
    <ul class="pagination">
        @foreach ($elements[0] as $page => $url)
            @if($paginator->currentPage() == $page)
                <li class="page-item active"><span class="page-link">{{ $page }}<span class="sr-only">(current)</span></span></li>
            @elseif ($page==1)
                <li class="page-item"><a class="page-link" href="{{ route('frontend.topics.view',['category_id'=>$category_id,'topic_id'=>$topic_id]) }}">{{ $page }}</a></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ route('frontend.topics.page',['page'=>$page,'category_id'=>$category_id,'topic_id'=>$topic_id]) }}">{{ $page }}</a></li>
            @endif
        @endforeach
    </ul>
</nav>
@endif
