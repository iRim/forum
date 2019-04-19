@extends('layouts.dashboard')

@section('title')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('backend.categories.create') }}" class="btn btn-sm btn-outline-secondary">{{ __('messages.backend.categories.buttons.create') }}</a>
        </div>
    </div>
@endsection

@section('content')
    @if (count($categories)>0)
        <table class="table">
            <thead>
                <th width=50>ID</th>
                <th>{{ __('messages.backend.categories.fields.title') }}</th>
                <th class="text-center">{{ __('messages.backend.categories.fields.author') }}</th>
                <th class="text-center" width=153>{{ __('messages.backend.categories.fields.created_at') }}</th>
                <th class="text-center" width=70>{{ __('messages.backend.categories.fields.active') }}</th>
                <th class="text-center" width=170>{{ __('messages.backend.categories.fields.actions') }}</th>
            </thead>
            <tbody>
                @each('backend.categories._table_items', $categories, 'category','backend.categories._table_items_empty')
            </tbody>
        </table>
    @else
        @include('backend.categories._table_items_empty')
    @endif

@endsection
