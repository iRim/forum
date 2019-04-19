<small>
<p>{{ (new DateTime($comment->created_at))->format('d.m.Y H:i') }}</p>
<p>{{ __('messages.frontend.last_comment.topic') }}: <a href="{{ route('frontend.topics.view',['category_id'=>$comment->category_id,'topic_id'=>$comment->topic_id]) }}">{{ $comment->topic->title }}</a></p>
<p>{{ __('messages.frontend.last_comment.user') }}: {{ $comment->user->fullName() }}</p>
</small>
