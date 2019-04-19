<tr>
    <td>
        <a href="{{ route('frontend.categories.view',['category_id'=>$category->id]) }}">{{ $category->title }}</a>
        @if (!empty($category->description))
        <p>
            <small>{{ mb_strimwidth($category->description,0,240) }}...</small>
        </p>
        @endif
    </td>
    <td class="va-top text-center">{{ $category->topics->where('active',1)->count() }}</td>
    <td class="va-top text-center">{{ $category->comments->count() }}</td>
    <td class="va-top">
        @if ($category->comments->count()>0)
            @include('frontend.categories._last_comment', ['comment' => $category->comments()->orderBy('created_at','desc')->first()])
        @else
            <p class="text-center">---</p>
        @endif
    </td>
</tr>
