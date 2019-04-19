<small>
<p>{{ (new DateTime($comment->created_at))->format('d.m.Y H:i') }}</p>
<p>{{ __('messages.frontend.last_comment.last') }}: {{ $comment->user->fullName() }}</p>
</small>
