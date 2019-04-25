@extends('layouts.dashboard')

@section('content')
    {!! Form::model($model) !!}
        <div class="form-group">
            {!! Form::label('title', __('messages.frontend.topics.fields.title')) !!}
            {!! Form::text('title', $model->title, ['class'=>'form-control','placeholder'=>__('messages.frontend.topics.fields.title')]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', __('messages.frontend.topics.fields.description')) !!}
            {!! Form::textarea('description', $model->message, ['class'=>'form-control','placeholder'=>__('messages.frontend.topics.fields.description')]) !!}
        </div>
        {!! Form::submit(__('messages.frontend.topics.create.button'), ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
