@extends('layouts.dashboard')

@section('content')
    <table class="table">
        <thead>
            <th>{{ __('Назва') }}</th>
            <th width="4%" class="text-center">{{ __('Тем') }}</th>
            <th width="7%" class="text-center">{{ __('Відповідей') }}</th>
            <th width="12%">{{ __('Останнє повідомлення') }}</th>
        </thead>
        <tbody>
            @each('frontend.categories._table', $categories, 'category', 'frontend.categories._table_empty')
        </tbody>
    </table>

@endsection
