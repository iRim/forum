@extends('layouts.dashboard')

@section('content')

    {!! Form::model($model,['route'=>['backend.categories.edit',$model->id]]) !!}
        @include('backend.categories._form')
        {!! Form::submit('Create category', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection
