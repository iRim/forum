@extends('layouts.dashboard')

@section('content')
    @each('frontend.categories._table', $categories, 'variable', 'frontend.categories._table_empty')
@endsection
