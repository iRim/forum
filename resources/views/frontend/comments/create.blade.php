@extends('layouts.dashboard')

@section('content')
    {!! Form::model($model,['id'=>'createComment','files'=>'true']) !!}
        <div class="form-group">
            {!! Form::label('message', __('messages.frontend.comments.fields.message')) !!}
            {!! Form::textarea('message', $model->message, ['class'=>'form-control','placeholder'=>__('messages.frontend.comments.fields.message')]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('image', __('messages.frontend.topics.fields.image')) !!}
            {!! Form::file('image', ['class'=>'form-control']) !!}
        </div>
        {!! Form::submit(__('messages.frontend.comments.create.button'), ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

    {!! $validator->selector('#createComment') !!}
@endsection
