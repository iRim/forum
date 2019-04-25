@extends('layouts.dashboard')

@section('content')
    @if ($topics->count()>0 || $comments->count()>0)
        @if ($topics->count()>0)
            <span class="h4">
                {{ __('messages.frontend.search.topics') }}
            </span>
            <ul class="list-group mb-5">
                @foreach ($topics->get() as $topic)
                    <a href="{{ route('frontend.topics.view',['category_id'=>$topic->category_id,'topic_id'=>$topic->id]) }}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $topic->title }}</h5>
                        </div>
                        <small class="text-muted">{{ __('messages.frontend.search.update') }}: {{ (new DateTime($topic->created_at))->format('d.m.Y H:i') }}</small>
                    </a>
                @endforeach
            </ul>
        @endif

        @if ($comments->count()>0)
            <span class="h4">
                {{ __('messages.frontend.search.comments') }}
            </span>
            <ul class="list-group">
                @foreach ($comments->get() as $comment)
                    <a href="{{ route('frontend.topics.view',['category_id'=>$comment->category_id,'topic_id'=>$comment->topic_id]) }}" class="list-group-item list-group-item-action">
                        <p class="mb-1">{{ $comment->message }}</p>
                        <small class="text-muted">{{ __('messages.frontend.search.update') }}: {{ (new DateTime($comment->created_at))->format('d.m.Y H:i') }}</small>
                    </a>
                @endforeach
            </ul>
        @endif
    @else
        {{ __('messages.frontend.search.not_found') }}
    @endif
@endsection
