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
    <td class="va-top text-center"></td>
    <td class="va-top"></td>
</tr>
