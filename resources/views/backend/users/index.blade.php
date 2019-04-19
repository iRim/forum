@extends('layouts.dashboard')

@section('title')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('backend.users.create') }}" class="btn btn-sm btn-outline-secondary">{{ __('messages.backend.users.buttons.create') }}</a>
        </div>
    </div>
@endsection

@section('content')
    @if (count($users)>0)
        <table class="table">
            <thead>
                <th width=50>ID</th>
                <th class="text-center">{{ __('messages.backend.users.fields.first_name') }}</th>
                <th class="text-center">{{ __('messages.backend.users.fields.last_name') }}</th>
                <th class="text-center">{{ __('messages.backend.users.fields.email') }}</th>
                <th class="text-center">{{ __('messages.backend.users.fields.role') }}</th>
                <th class="text-center" width=70>{{ __('messages.backend.users.fields.active') }}</th>
                <th class="text-center" width=170>{{ __('messages.backend.users.fields.actions') }}</th>
            </thead>
            <tbody>
                @each('backend.users._table_items', $users, 'user')
            </tbody>
        </table>
    @else
        @include('backend.users._table_items_empty')
    @endif

@endsection
