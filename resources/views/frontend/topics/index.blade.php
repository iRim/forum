@extends('layouts.dashboard')

@auth
    @section('title')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('frontend.topics.create',['category_id'=>$category->id]) }}" class="btn btn-sm btn-outline-secondary">{{ __('messages.frontend.topics.create.button') }}</a>
            </div>
        </div>
    @endsection
@endauth

@section('content')
    <table class="table">
        <thead>
            <th>{{ __('Назва теми') }}</th>
            <th width="7%" class="text-center">{{ __('Відповідей') }}</th>
            <th width="7%" class="text-center">{{ __('Автор') }}</th>
            <th width="7%" class="text-center">{{ __('Переглядів') }}</th>
            <th width="12%">{{ __('Останнє повідомлення') }}</th>
        </thead>
        <tbody>
            @each('frontend.topics._table', $topics, 'topic', 'frontend.topics._table_empty')
        </tbody>
    </table>

@endsection
