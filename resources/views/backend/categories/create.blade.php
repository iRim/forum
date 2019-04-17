@extends('layouts.dashboard')

@section('content')

    {!! Form::model($model,['route'=>'backend.categories.create']) !!}
        @include('backend.categories._form')
        {!! Form::submit(__('messages.backend.categories.buttons.create'), ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection


