@extends('layouts.dashboard')

@section('title')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('backend.categories.create') }}" class="btn btn-sm btn-outline-secondary">Create category</a>
        </div>
    </div>
@endsection

@section('content')
    <table class="table">
        <thead>
            <th width=50>ID</th>
            <th>Title</th>
            <th class="text-center">Author</th>
            <th class="text-center" width=153>Created At</th>
            <th class="text-center" width=70>Active</th>
            <th class="text-center" width=170>Actions</th>
        </thead>
        <tbody>
            @each('backend.categories._table_items', $categories, 'category')
        </tbody>
    </table>
@endsection
