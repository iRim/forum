@extends('layouts.dashboard')

@auth
    @section('title')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('frontend.comments.create',['category_id'=>$topic->category_id,'topic_id'=>$topic->id]) }}" class="btn btn-sm btn-outline-secondary">{{ __('messages.frontend.comments.create.button') }}</a>
            </div>
        </div>
    @endsection
@endauth

@section('content')
    <div class="jumbotron">
        {{ $topic->description }}
    </div>

    @each('frontend.comments.view', $comments, 'comment', 'frontend.comments.empty')
    {{ $comments->links('layouts._pagination',[
        'category_id'=>$topic->category_id,
        'topic_id'=>$topic->id
    ]) }}
@endsection
