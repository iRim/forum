<tr>
    <td>
        <a href="{{ route('frontend.topics.view',['id'=>$topic->id,'category_id'=>$topic->category_id]) }}">{{ $topic->title }}</a>
    </td>
    <td class="va-top text-center">{{ $topic->comments->count() }}</td>
    <td class="va-top text-center">{{ $topic->user->fullName() }}</td>
    <td class="va-top text-center">0</td>
    <td class="va-top">last</td>
</tr>
